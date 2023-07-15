<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Contracts\View\View;

class CourseController extends Controller
{
    public function index(): View
    {

        $courses = Course::paginate();
        return view('courses.index', compact('courses'));
    }

    public function create(): View
    {
        return view('courses.create');
    }

    public function show(int $id): View
    {
        $course = Course::find($id);
        return view('courses.show', compact('course'));
    }
}
