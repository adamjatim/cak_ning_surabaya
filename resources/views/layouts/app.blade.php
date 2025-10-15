<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo/cak_ning_color.svg') }}">
    <title>Cak Ning Surabaya - @yield('title')</title>
    <!-- Iconify CDN for icons -->
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="/build/assets/app.css">
    <script src="/build/assets/app2.js"></script> --}}
    <style>
        /* Global Batik Patterns untuk konsistensi di seluruh website */
        .batik-subtle {
            background-image:
                radial-gradient(circle at 20px 30px, rgba(245, 158, 11, 0.06) 2px, transparent 2px),
                radial-gradient(circle at 40px 70px, rgba(245, 158, 11, 0.04) 1px, transparent 1px),
                linear-gradient(45deg, rgba(245, 158, 11, 0.01) 25%, transparent 25%);
            background-size: 60px 60px, 80px 80px, 40px 40px;
        }
    </style>
    @yield('styles')
</head>

<body class=" font-sans">
    @include('layouts.navbar')
    <div class="flex flex-col min-h-screen overflow-x-hidden">
        @yield('content')

        @include('layouts.footer')
        @yield('scripts')
    </div>

</body>

</html>
