@extends('layouts.app')

@section('content')

@if (session('updateSociete'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('updateSociete') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id Societe</th>
        <th scope="col">Nom </th>
        <th scope="col">Email</th>
        <th scope="col">Teléphone</th>
        <th scope="col">Opérations</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> {{ $societe->societe_nom}}</td>
        <td> {{ $societe->societe_adresse}}</td>
        <td> {{ $societe->societe_email}}</td>
        <td> {{ $societe->societe_tel}}</td>
        <td>
            <a href="{{ route('societe.edit', $societe->id) }}" class="btn btn-outline-info">Editer</a>
            <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal">Supprimer</a>
            
        </td>
      </tr>
    </tbody>
  </table>
  
  <!-- Modal -->
  <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Supprimer Societe</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Etes-vous sûr de supprimer cette societé ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-outline-danger"
            onclick="event.preventDefault();
            document.querySelector('#delete-societe-form').submit();">Confirmer Suppression</button>
        </div>
        <form id="delete-societe-form" action="{{ route('societe.destroy', $societe->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
      </div>
    </div>
  </div>
@endsection