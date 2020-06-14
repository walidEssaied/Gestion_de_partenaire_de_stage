@extends ('layouts.app')

@section ('title','Nouvelle Societé')

@section ('content')
<fieldset>
<legend> Nouveau Societe</legend>
<form action="{{ route('societe.store')}}" method="post">
@csrf 
<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="nom">Nom</label>
         <input type="text" name="nom"  id="nom" class="form-control" placeholder="">
         @error('nom')<div class="text-danger">{{ $message }}</div> @enderror
      </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="adresse">Adresse</label>
         <input type="text" name="adresse"  id="adresse" class="form-control" placeholder="">
         @error('adresse')<div class="text-danger">{{ $message }}</div> @enderror
      </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="email">Email</label>
         <input type="text" name="email"  id="email" class="form-control" placeholder="">
         @error('email')<div class="text-danger">{{ $message }}</div> @enderror
      </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="tel">Telephone</label>
         <input type="number" name="tel"  id="tel" class="form-control" placeholder="">
         @error('tel')<div class="text-danger">{{ $message }}</div> @enderror
        </div>
    </div>
    <div class="row">
    <button type ="submit" class="btn btn-outline-primary btn-block">Enregistrer</button>
    </div>
</div>
</form>
</fieldset>
@endsection