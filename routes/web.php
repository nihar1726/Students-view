<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


// Route::get('/', function () {
//     return view('welcome');
// });

// --- A. BASIC ROUTING ---
// A simple route that returns a string.
Route::get('/welcome', function () {
    return 'Welcome to the Basic Route!';
});

// --- B. ROUTE PARAMETERS ---
// Required parameter: The {id} is a mandatory segment.
Route::get('/users/{id}', function ($id) {
    return 'User ID is: ' . $id;
});

// Optional parameter: The {id?} indicates the segment is optional.
// A default value must be provided for the parameter in the closure.
Route::get('/posts/{id?}', function ($id = null) {
    return 'Post ID is: ' . $id;
});

// --- C. NAMED ROUTES ---
// First, we define a route and assign it a name.
Route::get('/profile', function () {
    return 'This is the user profile page.';
})->name('profile.show');

// Then, we create another route that redirects to the named route.
Route::get('/redirect-to-profile', function () {
    // We use the route() helper function with the route's name to generate the URL.
    return redirect()->route('profile.show');
});


Route::get('/', [StudentController::class, 'home'])->name('homepage');
Route::get('/students', [StudentController::class, 'index'])->name('students.record');
Route::get('/student/{id}', [StudentController::class, 'show']);

// Show form
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// Save form data
Route::post('/students', [StudentController::class, 'submitForm'])->name('students.store');

