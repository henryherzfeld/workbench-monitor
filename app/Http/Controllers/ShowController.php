<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{

    public function index($type, $id)
    {
        if ($type === 'user') {
            $user = \App\User::find($id);
            return view('admin/show/user/{id}', compact($user), compact($type));
        } elseif ($type === 'workbench') {
            $workbench = \App\Workbench::find($id);
            return view('admin/show/workbench/{id}', compact($workbench), compact($type));
        }
    }

}
