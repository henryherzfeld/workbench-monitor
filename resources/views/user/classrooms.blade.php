@extends('layouts/user/main')

<!--Define Page Title-->
@section('title', 'New Ticket')

@section('content')

    @component('layouts/progressBar', ['width' => '50']) @endcomponent

    @component('layouts/card')
        @slot('title') Select a Workbench @endslot
        @slot('icon')plus @endslot

        <div class="list-group">

            @foreach ($workbenches as $workbench)
                @if($workbench->active)
                    <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Bench #{{$workbench->id}} **In Use**</a>

                @endif
                <a href="{{action('WorkticketController@store', ['id' => $workbench->id])}}"class="list-group-item list-group-item-action">Bench #{{$workbench->id}}</a>
            @endforeach
        </div>

    @endcomponent
@endsection
