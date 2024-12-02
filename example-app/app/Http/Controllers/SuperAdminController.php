<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{
    public function superAdminHome()
    {
        $user = Auth::user();

        $profiles = Profile::where('status', null)->get();
        return view('Superadminside', [
            'profiles' => $profiles,
            'user' => $user
        ]);
    }


    public function isHired()
    {
        $isHired = Profile::where('status', 'hire')->get();

        return view('hiredrecord', ['hireds' => $isHired]);
    }

    public function rejected()
    {
        $rejecteds = Profile::where('status', 'reject')->get();

        return view('rejectrecords', ['rejecteds' => $rejecteds]);
    }

    public function keep()
    {
        $keeps = Profile::where('status', 'keep')->get();

        return view('KeepforFutureRecords', ['keeps' => $keeps]);
    }

    public function archive()
    {
        $archives = Profile::where('status', 'archive')->get();

        return view('Archive', ['archives' => $archives]);
    }
}
