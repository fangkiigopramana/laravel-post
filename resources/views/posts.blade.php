@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{$title}}</h1>

<div class="row">
    @foreach ($posts as $post)
    <div class="col-sm-4">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none card-title"><h5>{{$post->title}}</h5></a>
                    <p class="card-text">{{$post->excerpt}}</p>
                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
                    <p class="card-text"><small><p>By <a href="/authors/{{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p></small></p>
                </div>
              </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

