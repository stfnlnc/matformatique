<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index()
    {
        $this->savePlacesApiDetails();

        return view('main.index', [
            'years' => $this->getSinceDate(),
            'totalReviews' => $this->getTotalRating(),
            'rating' => $this->getRating(),
            'mapsUrl' => $this->getMapsUrl(),
            'reviews' => $this->getReviews()
        ]);
    }

    private function getSinceDate()
    {
        $now = time();
        $date = strtotime("17 May 2010");
        $diff = $now - $date;
        $years = floor($diff / 3600 / 24 / 365);

        return $years;
    }

    private function getTotalRating()
    {
        $dataPlaces = $this->getPlacesData();
        $totalRating = $dataPlaces['user_ratings_total'];
        return $totalRating;
    }

    private function getRating()
    {
        $dataPlaces = $this->getPlacesData();
        $rating = $dataPlaces['rating'];
        return $rating;
    }

    private function getOpeningHours()
    {
        $todayDate = now()->format('Y-m-d');
        $dataPlaces = $this->getPlacesData();
        $currentHours = $dataPlaces['current_opening_hours']['periods'];
    }

    private function getPlacesData()
    {
        $path = "uploads/places/api_places.json";

        if (!file_exists($path)) {
            return;
        }

        $jsonString = file_get_contents($path);
        $data = json_decode($jsonString, true);

        return $data['result'];
    }

    private function getReviewsData()
    {
        $path = "uploads/places/reviews.json";

        if (!file_exists($path)) {
            return;
        }

        $jsonString = file_get_contents($path);
        $data = json_decode($jsonString, true);

        return $data;
    }

    private function getMapsUrl()
    {
        $dataPlaces = $this->getPlacesData();
        $mapsUrl = $dataPlaces['url'];

        return $mapsUrl;
    }

    private function getReviews()
    {
        $dataPlaces = $this->getReviewsData();
        $reviews = $dataPlaces;

        return $reviews;
    }

    private function savePlacesApiDetails()
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
                'fields' => 'name,rating,url,reviews,user_ratings_total',
                'reviews_sort' => 'newest',
                'language' => 'fr'
            ]);

            if ($response->failed()) {
                Log::error("Erreur HTTP lors de l'appel Google Places : " . $response->status());
                return false;
            }

            $data = $response->json();

            if (isset($data['status']) && $data['status'] !== 'OK') {
                Log::error("L'API Google Places a renvoyé une erreur : " . $data['status'], $data);
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
            Log::error("Une erreur est survenue lors de la récupération du lieu : " . $e->getMessage());
            return false;
        }
    }
}
