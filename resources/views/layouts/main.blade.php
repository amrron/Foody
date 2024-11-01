<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/assets/img/LOGO.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') Foody</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @stack('style')
</head>
<body class="scroll-smooth">
    
    <!--- Page Header --->
    @include('partials.nav')

    <!-- Page Content -->
    @yield('content')

    <!--- Page Footer --->
    @include('partials.footer')
    <!--- End Page Footer --->

    @stack('scripts')
    <script>
        tailwind.config = {
           theme: {
              extend: {
                 fontFamily: {
                    sans: ['Poppins', 'sans-serif'],
                 },
                 colors: {
                    'birumuda': '#D9F4FF',
                    'biru': '#131049',
                    'ping': '#FDCED0',
                },
              },
           },
        };
     </script>
</body>
</html>