<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
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
        $path = "data/api_places.json";

        if (!file_exists($path)) {
            return;
        }

        $jsonString = file_get_contents($path);
        $data = json_decode($jsonString, true);

        return $data['result'];
    }

    private function getMapsUrl()
    {
        $dataPlaces = $this->getPlacesData();
        $mapsUrl = $dataPlaces['url'];

        return $mapsUrl;
    }

    private function getReviews()
    {
        $dataPlaces = $this->getPlacesData();
        $reviews = $dataPlaces['reviews'];

        return $reviews;
    }
}
