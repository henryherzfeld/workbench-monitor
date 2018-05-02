<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Workbench;

class WorkbenchController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Workbench Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling workbenches
    |
    */


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}
