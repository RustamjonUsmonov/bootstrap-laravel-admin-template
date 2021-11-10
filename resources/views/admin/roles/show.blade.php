@extends('layouts.architect')
@section('title')
    Show Role
@endsection
@section('content')
    <div class="card">
        <div class="row">
            <div class="col-lg-12 margin-tb  card-header d-flex justify-content-between">
                <div>
                    Show Role
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="card-body text-center col-12">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $role->name }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Permissions:</strong>
                        @forelse($role->permissions as $permission)
                            <label class="badge badge-success">{{ $permission->name }}</label>
                        @empty
                            <label> No Permissions</label>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
