@extends('layouts.architect')
@section('title')
    Users Management
@endsection
@section('content')
    <div class="card">
        <div class="row">
            <div class="col-lg-12 margin-tb  card-header d-flex justify-content-between">
                <div>
                    Users Management
                </div>
                <div>
                    @can('role-create')
                        <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
                    @endcan
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover text-center">
                <thead>
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Roles</th>
                <th width="280px">Action</th>
                </thead>
                @foreach ($users as $key => $user)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td class="text-primary font-weight-bold">{{ $user->name }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                            @forelse($user->roles as $value)
                                <label class="badge badge-success">{{ $value->name }}</label>
                            @empty
                                <label class="badge badge-info">No Roles</label>
                            @endforelse
                        </td>
                        <td class="d-flex justify-content-around">
                            <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                            @can('role-edit')
                                <a class="btn btn-primary " href="{{ route('users.edit',$user->id) }}">Edit</a>
                            @endcan
                            @can('role-delete')
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn badge-danger text-light" type="submit">Delete User</button>
                                </form>
                            @endcan
                        </td>

                    </tr>
                @endforeach
            </table>
            {!! $users->links() !!}
        </div>
    </div>
@endsection
