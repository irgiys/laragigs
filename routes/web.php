<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\GetImageController;

use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// index
Route::get('/', [ListingController::class, 'index']);
// Create gigs
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');
// Store to db
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');
// Edit gigs
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');
// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage listing
Route::get("/listings/manage", [ListingController::class, "manage"])->middleware("auth");

// Show detail gigs 
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create new user
Route::post('/users', [UserController::class, 'store']);

// Logout
Route::post("/logout", [UserController::class, "logout"])->middleware('auth');

// Show login form 
Route::get('/login', [UserController::class, "login"])->name('login')->middleware('guest');

// Log in user
Route::post("/users/authenticate", [UserController::class, "authenticate"]);

// Showing image logos from listing 
Route::get("/storage/logos/{fileName}", [GetImageController::class, "displayImage"])->name('image.displayImage');
