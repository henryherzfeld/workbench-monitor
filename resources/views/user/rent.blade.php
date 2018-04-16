@extends('layouts.admin')

      <!--Define Page Title-->
      @section('title', 'Equipment Access Control Help')

      <!--Check Authentication-->
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif

@section('content')

 <div class="content">
    <a class="title">Renting New Equipment or Extension Request</a>
        <br>;
        
        <a href="EquipmentSelect.php"><button type="submit">New Equipment </button> </a>
        <a href="Extend.php"><button type="submit">Time Extension</button></a>
    <br>;
    <br>;
    <button type="submit">Back</button>
    </div>
@endsection
