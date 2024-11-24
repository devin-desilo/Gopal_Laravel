<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function index()
    {
        // Define an array of certification images
        $certifications = [
            ['name' => 'IEC Certificate', 'filename' => 'certificateOfIEC.jpg'],
            ['name' => 'Yard License', 'filename' => 'Gopal_agri_export_yard_license.jpg'],
            ['name' => 'GST Number', 'filename' => 'Gopal_agri_gst_number_images.jpg'],
            ['name' => 'Udyam Certificate', 'filename' => 'Gopal_agri_export_Udyam_certificate.jpg'],
            // Add more certifications as needed
        ];

        return view('certifications', compact('certifications'));
    }
}
