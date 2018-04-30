@extends('layouts/user/main')

      <!--Define Page Title-->
      @section('title', 'Equipment Setup')

@section('content')

    @component('layouts/progressBar', ['width' => '15']) @endcomponent

    @component('layouts/card')
        @slot('title') Workbench Activity @endslot
        @slot('icon')area-chart @endslot



        <form>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="workbench">
                <label class="form-check-label" for="workbench">
                    Workbench
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="solderiron">
                <label class="form-check-label" for="solderiron">
                    Soldering Iron
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="other">
                <label class="form-check-label" for="other">
                    Other
                </label>
            </div>
        </form>
        @component('layouts/navigationButtons')
            {{route('user/condition')}}
        @endcomponent
    @endcomponent
@endsection
