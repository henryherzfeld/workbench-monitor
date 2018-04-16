@extends('layouts.admin')

      <!--Define Page Title-->
      @section('title', 'Does your bench look like this?')

      <!--Check Authentication-->
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif

    @section('content')

    <br>;

        <div class="content">

        <input type="radio" name="choice"
            <?php if (isset($choice) && $choice=="yes") echo "checked";?>
               value="yes">Yes
            <br>;
<input type="radio" name="choice"
<?php if (isset($choice) && $choice=="no") echo "checked";?>
value="no">No
            <br>;
  If you answered 'No', Please upload a photo(s) of the workbench, and any damaged equipment

        </div>

        <div class="content">
       <button type="submit">Next</button>
        </div>


    @endsection
