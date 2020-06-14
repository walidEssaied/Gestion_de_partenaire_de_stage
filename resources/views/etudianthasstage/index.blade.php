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
        <th scope="col">Etudiant Id </th>
        <th scope="col">Nom de Societe </th>
        <th scope="col">Type de stage</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      @foreach($datas as $data)
        <td> {{ $etudiant->$etudiant_id}}</td>
        <td> {{ $societe->societe_nom}}</td>
        <td> {{ $stage->stage_type}}</td>

        <td>
            <a href="{{ route('societe.edit', $societe->id) }}" class="btn btn-outline-info">Envoyer</a>
        </td>
        @endforeach
      </tr>
    </tbody>
  </table>
  
@endsection