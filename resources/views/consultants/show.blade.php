@extends('layouts.app')

@section('title', 'Detail Consultant')

@section("soustitre", "Detail Consultant")

@section('contents')
<section>
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadgitcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>/
                        <li class="breadgitcrumb-item"><a href="">Detail consultant</a>
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
                <div class="card p-4">
                    <ul class="list-group">
                        <li class="list-group-item">Nom: <strong>{{ $consultant->nom }}</strong></li>
                        <li class="list-group-item">Prénom: <strong>{{ $consultant->prenom }}</strong></li>
                        <li class="list-group-item">Date de naissance: <strong>{{ $consultant->date_naissance
                                }}</strong></li>
                        <li class="list-group-item">Email 1: <strong>{{ $consultant->email_1 }}</strong></li>
                        <li class="list-group-item">Email 2: <strong>{{ $consultant->email_2 }}</strong></li>
                        <li class="list-group-item">Telephone 1: <strong>{{ $consultant->telephone_1 }}</strong>
                        </li>
                        <li class="list-group-item">Telephone 2: <strong>{{ $consultant->telephone_2 }}</strong>
                        </li>
                        <li class="list-group-item">Niveau de diplôme 1: <strong>{{ $consultant->niveau_diplome_1
                                }}</strong></li>
                        <li class="list-group-item">Diplôme 1: <strong>{{ $consultant->diplome_1 }}</strong></li>
                        <li class="list-group-item">Année d'obtention du diplôme 1: <strong>{{
                                $consultant->annee_obtention_diplome_1 }}</strong></li>
                        <li class="list-group-item">Niveau de diplôme 2: <strong>{{ $consultant->niveau_diplome_2
                                }}</strong></li>
                        <li class="list-group-item">Diplôme 2: <strong>{{ $consultant->diplome_2 }}</strong></li>
                        <li class="list-group-item">Année d'obtention du diplôme 2: <strong>{{
                                $consultant->annee_obtention_diplome_2 }}</strong></li>
                        <li class="list-group-item">Autre diplômes: <strong>{{ $consultant->autre_diplomes
                                }}</strong></li>
                        <li class="list-group-item">Projet realiser: <strong>{{ $consultant->projet_realiser
                                }}</strong></li>
                        <li class="list-group-item">Niveau diplôme:
                            <strong>
                                @foreach ($consultant->niveau_diplomes as $diplome)
                                {{ $diplome->nom }},
                                @endforeach
                            </strong>
                        </li>
                        <li class="list-group-item">Profils:
                            <strong>
                                @foreach ($consultant->profils as $profil)
                                {{ $profil->nom }},
                                @endforeach
                            </strong>
                        </li>
                        <li class="list-group-item">Niveau diplôme:
                            <strong>
                                @foreach ($consultant->domaine_competences as $competence)
                                {{ $competence->nom }},
                                @endforeach
                            </strong>
                        </li>
                        <li class="list-group-item">Domaine de competence:
                            <strong>
                                @foreach ($consultant->outil_techonologies as $techno)
                                {{ $techno->nom }},
                                @endforeach
                            </strong>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
@endsection