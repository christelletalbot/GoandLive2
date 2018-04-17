@extends('layouts/app', ['title' => 'Home'])

@section('content')
    <h1>Goandlive</h1>
        {{$name}}
@include('partials/weekend')

@endsection 

@section('footer')
<p>Footer est ici</p>
@endsection