<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id)
    {
        $user = User::with('posts')->findOrFail($id);
        return view('profile.show', compact('user'));
    }
}
