@extends('layouts/user/main')

<!--Define Page Title-->
@section('title', 'New Ticket')

@section('content')

    @component('layouts/progressBar', ['width' => '15']) @endcomponent

    @component('layouts/card')
        @slot('title') Select a Classroom @endslot
        @slot('icon')plus @endslot

        <div class="list-group">

            @foreach ($classrooms as $classroom)
                <a href=
                   @if($classroom->classRoom == 'EE400')
                   @if($engineer)
                           "/user/ticket/classroom/{{$classroom->id}}" class="list-group-item list-group-item-action"> {{$classroom->className}}</a>
                @else "#" class="list-group-item list-group-item-action list-group-item-danger">{{$classroom->className}} </a>
                @endif
                @else
                    "/user/ticket/classroom/{{$classroom->id}}" class="list-group-item list-group-item-action"> {{$classroom->className}}</a>
                @endif
            @endforeach
        </div>

    @endcomponent
@endsection
