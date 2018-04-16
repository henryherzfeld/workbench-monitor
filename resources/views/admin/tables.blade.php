
@extends('layouts.admin')

<!--Define Page Title-->
@section('title', 'Home')

<!--Check Authentication-->
@if (session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
@endif

@section('content')
<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Data Table Example</div>
  <div class="card-body">
    <table class="table-striped">
      <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Z#</th>
        <th scope="col">Name</th>
        <th scope="col">College</th>
        <th scope="col">Department</th>
        <th scope="col">Class</th>
        <th scope="col">CRN</th>
        <th scope="col">Class #</th>
        <th scope="col">Class Name</th>
        <th scope="col">Email</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->z_number }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->college }}</td>
          <td>{{ $user->department }}</td>
          <td>{{ $user->class }}</td>
          <td>{{ $user->class_crn }}</td>
          <td>{{ $user->class_number }}</td>
          <td>{{ $user->class_name }}</td>
          <td>{{ $user->email }}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
    <span>{{ $users->links() }}</span>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="{{ route('login') }}">Logout</a>
      </div>
    </div>
  </div>
  @endsection