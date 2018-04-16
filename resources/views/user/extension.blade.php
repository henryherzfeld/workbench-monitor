@extends('layouts/user/main')

      <!--Define Page Title-->
      @section('title', 'Equipment Acess Control Setup')

      <!--Check Authentication-->
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif

@section('content')

<div class="content">
    <a class="title">Select Extension Time</a>
        <br>;
        
        <div class="content">
        <form action="/Extend.php">
            
            <input type="radio" name="choice"
            <?php if (isset($choice) && $choice=="15") echo "checked";?>
               value="15">15 Minutes
            <br>;
            
            <input type="radio" name="choice"
            <?php if (isset($choice) && $choice=="30") echo "checked";?>
               value="30">30 Minutes
            <br>;
            
            <input type="radio" name="choice"
            <?php if (isset($choice) && $choice=="60") echo "checked";?>
               value="60">60 Minutes
            <br>;
            
  
</form>
        </div>
        
        <div class="content">
            <a href="Rent.php"><button type="submit">Back</button></a> 
            
            <a href="UserAgreement.php"><button type="submit">Next</button></a>
        </div>
        
        
   
    </div>
@endsection
