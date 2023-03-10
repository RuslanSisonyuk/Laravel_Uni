<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BursaController extends Controller
{
    public function index(){

    }

    public function create(){
        return 'This is the Create method';
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
