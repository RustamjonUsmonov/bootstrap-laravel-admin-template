@extends('layouts.architect')
@section('title')
    {{__('Create New Role')}}
@endsection
@section('content')
    <div class="card">
        <div class="row">
            <div class="col-lg-12 margin-tb  card-header d-flex justify-content-between">
                <div>
                    {{__('Create New Role')}}
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> {{__('Back')}}</a>
                </div>
            </div>
        </div>
        <div class="card-body text-center col-12">
            <div class="form-row">
                <form method="POST" action="{{route('roles.store')}}" class="col">
                    @csrf
                    <div class="col">
                        <div class="form-group">
                            <label for="role_name">{{__('Name')}}:</label>
                            <input id="role_name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   placeholder="Name" name="name" value="{{old('name')}}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <strong>{{__('Permission')}}:</strong>
                            <br/>
                            <div class="row d-flex justify-content-around">
                                @foreach($permission as $value)
                                    <div class="m-2">
                                        <input type="checkbox" id="{{$value->id}}" name="permission[]"
                                               value="{{$value->id}}">
                                        <label for="{{$value->id}}">{{ $value->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
