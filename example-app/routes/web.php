<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdminController;
use App\Models\Information;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::middleware('guest')->group(function () {
    Route::view('/register', 'signup')->name('signup');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    // Login
    Route::view('/', 'login');
    Route::post('/', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {

    Route::get('/superadmin', [SuperAdminController::class, 'superAdminHome'])->middleware('superadmin')->name('sa.home');

    Route::view('/superadmin/addhired', 'AddHiredCandidate')->middleware('superadmin')->name('super.add');

    Route::get('/superadmin/hired', [SuperAdminController::class, 'isHired'])->middleware('superadmin')->name('super.hired');
    Route::get('/superadmin/reject', [SuperAdminController::class, 'rejected'])->middleware('superadmin')->name('super.reject');
    Route::get('/superadmin/keep', [SuperAdminController::class, 'keep'])->middleware('superadmin')->name('super.keep');

    Route::get('/superadmin/archive', [SuperAdminController::class, 'archive'])->middleware('superadmin')->name('super.archive');

    Route::resource('profile', ProfileController::class);

    Route::view('/create', 'createuserinfo')->middleware('user')->name('create');
    Route::view('/resume', 'resume')->middleware('user')->name('resume');


    Route::view('/edit', 'edituserinfo')->middleware('user')->name('edit');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/home', function () {
        $user_id = Auth::id();
        // $profile_id = Profile::where('user_id', $user_id)->first();

        // dd($profile_id);

        // if ($profile_id) {
        //     return view('home', ['user_id' => $profile_id]);
        // }
        // return view('home');

        return view('home', ['user_id' => $user_id]);
    })->middleware('user')->name('home');
});
