<?php

namespace App\Http\Controllers;

use App\Institution;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InstitutionController extends Controller
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
        $institutions = \App\Institution::all();

        return view('institutions.index', compact('institutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('institutions.create');
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

        $institution = \App\Institution::create($data);       

        return redirect('institutions/'.$institution->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function edit(Institution $institution)
    {
        return view('institutions.edit', compact('institution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institution $institution)
    {
        $data = $this->validatedData($institution);

        $institution->update($data);

        return redirect('institutions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institution $institution)
    {
        if(!$institution->courses->isEmpty())
            return redirect('institutions/'.$institution->id)->with('error', 'A instituição não pode ser apagada pois possui cursos associados.');
        
        $institution->delete();

        return redirect('institutions');
    }

    private function validatedData($institution = null){
        return request()->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'cnpj' => ['required', 'string', 'max:14', Rule::unique('institutions')->ignore($institution)],
                'status' => ['required', Rule::in(['active', 'inactive'])]
            ]
        );
    }
}
