@extends('layouts.layout')
 
@section('contenu')
    <form action="{{ url('testformulaire') }}" method="POST">
        @csrf
        <label for="message">Entrez votre message : </label>
        <input type="text" name="message" id="message">
        <input type="submit" value="Envoyer !">
    </form>
@endsection