@extends('layouts.architect')
@section('title')
    Role Management
@endsection
@section('content')
    <div class="card">
        <div class="row">
            <div class="col-lg-12 margin-tb  card-header d-flex justify-content-between">
                <div>
                    Role Management
                </div>
                <div>
                    @can('role-create')
                        <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
                    @endcan
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <th>No</th>
                <th>Name</th>
                <th width="280px">Action</th>
                </thead>
                @foreach ($roles as $key => $role)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td class="font-weight-bold text-primary">{{ $role->name }}</td>
                        <td class="d-flex justify-content-around">
                            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                            @can('role-edit')
                                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                            @endcan
                            @can('role-delete')
                                <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn badge-danger text-light" type="submit">Delete Role</button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </table>
            {!! $roles->links() !!}
        </div>
    </div>
@endsection
