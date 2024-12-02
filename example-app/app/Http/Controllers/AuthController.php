<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'min:4', 'confirmed']
        ]);

        // register
        User::create($fields);

        return redirect()->route('login')->with('success', 'You have successfully registered');
    }


    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($fields)) {
            
            $user_id = Auth::id();
            // $profile_id= Profile::where('user_id', $user_id)->first();
            // dd($usercheck->user_id);
            $user = Auth::user();

            if($user->userLevel == 'superadmin'){

                return redirect()->route('sa.home');

            }

            if($user->userLevel == 'admin'){
                return redirect()->route('sa.home');
            }

            if($user->userLevel == 'user'){
                // if($profile_id){
                //    return view('home', ['user_id' => $profile_id]);  
                // }
                // return view('home'); 

                return view('home', ['user_id' => $user_id]);  
            }
            
        } else {    
            return back()->withErrors([
                'failed' => 'Email and password is incorrect'
            ]);
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
