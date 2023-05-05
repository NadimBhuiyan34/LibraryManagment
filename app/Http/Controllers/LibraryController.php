<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    //
    public function index()
    {
        return view('frontend.library.dashboard');
    }
    public function booklist()
    {
        
        return view('frontend.library.book-list');
    }
    public function teacherlist()
    {
        
        return view('frontend.library.teacher');
    }
    public function studentlist()
    {
        
        return view('frontend.library.student');
    }

}
