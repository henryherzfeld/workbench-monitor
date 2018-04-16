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
    
        <a class="title">Help</a>
        
        <div class="content2" style="text-align: center;" >
        <br>;
        The Equipment Access Control is a secure and user-friendly<br>;
        app/web interface for controlling access to any amount of equipment.<br>;<br>;
        
        Select the equipment you wish to use and the time you need it. When the equipment is not in <br>;
        use it will remain off to protect the equipment from power failures or hacking attempts.<br>;
        Administrators are able to provide and deny access to any equipment for any <br>;
        user based on user access.<br>;<br>;
        
        Never touch the element of the soldering iron... 400C!<br>;
        Hold wires to be heated with tweezers or clamps.<br>
        Always return the soldering iron to its stand when no in use. Neverput it down on the workbench.<br>;
        Turn unit off and unplg when not in use.<br>;
        Immediately place any burns under cold water for 15 minutes<br>;
        Report to a first aider if deep or extensive otherwise protect with a plaster (band-aid).<br>;<br>;
        Make sure to clean up your warokbench when you're finished!
        </div>
        
        <a href="EquipmentSelect.php"><button type="submit" style="right:300; bottom:300; position:absolute;">Back</button></a>
    </div>
@endsection
