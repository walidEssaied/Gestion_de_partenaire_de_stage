@extends('layouts.app')

@section('title','new etudiants')
@section('content')
<fieldset>
<legend>new etudiant</legend>
<form action="{{ route('etudiant.store') }}" method="post">
@csrf
<div class="row">
   <div class="col">
      <div class="form-group">
          <label for="cin">cin</label>
            <input type="number" name="cin" id="" class="form-control" placeholder="" aria-describedby="helpId">
            @error('cin')<div class="text-danger">{{ $message }}</div> @enderror
     </div>
    </div>
    <div class="col">
      <div class="form-group">
          <label for="Nom">Nom</label>
            <input type="text" name="Nom" id="Nom" class="form-control" placeholder="" aria-describedby="helpId">
            @error('Nom')<div class="text-danger">{{ $message }}</div> @enderror
     </div>
    </div>
    <div class="col">
      <div class="form-group">
          <label for="Prenom">Prenom</label>
            <input type="text" name="Prenom" id="Prenom" class="form-control" placeholder="" aria-describedby="helpId">
            @error('Prenom')<div class="text-danger">{{ $message }}</div> @enderror
     </div>
    </div>
    <div class="col">
      <div class="form-group">
          <label for="Adresse">Adresse</label>
            <input type="text" name="Adresse" id="Adresse" class="form-control" placeholder="" aria-describedby="helpId">
            @error('Adresse')<div class="text-danger">{{ $message }}</div> @enderror
     </div>
    </div>
    <div class="col">
      <div class="form-group">
          <label for="tel">tel</label>
            <input type="text" name="tel" id="tel" class="form-control" placeholder="" aria-describedby="helpId">
            @error('tel')<div class="text-danger">{{ $message }}</div> @enderror
     </div>
    </div>
    <div class="col">
      <div class="form-group">
          <label for="email">email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
            @error('email')<div class="text-danger">{{ $message }}</div> @enderror
     </div>
    </div>
    <div class="col">
      <div class="form-group">
          <label for="niveau">niveau</label>
            <input type="text" name="niveau" id="niveau" class="form-control" placeholder="" aria-describedby="helpId">
            @error('niveau')<div class="text-danger">{{ $message }}</div> @enderror
     </div>
    </div>
 </div>
    <div class="row">
        <button type="submit" class="btn btn-outline-primary btn-block">enregistre</button> 
     </div>
</form>
</fieldset>
@endsection


