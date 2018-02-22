<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
user \App\Person;

class PersonController extends Controller
{
    Public function index(){
        $people = Person::all();

        return response()->json($people, 200);
    }

    public function store(Request $request){
        $input = $request->json()->all();

        $person = new Person();
        $person->fill($input);

        if ($person->save){
            return response()->json("Successfully save person.", 200);
        } else {
            return response()->json("Unable to save person", 200);
        }

    }

}
