@extends('layouts.architect')
@section('title')
    Add User
@endsection
@section('content')
    <div class="card">
        <div class="row">
            <div class="col-lg-12 margin-tb  card-header d-flex justify-content-between">
                <div>
                    Add User
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="card-body text-center col-12">
            <div class="form-row">
                <form method="POST" action="{{route('users.store')}}" class="col">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
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
                                <label for="email">E-mail:</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       placeholder="E-mail" name="email" value="{{old('email')}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <div class="">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <strong>Role:</strong>
                                <div class="row d-flex justify-content-around mt-2">
                                    @foreach($roles as $value)
                                        <div class="m-2">
                                            <input type="checkbox" id="{{$value}}" name="roles[]"
                                                   value="{{$value}}">
                                            <label for="{{$value}}">{{ $value }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
