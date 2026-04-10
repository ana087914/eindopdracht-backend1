<?php

namespace App\Http\Controllers;

use App\Models\Dish;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function menu()
    {
        $dishes = Dish::all();
        return view('menu', compact('dishes'));
    }

    public function contact()
    {
        return view('contact');
    }
}