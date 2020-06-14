@extends('layouts.app')

@section('title', 'ISETB - Les etudiants')

@section('content')

@if (session('addetudiant'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('addetudiant') }}
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
<a href="{{ route('etudiant.create') }}" class="btn btn-outline-primary btn-lg float-right" role="button"
    aria-pressed="true">Ajouter un étudiant !</a>
<h1>Liste des etudiants</h1>
<br>
<div class="row">
<input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-hover">
    <thead >
      <tr>
        <th scope="col">Editer page</th>
        <th scope="col">Cin</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Adresse</th>
        <th scope="col">Tel</th>
        <th scope="col">Email</th>
        <th scope="col">Niveau</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    <tbody id="myTable">
    @foreach ($etudiants as $etudiant)
      <tr>
            
        <td><a href="{{ route('etudiant.show', $etudiant->id) }}" class="btn btn-outline-info">Editer page</a></td>
        <td> {{ $etudiant->cin}}</td>
        <td> {{ $etudiant->Nom}}</td>
        <td> {{ $etudiant->Prenom}}</td>
        <td> {{ $etudiant->Adress}}</td>
        <td> {{ $etudiant->tel}}</td>
        <td> {{ $etudiant->email}}</td>
        <td> {{ $etudiant->niveau}}</td>
        <td>
            <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn btn-outline-info">Editer</a>
            <a href="{{ route('etudiant.destroy', $etudiant->id) }}" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal">Delete</a>
            
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
          <h5 class="modal-title" id="exampleModalLabel">Supprimer un etudiant</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        Etes-vous sûr de supprimer cet etudiant ??
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-outline-danger"
            onclick="event.preventDefault();
            document.querySelector('#delete-etudiant-form').submit();">Confirmer la suppression</button>
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