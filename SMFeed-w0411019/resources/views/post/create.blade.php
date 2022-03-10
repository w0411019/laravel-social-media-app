@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Post</div>

                    <div class="card-body">

                        <form action="/home" method="post">
                            @csrf

                            <div class="form-group">
                                <div>
                                    <label for="title"><strong>Post Title: </strong></label>
                                    <input type="text" name="title" id="title"  autocomplete="off" class="form-control"
                                           value="{{old('title')}}" placeholder="Enter title">
                                    @error('title')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <label for="content"><strong>Post Content: </strong></label>
                                    <input type="text" name="content" id="content"  autocomplete="off" class="form-control"
                                           value="{{old('content')}}" placeholder="Enter post content">
                                    @error('content')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <label for="image"><strong>Post Image: </strong></label>
                                    <input type="text" name="image" id="image"  autocomplete="off" class="form-control"
                                           value="{{old('image')}}" placeholder="Enter image link (optional)">
                                    @error('image')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>


                            <button type="submit" class="btn btn-dark">Create Post</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
