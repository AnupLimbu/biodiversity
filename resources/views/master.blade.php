<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio Diversity Research & Conservation Society</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
{{--    SEO DATA--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="BRC Society is a non-governmental organization based on Nepal. We are focused on research and conservation of biodiversity."/>
    <meta name="keywords" content="brcs, brcs nepal,BRCS NEPAL,BRCS Nepal, BRC Society,biodiversity conservation, environmental conservation"/>
    <meta name="author" content="" />
    <meta name="robots" content="index, follow" />
    <meta name="COUNTRY" content="global" />
    <meta name="LANGUAGE" content="en" />
    <meta name="REGION" content="global"/>
    <meta property="og:url" content=""/>
    <meta property="og:locale" content="en" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <link rel="shortcut icon" href="{{asset('images/logo.jpeg')}}">
    <link rel="canonical" href=""/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
{{--    SEO DATA--}}
    @yield('style')
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body>
    @include('navbar')
    <main>
        @yield('content')
    </main>
    @include('footer')
</body>

@yield('script')
</html>


