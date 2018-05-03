<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassroomController extends Controller
{

    public function show($id){

        $className = \App\Classroom::find($id)->className;
        $workbenches = \App\Workbench::where('classroom', $className)->get();

        return view('user/classrooms', compact('workbenches'));
    }


}
