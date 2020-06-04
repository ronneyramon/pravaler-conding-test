<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
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
        $students = \App\Student::all();

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = \App\Course::all();
        return view('students.create', compact('courses'));
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

        $student = \App\Student::create($data);       

        return redirect('students/'.$student->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $courses = \App\Course::all();
        return view('students.edit', compact(['student','courses']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $data = $this->validatedData($student);

        $student->update($data);

        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return \redirect('students');
    }

    private function validatedData($student = null){
        return request()->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'cpf' => ['required', 'string', 'max:11', Rule::unique('students')->ignore($student)],
                'birth_date' => ['required', 'date'],
                'email' => ['required','email','max:255'],
                'mobile_number' => ['required', 'string', 'max:255'],
                'address_street' => ['required', 'string', 'max:255'],
                'address_number' => ['required', 'string', 'max:255'],
                'address_neighborhood' => ['required', 'string', 'max:255'],
                'address_city' => ['required', 'string', 'max:255'],
                'address_uf' => ['required','max:2'],
                'status' => ['required', Rule::in(['active', 'inactive'])],
                'course_id' => [
                    'required', 
                    Rule::exists('courses','id')->where(function ($query) {
                        $query->where('status', 'active')->whereNotNull('institution_id');
                    })],
            ]
        );
    }
}
