<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        $request->validate([
            'name' => ['required', 'max:255'],
            'Objectives' => ['required'],
            'date_of_birth' => ['required'],
            'place_of_birth' => ['required'],
            'gender' => ['required'],
            'civil_status' => ['required'],
            'religion' => ['required'],
            'citizenship' => ['required'],
            'email' => ['required', 'max:255', 'email'],
            'phonenumber' => ['required', 'max:255'],
            'website' => ['required', 'max:255'],
            'degree' => ['required', 'max:255'],
            'institute' => ['required', 'max:255'],
            'startdate' => ['required', 'date'],
            'enddate' => ['required', 'date'],
            'jobtitle' => ['required', 'max:255'],
            'organization' => ['required', 'max:255'],
            'jobdescription' => ['required', 'max:255'],
            'skills' => ['required'],
            'Characterreference' => ['required'],
            'certification_title' => ['required'],
            'certification_date' => ['required']
        ]);

        // dd($request->profilepicture);
        $image = null;
        if ($request->hasFile('profilepicture')) {
            $image = Storage::disk('public')->put('images', $request->profilepicture);
        }

        $create = Auth::user()->profile()->create([
            'Name' => $request->name,
            'Objectives' => $request->Objectives,
            'Dateofbirth' => $request->date_of_birth,
            'image' => $image,
            'email' => $request->email,
            'Placeofbirth' => $request->place_of_birth,
            'Civilstatus' => $request->civil_status,
            'Religion' => $request->religion,
            'Citizenship' => $request->citizenship,
            'gender' => $request->gender,
            'phoneNumber' => $request->phonenumber,
            'website' => $request->website,
            'institute' => $request->institute,
            'degree' => $request->degree,
            'Characterreference' => $request->Characterreference,
            'certification_title' => $request->certification_title,
            'certification_date' => $request->certification_date,
            'jobtitle' => $request->jobtitle,
            'organization' => $request->organization,
            'jobdescription' => $request->jobdescription,
            'skills' => $request->skills,
            'status' => $request->status,
            'startdate' => $request->startdate,
            'enddate' => $request->enddate,
        ]);

        if ($create) {
            return back()->with('success', 'Profile created successfully');
            // return redirect()->route('');
        } else {
            return back()->withErrors([
                'failed' => 'Email and password is incorrect'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        // dd($profile);
        return view('resume', [
            'profile' => $profile,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile, User $user)
    {
        $resume = $profile;

        return view('edituserinfo', [
            'resume' => $resume,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        // dd($request);
        if ($request->has('hire')) {
            $profile->update(['status' => $request->hire]);

            return back()->with('success', 'is hired');
        }
        if ($request->has('reject')) {
            $profile->update(['status' => $request->reject]);

            return back()->with('success', 'is reject');
        }
        if ($request->has('keep')) {
            $profile->update(['status' => $request->keep]);

            return back()->with('success', 'is keep');
        }


        $request->validate([
            'name' => ['required', 'max:255'],
            'Objectives' => ['required'],
            'date_of_birth' => ['required'],
            'place_of_birth' => ['required'],
            'gender' => ['required'],
            'civil_status' => ['required'],
            'religion' => ['required'],
            'citizenship' => ['required'],
            'email' => ['required', 'max:255', 'email'],
            'phonenumber' => ['required', 'max:255'],
            'website' => ['required', 'max:255'],
            'degree' => ['required', 'max:255'],
            'institute' => ['required', 'max:255'],
            'startdate' => ['required', 'date'],
            'enddate' => ['required', 'date'],
            'jobtitle' => ['required', 'max:255'],
            'organization' => ['required', 'max:255'],
            'jobdescription' => ['required', 'max:255'],
            'skills' => ['required'],
            'Characterreference' => ['required'],
            'certification_title' => ['required'],
            'certification_date' => ['required']
        ]);

        $image = $profile->image ? $profile->image : null;
        if ($request->hasFile('profilepicture')) {
            if ($profile->image) {
                Storage::disk('public')->delete($profile->image);
            }
            $image = Storage::disk('public')->put('images', $request->profilepicture);
        }

        $update = $profile->update([
            'Name' => $request->name,
            'Objectives' => $request->Objectives,
            'Dateofbirth' => $request->date_of_birth,
            'image' => $image,
            'email' => $request->email,
            'Placeofbirth' => $request->place_of_birth,
            'Civilstatus' => $request->civil_status,
            'Religion' => $request->religion,
            'Citizenship' => $request->citizenship,
            'gender' => $request->gender,
            'phoneNumber' => $request->phonenumber,
            'website' => $request->website,
            'institute' => $request->institute,
            'degree' => $request->degree,
            'Characterreference' => $request->Characterreference,
            'certification_title' => $request->certification_title,
            'certification_date' => $request->certification_date,
            'jobtitle' => $request->jobtitle,
            'organization' => $request->organization,
            'jobdescription' => $request->jobdescription,
            'skills' => $request->skills,
            'status' => $request->status,
            'startdate' => $request->startdate,
            'enddate' => $request->enddate,

        ]);

        if ($update) {
            return back()->with('success', 'Profile updated successfully');
            // return redirect()->route('resume');
        } else {
            return back()->withErrors([
                'failed' => 'Update failed'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        if($profile->status == 'archive'){
            $profile->update(['status' => null]);
            return back()->with('restore', 'Profile restored successfully');
        }

        $profile->update(['status' => 'archive']);

        return back()->with('deleted', 'Profiel deleted successfully');
    }
}
