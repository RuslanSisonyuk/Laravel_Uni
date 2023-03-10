<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    
    public function index(){
        $students = Student::all();
        return view('Student',compact('studenti'));
    }

    public function insert(){
        
        return view('AddStudent');
    }
    public function create(Request $request){
		$student = new Student;
		$student->Name = $request->Name;
        $student->Surname = $request->Surname;
		$student->Grupa = $request->Grupa;
		$student->save();
		return view('AddStudent');
    }

    public function store(Request $request){

    }

    public function show($id){
        return 'this is the ' + $id + ' id';
    }

    public function edit($id){
        return 'this is the ' + $id + ' id';
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
