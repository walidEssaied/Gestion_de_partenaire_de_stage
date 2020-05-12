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
        <th scope="col">email/th>
        <th scope="col">niveau</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> {{ $etudiant->cin}}</td>
        <td> {{ $etudiant->Nom}}</td>
        <td> {{ $etudiant->Prenom}}</td>
        <td> {{ $etudiant->Adress}}</td>
        <td> {{ $etudiant->tel}}</td>
        <td> {{ $etudiant->email}}</td>
        <td> {{ $etudiant->niveau}}</td>
        <td>
            <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn btn-outline-info">Edit</a>
            <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal">Delete</a>
            
        </td>
      </tr>
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
@endsection