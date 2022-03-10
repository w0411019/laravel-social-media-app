@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Theme Details</div>

                    <div class="card-body">
                        <div>
                            <strong>Name:</strong>
                            <p>{{$theme->name}}</p>
                        </div>
                        <div>
                            <strong>CDN Url:</strong>
                            <p>{{$theme->cdn_url}}</p>
                        </div>
                        <div>
                            <a href="/themes/{{$theme->id}}/edit"><button class="btn btn-warning">Edit</button></a>
                            <form action="/themes/{{$theme->id}}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger">Delete</button></a>
                            </form>
                        </div>

                    </div>
                </div>
                <a href="/themes"><button class="btn btn-dark mt-4">Go Back</button></a>
            </div>
        </div>
    </div>
@endsection
