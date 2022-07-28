<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>CareYou | {{ $title }}</title>
</head>

<body class="overflow-x-hidden">
    <div class="mb-18">@include('partials.navbarPages')</div>
    <div> @yield('container')</div>
    <div>@include('partials.footer')</div>
</body>

</html>
