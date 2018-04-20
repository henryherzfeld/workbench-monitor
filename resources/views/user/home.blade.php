    @extends('layouts/user/main')

      <!--Define Page Title-->
      @section('title', '')



    @section('content')
        <p class="lead">Hello, {{ Auth::user()->name }}</p>

        @component('layouts/card')
            @slot('title') Workbench Activity @endslot
            @slot('icon')area-chart @endslot
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
        @endcomponent

    @endsection
