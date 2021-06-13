@extends('layouts.layout')

@section('contenu')
    @auth
        @if(session()->has('info'))
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">{{ session('info') }}</p>
                    </div>
                </div>
        @endif
        <br>
            <div class="container">
                <div class="row card text-white bg-dark">
                    <h4 class="card-header">Modifier un manga</h4>
                    <div class="card-body">
                        <form action="{{ route('mangas.update',$manga->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <br>
                            <div class="form-group">
                                <input type="text" class="form-control @error('nomDessinateur') is-invalid @enderror" name="nomDessinateur" id="nomDessinateur" value="{{ old('nomDessinateur', $manga->nomDessinateur) }}" placeholder="Nom du dessinateur">
                                @error('nomDessinateur')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" class="form-control @error('nomScenariste') is-invalid @enderror" name="nomScenariste" id="nomScenariste" value="{{ old('nomScenariste', $manga->nomScenariste) }}" placeholder="Nom du scenariste">
                                @error('nomScenariste')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" class="form-control @error('genre') is-invalid @enderror" name="genre" id="genre" value="{{ old('genre', $manga->genre) }}" placeholder="Genre du Manga">
                                @error('genre')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" class="form-control @error('prix') is-invalid @enderror" name="prix" id="prix" value="{{ old('prix', $manga->prix) }}" placeholder="Prix du Manga">
                                @error('prix')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" id="titre" value="{{ old('titre', $manga->titre) }}" placeholder="Titre du manga">
                                @error('titre')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" class="form-control" name="couverture" id="couverture" value="{{ old('couverture', $manga->couverture) }}" placeholder="Couverture">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-secondary">Envoyer !</button>
                        </form>
                    </div>
                </div>
            </div>
    @else
    <br>
            <div class="container">
                <div class="row card text-white bg-dark">
                    <h4 class="card-header">Accès interdit</h4>
                    <div class="card-body">
                        Vous n'avez pas les autorisations requises pour accéder à cette page.
                    </div>
                </div>
            </div>
    @endauth
@endsection