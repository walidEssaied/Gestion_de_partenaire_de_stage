@extends('layouts.app')

@section('title','ISETB - Ajouter une nouvelle offres')


@section('content')
     
         <div class="container">
             <h1>Ajouter une nouvelle offres</h1>
             <form action="{{ route('demande.store') }}" class="needs-validation" novalidate method="post">

                 <div class="form-row">
                     <div class="col-md-4 mb-3">
                         <label for="prenom">Nom de societé</label>
                         <input type="text" class="form-control" id="prenom" placeholder="Pierre" required>
                         <div class="valid-feedback">Nom valide</div>
                         <div class="invalid-feedback">Nom incorrecte</div>
                     </div>
                     <div class="col-md-4 mb-3">
                         <label for="nom">Adresse de societé</label>
                         <input type="text" class="form-control" id="nom" placeholder="Giraud" required>
                         <div class="valid-feedback">Adresse valid</div>
                         <div class="invalid-feedback">Adresse incorrecte</div>
                     </div>
                     <div class="col-md-4 mb-3">
                         <label for="pseudo">Type de stage</label>
                         <input type="text" class="form-control" id="pseudo" placeholder="PierreGird" required>
                         <div class="valid-feedback">Type valid</div>
                         <div class="invalid-feedback">Type incorrecte</div>
                     </div>
                     <div class="col-md-6 mb-3">
                         <label for="ville">Date debut</label>
                         <input type="date" class="form-control" id="ville" placeholder="Ville" required>
                         <div class="valid-feedback">Date valid</div>
                         <div class="invalid-feedback">Date incorrecte</div>
                     </div>
                     <div class="col-md-3 mb-3">
                         <label for="pays">Date fin</label>
                         <input type="date" class="form-control" id="pays" placeholder="Pays" required>
                         <div class="valid-feedback">Date valid</div>
                         <div class="invalid-feedback">Date incorrecte</div>
                     </div>
  
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="" id="cgu" required>
                       <label class="form-check-label" for="cgu">J'accepte les conditions générales d'utilisation et de vente</label>
                       <div class="invalid-feedback">Vous devez accepter les CGU pour continuer</div>
                     </div>
                 </div>
                 <br>
                 <button class="btn btn-primary" type="submit">Envoyer</button>
             </form>
         </div>
@endsection

