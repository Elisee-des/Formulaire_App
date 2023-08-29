@extends('layouts.app')

@section('title', 'Gestion des Outils et techonologies')

@section("soustitre", "Gestion des Outils et techonologies")

@section('contents')
<section >
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadgitcrumb-item"><a href="{{ route("dashboard") }}">Home</a></li>/
            <li class="breadgitcrumb-item"><a href="">Liste des technos et outils</a></li>/
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0"></h1>
        <div>
          {{-- <a href="{{ route("categorie.create") }}" class="btn btn-primary"><i class="fa-sharp fa-plus"></i> Ajouter une categorie</a> --}}

                  <!-- Bouton pour ouvrir le modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAjoutCategorie">
          <i class="fa-sharp fa-plus"></i> Ajouter une techno/outil
        </button>

        <!-- Modal d'ajout de catégorie -->
        <div class="modal fade" id="modalAjoutCategorie" tabindex="-1" role="dialog" aria-labelledby="modalAjoutCategorieLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalAjoutCategorieLabel">Ajouter une techno</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- Formulaire d'ajout de catégorie -->
                <form method="POST" action="{{ route('techno.store') }}">
                  @csrf
                  <div class="form-group">
                    <label for="nom">Nom de l'outil ou de la techno</label>
                    <input type="text" class="form-control" id="nom" name="nom" @error('nom')is-invalid @enderror required>
                    @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
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
                            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
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
                    @if ($technos->count() > 0)

                  @foreach ($technos as $techno )

                    <!-- Modal d'édition de la catégorie -->
                    <div class="modal fade" id="modalEditerCategorie{{ $techno->id }}" tabindex="-1" role="dialog" aria-labelledby="modalEditerCategorieLabel{{ $techno->id }}" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="modalEditerCategorieLabel{{ $techno->id }}">Éditer la techno</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <!-- Formulaire d'édition de la catégorie -->
                                  <form method="POST" action="{{ route('techno.update', $techno->id) }}">
                                      @csrf
                                      @method('PUT')
                                      <div class="form-group">
                                          <label for="nom{{ $techno->id }}">Nom de l'outil ou de la techno</label>
                                          <input type="text" class="form-control" id="nom{{ $techno->id }}" name="nom" value="{{ $techno->nom }}" required>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                          <button type="submit" class="btn btn-primary">Enregistrer</button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                    </div>
                      <tr>
                        <td>{{ $techno->nom }}</td>
                        <td class="pull-right">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEditerCategorie{{ $techno->id }}">
                            <i class="fa-sharp fa-plus"></i> Éditer
                          </button>
                          <a href="{{ route("techno.destroy", $techno->id) }}" class="btn btn-outline-danger" ata-toggle="modal" onclick="return confirm('Etes vous sûr ?')"><i class="fa-sharp fa-trash"></i> Supprimer</a>
                        </td>
                      </tr>
                      @endforeach
        
                      @else
                          <tr>
                              <td class="text-center" colspan="5">Aucune techno ou outil trouvée</td>
                          </tr>
                      @endif
                      
                  </tbody>
                </table>
                <!-- End Bordered Table -->
                {{-- {{ $technos->links('layouts.paginationlinks') }} --}}
  
              </div>
            {{-- </div> --}}
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

