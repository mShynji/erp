<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function cadastro() {
        return view('user/cadastro');
    }

    public function login() {
        return view('user/login');
    }

    public function store() {
        return redirect('/');
    }
}
