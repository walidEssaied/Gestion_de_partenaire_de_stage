@extends('layouts.app')

@section('title', 'Edit Etudiant')

@section('content')
    <fieldset>
        <legend>Edit your Etudiant</legend>
        <form action="{{ route('etudiant.update', $etudiant->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="cin">Cin</label>
                        <input type="number" name="cin" value="{{ old('cin') ?? $etudiant->cin }}" id="cin" class="form-control" placeholder="" >
                      @error('cin')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="Nom">Nom</label>
                      <input type="string" name="Nom" value="{{ old('Nom') ?? $etudiant->Nom }}" id="Nom" class="form-control" placeholder="" >
                      @error('Nom')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="Prenom">Prenom</label>
                      <input type="string" name="Prenom"  value="{{ old('Prenom') ?? $etudiant->Prenom }}" id="Prenom" class="form-control" placeholder="" >
                      @error('Prenom')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="adresse">Adresse</label>
                      <input type="string" name="adresse"  value="{{ old('adresse') ?? $etudiant->adresse }}" id="adresse" class="form-control" placeholder="" >
                      @error('adresse')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="tel">Tel</label>
                      <input type="number" name="tel"  value="{{ old('tel') ?? $etudiant->tel }}" id="tel" class="form-control" placeholder="" >
                      @error('tel')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email"  value="{{ old('email') ?? $etudiant->email }}" id="email" class="form-control" placeholder="" >
                      @error('email')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="niveau">Niveau</label>
                      <input type="string" name="niveau"  value="{{ old('niveau') ?? $etudiant->niveau }}" id="niveau" class="form-control" placeholder="" >
                      @error('niveau')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="idsociete">Idsociete</label>
                      <input type="number" name="idsociete"  value="{{ old('idsociete') ?? $etudiant->idsociete }}" id="idsociete" class="form-control" placeholder="" >
                      @error('idsociete')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-outline-primary btn-block">Confirm update</button>