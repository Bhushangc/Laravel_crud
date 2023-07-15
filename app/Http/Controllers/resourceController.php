<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class resourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'child_first_name'=>['alpha'],
            'child_middle_name'=>['alpha'],
            'child_last_name'=>['alpha'],
            'gender' => 'required',
            
        ]);
        $crud = new Crud();
        $crud->child_first_name = $request->input('child_first_name');
        $crud->child_middle_name = $request->input('child_middle_name');
        $crud->child_last_name = $request->input('child_last_name');
        $crud->child_age = $request->input('child_age');
        $crud->gender = $request->input('gender');
        $crud->child_address = $request->input('child_address');
        $crud->child_city = $request->input('child_city');
        $crud->child_state = $request->input('child_state');
        $crud->child_zip = $request->input('child_zip');
        $crud->country = $request->input('country');

        $crud-> save();
        return view('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $record = Crud::findorfail($id);
        $record->delete();
        return view('index');


        
    }
}
