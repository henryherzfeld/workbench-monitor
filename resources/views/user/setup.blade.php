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
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Workbench
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Soldering Iron
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Other
                </label>
            </div>
        </form>
        </div>
        @component('layouts/navigationButtons')
            {{route('user/condition')}}
        @endcomponent
    @endcomponent
@endsection
