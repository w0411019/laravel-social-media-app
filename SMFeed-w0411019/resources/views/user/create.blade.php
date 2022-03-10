@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        <form action="/admin/users" method="post">
                            @csrf

                            <div class="form-group">
                                <div>
                                    <label for="name"><strong>Name: </strong></label>
                                    <input type="text" name="name" id="name"  autocomplete="off" class="form-control"
                                           value="{{old('name')}}" placeholder="Enter name">
                                    @error('name')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <label for="email"><strong>Email: </strong></label>
                                    <input type="text" name="email" id="email"  autocomplete="off" class="form-control"
                                           value="{{old('email')}}" placeholder="Enter email">
                                    @error('email')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <label for="password"><strong>Password: </strong></label>
                                    <input type="password" name="password" id="password"  autocomplete="off" class="form-control"
                                           value="{{old('password')}}" placeholder="Enter password">
                                    @error('password')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                        <label for="roles"><strong>Roles: </strong></label>
                                    <li>
                                        <input type="checkbox" name="roles[]" id="role1" value="1">Administrator</input>
                                    </li>

                                    <li>
                                        <input type="checkbox" name="roles[]" id="role2" value="2">Moderator</input>
                                    </li>
                                    <li>
                                            <input type="checkbox" name="roles[]" id="role3" value="3">Theme Manager</input>
                                    </li>
                                    </select>
                                    @error('roles[]')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-dark">Create User</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
