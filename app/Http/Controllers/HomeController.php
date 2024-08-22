<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $response = Http::get('https://app.paranagroup.com:18000/articulos/divisiones/$2y$10$FOLP83QuixpjN7lgAU8acOM4SIiOQlBYMbK6mHppi5Lo0kraspEkC/TODOS');
        $divisiones = $response->json();
        return view('index', ['divisiones' => $divisiones]);
    }
}
