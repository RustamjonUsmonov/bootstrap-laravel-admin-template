@extends('layouts.architect')
@section('title')
    Show User
@endsection
@section('content')
    <div class="card">
        <div class="row">
            <div class="col-lg-12 margin-tb  card-header d-flex justify-content-between">
                <div>
                    Show User
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="card-body text-center col-12">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $user->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Roles:</strong>
                        @forelse($user->getRoleNames() as $v)

                            <label class="badge badge-success">{{ $v }}</label>
                        @empty
                            <label> No Permissions</label>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
