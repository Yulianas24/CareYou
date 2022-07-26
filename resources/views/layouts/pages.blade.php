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
    @include('partials.navbarPages')
    <div>
        <div class="grid w-screen h-18 bg-white" ></div>
        @yield('container')
    </div>
    @include('partials/footer')
    <script src="{{ asset('js/navbar.js') }}"></script>

</body>

</html>