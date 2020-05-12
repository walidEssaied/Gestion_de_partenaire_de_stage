@extends('layouts.app')

@section('title', 'Les Societes')

@section('content')

@if (session('AddSociete'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('AddSociete') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if (session('deleteSociete'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('deleteSociete') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<a href="{{ route('societe.create') }}" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">Ajouter Societe</a>
<h1>Liste des Sociétes</h1>
<div class="row">
    <div class="col">
    <ul class="list-group">
           @foreach ($societes as $societe)
            <a href="{{ route('societe.show', $societe->id) }}">
                <li class="list-group-item list-group-item-action">
                    <strong>{{ $societe->societe_nom }}</strong> 
                    <strong>{{ $societe->societe_adresse }}</strong>
                    <strong>{{ $societe->societe_email}}</strong>
                    <strong>{{ $societe->societe_tel }}</strong>
                </li>
            </a>
            @endforeach
        </ul>
    </div>
</div>
@endsection
