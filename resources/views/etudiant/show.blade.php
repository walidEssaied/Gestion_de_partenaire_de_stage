@extends('layouts.app')

@section('content')

@if (session('updateetudiant'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('updateetudiant') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">cin</th>
        <th scope="col">nom</th>
        <th scope="col">prenom</th>
        <th scope="col">Adresse</th>
        <th scope="col">tel</th>
        <th scope="col">email </th>
        <th scope="col">niveau</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> {{ $etudiant->cin}}</td>
        <td> {{ $etudiant->Nom}}</td>
        <td> {{ $etudiant->Prenom}}</td>
        <td> {{ $etudiant->Adresse}}</td>
        <td> {{ $etudiant->tel}}</td>
        <td> {{ $etudiant->email}}</td>
        <td> {{ $etudiant->niveau}}</td>
        <td>
            <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn btn-outline-info">Editer</a>
            <a href="{{ route('etudiant.destroy', $etudiant->id) }}" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal">Delete</a>
            
        </td>
      </tr>
    </tbody>
  </table>
  
  <!-- Modal -->
  <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">supprimer un etudiant</h5>
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
            document.querySelector('#delete-etudiant-form').submit();">Confirmer la supression</button>
        </div>
        <form id="delete-etudiant-form" action="{{ route('etudiant.destroy', $etudiant->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
      </div>
    </div>
  </div>
@endsection