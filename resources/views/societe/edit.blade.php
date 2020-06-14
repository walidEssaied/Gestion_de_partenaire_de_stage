@extends ('layouts.app')

@section ('title','Modifier Societé')

@section ('content')
<span> Modifier cette Societe</span>
<form action="{{ route('societe.update' , $societe->id)}}" method="post">
@csrf
@method('PATCH') 
<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="nom">Nom</label>
         <input type="text" name="nom" value="{{ old('nom') ?? $societe->nom}}  " id="nom" class="form-control" placeholder="">
         @error('nom')<div class="text-danger">{{ $message }}</div> @enderror
      </div>
</div>
</div>

    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="adresse">Adresse</label>
            <input type="text" name="adresse" value="{{ old('adresse') ?? $societe->adresse }}" id="adresse" class="form-control" placeholder="">
            @error('adresse')<div class="text-danger">{{ $message }}</div> @enderror
          </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="email">Email</label>
            <input type="text" name="email" value="{{ old('email') ?? $societe->email }}" id="email" class="form-control" placeholder="">
            @error('email')<div class="text-danger">{{ $message }}</div> @enderror
          </div>
    </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="tel">Telephone</label>
            <input type="number" name="tel" value="{{ old('tel') ?? $societe->tel }}" id="tel" class="form-control" placeholder="">
            @error('tel')<div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <input type="hidden" name="user_id" value="{{ old('user_id') ?? $societe->user_id }}" id="user_id" class="form-control" placeholder="">
        <!-- <div class="row">
        </div> -->
    </div>
    <button type ="submit" class="btn btn-outline-primary btn-block">Confirmer la Modification</button>

</form>
@endsection