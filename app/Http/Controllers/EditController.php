<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function user($id){
        $user = \App\User::find($id);
        $title = "User";
        return view('admin/edit', compact('user', 'title'));
    }

    public function workbench($id){
        $workbench = \App\Workbench::find($id);
        $title = "Workbench";
        $classrooms = \App\Classroom::all();
        return view('admin/edit', compact('workbench', 'title', 'classrooms'));
    }

    public function updateUser(Request $request){
    $user = \App\User::where('email', $request->email)->first();
    $user->name = $request->userName;
    $user->college = $request->college;
    $user->z_number = $request->zNumber;
    if($request->admin === 'Yes'){
        $user->admin = 1;
    }
    elseif($request->admin === 'No'){
        $user->admin = 0;
    }
    $user->save();
    $title = "Users";
    $users = DB::table('users')->orderBy('id', 'asc')->paginate(50);
    return view('admin/tables', compact('users', 'title'));
    }

    public function updateWorkbench(Request $request){
        $workbench = \App\Workbench::find($request->id);
        $workbench->classroom = $request->classroomName;
        $workbench->type = $request->workbenchType;
        $workbench->save();
        $title = "Workbenches";
        $workbenches = DB::table('workbenches')->orderBy('id', 'asc')->paginate(50);
        return view('admin/tables', compact('workbenches', 'title'));
    }
}
