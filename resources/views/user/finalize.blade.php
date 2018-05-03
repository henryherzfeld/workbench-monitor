@extends('layouts/user/main')

<!--Define Page Title-->
@section('title', 'Done!')

@section('content')

    @component('layouts/progressBar', ['width' => '100']) @endcomponent

    @component('layouts/card')
        @slot('title') Great! You're all done. Good luck! @endslot
        @slot('icon')check @endslot

        <a type="button" href="{{URL::route('user/home')}}" class="btn btn-primary">Home</a>

    @endcomponent
@endsection
