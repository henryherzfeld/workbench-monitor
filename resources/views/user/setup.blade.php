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
                   @if($engineer && $classroom->classRoom == 'EE400')
                           "/user/ticket/classroom/{{$classroom->id}}" class="list-group-item list-group-item-action"
                   @elseif(!$engineer)
                           "#" class="list-group-item list-group-item-action list-group-item-danger"
                   @endif
                >{{$classroom->className}}</a>
                @endforeach
        </div>

    @endcomponent
@endsection
