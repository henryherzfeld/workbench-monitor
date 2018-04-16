@extends('layouts.admin')

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
    <a class="title">Check all equipment you are requesting to rent.</a>
        <br>;
        
        <div class="content">
        <form action="/EquipmentSelect.php">
            <input type="checkbox" name="Equipment" value="Bench"> Workbench<br>
            <input type="checkbox" name="Equipment" value="Iron"> Soldering Iron<br>
            <input type="checkbox" name="Equipment" value="Other"> Other ( Seperate the Equipment with a comma.) <input type="text" placeholder="" name="other" required><br>
            
 
</form>
        </div>
        
        <div class="content">
            <a href="Rent.php"><button type="submit">Back</button></a>
            
            <a href="EquipmentCondition.php"><button type="submit">Next</button></a>
        </div>
        
        <div style="position: absolute; bottom: 250; right: 0; width: 350px; text-align:center;">
            <a href="Help.php"><button type="button" class="btn btn-info" title="Click Here for more information on the equipment and access requirements">Info</button></a></div>
        
   
    </div>
@endsection
