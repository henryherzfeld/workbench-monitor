@extends('layouts/user/main')

    <!--Define Page Title-->
    @section('title', 'Condition')

    <!--Define Page Content -->
    @section('content')

        <!-- Progress Bar-->
        @component('layouts/progressBar', ['width' => '82']) @endcomponent

        <!-- Card -->
        @component('layouts/card')
            @slot('title')        <h4 class="text-primary clearfix">What is the condition of your workbench?</h4> @endslot
        @slot('icon')exclamation-triangle @endslot


        <div class="mb-5"> Is it clean? Has the previous person left the bench in acceptable condition?</div>


            <div class="mb-2">If you answered 'No', Please upload a photo(s) of the workbench, and any damaged equipment</div>

            <div class="form-group d-flex">
                <div class="col-9">
                    <div class="input">
                        <input type="file" name="filename" class="form-control float-right">
                    </div>
                </div>
        <!-- Navigation Buttons -->
        @component('layouts/navigationButtons')
            {{route('user/finalize')}}
        @endcomponent

            </div>
    @endcomponent
@endsection