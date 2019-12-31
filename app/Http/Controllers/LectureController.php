<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lectures = Lecture::all();
        return view('lecture.index', compact('lectures'));
    }
}
