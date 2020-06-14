<!-- @extends('layouts.app')
@section('title','Dashboard')

@section('content')
    <div class="formulaire">
        <form action="">
            <legend>
                <legend style="text-align: center;"><b>Add Offres</b></legend>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Example multiple select</label>
                <select multiple class="form-control" id="exampleFormControlSelect2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            </fieldset>      
        </form>
    </div>
@endsection -->
@extends('layouts.app')

@section('title', 'Etudiant')

@section('content')

@if (session('Addetudiant'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('Addetudiant') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if (session('deleteetudiant'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('deleteetudiant') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<a href="" class="btn btn-outline-primary btn-lg float-right" role="button"
    aria-pressed="true">Ajouter une offre !</a>
<h1>Liste des offres</h1>
<br>
<div class="row">
<input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-hover">
    <thead >
      <tr>
        <th scope="col">Nom societe</th>
        <th scope="col">Type de stage</th>
        <th scope="col">Date debut</th>
        <th scope="col">Date fin</th>
        <th scope="col">Adress</th>
      </tr>
    </thead>
    <tbody id="myTable">
    @foreach ($societes as $societe)
    @foreach ($stages as $stage)
      <tr>
            
        <td><a href="" class="btn btn-outline-info">Edit page</a></td>
        <td> {{ $societe->nom}}</td>
        <td> {{ $stage->type}}</td>
        <td> {{ $stage->date_debut}}</td>
        <td> {{ $stage->date_fin}}</td>
        <td> {{ $societe->Adress}}</td>
        <td>
            <a href="" class="btn btn-outline-info">Edit</a>
            <a href="" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal">Delete</a>
            
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <!-- Modal -->
  <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete etudiant</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure to delete your student ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-danger"
            onclick="event.preventDefault();
            document.querySelector('#delete-etudiant-form').submit();">Confirm delete</button>
        </div>
        <form id="delete-etudiant-form" action="{{ route('etudiant.destroy', $etudiant->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
