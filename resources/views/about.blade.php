@extends('layouts.main')
@section('container')
    <h1>About Me</h1>
    <h2>Nama : {{ $name }}</h1>
    <h2>Email : {{ $email }} </h2>
    <img src=" {{ $image }}" class="img-thumbail rounded-circle" alt="">
@endsection