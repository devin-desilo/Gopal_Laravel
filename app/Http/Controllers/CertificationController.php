<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function index()
    {
        // Define an array of certification images
        $certifications = [
            ['name' => 'ISO 9001 Certification', 'filename' => 'certification.webp'],
            ['name' => 'Organic Certification', 'filename' => 'certification.webp'],
            ['name' => 'GMP Certification', 'filename' => 'certification.webp'],
            ['name' => 'FDA Certification', 'filename' => 'certification.webp'],
            // Add more certifications as needed
        ];

        return view('certifications', compact('certifications'));
    }
}
