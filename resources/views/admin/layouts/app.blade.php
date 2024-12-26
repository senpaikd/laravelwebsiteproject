<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Admin Dashboard')</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/slsulogo.jpg') }}">
    @stack('styles')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.partials.navbar')  <!-- Navbar -->
      <div class="container-fluid page-body-wrapper">
        @include('admin.partials.sidebar')  <!-- Sidebar -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')  <!-- Main content -->
          </div>
          @include('admin.partials.footer')  <!-- Footer -->
        </div>
      </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('admin/assets/js/template.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>
    @stack('scripts')
  </body>
</html>
