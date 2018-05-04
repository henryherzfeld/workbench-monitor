
@extends('layouts/admin/main')

<!--Define Page Title-->
@section('title', $title)


@section('content')

  @component('layouts/card')
    @slot('icon')table @endslot

    <table class="table-striped table">
      <thead class="thead-light">

      <!--checking between user page or workbench page-->
      @if ($title === "Users")
        <tr>
          <th scope="col">#</th>
          <th scope="col">Z#</th>
          <th scope="col">Name</th>
          <th scope="col">Admin</th>
          <th scope="col">College</th>
          <th scope="col">Department</th>
          <th scope="col">Class</th>
          <th scope="col">CRN</th>
          <th scope="col">Class #</th>
          <th scope="col">Class Name</th>
          <th scope="col">Email</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->z_number }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->admin }}</td>
            <td>{{ $user->college }}</td>
            <td>{{ $user->department }}</td>
            <td>{{ $user->class }}</td>
            <td>{{ $user->class_crn }}</td>
            <td>{{ $user->class_number }}</td>
            <td>{{ $user->class_name }}</td>
            <td>{{ $user->email }}</td>
            <td><a type="button" href="/admin/edit/user/{{$user->id}}" class="btn btn-primary">Edit</a></td>
          </tr>
        @endforeach
        </tbody>
        </table>
        <span>{{ $users->links() }}</span>


      <!-- If its not users, its a workbenches table we need-->
      @else
      <tr>
        <th scope="col">#</th>
        <th scope="col">Classroom</th>
        <th scope="col">Type</th>
        <th scope="col">Active?</th>
        <th scope="col">Updated</th>
        <th scope="col"></th>
      </tr>
      </thead>
      <tbody>
        @foreach ($workbenches as $workbench)
      <tr>
        <td>{{ $workbench->id }}</td>
        <td>{{ $workbench->classroom }}</td>
        <td>{{ $workbench->type }}</td>
        <td> @if($workbench->active) Yes @else No @endif</td>
        <td>{{ $workbench->updated_at }}</td>
        <td><a type="button" href="/admin/edit/workbench/{{$workbench->id}}" class="btn btn-primary">Edit</a></td>
      </tr>
      @endforeach
      </tbody>
      </table>
      <span>{{ $workbenches->links() }}</span>
    @endif
  @endcomponent
@endsection