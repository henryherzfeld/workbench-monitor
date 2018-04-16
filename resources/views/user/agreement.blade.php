@extends('layouts.admin')

      <!--Define Page Title-->
      @section('title', 'Equipment Access Control User Agreement')

      <!--Check Authentication-->
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
      
@section('content')

<div class="content">
    <a class="title">User Agreement</a>
        <br>;
        
        <div class="content">
        
            
       <input type="checkbox" name="Agreement" value="Agree"> By clicking this button, I agree to the User Agreement<br>      

        <button type="submit">Back</button> 
            
            <a href="Equipment_WorkTicket.php"><button type="submit">Next</button></a>
        </div>
        </div>
@endsection
