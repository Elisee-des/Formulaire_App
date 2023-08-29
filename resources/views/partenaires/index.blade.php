@extends('layouts.app')

@section('title', 'Gestion des Partenaires')

@section("soustitre", "Gestion des Partenaires")

@section('contents')
<section >
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadgitcrumb-item"><a href="{{ route("dashboard") }}">Home</a></li>/
            <li class="breadgitcrumb-item"><a href="{{ route("partenaire.index") }}">Liste des partenaires</a></li>/
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0"></h1>
        <div>
          {{-- <a href="{{ route("partenaire.create") }}" class="btn btn-primary"><i class="fa-sharp fa-plus"></i> Ajouter une partenaire</a> --}}

                  <!-- Bouton pour ouvrir le modal -->

        <!-- Modal d'ajout de catégorie -->
        {{-- <div class="modal fade" id="modalAjoutpartenaire" tabindex="-1" role="dialog" aria-labelledby="modalAjoutpartenaireLabel" aria-hidden="true">
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
                    <input type="text" class="form-control" id="nom" name="name" @error('name')is-invalid @enderror required>
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
        </div> --}}



        </div>
      </div>
      {{-- <hr> --}}
      
      <div class="container">
      <br>
        <div class="card p-0">
          <div class="card-body">

            
            {{-- <div class="table-responsive">
              
            <br>
            @if (isset($partenaires))
                
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Noms</th>
                  <th>Action</th>
                </tr>
                    </thead>
                    <tbody>
                      @if ($partenaires->count() > 0)

                      @foreach ($partenaires as $partenaire )
                          <tr>
                              <td>{{ $partenaire->name }}</td>
                              <td>
                                  <div class="btn-group" role="group">
                                      <button class="btn btn-outline-dark"><a href="{{ route("partenaire.edit", $partenaire->id) }}" class="btn">Editer</a></button>
                                      <form action="{{ route("partenaire.destroy", $partenaire->id  ) }}" method="POST" type="button" class="btn btn-danger" onclick="">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger m-0" onclick="return confirm('Etes vous sûr ?')">Supprimer</button>
                                      </form>
                                      <button class="btn btn-outline-primary"><a href="{{ route("partenaire.show.products", $partenaire->id) }}" class="btn">Produits</a></button>
                                  </div>
                              </td>
                          </tr>
                      @endforeach
      
                      @else
                          <tr>
                              <td class="text-center" colspan="5">Aucune partenaire trouvé</td>
                          </tr>
                      @endif
                      </tbody>
                </table>
                  
                  <div class="pagination-block">
                    $partenaires->links('layouts.paginationlinks')  
                     $partenaires->links()  
                  </div>
                  @endif
              
          </div> --}}

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
                      <th scope="col">Noms entreprise</th>
                      <th scope="col">Pays</th>
                      <th scope="col">Telephone</th>
                      <th scope="col" class="pull-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($partenaires->count() > 0)

                  @foreach ($partenaires as $partenaire )

                    <!-- Modal d'édition de la catégorie -->
                    {{-- <div class="modal fade" id="modalEditerpartenaire{{ $partenaire->id }}" tabindex="-1" role="dialog" aria-labelledby="modalEditerpartenaireLabel{{ $partenaire->id }}" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="modalEditerpartenaireLabel{{ $partenaire->id }}">Éditer la catégorie</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <!-- Formulaire d'édition de la catégorie -->
                                  <form method="POST" action="{{ route('partenaire.update', $partenaire->id) }}">
                                      @csrf
                                      @method('PUT')
                                      <div class="form-group">
                                          <label for="nom{{ $partenaire->id }}">Nom de la catégorie</label>
                                          <input type="text" class="form-control" id="nom{{ $partenaire->id }}" name="name" value="{{ $partenaire->name }}" required>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                          <button type="submit" class="btn btn-primary">Enregistrer</button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                    </div> --}}
                      <tr>
                        <td>{{ $partenaire->nom_entreprise }}</td>
                        <td>{{ $partenaire->pays->nom }}</td>
                        <td>{{ $partenaire->telephone_entreprise_1 }}</td>
                        <td class="pull-right">
                          {{-- <a href="{{ route("partenaire.edit", $partenaire->id) }}" class="btn btn-outline-primary" ata-toggle="modal" data-target="#modalEditionpartenaire"><i class="fa-sharp fa-pencil"></i> Editer</a> --}}
                          {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEditerpartenaire{{ $partenaire->id }}">
                            <i class="fa-sharp fa-plus"></i> Éditer
                          </button> --}}
                          <a href="{{ route("partenaire.show", $partenaire->id) }}" class="btn btn-outline-dark"><i class="fa-sharp fa-circle-info"></i> Détail</a>

                        </td>
                      </tr>
                      @endforeach
        
                      @else
                          <tr>
                              <td class="text-center" colspan="5">Aucun partenaire trouvé</td>
                          </tr>
                      @endif
                      
                  </tbody>
                </table>
                <!-- End Bordered Table -->
                {{-- {{ $partenaires->links('layouts.paginationlinks') }} --}}
  
              </div>
            {{-- </div> --}}
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

