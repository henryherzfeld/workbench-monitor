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
        @slot('title') Create Workbench @endslot
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="workbenchName">Name</label>
                        <input type="text" class="form-control" id="workbenchName" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="classroomName">Classroom</label>
                        <input type="text" class="form-control" id="classroomName" placeholder="Classroom">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="workbenchType">Type</label>
                        <select id="workbenchType" class="form-control">
                            <option selected>Choose...</option>
                            <option>Soldering</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Make workbench available?
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        @endcomponent
    </div>
    </div>
    </div>
@endsection