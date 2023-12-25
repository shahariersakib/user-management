@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    User Details
                    <a href="{{ route('user-list.index') }}" class="btn btn-primary btn-sm float-end">Back to List</a>
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Name:</strong> {{ $userList->name }}</li>
                        <li class="list-group-item"><strong>Phone:</strong> {{ $userList->phone }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $userList->email }}</li>
                        <li class="list-group-item"><strong>Address:</strong> {{ $userList->address ?: 'N/A' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
