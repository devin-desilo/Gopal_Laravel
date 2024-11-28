<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfrastructureController extends Controller
{
    public function index()
    {
        // Define an array of image names for the infrastructure page
        $images = [
            // ['name' => 'Factory Entrance', 'filename' => 'factory_entrance.jpg'],
            // ['name' => 'Production Floor', 'filename' => 'production_floor.jpg'],
            // ['name' => 'Packaging Unit', 'filename' => 'packaging_unit.jpg'],
            // ['name' => 'Warehouse', 'filename' => 'warehouse.jpg'],
            // ['name' => 'Quality Control', 'filename' => 'quality_control.jpg']
            // ['name' => 'Factory Entrance', 'filename' => 'factory.jpg'],
            ['name' => 'Production Floor', 'filename' => 'factory1.jpg'],
            ['name' => 'Packaging Unit', 'filename' => 'factory2.jpg'],
            ['name' => 'Warehouse', 'filename' => 'factory3.jpg'],
            // ['name' => 'Quality Control', 'filename' => 'factory.jpg']
            // Add more images as needed
        ];

        return view('FacilityTour', compact('images')); // Pass images array to the view
    }
}
