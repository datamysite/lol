<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{csrf_token()}}">
  <meta name="home_url" content="{{@URL::to('/')}}">
  <title>@yield('title') | {{env('APP_NAME')}}</title>
    @include('admin.layout.style')
    @yield('addStyle')
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{URL::to('/public')}}/images/lol-logo.png" alt="AdminLTELogo" height="80" width="100">
  </div>

  <!-- Navbar -->
    @include('admin.layout.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('admin.layout.sidebar')

  <!-- Content Wrapper. Contains page content -->
    @yield('content')
  <!-- /.content-wrapper -->
  
    @include('admin.layout.footer')
</div>
<!-- ./wrapper -->

    @include('admin.layout.script')
    @if(session()->has('success'))
      <script type="text/javascript">
        Toast.fire({
          icon: 'success',
          title: '{{ session()->get("success") }}'
        });
      </script>
    @endif
    @if(session()->has('error'))
      <script type="text/javascript">
        Toast.fire({
          icon: 'error',
          title: '{{ session()->get("error") }}'
        });
      </script>
    @endif
    @yield('addScript')
</body>
</html>
