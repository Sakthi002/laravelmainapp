<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homePage() {

        $name = 'John Doe';

        $animals = ['Meowsalot', 'Barksalot', 'Purrsloud']; 

        return view('home',['name' => $name, 'catName' => 'Meowsalot', 'allAnimals' => $animals]);
    }

    public function aboutPage() {

        return view('single-post');
    }
}
