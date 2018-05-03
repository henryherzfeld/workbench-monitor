
@extends('layouts/admin/main')

<!--Define Page Title-->
@section('title', $title)


@section('content')

  @component('layouts/card')
    @slot('icon')table @endslot
    @slot('title') {{$title}} @endslot

    <table class="table-striped">
      <thead class="thead-light">

      <!--checking between user page or workbench page-->
      @if ($title === "Users")
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


      <!-- If its not users, its a workbenches table we need-->
      @else
      <tr>
        <th scope="col">#</th>
        <th scope="col">Classroom</th>
        <th scope="col">Type</th>
        <th scope="col">College</th>
      </tr>
      </thead>
      <tbody>
        @foreach ($workbenches as $workbench)
      <tr>
        <td>{{ $workbench->id }}</td>
        <td>{{ $workbench->classroom }}</td>
        <td>{{ $workbench->type }}</td>
        <td>{{ $workbench->college }}</td>
      </tr>
      @endforeach
      </tbody>
      </table>
      <span>{{ $workbenches->links() }}</span>
    @endif
  @endcomponent
@endsection