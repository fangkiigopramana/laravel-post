@extends('layouts.main')
@section('container')
<h1 class="mb-5">{{$title}}</h1>
@foreach ($categories as $category)
    <div class="mb-2 border-bottom">    
        <a href="/category/{category:slug}" class="text-decoration-none"><h2>{{ $category->name }}</h2></a>    
    </div>
    @endforeach
@endsection