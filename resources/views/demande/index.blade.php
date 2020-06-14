@extends('layouts.app')

@section('title', 'ISETB - Offres des stages')

@section('content')
@auth
@admin
                <h1>
                    Demandes et offres
                </h1>
                <br>
                <div class="">
                    <span>
                        <h3>
                            Créer une nouvelle offres
                        </h3>
                    </span>
                    <br>
                    <a href="{{ route('demande.create') }}" class="btn btn-outline-info">Créer</a>
                </div>
                <br><br>
                <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">Nom de societe</th>
                              <th scope="col">Adress de societe</th>
                              <th scope="col">Type de stage</th>
                              <th scope="col">Date debut</th>
                              <th scope="col">Date fin</th>
                              <th scope="col">Option</th>
                            </tr>
                          </thead>
                          <tbody id="myTableetud">

                          @foreach($demandes as $demande)
                            <tr>
                                      <td> {{ $demande->nom }}</td>
                                      <td> {{ $demande->adresse }}</td>
                                      <td> {{ $demande->type }}</td>
                                      <td> {{ $demande->date_debut }}</td>
                                      <td> {{ $demande->date_fin }}</td>
                                      <td>
                                          <a href="/demander?id={{ $demande->id }}" class="btn btn-outline-info">Approuve</a>
                                      </td>
                                      <td>
                                          <a href="/demander?id={{ $demande->id }}" class="btn btn-outline-info">Annuler</a>
                                      </td>


                            </tr>
                            @endforeach

                          </tbody>
                </table>

@elseadmin
@endadmin

<section class="jumbotron text-center">
    <div class="container">
      <h1>Offres des stages</h1>
      <p class="lead text-muted">Vous pouvez maintenant trouver facilement votre stage</p>
      <p>
      <a href="" class="btn btn-primary my-2">Stage d'initiation</a>
      <a href="" class="btn btn-primary my-2">Stage d'initiation</a>
      <a href="" class="btn btn-primary my-2">Stage PFE</a>
      </p>
      <p>
      <!-- <form class="form-inline my-2 my-lg-0" style="margin-left: 400px;"> -->
            <input class="form-control" id="myInputetud" type="text" placeholder="Rechercher par nom , date , type , adress ..">
            <!-- <button class="  my-2 my-sm-0" type="submit" style="border-radius: 10%"><img src="https://p7.hiclipart.com/preview/928/549/87/magnifying-glass-computer-icons-magnification-loupe.jpg" alt="serch logo" style="width: 30px;height: 30px;"></button> -->
        <!-- </form> -->
      </p>
    </div>
  </section>
 

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Afficher l'offre</th>
        <th scope="col">Nom de societe</th>
        <th scope="col">Adress de societe</th>
        <th scope="col">Type de stage</th>
        <th scope="col">Date debut</th>
        <th scope="col">Date fin</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    <tbody id="myTableetud">

    @foreach($demandes as $demande)
      <tr>
                <td><a href="" class="btn btn-outline-succes" disable style="opacity: 40%;">Afficher</a></td>
                <td> {{ $demande->nom }}</td>
                <td> {{ $demande->adresse }}</td>
                <td> {{ $demande->type }}</td>
                <td> {{ $demande->date_debut }}</td>
                <td> {{ $demande->date_fin }}</td>
                <td>
                    <a href="/demander?id={{ $demande->id }}" class="btn btn-outline-info">Demander</a>
                </td>


      </tr>
      @endforeach

    </tbody>
  </table>
@endauth
<script>
$(document).ready(function(){
  $("#myInputetud").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTableetud tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection