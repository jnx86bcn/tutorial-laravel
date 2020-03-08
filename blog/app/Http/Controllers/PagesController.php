<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('Welcome');
    }

    public function photos() {
        return view('photos');
    }

    public function aboutUs($employee = null) {
        $team = ['Ignacio','Juan','Jose'];
        // return view('about-us',['team'=>$team],'employee'=>$employee]);
        return view('about-us',compact('team','employee'));
    }

    public function blog() {
        return view('blog');
    }
}
