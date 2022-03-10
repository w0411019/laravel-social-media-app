@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        <form action="/admin/users/{{$user->id}}" method="post">
                            @method('PATCH')
                            @csrf

                            <input type="hidden" name="id" id="id" value="{{$user->id}}">

                            <div class="form-group">
                                <div>
                                    <label for="name"><strong>Edit Name: </strong></label>
                                    <input type="text" name="name" id="name"  autocomplete="off" class="form-control"
                                           value="{{old('name')?? $user->name}}" placeholder="Enter name">
                                    @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <label for="email"><strong>Edit Email: </strong></label>
                                    <input type="text" name="email" id="email"  autocomplete="off" class="form-control"
                                           value="{{old('email') ?? $user->email}}" placeholder="Enter email">
                                    @error('email')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <label for="roles"><strong>Edit Users Roles: </strong></label>

                                    <li>
                                        <input type="checkbox" name="roles[]" id="role1" value="1"@foreach($roles as $role) {{($role==1)?'checked':''}}@endforeach>Administrator</input>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="roles[]" id="role2" value="2" @foreach($roles as $role){{($role==2)?'checked':''}}@endforeach>Moderator</input>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="roles[]" id="role3" value="3" @foreach($roles as $role){{($role==3)?'checked':''}}@endforeach>Theme Manager</input>
                                    </li>

                                    @error('roles[]')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-dark">Save User</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
