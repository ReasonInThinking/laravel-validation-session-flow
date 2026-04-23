<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function form() {
        return view("form");
    }

    public function handler(Request $request) {
        $request->validate([
            'theme' => 'required|min:5',
            'message' => 'required|min:10',
        ]);
        
        $topic = $request->input('theme');
        $description = $request->input('message');
        return redirect()->back()->with('success',"The message '$topic' was send successfully!");
        
    }
}
