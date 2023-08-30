<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Consultants-sm</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style_1.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="d-flex justify-content-between p-3 px-md-4 mb-3 bg-white border-bottom shadow">
        <h5 class="my-0 font-weight-normal">Consultant-Sm</h5>

        <div>
            @if (auth()->user())
            <a href="{{ route('consultant.index') }}" class="btn btn-outline-primary" type="button">Mon compte</a>
            <a href="{{ route('logout') }}" class="btn btn-outline-secondary" type="button">Deconnexion</a>
            @else
            <a class="btn btn-outline-primary" href="{{ route('login.index') }}">Connexion</a>
            @endif
        </div>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h2 class="">Veuillez remplir un formulaire</h2>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Consultant</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Partenaire</button>
                    </li>
                </ul>
                <div class="tab-content pt-2" id="myTabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card p-3">
                            <div class="container">
                                <form action="{{ route('createConsultant') }}">
                                    <fieldset>
                                        <div class="row mb-3">
                                            <div class="col form-group md-2">
                                                <label for="nom">Nom <span class="text-danger">*</span></label>
                                                <input type="text" name="nom" required class="form-control" id="nom"
                                                    placeholder="Entrez votre nom">
                                            </div>

                                            <div class="col form-group md-2">
                                                <label for="nom">Prénom <span class="text-danger">*</span></label>
                                                <input type="text" name="Entrez votre prenom" required
                                                    class="form-control" id="nom" placeholder="Pierre">
                                            </div>
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="nom">Date de naissance</label>
                                            <input type="text" name="date_naissance" class="form-control"
                                                id="date_naissance" placeholder="Entrez votre date de naissance">
                                        </div>


                                        <div class="row mb-3">
                                            <div class="col form-group mb-2">
                                                <label for="email_1">Email 1 <span class="text-danger">*</span></label>
                                                <input type="email" name="email_1" required class="form-control"
                                                    id="email_1" placeholder="Entrez votre 1er email">
                                            </div>

                                            <div class="col form-group mb-2">
                                                <label for="email_2">Email 2</label>
                                                <input type="email" name="email_2" class="form-control" id="email_2"
                                                    placeholder="Entrez votre 2nd email">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col form-group mb-2">
                                                <label for="nom">Telephone 1</label>
                                                <input type="text" name="telephone_1" class="form-control" id="nom"
                                                    placeholder="Votre numero de telephone 1">
                                            </div>

                                            <div class="col form-group mb-2">
                                                <label for="nom">Telephone 2</label>
                                                <input type="text" name="telephone_2" class="form-control" id="nom"
                                                    placeholder="Votre numero de telephone 2">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col form-group mb-2">
                                                <label for="nom">Niveau diplôme 1</label>
                                                <input type="text" name="niveau_diplome_1" class="form-control" id="nom"
                                                    placeholder="Entrez niveau diplome 1">
                                            </div>

                                            <div class="col form-group mb-2">
                                                <label for="nom">Entrez votre diplôme 1</label>
                                                <input type="text" name="diplome_1" class="form-control" id="nom"
                                                    placeholder="Entrez diplome 1">
                                            </div>

                                            <div class="col form-group mb-2">
                                                <label for="nom">Année diplôme 1</label>
                                                <input type="text" name="annee_obtention_diplome_1" class="form-control"
                                                    id="nom" placeholder="Entrez votre année d'obtention du diplôme 1">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col form-group mb-2">
                                                <label for="nom">Niveau diplôme 2</label>
                                                <input type="text" name="niveau_diplome_2" class="form-control" id="nom"
                                                    placeholder="Entrez votre niveau du diplome 2">
                                            </div>

                                            <div class="col form-group mb-2">
                                                <label for="nom">Entrez votre diplôme 2</label>
                                                <input type="text" name="diplome_2" class="form-control" id="nom"
                                                    placeholder="Entrez votre diplome 2">
                                            </div>

                                            <div class="col form-group mb-2">
                                                <label for="nom">Année diplôme 2</label>
                                                <input type="text" name="annee_obtention_diplome_2" class="form-control"
                                                    id="nom" placeholder="Entrez année d'obtention">
                                            </div>
                                        </div>


                                        <div class="form-group mb-2">
                                            <label for="selection">Chosir votre pays</label>
                                            <select id="selection" name="pays_id" class="form-control">
                                                <option value="">Aucun</option>
                                                @foreach ($pays as $pay)
                                                <option value="{{ $pay->id }}" data-badge="">{{ $pay->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="selection">Votre domaine de compétence <span
                                                    class="text-danger">*</span></label>
                                            <select class="js-select2" name="domaine_competence_id[]"
                                                multiple="multiple">
                                                @foreach ($competences as $competence)
                                                <option value="{{ $competence->id }}" data-badge="">{{ $competence->nom
                                                    }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="selection">Outil ou technologie maitriser<span
                                                    class="text-danger">*</span></label>
                                            <select class="js-select2" name="outil_techno_maitriser_id[]"
                                                multiple="multiple">
                                                @foreach ($technos as $techno)
                                                <option value="{{ $techno->id }}" data-badge="">{{ $techno->nom }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="selection">Choisir votre profiil<span
                                                    class="text-danger">*</span></label>
                                            <select class="js-select2" name="profil_consultant_id[]"
                                                multiple="multiple">
                                                @foreach ($profils as $profil)
                                                <option value="{{ $profil->id }}" data-badge="">{{ $profil->nom }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="selection">Choisir votre niveau de diplôme<span
                                                    class="text-danger">*</span></label>
                                            <select class="js-select2" name="niveau_diplome_id[]" multiple="multiple">
                                                @foreach ($diplomes as $diplome)
                                                <option value="{{ $diplome->id }}" data-badge="">{{ $diplome->nom }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group mb-2 mt-2">
                                            <label for="nom">Autres diplômes</label>
                                            <input type="text" class="form-control" name="autre_diplomes" id="nom"
                                                placeholder="Pierre">
                                        </div>


                                        <div class="form-group mb-2 mt-2">
                                            <label for="bio">Projet realisé</label>
                                            <textarea class="form-control" required name="projet_realiser" id="bio"
                                                rows="2"></textarea>
                                        </div>
                            </div>
                            </fieldset>
                            <div class="text-center">
                                <button class="btn btn-primary">Soumettre</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="card p-3">
                        <div class="container">
                            <form action="{{ route('createPartenaire') }}">

                                @csrf
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <fieldset>
                                    <div class="row mb-3">
                                        <div class="col form-group md-2">
                                            <label for="nom">Nom entreprise <span class="text-danger">*</span></label>
                                            <input type="text" name="nom_entreprise" required class="form-control"
                                                id="nom" placeholder="Entrez le nom de l'entreprise">
                                            @error('nom_entreprise')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col form-group md-2">
                                            <label for="nom">Entrez le pays <span class="text-danger">*</span></label>
                                            <select id="selection" name="pays_id" required class="form-control">
                                                <option value="">Liste de choix...</option>
                                                @foreach ($pays as $item)
                                                <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col form-group mb-2">
                                            <label for="email_1">Site web</label>
                                            <input type="email" name="site_web_entreprise" class="form-control"
                                                id="email_1" placeholder="http://entreprise.com">
                                            @error('site_web_entreprise')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col form-group mb-2">
                                            <label for="email">Entrez le mail de l'entreprise <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" name="email" required class="form-control" id="email"
                                                placeholder="odgpiere2@gmail.com">
                                            @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col form-group mb-2">
                                            <label for="indicatif_numero_telephone">Indicatif</label>
                                            <input type="text" name="indicatif_numero_telephone" class="form-control"
                                                id="indicatif_numero_telephone" placeholder="Entrez indicatif de numero de
                                                telephone">
                                            @error('indicatif_numero_telephone')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col form-group mb-2">
                                            <label for="nom">Telephone 1</label>
                                            <input type="text" name="telephone_entreprise_1" class="form-control"
                                                id="nom" placeholder="Entrez votre telephone 1">
                                            @error('telephone_entreprise_1')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col form-group mb-2">
                                            <label for="nom">Telephone 2</label>
                                            <input type="text" name="telephone_entreprise_2" class="form-control"
                                                id="nom" placeholder="Entrez votre telephone 2">
                                            @error('telephone_entreprise_2')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col mb-3">
                                            <div class="form-group mb-2">
                                                <label for="nom_1">Nom 1 <span class="text-danger">*</span></label>
                                                <input type="text" name="nom_1" required class="form-control" id="nom_1"
                                                    placeholder="Entrez un nom 1">
                                                @error('nom_1')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-2">
                                                <label for="prenom_1">Prénom 1 <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="prenom_1" required class="form-control"
                                                    id="prenom_1" placeholder="Entrez un prénom 1">
                                                @error('prenom_1')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-2">
                                                <label for="contact_1">Contact 1 <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="contact_1" required class="form-control"
                                                    id="contact_1" placeholder="Entrez un contact 1">
                                                @error('contact_1')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-2">
                                                <label for="email_1">Email 1 <span class="text-danger">*</span></label>
                                                <input type="email" name="email_1" required class="form-control"
                                                    id="email_1" placeholder="Entrez un email 1">
                                                @error('email_1')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col mb-3">
                                            <div class="form-group mb-2">
                                                <label for="nom_2">Nom 2</label>
                                                <input type="text" name="nom_2" class="form-control" id="nom_2"
                                                    placeholder="Entrez un 2nd nom">
                                                @error('nom_2')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-2">
                                                <label for="prenom_2">Prénom 2</label>
                                                <input type="text" name="prenom_2" class="form-control" id="prenom_2"
                                                    placeholder="Entrez un 2nd prenom">
                                                @error('prenom_2')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-2">
                                                <label for="contact_2">Contact 2</label>
                                                <input type="text" name="contact_2" class="form-control" id="contact_2"
                                                    placeholder="Entrez un 2nd contact">
                                                @error('contact_2')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-2">
                                                <label for="email_2">Email 2</label>
                                                <input type="text" name="email_2" class="form-control" id="email_2"
                                                    placeholder="Entrez un 2nd email">
                                                @error('email_2')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col mb-3">
                                            <div class="form-group mb-2">
                                                <label for="nom_3">Nom 3</label>
                                                <input type="text" name="nom_3" class="form-control" id="nom_3"
                                                    placeholder="Entrez un 3eme nom">
                                                @error('nom_3')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-2">
                                                <label for="prenom_3">Prenom 3</label>
                                                <input type="text" name="prenom_3" class="form-control" id="prenom_3"
                                                    placeholder="Entrez un 3eme prenom">
                                                @error('prenom_3')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-2">
                                                <label for="contact_3">Contact 3</label>
                                                <input type="text" name="contact_3" class="form-control" id="contact_3"
                                                    placeholder="Entrez un 3eme contact">
                                                @error('contact_3')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-2">
                                                <label for="email_3">Email 3</label>
                                                <input type="text" name="email_3" class="form-control" id="email_3"
                                                    placeholder="Entrez un 3eme email">
                                                @error('email_3')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                        </div>

                        <div class="form-group mb-2 mt-1">
                            <label for="domaine_activite">Domaine d'activité <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" required name="domaine_activite"
                                id="domaine_activite" placeholder="Entrez le domaine d'activité">
                            @error('domaine_activite')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col mb-3">
                                <div class="form-group mb-2 mt-1">
                                    <label for="solution_1">Solution 1 <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required name="solution_1" id="solution_1"
                                        placeholder="Entrez ici la solution proposée">
                                    @error('solution_1')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group mb-2 mt-1">
                                    <label for="bio">Description de la solution 1 <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" required placeholder="Entrez la description de la solution" name="description_solution_1" id="bio"
                                        rows="2"></textarea>
                                    @error('description_solution_1')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col mb-3">
                                <div class="form-group mb-2 mt-1">
                                    <label for="solution_1">Solution 2</label>
                                    <input type="text" class="form-control" placeholder="Entrez une 2nd solution" name="solution_2" id="solution_1"
                                        placeholder="solution 1">
                                    @error('solution_2')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group mb-2 mt-1">
                                    <label for="description_solution_1">Description de la solution 2</label>
                                    <textarea class="form-control" placeholder="Entrez ici la description de la seconde solution" name="description_solution_2"
                                        id="description_solution_2" rows="2"></textarea>
                                    @error('description_solution_2')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <label for="autre_solutions">Autres solutions</label>
                                <textarea class="form-control" name="autre_solutions" id="description_solution_1"
                                    rows="2"></textarea>
                                @error('autre_solutions')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    </fieldset>
                    <div class="text-center mt-2">
                        <button type="submit" class="btn btn-primary">Soumettre</button>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- End Pills Tabs -->

    </div>
    </div>
    </div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="container">
            <div class="row">

                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Cool stuff</a></li>
                        <li><a class="text-muted" href="#">Random feature</a></li>
                        <li><a class="text-muted" href="#">Team feature</a></li>
                        <li><a class="text-muted" href="#">Stuff for developers</a></li>
                        <li><a class="text-muted" href="#">Another one</a></li>
                        <li><a class="text-muted" href="#">Last time</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Resource</a></li>
                        <li><a class="text-muted" href="#">Resource name</a></li>
                        <li><a class="text-muted" href="#">Another resource</a></li>
                        <li><a class="text-muted" href="#">Final resource</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Team</a></li>
                        <li><a class="text-muted" href="#">Locations</a></li>
                        <li><a class="text-muted" href="#">Privacy</a></li>
                        <li><a class="text-muted" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="{{ asset("assets/js/jquery-3-2-1.min.js") }}"><\/script>')
    </script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}""></script>
    <script src=" {{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
</body>

</html>