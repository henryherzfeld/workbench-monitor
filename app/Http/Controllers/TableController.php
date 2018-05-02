<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class TableController extends Controller
{
    //

    public function index()
    {
        $title = "Index";
        $users = DB::table('users')->orderBy('id', 'asc')->paginate(50);

        return view('admin/tables', compact('users'), compact('title'));

    }

    public function users()
    {
        $title = "Users";
        $users = DB::table('users')->orderBy('id', 'asc')->paginate(50);

        return view('admin/tables', compact('users'), compact('title'));

    }

    public function workbenches()
    {
        $title = "Workbenches";
        $workbenches = DB::table('workbenches')->orderBy('id', 'asc')->paginate(50);

        return view('admin/tables', compact('workbenches'), compact('title'));

    }
}
