@extends('layouts.app')

@section('title', 'Gestion des domaines de compétences')

@section("soustitre", "Gestion des domaines de compétences")

@section('contents')
<section >
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadgitcrumb-item"><a href="{{ route("dashboard") }}">Home</a></li>/
            <li class="breadgitcrumb-item"><a href="">Liste des Compétences</a></li>/
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0"></h1>
        <div>
          {{-- <a href="{{ route("categorie.create") }}" class="btn btn-outline-primary"><i class="fa-sharp fa-plus"></i> Ajouter une categorie</a> --}}

                  <!-- Bouton pour ouvrir le modal -->
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalAjoutCategorie">
          <i class="fa-sharp fa-plus"></i> Ajouter une compétence
        </button>

        <!-- Modal d'ajout de catégorie -->
        <div class="modal fade" id="modalAjoutCategorie" tabindex="-1" role="dialog" aria-labelledby="modalAjoutCategorieLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalAjoutCategorieLabel">Ajouter une compétence</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- Formulaire d'ajout de catégorie -->
                <form method="POST" action="{{ route('competence.store') }}">
                  @csrf
                  <div class="form-group">
                    <label for="nom">Nom du compétence</label>
                    <input type="text" class="form-control" id="nom" name="nom" @error('nom')is-invalid @enderror required>
                    @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-outline-primary">Ajouter</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>



        </div>
      </div>
      {{-- <hr> --}}
      
      <div class="container">
      <br>
        <div class="card p-0">
          <div class="card-body">

            

            {{-- <div class="card"> --}}
              <div class="card-body p-1">
                    <form action="" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0 mb-3">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search for..." name="query" value="" />
                            <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                {{-- <h5 class="card-title">Bordered Table</h5> --}}
                <!-- Bordered Table -->
                
                <table class="table table-bordered" id="myTable">
                  <thead>
                    <tr>
                      <th scope="col">Noms</th>
                      <th scope="col" class="pull-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($competences->count() > 0)

                  @foreach ($competences as $competence )

                    <!-- Modal d'édition de la catégorie -->
                    <div class="modal fade" id="modalEditerCategorie{{ $competence->id }}" tabindex="-1" role="dialog" aria-labelledby="modalEditerCategorieLabel{{ $competence->id }}" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="modalEditerCategorieLabel{{ $competence->id }}">Éditer le competence</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <!-- Formulaire d'édition de la catégorie -->
                                  <form method="POST" action="{{ route('competence.update', $competence->id) }}">
                                      @csrf
                                      @method('PUT')
                                      <div class="form-group">
                                          <label for="nom{{ $competence->id }}">Nom de la compétence</label>
                                          <input type="text" class="form-control" id="nom{{ $competence->id }}" name="nom" value="{{ $competence->nom }}" required>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                          <button type="submit" class="btn btn-outline-primary">Enregistrer</button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                    </div>
                      <tr>
                        <td>{{ $competence->nom }}</td>
                        <td class="pull-right">
                          <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalEditerCategorie{{ $competence->id }}">
                            <i class="fa-sharp fa-pencil"></i> Éditer
                          </button>
                          <a href="{{ route("competence.destroy", $competence->id) }}" class="btn btn-outline-danger" ata-toggle="modal" onclick="return confirm('Etes vous sûr ?')"><i class="fa-sharp fa-trash"></i> Supprimer</a>
                        </td>
                      </tr>
                      @endforeach
        
                      @else
                          <tr>
                              <td class="text-center" colspan="5">Aucune competence trouvé</td>
                          </tr>
                      @endif
                      
                  </tbody>
                </table>
                <!-- End Bordered Table -->
                {{-- {{ $competences->links('layouts.paginationlinks') }} --}}
  
              </div>
            {{-- </div> --}}
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

