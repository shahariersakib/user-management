@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        User Details
                        <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm float-end">Back to List</a>
                    </div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Name:</strong> {{ $user->name }}</li>
                            <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                            <li class="list-group-item"><strong>Roles:</strong> {{ implode(', ', $user->getRoleNames()->toArray()) }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
