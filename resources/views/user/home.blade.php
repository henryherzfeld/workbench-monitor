    @extends('layouts/user/main')

      <!--Define Page Title-->
      @section('title', 'Dashboard')

      <!--Check Authentication-->
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif

    @section('content')
      <p class="lead">Hello, {{ Auth::user()->name }}</p>

      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="far fa-check-circle"></i>Recent Usage</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
  </div>

    @endsection
