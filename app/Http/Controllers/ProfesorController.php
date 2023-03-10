<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    
    public function index(){
        $profesori = Profesor::all();
        info('This is some useful information from controller.');
        
        return view('Profesor',compact('profesori'));
    }

    public function insert(){
        
        return view('AddProfesor');
    }
    public function create(Request $request){
		$profesor = new Profesor;
		$profesor->Name = $request->Name;
        $profesor->Surname = $request->Surname;
		$profesor->Object = $request->Object;
		$profesor->save();
		return view('AddProfesor');
    }

    public function store(Request $request){

    }

    public function show($id){
    }

    public function edit($id){
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
