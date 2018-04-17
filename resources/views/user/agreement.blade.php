@extends('layouts/user/main')

<!--Define Page Title-->
@section('title', 'Equipment Access Control User Agreement')

<!--Check Authentication-->
@if (session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
@endif

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-header"><h1>User Agreement</h1></div>
      <div class="card-body">Agreement text</div>
      <div class="card-footer">
        <form action="{{ route('workticket') }}">
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="agreement" value="agree"> By checking this box, you agree to the User Agreement
              </label>
            </div>
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-secondary" href="{{ route('rent') }}">Back</button> 
            <button type="submit" class="btn btn-primary">Agree</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
