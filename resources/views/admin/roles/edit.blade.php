@extends('layouts.architect')
@section('title')
    Edit Role
@endsection
@section('content')
    <div class="card">
        <div class="row">
            <div class="col-lg-12 margin-tb  card-header d-flex justify-content-between">
                <div>
                    Edit Role
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="card-body text-center col-12">
            <div class="form-row">
                <form method="POST" action="{{route('roles.update', $role->id)}}" class="col">
                    @csrf
                    @method('PUT')
                    <div class="col">
                        <div class="form-group">
                            <label for="role_name">Name:</label>
                            <input id="role_name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   placeholder="Name" name="name" value="{{$role->name}}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <strong>Permission:</strong>
                            <br/>
                            <div class="row d-flex justify-content-around">
                                @foreach($permission as $value)
                                    <div class="m-2">
                                        <input type="checkbox" id="{{$value->id}}" name="permission[]"
                                               value="{{$value->id}}"
                                               @if(in_array($value->id, $rolePermissions)) checked @endif>
                                        <label for="{{$value->id}}">{{ $value->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
