@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                        <br>
                        <br>
                        <br>

                        <hr>

                        <h1>Your posts: </h1>


                    @foreach($posts as $post)
                        <a href="{{route('post.show', ['id' => $post->id])}}">
                            <h3>{{$post->title}}</h3>
                        </a>
                        <p>{{$post->description}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
