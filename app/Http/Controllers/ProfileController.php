<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::with('user')->get();
        return view('index', ['profiles' => $profiles]);
    }
    
    

  
}
