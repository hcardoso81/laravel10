<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Index function. It's responsible to show list of courses paginated.
     *
     * @return \Illuminate\Contracts\View\View Screen list of courses.
     */

    public function index(): View
    {
        $courses = Course::orderBy('id', 'desc')->paginate();
        return view('courses.index', compact('courses'));
    }

    /** 
     * Create function. It is responsible for displaying the course creation form.
     *
     * @return \Illuminate\Contracts\View\View Screen course creation.
     */

    public function create(): View
    {
        return view('courses.create');
    }

    /**
     * Store function. It is responsible for storing the course in database.
     * 
     * @param Request $request. The data submitted by the form.
     * @return RedirectResponse. Redirect to course single page.
     */

    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        $course = new Course();
        $course->setAttribute('name', $request->name);
        $course->setAttribute('description', $request->description);
        $course->setAttribute('category', $request->category);
        $course->save();
        return redirect()->route('courses.show', $course);
    }

    /**
     * Show function. It is responsible for displaying the single page of a course.
     *
     * @param Course $course. The course to display.
     * @return \Illuminate\Contracts\View\View Screen course details.
     */

    public function show(Course $course): View
    {

        return view('courses.show', compact('course'));
    }

    /**
     * Edit function. It is responsible for displaying the course edit form.
     *
     * @param Course $course. The course to edit.
     * @return \Illuminate\Contracts\View\View Screen course edit.
     */

    public function edit(Course $course): View
    {

        return view('courses.edit', compact('course'));
    }

    /**
     * Update function. It is responsible for updating the course in database.
     * 
     * @param Request $request. The data submitted by the form.
     * @param Course $course. The course to updated.
     *
     * @return RedirectResponse. Redirect to course single page.
     */

    public function update(Request $request, Course $course): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        $course->setAttribute('name', $request->name);
        $course->setAttribute('description', $request->description);
        $course->setAttribute('category', $request->category);
        $course->save();

        return redirect()->route('courses.show', $course);
    }
}
