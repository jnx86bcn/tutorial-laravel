<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function index() {
        $notas = App\Nota::all();
        return view('Welcome',compact('notas'));
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
