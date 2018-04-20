@extends('layouts/user/main')

    <!--Define Page Title-->
    @section('title', 'Condition')

    <!--Define Page Content -->
    @section('content')

        <!-- Progress Bar-->
        @component('layouts/progressBar', ['width' => '50']) @endcomponent

        <!-- Card -->
        @component('layouts/card')
        @slot('icon')exclamation-triangle @endslot

        <!-- Card Body -->
        <input type="radio" name="choice"
            <?php if (isset($choice) && $choice=="yes") echo "checked";?>
               value="yes">Yes
            <br>

        <input type="radio" name="choice"
            <?php if (isset($choice) && $choice=="no") echo "checked";?>
                value="no">No
            <br>
  If you answered 'No', Please upload a photo(s) of the workbench, and any damaged equipment

        </div>

        <!-- Navigation Buttons -->
        @component('layouts/navigationButtons')
            {{ route('user/condition') }}
        @endcomponent
    @endcomponent
@endsection