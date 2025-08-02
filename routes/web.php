<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ParcelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::middleware('auth')->get('/parcels.index', [ParcelController::class, 'index'])->name('parcels');
Route::middleware('auth')->get('/user.index', [UserController::class, 'index'])->name('users');
Route::middleware('auth')->get('/branches.index', [BranchController::class], 'index')->name('branches');
Route::middleware('auth')->get('/revenue.index', [RevenueController::class], 'index')->name('revenue');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth', 'verified')->group(function () {
    Route::resource('parcels', ParcelController::class);
    Route::get('/parcels/tracking/{tracking_number}/download', [ParcelController::class, 'downloadbyTrackingNumber'])->name('parcel.download');
});

Route::middleware('auth', 'verified')->group(function () {
    Route::resource('branches', BranchController::class);
});

Route::middleware('auth', 'verified')->group(function () {
    Route::resource('users', UserController::class);
});

Route::middleware('auth', 'verified')->group(function () {
    Route::resource('revenue', RevenueController::class);
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/revenue', [RevenueController::class, 'index'])->name('revenue.index');
    Route::get('/revenue/branch/{id}', [RevenueController::class, 'branchRevenue'])->name('revenue.branch');
    Route::get('/revenue/parcel', [RevenueController::class, 'parcelRevenue'])->name('revenue.parcel');
    Route::get('/revenue/export/pdf', [RevenueController::class, 'exportPdf'])->name('revenue.export.pdf');

});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
    });
require __DIR__.'/auth.php';
