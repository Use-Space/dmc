<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GeneralController extends Controller
{
    public function home()
    {
        // Load the JSON data from storage
        $jsonData = Storage::disk('public')->get('data/data.json');
        $json = json_decode($jsonData, true);

        // Pass the decoded JSON data to the view
        return inertia('Home', [
            'generalServices' => $json['generalService'],
            'specialistServices' => $json['specialtyService'],
            'diagnosticServices' => $json['diagnosticServices'],
            'dentalServices' => $json['dentalServices']
        ]);
    }

    public function about()
    {
        return inertia('About',);
    }

    public function contact()
    {
        return inertia('Contact',);
    }

    public function career()
    {
        return inertia('Career');
    }

    public function appointment()
    {
        return inertia('Appointment');
    }

    public function service($type, $service)
    {
        $jsonData = Storage::disk('public')->get('data/data.json');
        $json = json_decode($jsonData, true);


        $generalService = $json['generalService'];
        $specialService = $json['specialtyService'];
        $diagnosticService = $json['diagnosticServices'];
        $dentalService = $json['dentalServices'];

        $foundService = null;

        if ($type === "general") {
            foreach ($generalService as $item) {
                if ($item["id"] === $service) {
                    $foundService = $item;
                }
            }
        }

        if ($type === "special") {
            foreach ($specialService as $item) {
                if ($item["id"] === $service) {
                    $foundService = $item;
                }
            }
        }

        if ($type === "diagnostic") {
            foreach ($diagnosticService as $item) {
                if ($item["id"] === $service) {
                    $foundService = $item;
                }
            }
        }

        if ($type === "dental") {
            foreach ($dentalService as $item) {
                if ($item["id"] === $service) {
                    $foundService = $item;
                }
            }
        }

        return inertia('Service', [
            "services" => $foundService,
            "typeOfService" => $type,
            "service" => $service,
        ]);
    }
}
