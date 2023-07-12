<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(): View
    {
        return view('courses.index');
    }

    public function create(): View
    {
        return view('courses.create');
    }

    public function show(string $course, string $category = null): View
    {
        return view('courses.show', ['course' => $course, 'category' => $category]);
    }
}
