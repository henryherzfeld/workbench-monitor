@extends('layouts/user/main')

  <!--Define Page Title-->
  @section('title', 'Extension')

    @section('content')

        @component('layouts/card')
            @slot('title') Rental Length @endslot
            @slot('icon')clock-o @endslot


        <form action="/Extend.php">
            <div class="form-check">
                <input type="radio" class="form-check mb-1" name="choice" id="time1"
               <?php if (isset($choice) && $choice=="15") echo "checked"?>
                   value="15">
                <label class="form-check-label" for="time1">
                    15 Minutes
                </label>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check mb-1" name="choice" id="time2"
                <?php if (isset($choice) && $choice=="30") echo "checked"?>
                   value="30">
                <label class="form-check-label" for="time2">
                    30 Minutes
                </label>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check mb-1" name="choice" id="time3"
                <?php if (isset($choice) && $choice=="60") echo "checked"?>
                   value="60">
                <label class="form-check-label" for="time3">
                    60 Minutes
                </label>
            </div>
        </form>

            </div>
            @component('layouts/navigationButtons')
                {{route('user/home')}}
            @endcomponent
        @endcomponent
@endsection
