@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    User List
                    <a href="{{ route('user-list-two.create') }}" class="btn btn-primary btn-sm float-end">Add User</a>
                    <a href="{{ route('user-list-two.export') }}" class="btn btn-success">Export Users</a>

                    <form action="{{ route('user-list-two.import') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" accept=".xlsx, .xls">
                        <button type="submit" class="btn btn-primary">Import Users</button>
                    </form>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($userListTwos as $userList)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $userList->name }}</td>
                                    <td>{{ $userList->phone }}</td>
                                    <td>{{ $userList->email }}</td>
                                    <td>{{ $userList->address }}</td>
                                    <td>
                                        <a href="{{ route('user-list-two.show', $userList->id) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('user-list-two.edit', $userList->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('user-list-two.destroy', $userList->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No users found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
