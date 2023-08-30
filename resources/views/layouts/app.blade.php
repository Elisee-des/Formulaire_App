<!DOCTYPE html>
<html lang="en">
<hea>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('assets_admin/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"
        integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/">Consultant sm</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                    class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

                <div class="input-group">
                    {{-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                        aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                            class="fas fa-search"></i></button> --}}
                </div>
            </form>
            <!-- Navbar-->

            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i><span>{{
                            auth()->user()->name }}</span></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        {{-- <li><a class="dropdown-item" href="{{ route(" profil") }}">Mon profil</a></li> --}}
                        {{-- <li><a class="dropdown-item" href="{{ route(" profil.parametre") }}">Paramètre</a></li>
                        --}}
                        {{-- <li>
                            <hr class="dropdown-divider" />
                        </li> --}}
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Déconnexion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            {{-- <div class="sb-sidenav-menu-heading">Navigation</div>

                            @if ( auth()->user()->role == 'admin')
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a> --}}
                            <div class="sb-sidenav-menu-heading">Gestion du site</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Gestion
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                                data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('pays.index') }}">Pays</a>
                                    <a class="nav-link" href="{{ route('profil.index') }}">Profils</a>
                                    <a class="nav-link" href="{{ route('diplome.index') }}">Diplômes</a>
                                    <a class="nav-link" href="{{ route('competence.index') }}">Compétences</a>
                                    <a class="nav-link" href="{{ route('techno.index') }}">Outils et Technos</a>
                                    <a class="nav-link" href="{{ route('partenaire.index') }}">Partenaires</a>
                                    <a class="nav-link" href="{{ route('consultant.index') }}">Consultants</a>
                                    {{-- <a class="nav-link" href="{{ route(" product.index") }}">Produits</a> --}}
                                </nav>
                            </div>

                            {{-- <div class="sb-sidenav-menu-heading">Gestion des utilisateurs</div>
                            <a class="nav-link collapsed" href="{{ route(" user.index") }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Utilisateurs
                            </a> --}}
                            {{-- @endif --}}


                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>

                    <div class="container-fluid px-4">
                        <h2 class="mt-4">@yield('soustitre')</h2>
                        @yield('contents')
                    </div>
                </main>
                {{-- <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                            </div>
                        </div>
                    </div>
                </footer> --}}
            </div>
        </div>
        <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"
            integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="{{ asset('assets_admin/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"
            integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous">
        </script>
        <script src="{{ asset('assets_admin/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('assets_admin/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
            crossorigin="anonymous"></script>
        <script src="{{ asset('assets_admin/js/datatables-simple-demo.js') }}"></script>
        <script>
            $(document).ready(function() {
            $('#myTable').DataTable({
                searching: true,
                ordering: true
            });
            });

        </script>
        <script>
            $(document).ready(function () {

            $(".btn-actions").click(function (e) {
                e.preventDefault()
                $("#modale").modal("show")
                let url = $(this).attr("href")
                $('#modale-body').load(url);
                });
            })
        </script>
        @if (Session::has('success'))
        <script>
            swal("{!! Session::get('success') !!}", "", "success", {
                button:"Fermer"
            })
        </script>
        @endif

        @if (Session::has('error'))
        <script>
            swal("Message", "{!! Session::get('error') !!}", "error", {
                button:"Fermer"
            })
        </script>
        @endif

    </body>

</html>