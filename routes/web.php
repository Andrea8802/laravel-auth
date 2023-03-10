<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// READ
Route::get('/project/show/{project}', [MainController::class, 'projectShow'])->name('project.show');


// ONLY ADMIN ---
Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        // DELETE
        Route::get('/project/delete/{project}', [MainController::class, 'projectDelete'])
            ->name('project.delete');

        // CREATE
        Route::get('/project/create', [MainController::class, 'projectCreate'])
            ->name('project.create');

        Route::post('/project/store', [MainController::class, 'projectStore'])
            ->name('project.store');

        // UPDATE
        Route::get('/project/edit/{project}', [MainController::class, 'projectEdit'])
            ->name('project.edit');
        Route::post('/project/update/{project}', [MainController::class, 'projectUpdate'])
            ->name('project.update');
    });