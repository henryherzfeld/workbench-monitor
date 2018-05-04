<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WorkticketController extends Controller
{

    public function index(Request $request){

        $ticket = $this->getUserTicket();

        return view('user/ticket', compact('ticket'));
    }


    public function show($id){

        $ticket = \App\Workticket::find($id);

        return view('user/ticket_edit', compact('ticket'));
    }


    public function getUserTicket(){

        $id = Auth::user()->ticketId;
        if($id >= 0){
            $ticket = \App\Workticket::find($id);

            return $ticket;
        }

        else{ return null; }
    }

    public function new(){

        $classrooms = \App\Classroom::all();

        if(Auth::user()->ticketId <= 0) {
            if (Auth::user()->college === 'EG') {
                return view('user/setup', compact('classrooms'), ['engineer' => true]);
            } else {
                return view('user/setup', compact('classrooms'), ['engineer' => false]);
            }
        }
        else{
            return redirect('user/ticket');
        }

    }

    public function store($id){

        $ticket = new \App\Workticket;
        $ticket->workbenchId = $id;
        $ticket->length = 45;
        $ticket->start = now();
        $ticket->save();


        $user = Auth::user();
        $user->ticketId = $ticket->id;
        $user->save();


        $workbench = \App\Workbench::find($id);
        $workbench->active = 1;
        $workbench->save();


        return view('user/condition');

    }


    public function extendRental($time){

        $ticket = \App\Workticket::find(Auth::user()->ticketId);

        $ticket->length = $ticket->length + $time;
        $ticket->save();

        return view('user/finalize');
    }

    public function finalize(){


        return view('user/finalize');
    }
}



