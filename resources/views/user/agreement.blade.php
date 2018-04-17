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
  <div class="col-2"></div>
  <div class="col">
    <div class="card">
      <div class="card-header"><h3>User Agreement</h3></div>
      <div class="card-body">Agreement text</div>
      <div class="card-footer">
        <form action="{{ route('workticket') }}">
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="agreement" value="agree" onclick="javascript:$(\":checkbox\").attr(\"disabled\", \"!($(this).checked())\")"> By checking this box, you agree to the User Agreement
              </label>
            </div>
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-secondary" onclick="javascript:history.back()">Back</button> 
            <button type="submit" class="btn btn-primary" disabled>Agree</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-2"></div>
</div>
@endsection
