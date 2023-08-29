@extends('layouts.app')

@section('title', 'Detail partenaire')

@section("soustitre", "Detail partenaire")

@section('contents')
<section>
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadgitcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>/
                        <li class="breadgitcrumb-item"><a href="{{ route('partenaire.index') }}">Detail partenaires</a>
                        </li>/
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="mb-0"></h1>
                <div>
                    {{-- <a href="{{ route(" partenaire.create") }}" class="btn btn-primary"><i
                            class="fa-sharp fa-plus"></i> Ajouter une partenaire</a> --}}

                    <!-- Bouton pour ouvrir le modal -->

                    <!-- Modal d'ajout de catégorie -->
                    {{-- <div class="modal fade" id="modalAjoutpartenaire" tabindex="-1" role="dialog"
                        aria-labelledby="modalAjoutpartenaireLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalAjoutpartenaireLabel">Ajouter une catégorie</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Formulaire d'ajout de catégorie -->
                                    <form method="POST" action="{{ route('partenaire.store') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nom">Nom de la catégorie</label>
                                            <input type="text" class="form-control" id="nom" name="name"
                                                @error('name')is-invalid @enderror required>
                                            @error('name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Fermer</button>
                                            <button type="submit" class="btn btn-primary">Ajouter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}



                </div>
            </div>
            {{--
            <hr> --}}

            <div class="container">
                <div class="card p-0">

                    <div class="card p-3">
                        <ul class="list-group">
                            <li class="list-group-item">Nom de l'entreprise: <strong>{{ $partenaire->nom_entreprise
                                    }}</strong> </li>
                            <li class="list-group-item">Pays: <strong>{{ $partenaire->pays->nom }}</strong></li>
                            <li class="list-group-item">Site web: <strong>{{ $partenaire->site_web_entreprise
                                    }}</strong></li>
                            <li class="list-group-item">Indicatif numero: <strong>{{
                                    $partenaire->indicatif_numero_telephone }}</strong>
                            </li>
                            <li class="list-group-item">Telephone 1: <strong>{{ $partenaire->telephone_entreprise_1 }}</strong></li>
                            <li class="list-group-item">Telephone 2: <strong>{{ $partenaire->telephone_entreprise_2 }}</strong></li>
                            <li class="list-group-item">Nom 1: <strong>{{ $partenaire->nom_1 }}</strong></li>
                            <li class="list-group-item">Prenom 1: <strong>{{ $partenaire->prenom_1 }}</strong></li>
                            <li class="list-group-item">Contact 1: <strong>{{ $partenaire->prenom_1 }}</strong></li>
                            <li class="list-group-item">Email 2: <strong>{{ $partenaire->email_1 }}</strong></li>
                            <li class="list-group-item">Nom 2: <strong>{{ $partenaire->nom_2 }}</strong></li>
                            <li class="list-group-item">Prenom 2: <strong>{{ $partenaire->prenom_2 }}</strong></li>
                            <li class="list-group-item">Contact 2: <strong>{{ $partenaire->prenom_1 }}</strong></li>
                            <li class="list-group-item">Email 3: <strong>{{ $partenaire->email_3 }}</strong></li>
                            <li class="list-group-item">Nom 3: <strong>{{ $partenaire->nom_3 }}</strong></li>
                            <li class="list-group-item">Prenom 3: <strong>{{ $partenaire->prenom_3 }}</strong></li>
                            <li class="list-group-item">Contact 3: <strong>{{ $partenaire->contact_3 }}</strong></li>
                            <li class="list-group-item">Domaine d'activité: <strong>{{ $partenaire->domaine_activite
                                    }}</strong></li>
                            <li class="list-group-item">Solution 1: <strong>{{ $partenaire->solution_1 }}</strong></li>
                            <li class="list-group-item">Description solution 1: <strong>{{
                                    $partenaire->description_solution_1 }}</strong>
                            </li>
                            <li class="list-group-item">Solution 2: <strong>{{ $partenaire->solution_2 }}</strong></li>
                            <li class="list-group-item">Description solution 2: <strong>{{
                                    $partenaire->description_solution_2 }}</strong>
                            </li>
                            <li class="list-group-item">Autres Solution: <strong>{{ $partenaire->prenom_1 }}</strong>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection