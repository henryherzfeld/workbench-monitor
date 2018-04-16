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
        $users = DB::table('users')->orderBy('id', 'asc')->paginate(50);

        return view('admin.tables', compact('users'));

    }

    public function show()
    {
        $users = DB::table('users')->orderBy('id', 'asc')->paginate(50);

        return view('admin.tables', compact('users'));

    }
}
