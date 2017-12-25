<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;

class UsersController extends Controller
{
    public function show()
    {
        $user = User::find(Auth::user()->id);
        return view('users.show')->with('user', $user);
    }
}
