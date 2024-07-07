<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="h-full">
    @include('layout.navbar')
    @yield('content')
    @include('layout.footer')
    @include('part.link')
    @include('part.script')
</body>
</html>
