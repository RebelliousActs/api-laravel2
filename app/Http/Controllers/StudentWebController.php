<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentWebController extends Controller
{
    //
    public function index()
    {
        $students = Students::all();
        return view('students.index', compact('students'));
    }
}
