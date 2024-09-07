<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Display all contacts
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

// Show form to create a new contact
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

// Store new contact in the database
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

// Display a specific contact's details
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');

// Show form to edit an existing contact
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

// Update a specific contact's information
Route::put('/contacts/{id}/edit', [ContactController::class, 'update'])->name('contacts.update');

// Delete a specific contact
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/test', function () {
    return view('contacts.test');
});