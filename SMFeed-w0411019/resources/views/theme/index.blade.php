@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card mt-4">
                    <div class="card-header">Manage Themes</div>

                    <div class="card-body">
                        <a href="/themes/create"><button class="btn btn-success">Add new theme</button></a>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">Themes: </div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>ThemeID</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($themes as $theme)
                                <tr>
                                    <th>{{$theme->id}}</th>
                                    <th>{{$theme->name}}</th>

                                    <th>
                                        <a href="/themes/{{$theme->id}}"><button class="btn btn-success">Details</button></a>
                                        <a href="/themes/{{$theme->id}}/edit"><button class="btn btn-warning">Edit</button></a>
                                        <form action="/themes/{{$theme->id}}" method="post">
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
