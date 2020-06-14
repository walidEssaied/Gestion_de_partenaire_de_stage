@extends('layouts.app')
@section('title','ISETB - Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #222831;color: whitesmoke;">Dashboard</div>   

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @auth
                    @admin

                    <div class="accesrapide" >
                        <h2>Accés rapide</h2>
                        <table style="margin-left: 50px;">
                            <tbody>
                            <tr>
                                <th><a  style="color: #3490dc;text-decoration: none;" href="{{ route('etudiant.index') }}">Gérer les etudiant</a></th>
                            </tr>
                            <tr>
                                <th><a  style="color: #3490dc;text-decoration: none;" href="{{ route('societe.index') }}">Gérer les societés</a></th>
                            </tr>
                            <tr>
                                <th><a  style="color: #3490dc;text-decoration: none;" href="{{ route('stage.index') }}">Gérer les stages</a></th>
                            </tr>
                            <tr>
                                <th><a  style="color: #3490dc;text-decoration: none;" href="{{ route('demande.index') }}">Gérer les offres</a></th>
                            </tr>
                            </tbody>
                        </table>
                        
                    </div>

                    @elseadmin
                    You are logged in user!
                    @endadmin
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
