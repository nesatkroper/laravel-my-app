<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  {{-- <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}"> --}}
  <link rel="stylesheet" href="{{url('assets/dist/css/adminlte.css')}}">
  <link rel="stylesheet" href="{{url('assets/fontawesome/css/all.css')}}">
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <div class="app-wrapper">
    <x-header></x-header>
    <x-sidebar></x-sidebar>
    <main class="app-main">
      {{$slot}}
    </main>
  </div>
  {{-- <script src="{{url('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
  <script src="{{url('assets/dist/js/adminlte.js')}}"></script>
  <script src="{{url('assets/fontawesome/js/all.js')}}"></script>
</body>
</html>