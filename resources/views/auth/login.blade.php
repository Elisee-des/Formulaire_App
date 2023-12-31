<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Connexion</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset("assets_auth/assets/img/favicon.png") }}" rel="icon">
  <link href="{{ asset("assets_auth/assets/img/apple-touch-icon.png") }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("assets_auth/assets/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ asset("assets_auth/assets/vendor/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
  <link href="{{ asset("assets_auth/assets/vendor/boxicons/css/boxicons.min.css") }}" rel="stylesheet">
  <link href="{{ asset("assets_auth/assets/vendor/quill/quill.snow.css") }}" rel="stylesheet">
  <link href="{{ asset("assets_auth/assets/vendor/quill/quill.bubble.css") }}" rel="stylesheet">
  <link href="{{ asset("assets_auth/assets/vendor/remixicon/remixicon.css") }}" rel="stylesheet">
  <link href="{{ asset("assets_auth/assets/vendor/simple-datatables/style.css") }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset("assets_auth/assets/css/style.css") }}" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Connexion</h5>
                  </div>

                  <form class="row needs-validation" method="post" action="{{ route("login.action") }}" novalidate>
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
                    <div class="col-12 mt-3">
                      <label for="yourEmail" class="form-label mb-0">Votre email</label>
                      <input type="email" placeholder="email@gmail.com" name="email" class="form-control" id="yourEmail" @error('email')is-invalid @enderror required >
                      {{-- <div class="invalid-feedback">Email obligatoire</div> --}}
                      @error('email')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="col-12 mt-3">
                      <label for="yourPassword" class="form-label mb-0">Votre mot de passe</label>
                      <input type="password" placeholder="votre mot de passe" name="password" class="form-control" id="yourPassword" @error('password')is-invalid @enderror required>
                      {{-- <div class="invalid-feedback">Mot de passe Obligatoire</div> --}}
                      @error('password')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="col-12 mt-3">
                      <button class="btn btn-primary w-100" type="submit">Connexion</button>
                    </div>
                    
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->


  <!-- Vendor JS Files -->
  <script src="{{ asset("assets_auth/assets/vendor/apexcharts/apexcharts.min.js") }}"></script>
  <script src="{{ asset("assets_auth/assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("assets_auth/assets/vendor/chart.js/chart.umd.js") }}"></script>
  <script src="{{ asset("assets_auth/assets/vendor/echarts/echarts.min.js") }}"></script>
  <script src="{{ asset("assets_auth/assets/vendor/quill/quill.min.js") }}"></script>
  <script src="{{ asset("assets_auth/assets/vendor/simple-datatables/simple-datatables.js") }}"></script>
  <script src="{{ asset("assets_auth/assets/vendor/tinymce/tinymce.min.js") }}"></script>
  <script src="{{ asset("assets_auth/assets/vendor/php-email-form/validate.js") }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("assets_auth/assets/js/main.js") }}"></script>

</body>

</html>