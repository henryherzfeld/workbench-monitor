@extends('layouts/admin/main')

    <!--Define Page Title-->
    @section('title', 'Edit')

    <!--Check Authentication-->
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

@section('content')
    @component('layouts/card')
        @slot('icon')database @endslot

        @if($title === "Workbench")
        @slot('title') Edit {{$title}} @endslot
            <form action="/admin/edit/workbench" method="POST">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-1">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" readonly id="id" name="id" value="@isset($workbench->id) {{$workbench->id}} @endisset">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="classroomName">Classroom</label>
                        <select class="form-control" id="classroomName" name="classroomName">
                            <option selected>Choose...</option>
                            @foreach($classrooms as $classroom)
                                <option>{{$classroom->className}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="workbenchType">Type</label>
                        <select id="workbenchType" class="form-control" name="workbenchType">
                            <option selected>Choose...</option>
                            <option>Soldering</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @elseif($title === "User")
        @slot('title') Edit {{$title}} @endslot
        <form action="/admin/edit/user" method="POST">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="userName">Name</label>
                    <input type="text" class="form-control" id="userName" name="userName" placeholder="Name" value="@isset($user->name) {{$user->name}} @endisset">
                </div>
                <div class="form-group col-md-6">
                    <label for="college">College</label>
                    <input type="text" class="form-control" id="college" name="college" placeholder="College" value="@isset($user->college) {{$user->college}} @endisset">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="zNumber">ZNumber</label>
                    <input type="text" class="form-control" id="zNumber" name="zNumber" placeholder="Z123456789" value="@isset($user->z_number) {{$user->z_number}} @endisset">
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" readonly id="email" name="email" value="@isset($user->email) {{$user->email}} @endisset">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="admin">Admin</label>
                    <select id="admin" class="form-control" name="admin">
                        <option @if($user->admin === 0) selected @endif>No</option>
                        <option @if($user->admin === 1) selected @endif>Yes</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="ticketId">Workticket ID</label>
                    <input type="text" class="form-control" id="ticketId" name="ticketId" value="@isset($user->ticketId) {{$user->ticketId}} @endisset">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>




        @endif
        @endcomponent
    </div>
    </div>
    </div>
@endsection