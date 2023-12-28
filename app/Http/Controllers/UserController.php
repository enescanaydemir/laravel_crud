<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function user() {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('user', compact('users'));
    }
}
