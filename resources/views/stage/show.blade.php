@extends('layouts.app')

@section('content')

@if (session('updateStage'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('updateStage') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Type </th>
        <th scope="col">Date debut</th>
        <th scope="col">date fin</th>

      </tr>
    </thead>
    <tbody>
      <tr>
                <td> {{ $stage->type}}</td>
                <td> {{ $stage->date_debut}}</td>
                <td> {{ $stage->date_fin}}</td>
                <td>
                    <a href="{{ route('stage.edit', $stage->id) }}" class="btn btn-outline-info">Edit</a>
                    <a href="{{ route('stage.destroy', $stage->id) }}" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal">Delete</a>
                </td>

       </tr>
    </tbody>
  </table>
  
  <!-- Modal -->
  <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Supprimer stage</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Etes-vous sûr de supprimer ce stage ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-outline-danger"
            onclick="event.preventDefault();
            document.querySelector('#delete-stage-form').submit();">Confirmer la Suppression</button>
        </div>
        <form id="delete-stage-form" action="{{ route('stage.destroy', $stage->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
      </div>
    </div>
  </div>
@endsection