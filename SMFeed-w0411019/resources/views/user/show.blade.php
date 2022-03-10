@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Details</div>

                    <div class="card-body">
                        <div>
                            <strong>Name:</strong>
                            <p>{{$user->name}}</p>
                        </div>
                        <div>
                            <strong>Email:</strong>
                            <p>{{$user->email}}</p>
                        </div>
                        <div>
                            <strong>Current Roles:</strong>
                            <ul>
                            @foreach($user->roles()->pluck('name') as $role)
                                <li>{{$role}}</li>
                            @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
                <a href="/admin/users"><button class="btn btn-dark mt-4">Go Back</button></a>
            </div>
        </div>
    </div>
@endsection
