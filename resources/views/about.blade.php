@extends('layouts.main')

@section('container')
    <h1>Halaman {{ $title }}</h1>

    <h4>Hai saya {{ $nama }}</h4>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $nama }}" width="200px">
@endsection

