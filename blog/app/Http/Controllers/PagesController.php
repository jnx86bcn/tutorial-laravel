<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function index() {
        $notes = App\Note::all();
        return view('Welcome',compact('notes'));
    }

    public function create(Request $request) {
        // return $request->all();

        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $noteNew = new App\Note;
        $noteNew->name = $request->name;
        $noteNew->description = $request->description;
        
        $noteNew->save();

        return back()->with('message','Your comment has been added');//return user to the original view
    }

    public function detail($id) {
        $note = App\Note::findOrFail($id);
        return view('notes.details',compact('note'));
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
