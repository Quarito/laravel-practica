<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sistema = 'AlmaLinux';
        $tecnologias = ['Laravel', 'PostgreSQL', 'Apache', 'Git'];

        return view('home', compact('sistema', 'tecnologias'));
    }
}
