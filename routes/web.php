<?php

use App\Http\Controllers\CertificationController;
use App\Http\Controllers\InfrastructureController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/certifications', [CertificationController::class, 'index'])->name('certifications');
Route::get('/infrastructure', [InfrastructureController::class, 'index'])->name('infrastructure');
// Route for displaying the contact form
Route::post('/contact-form', [ContactController::class, 'submit'])->name('contact-form.submit');



// Route for handling form submission
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
// Route::get('/service', [ServiceController::class, 'index'])->name('service');

// Product Routes
// Display a list of products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Search for products
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');

// Create a new product (show form)
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Store a new product (handle form submission)
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Edit an existing product (show form)
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Update an existing product (handle form submission)
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

// Display a specific product by ID
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// Delete a product
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
