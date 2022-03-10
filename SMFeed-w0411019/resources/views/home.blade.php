@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                        @if(session()->has('error'))
                            <div class="container mb-4 text-center rounded" style="background-color: pink; border: 2px solid red">
                                <h4 class="text-danger">{{session('error')}}</h4>
                            </div>
                        @endif
                        @if(Auth::user()!==null)
                            <div class="card">
                            <div class="card-header">Dashboard</div>
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                You are logged in!
                                <div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header">Your Feed
                    @if(Auth::user() !== null)
                        <a href='/posts/create'><button class='btn btn-success float-right'>Create New Post</button></a>
                    @endif
                </div>

                <div class="card-body">
                    @foreach($posts as $post)
                        <div class="card mt-4">
                            <div class="card-header font-weight-bold">{{$post->title}} - {{DB::table('users')->where('id','=',$post->created_by)->value('name')}} </div>
                            <div class="card-body">
                                @if($post->image !== null)
                                    <img class="card-img" src={{$post->image}} />
                                @endif
                                <p class="mt-4">
                                    {{$post->content}}
                                </p>
                            </div>
                            <div class="card-footer">
                                <strong>Posted:</strong>
                                {{$post->created_at}}
                                @if(Auth::user()!==null)
                                    @if (DB::table('users')->where('id','=',$post->created_by)->value('id') == Auth::user()->id)

                                        <a href='/posts/{{$post->id}}/edit'><button class='btn btn-warning float-right mt-4'>Edit</button></a>

                                    @endif

                                    @if(DB::table('users')->where('id','=',$post->created_by)->value('id') == Auth::user()->id ||
                                        Auth::user()->roles()->where('role_id','=','2')->first()!==null)

                                            <form action="/posts/{{$post->id}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger float-right mr-4">Delete</button></a>
                                            </form>
                                    @endif
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
