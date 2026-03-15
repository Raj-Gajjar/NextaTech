<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>@yield('title')</title>
<link rel="icon" type="image/x-icon" href="{{ asset('assets/wfavicon.ico') }}">


<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body class="bg-gray-100 font-sans text-gray-800">

    <!-- Header -->
    @include('website.layouts.header')

    <!-- Main Content -->
    <main class="container mx-auto px-4 sm:px-6 lg:px-10 py-10">
        @yield('content')
    </main>


    @include('website.layouts.footer')
 
</body>
</html>