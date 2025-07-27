<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ParcelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('admin', AdminController::class);
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});
Route::middleware(['auth', 'role:manager'])->group(function () {
    Route::resource('manager', ManagerController::class);
    Route::get('/manager/dashboard', [ManagerController::class, 'index'])->name('manager.dashboard');
});
Route::middleware(['auth', 'role:staff'])->group(function () {
    Route::resource('admin', StaffController::class);
    Route::get('/admin/dashboard', [StaffController::class, 'index'])->name('staff.dashboard');
});

Route::middleware('auth', 'verified')->group(function () {
    Route::resource('parcels', ParcelController::class);
    Route::get('/parcels/tracking/{tracking_number}/download', [ParcelController::class, 'downloadbyTrackingNumber'])->name('parcel.download');
});

require __DIR__.'/auth.php';
