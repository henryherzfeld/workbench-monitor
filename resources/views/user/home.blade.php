    @extends('layouts/user/main')

      <!--Define Page Title-->
      @section('title', '')



    @section('content')
        <p class="lead">Hello, {{ Auth::user()->name }}</p>
        @if(Auth::user()->ticketId >= 0) <div class="text-primary">
            Remaining Rental Time for Bench #{{\App\Workticket::find(Auth::user()->ticketId)->workbenchId}}:
            <p class="h5 my-4 text-dark">{{\App\Workticket::find(Auth::user()->ticketId)->length}} minutes</p>
        </div>


        @endif

        @component('layouts/card')
            @slot('title') Workbench Activity @endslot
            @slot('icon')area-chart @endslot
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
        @endcomponent

    @endsection
