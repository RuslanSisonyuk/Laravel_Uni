<?php

namespace App\Http\Controllers;

use App\Models\Salariu;
use Illuminate\Http\Request;

class SalariuController extends Controller
{
   
    public function index(){
        $salarii = Salariu::all();
        return view('Salariu', compact('salarii'));
    }

    public function insert(){
        return view('AddSalariu');
    }
    public function create(Request $request){
        $salariu = new Salariu();
        $salariu->grade = $request->Grade;
        $salariu->amount = $request->Amount;
        $salariu->save();
        return view('AddSalariu');
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
