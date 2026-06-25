<?php

namespace App\Http\Controllers;

use App\Services\PlacesServices;

class MainController extends Controller
{
    public function __construct(
        protected PlacesServices $placesService
    ) {}
    public function index()
    {
        $this->placesService->savePlacesApiDetails();

        return view('main.index', [
            'years' => $this->placesService->getSinceDate(),
            'totalReviews' => $this->placesService->getTotalRating(),
            'rating' => $this->placesService->getRating(),
            'mapsUrl' => $this->placesService->getMapsUrl(),
            'reviews' => $this->placesService->getReviews(),
            'openingHours' => $this->placesService->getOpeningHours()
        ]);
    }

    public function services()
    {
        return view("main.services");
    }

    public function legalNotice()
    {
        return view("main.legal");
    }

    public function privacyPolicy()
    {
        return view("main.privacy");
    }
}
