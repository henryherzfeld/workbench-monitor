@extends('layouts/user/main')

      <!--Define Page Title-->
      @section('title', 'Current Rental')


@section('content')

    @component('layouts/card')
        @slot('title') {{ isset($ticket->workbenchId)}}@endslot
        @slot('icon')ticket @endslot

        @isset($ticket)
        <h5>Extend Bench #{{$ticket->workbenchId}}</h5>

        <div class="mb-2">Choose Extension Length:</div>

        <a type="button" href="{{action('WorkticketController@extendRental',  ['time' => '15'])}}" class="btn btn-primary">15</a>
        <a type="button" href="{{action('WorkticketController@extendRental', ['time' => '30'])}}" class="btn btn-primary">30</a>
        <a type="button" href="{{action('WorkticketController@extendRental', ['time' => '60'])}}" class="btn btn-primary">60</a>

        @endisset


        @empty($ticket)
            <div class="mb-3"> You are currently not renting a workbench. </div>
            <a type="button" href="{{URL::route('user/setup')}}" class="btn btn-primary">New Rental</a>
        @endempty

    @endcomponent




@endsection
