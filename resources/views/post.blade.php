@extends('layouts.main')
@section('container')
<article>    

    <h2>{{ $post->title }}</h2>

    <p>By 
        <a href="/authors/{{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a>
    </p>
    <p>
        in category 
        <a href="/category/{{ $post->slug }}">
            <button type="button" class="btn btn-primary"  style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">{{ $post->category->name }}</button>
        </a>
    </p>
    
    
    <strong>{!! $post->body !!}</strong> {{--agar nilai output sesuai dengan tag html yang ditulis  --}}

</article>
<a href="/post">Back</a>
@endsection