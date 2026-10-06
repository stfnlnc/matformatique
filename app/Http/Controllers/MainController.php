<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use App\Models\Information;
use App\Models\Supremo;
use App\Services\PlacesServices;

class MainController extends Controller
{
    public function __construct(
        protected PlacesServices $placesService
    ) {}
    public function index()
    {
        $this->placesService->savePlacesApiDetails();
        $software = Supremo::first();
        $page = HomePage::current();
        $info = Information::current();

        return view('main.index', [
            'years' => $this->placesService->getSinceDate(),
            'totalReviews' => $this->placesService->getTotalRating(),
            'rating' => $this->placesService->getRating(),
            'mapsUrl' => $this->placesService->getMapsUrl(),
            'reviews' => $this->placesService->getReviews(),
            'openingHours' => $this->placesService->getOpeningHours(),
            'software' => $software,
            'page' => $page,
            'info' => $info
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

    public function legalNoticeService()
    {
        return view("main.legal_service");
    }

    public function apiReviews()
    {
        $path = "uploads/places/reviews.json";; // ou public_path() si tu le laisses dans public

        if (!file_exists($path)) {
            abort(404);
        }

        $data = json_decode(file_get_contents($path), true);

        return response()->json($data);
    }
}
