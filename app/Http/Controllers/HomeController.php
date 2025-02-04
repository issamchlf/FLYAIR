<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        // Apply role middleware for Admin
        $this->middleware('Auth');
    }
    public function index()
    {
        return view('home');
    }
}
