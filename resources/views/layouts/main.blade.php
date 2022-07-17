<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>CareYou | {{ $title }}</title>
</head>
<body>
  <!-- This example requires Tailwind CSS v2.0+ -->
  @include('partials.navbar')
  <div>
    @yield('container')
  </div>
</body>
</html>