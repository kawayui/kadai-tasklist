<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // add

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => $users,
        ]);
    }
}