@extends('layouts.app')

@section('title', 'Modifier Etudiant')

@section('content')
        <legend>Modifier un etudiant  </legend>
      <form action="{{ route('etudiant.update', $etudiant->id) }}" method="post">
            @csrf
            @method('PATCH')
                <div class="col">
                    <div class="form-group">
                      <label for="Cin">Cin</label>
                        <input type="number" name="Cin" value="{{ old('Cin') ?? $etudiant->cin }}" id="Cin" class="form-control" placeholder="" >
                      @error('Cin')<div class="text-danger">{{ $message }}</div> @enderror
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
                      <input type="string" name="Adresse" value="{{ old('Adresse') ?? $etudiant->Adresse }}" id="adresse" class="form-control" placeholder="" >
                      @error('Adresse')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="tel">Tel</label>
                      <input type="number" name="Tel"  value="{{ old('Tel') ?? $etudiant->tel }}" id="tel" class="form-control" placeholder="" >
                      @error('Tel')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="Email"  value="{{ old('Email') ?? $etudiant->email }}" id="email" class="form-control" placeholder="" >
                      @error('Email')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="niveau">Niveau</label>
                      <input type="text" name="Niveau"  value="{{ old('Niveau') ?? $etudiant->niveau }}" id="niveau" class="form-control" placeholder="" >
                      @error('Niveau')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="idsociete">Idsociete</label>
                      <input type="number" name="idsociete"  value="{{ old('idsociete') ?? $etudiant->idsociete }}" id="idsociete" class="form-control" placeholder="" >
                      @error('idsociete')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-primary btn-block">Confirmer la modification !!</button>
        </form>
    @endsection