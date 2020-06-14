@extends('layouts.app')

@section('title', 'ISETB - Les Stages')

@section('content')

@if (session('AddStage'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('AddStage') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


@if (session('deleteStage'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('deleteStage') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@auth
@admin
<a href="{{ route('stage.create') }}" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">Ajouter Stage</a>
<h1>Liste des Stages</h1>
<br>
<div class="row">
    <!-- <div class="col">
    <ul class="list-group">
           @foreach ($stages as $stage)
            <a href="{{ route('stage.show', $stage->id) }}">
                <li class="list-group-item list-group-item-action">
                <strong>{{$stage}}</strong>
                <strong>{{$stage->stage_type}}</strong>
                <strong>{{$stage->stage_date_debut}}</strong>
                <strong>{{$stage->stage_date_fin}}</strong> -->
                <!-- </li> -->
            <!-- </a> -->
            <!-- @endforeach -->
        <!-- </ul> -->
    <!-- </div> --> 
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Editer page</th>
        <th scope="col">Type de stage </th>
        <th scope="col">Date debut</th>
        <th scope="col">Date fin</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    <tbody id="myTable">
    @foreach ($stages as $stage)


      <tr>
                <td><a href="{{ route('stage.show', $stage->id) }}" class="btn btn-outline-info">Editer page</a></td>
                <td> {{ $stage->type}}</td>
                <td> {{ $stage->date_debut}}</td>
                <td> {{ $stage->date_fin}}</td>
                <td>
                    <a href="{{ route('stage.edit', $stage->id) }}" class="btn btn-outline-info">Editer</a>
                    <a href="{{ route('stage.destroy', $stage->id) }}" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal">Delete</a>
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
            document.querySelector('#delete-stage-form').submit();">Confirmer  la Suppression</button>
        </div>
        <form id="delete-stage-form" action="{{ route('stage.destroy', $stage->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
      </div>
    </div>
  </div>

</div>
@elseadmin
@endadmin





@endauth
@endsection
