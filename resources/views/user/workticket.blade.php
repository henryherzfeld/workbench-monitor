@extends('layouts/user/main')

      <!--Define Page Title-->
      @section('title', 'Equipment Access Control Work Ticket')

      <!--Check Authentication-->
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif

    @section('content')

<div class="content">
    <a class="title">Work Ticket</a>
        <br>;
        Name:<br>;
        Date:<br>;
        Equipment:<br>;<br>;
        Return by:<br>;
        
        <div>
        <a href="welcome.blade.php"><button type="submit">Leave</button></a>
            </div>
        
    </div>
@endsection
