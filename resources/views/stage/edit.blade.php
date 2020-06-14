@extends ('layouts.app')

@section ('title','Edit Stage')

@section ('content')
<fieldset>
<legend> Modifier ce stage</legend>
<form action="{{ route('stage.update' , $stage->id)}}" method="post">
@csrf
@method('PATCH') 
<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="type">Type</label>
         <input type="text" name="type" value="{{ old('type') ?? $stage->type }}" id="type" class="form-control" placeholder="">
         @error('type')<div class="text-danger">{{ $message }}</div> @enderror
      </div>
</div>


<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="date_debut">Date debut</label>
         <input type="date" name="date_debut" value="{{ old('date_debut') ?? $stage->date_debut }}" id="date_debut" class="form-control" placeholder="">
         @error('date_debut')<div class="text-danger">{{ $message }}</div> @enderror
      </div>
</div>


<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="date_fin">Date fin</label>
         <input type="date" name="date_fin" value="{{ old('date_fin') ?? $stage->date_fin }}" id="date_fin" class="form-control" placeholder="">
         @error('date_fin')<div class="text-danger">{{ $message }}</div> @enderror
      </div>
</div>


    <div class="row">
    <button type ="submit" class="btn btn-outline-primary btn-block">Confirmer la Modification</button>
    </div>
</div>
</form>
</fieldset>
@endsection