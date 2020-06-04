<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = \App\Course::all();

        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $institutions = \App\Institution::all();
        return view('courses.create', compact('institutions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validatedData();

        $course = \App\Course::create($data);       

        return redirect('courses/'.$course->id);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $institutions = \App\Institution::all();
        return view('courses.edit', compact(['course','institutions']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $data = $this->validatedData($course);

        $course->update($data);

        return redirect('courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        if($course->institution)
            return redirect('courses/'.$course->id)->with('error', 'O curso não pode ser apagado pois possui uma instituição associada.');
        
        if(!$course->students->isEmpty())
            return redirect('courses/'.$course->id)->with('error', 'O curso não pode ser apagado pois possui alunos associados.');
        
        $course->delete();

        return \redirect('courses');
    }

    private function validatedData($course = null){
        return request()->validate(            
            [
                'name' => ['required', 'string', 'max:255', Rule::unique('courses','name')->ignore($course)],
                'duration_type' => ['required',Rule::in(['hours','days','weeks','months','years'])],
                'duration_value' => ['required','numeric'],
                'status' => ['required', Rule::in(['active', 'inactive'])],               
                'institution_id' => ['nullable','exists:institutions,id']
            ]
        );
    }
}
