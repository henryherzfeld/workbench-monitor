@extends('layouts/user/main')

<!--Define Page Title-->
@section('title', 'Equipment Access Control User Agreement')


@section('content')

  @component('layouts/card')
    @slot('icon')user @endslot
    @slot('title') User Agreement @endslot
        <form action="{{ route('user/workticket') }}">
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="agreement" value="Agree" required> By checking this box, you agree to the User Agreement
              </label>
            </div>
          </div>
        </form>
    </div>
    @component('layouts/navigationButtons')
      {{route('user/home')}}
    @endcomponent
    @endcomponent
@endsection
