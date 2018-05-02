@extends('layouts/admin/main')

@section('content')

    @component('layouts/card')

        @slot('icon') thing @endslot
        @slot('title') other thing @endslot


        stuff


    @endcomponent


@if($type === 'user')
    @component('layouts/card')
        @slot('icon')unlock @endslot
        @slot('title') Modify Users Privileges @endslot
        <form>
            <div class="input-group col-md-6 mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Z</span>
                </div>
                <input type="number" class="form-control" id="userId" placeholder="number" value="old($, $default)">
            </div>
            <div class="input-group col-md-6 mb-3">
                <div class="form-check form-group">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label border border-danger rounded" for="gridCheck">
                        Admin Status
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Modify</button>
        </form>
    @endcomponent
@endif


@endsection