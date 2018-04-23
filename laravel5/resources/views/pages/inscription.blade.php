@extends('layouts/app')

@section('content')
 <form  method="post">
        {{ csrf_field() }}
        <input type="text" name="nom" placeholder="Email">
        <input type="text" name="prenom" placeholder="Email">        
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="submit" value="M'inscrire">
    </form>
@endsection
