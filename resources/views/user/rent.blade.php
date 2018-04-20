@extends('layouts/user/main')

      <!--Define Page Title-->
      @section('title', 'Rent')

@section('content')
    <!-- Content head contains progress bar and card format -->
    @component('layouts/progressBar', ['width' => '0'])
    @endcomponent

    @component('layouts/card')
        @slot('icon')clock-o @endslot
        @slot('title') New Equipment or Extension? @endslot

    <p>
        <button type="submit" class="btn-lg btn-outline-primary">New</button>
        <button type="submit" class="btn-lg btn-outline-secondary">Extend</button>
    </p>

    @endcomponent
@endsection
