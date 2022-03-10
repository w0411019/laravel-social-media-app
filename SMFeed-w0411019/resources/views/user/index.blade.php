@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card mt-4">
                    <div class="card-header">User Administration</div>

                    <div class="card-body">
                        <a href="/admin/users/create"><button class="btn btn-success">Create New Admin User</button></a>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">Existing Users</div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($usersFiltered as $user)
                                <tr>
                                    <th>{{$user->name}}</th>
                                    <th>{{$user->email}}</th>
                                    <th>
                                        <ul>
                                            @foreach($user->roles()->pluck('name') as $role)
                                                <li>{{$role}}</li>
                                            @endforeach
                                        </ul>
                                    </th>
                                    <th>
                                        <a href="/admin/users/{{$user->id}}"><button class="btn btn-success">Show</button></a>
                                        <a href="/admin/users/{{$user->id}}/edit"><button class="btn btn-warning">Edit</button></a>
                                        <form action="/admin/users/{{$user->id}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger">Delete</button></a>
                                        </form>
                                    </th>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
