<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function __construct()
{
    $this->middleware('auth:api', ['except' => ['login', 'register']]);
}

    public function index()
    {
        return view('home');
    }
}
