<!doctype html>

<html lang="en" class="layout-wide" data-assets-path="../assets/" data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Alternativve</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset ('../sneat/assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset ('../sneat/assets/vendor/fonts/iconify-icons.css')}}" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="{{ asset ('../sneat/assets/vendor/css/core.css')}}" />
    <link rel="stylesheet" href="{{ asset ('../sneat/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->

    <link rel="stylesheet" href="{{ asset ('../sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <!-- endbuild -->

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset ('../sneat/assets/vendor/css/pages/page-misc.css')}}" />

    <!-- Helpers -->
    <script src="{{ asset ('../sneat/assets/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="{{ asset ('../sneat/assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Content -->

    <!-- Error -->
    <div class="container-xxl container-p-y">
      <div class="misc-wrapper">
        <h1 class="mb-2 mx-2" style="line-height: 6rem; font-size: 6rem">Kesalahan Sistem</h1>
        <h4 class="mb-2 mx-2">Terjadi Kesalahan Sistem ⚠️</h4>
        <p class="mb-6 mx-2">Segera Hubungi Pihak Pengembang</p>
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Back to home</a>
        <div class="mt-6">
          <img
            src="{{ asset ('../sneat/assets/img/illustrations/page-misc-error-light.png')}}"
            alt="page-misc-error-light"
            width="500"
            class="img-fluid" />
        </div>
      </div>
    </div>
    <!-- /Error -->

    <!-- / Content -->

    <!-- Core JS -->

    <script src="{{ asset ('../senat/assets/vendor/libs/jquery/jquery.js')}}"></script>

    <script src="{{ asset ('../senat/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{ asset ('../senat/assets/vendor/js/bootstrap.js')}}"></script>

    <script src="{{ asset ('../senat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{ asset ('../senat/assets/vendor/js/menu.js')}}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->

    <script src="{{ asset ('../senat/assets/js/main.js')}}"></script>

    <!-- Page JS -->
  </body>
</html>
