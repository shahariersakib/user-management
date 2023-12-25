@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    UserListTwo Details
                    <a href="{{ route('user-list-two.index') }}" class="btn btn-primary btn-sm float-end">Back to List</a>
                </div>

                <div class="card-body">

                    <ul class="list-group">
                        <li class="list-group-item"><strong>Name:</strong> {{ $userListTwo->name }}</li>
                        <li class="list-group-item"><strong>Phone:</strong> {{ $userListTwo->phone }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $userListTwo->email }}</li>
                        <li class="list-group-item"><strong>Address:</strong> {{ $userListTwo->address ?: 'N/A' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
