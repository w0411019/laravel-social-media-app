@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create new Theme</div>

                    <div class="card-body">

                        <form action="/themes" method="post">
                            @csrf

                            <div class="form-group">
                                <div>
                                    <label for="name"><strong>Name: </strong></label>
                                    <input type="text" name="name" id="name"  autocomplete="off" class="form-control"
                                           value="{{old('name')}}" placeholder="Enter Theme Name">
                                    @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <label for="cdn_url"><strong>CDN Url: </strong></label>
                                    <input type="text" name="cdn_url" id="cdn_url"  autocomplete="off" class="form-control"
                                           value="{{old('cdn_url')}}" placeholder="Enter CDN Url">
                                    @error('cdn_url')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>


                            <button type="submit" class="btn btn-dark">Add Theme</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
