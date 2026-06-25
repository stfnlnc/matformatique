<?php

namespace App\Services;

use App\Mail\ApiErrorMailable;
use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PlacesServices
{
    public function getSinceDate()
    {
        $now = time();
        $date = strtotime("17 May 2010");
        $diff = $now - $date;
        $years = floor($diff / 3600 / 24 / 365);

        return $years;
    }

    public function getTotalRating()
    {
        $dataPlaces = $this->getPlacesData();
        $totalRating = $dataPlaces['user_ratings_total'];
        return $totalRating;
    }

    public function getRating()
    {
        $dataPlaces = $this->getPlacesData();
        $rating = $dataPlaces['rating'];
        return $rating;
    }



    public function getOpeningHours(): string
    {
        $todayDate = now()->format('Y-m-d');
        $dataPlaces = $this->getPlacesData();
        $currentHours = $dataPlaces['current_opening_hours']['periods'] ?? [];

        foreach ($currentHours as $period) {
            // L'API Google Places regroupe l'ouverture et la fermeture dans la même période
            if (($period['open']['date'] ?? null) === $todayDate) {

                $openRaw = $period['open']['time'];   // ex: "0830"
                $closeRaw = $period['close']['time']; // ex: "1800"

                // Conversion avec Carbon au format "8H30" et "18H00"
                $open = strtoupper(Carbon::createFromFormat('Hi', $openRaw)->format('G\Hi'));
                $close = strtoupper(Carbon::createFromFormat('Hi', $closeRaw)->format('G\Hi'));

                return "OUVERT AUJOURD’HUI DE {$open} À {$close}";
            }
        }

        return "FERMÉ AUJOURD’HUI";
    }

    public function getPlacesData()
    {
        $path = "uploads/places/api_places.json";

        if (!file_exists($path)) {
            return;
        }

        $jsonString = file_get_contents($path);
        $data = json_decode($jsonString, true);

        return $data['result'];
    }

    public function getReviewsData()
    {
        $path = "uploads/places/reviews.json";

        if (!file_exists($path)) {
            return;
        }

        $jsonString = file_get_contents($path);
        $data = json_decode($jsonString, true);

        return $data;
    }

    public function getMapsUrl()
    {
        $dataPlaces = $this->getPlacesData();
        $mapsUrl = $dataPlaces['url'];

        return $mapsUrl;
    }

    public function getReviews()
    {
        $dataPlaces = $this->getReviewsData();
        $reviews = $dataPlaces;

        return $reviews;
    }

    public function savePlacesApiDetails()
    {
        $disk = Storage::disk('public_uploads');
        $timestampFile = "places/last_api_call.txt";
        $currentTime = time();

        if ($disk->exists($timestampFile)) {
            $lastCallTimestamp = (int) $disk->get($timestampFile);

            if (($currentTime - $lastCallTimestamp) < 86400) {
                return;
            }
        }

        $apiKey = config('services.google.places_key');
        $placeId = config('services.google.place_id');

        if (!$apiKey || !$placeId) {
            Log::error("Google Places : Clé API ou Place ID manquant dans la configuration.");
            return false;
        }

        $url = "https://maps.googleapis.com/maps/api/place/details/json";

        try {
            $response = Http::timeout(3)->get($url, [
                'place_id' => $placeId,
                'key' => $apiKey,
                'fields' => 'name,rating,url,reviews,user_ratings_total,current_opening_hours',
                'reviews_sort' => 'newest',
                'language' => 'fr'
            ]);

            if ($response->failed()) {
                $msg = "Erreur HTTP lors de l'appel Google Places : " . $response->status();
                Log::error($msg);
                Mail::to('stefan.lancelot@ik.me')->send(new ApiErrorMailable($msg));
                $disk->put($timestampFile, (string) $currentTime);
                return false;
            }

            $data = $response->json();

            if (isset($data['status']) && $data['status'] !== 'OK') {
                $msg = "L'API Google Places a renvoyé une erreur : " . $data['status'];
                Log::error($msg, $data);
                Mail::to('stefan.lancelot@ik.me')->send(new ApiErrorMailable($msg));
                $disk->put($timestampFile, (string) $currentTime);
                return false;
            }

            $filename = "places/api_places.json";
            $disk->put($filename, json_encode($data, JSON_PRETTY_PRINT));


            $reviewsFilename = "places/reviews.json";
            $accumulatedReviews = [];

            if ($disk->exists($reviewsFilename)) {
                $existingReviews = json_decode($disk->get($reviewsFilename), true) ?? [];
                foreach ($existingReviews as $review) {
                    $key = $review['author_name'] . '_' . $review['time'];
                    $accumulatedReviews[$key] = $review;
                }
            }

            if (isset($data['result']['reviews']) && is_array($data['result']['reviews'])) {
                foreach ($data['result']['reviews'] as $review) {
                    $key = $review['author_name'] . '_' . $review['time'];
                    $accumulatedReviews[$key] = $review;
                }
            }

            $finalReviews = array_values($accumulatedReviews);

            usort($finalReviews, function ($a, $b) {
                return $b['time'] <=> $a['time'];
            });

            $finalReviews = array_slice($finalReviews, 0, 20);

            $disk->put($reviewsFilename, json_encode($finalReviews, JSON_PRETTY_PRINT));

            $disk->put($timestampFile, (string) $currentTime);

            return true;
        } catch (Exception $e) {
            $msg = "Une erreur est survenue lors de la récupération du lieu : " . $e->getMessage();
            Log::error($msg);
            Mail::to('stefan.lancelot@ik.me')->send(new ApiErrorMailable($msg));
            $disk->put($timestampFile, (string) $currentTime);
            return false;
        }
    }
}
