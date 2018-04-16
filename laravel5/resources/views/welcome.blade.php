@inject('date', 'App\Utilities\date')

@extends('layouts/app', ['title' => 'Home'])

@section('content')
    <h1>Goandlive</h1>
        {{$name}}

        @if($isWeekend)
            {{'Repose toi'}}
        @else
            {{'Va travailler'}} 
        @endif 

@endsection 

@section('footer')
<p>Footer est ici</p>
@endsection