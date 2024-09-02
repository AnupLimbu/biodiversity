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
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="index, follow" />
    <meta name="COUNTRY" content="global" />
    <meta name="LANGUAGE" content="en" />
    <meta name="REGION" content="global" />
    <meta property="og:url" content="" />
    <meta property="og:locale" content="en" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <link rel="shortcut icon" href="" />
    <link rel="canonical" href="" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
{{--    SEO DATA--}}
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @include('navbar')
    <main>
        @yield('content')
    </main>
    @include('footer')
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle dropdown visibility
        function toggleDropdown(event) {
            event.stopPropagation(); // Prevent the click from closing the menu immediately
            const dropdownMenu = this.nextElementSibling;

            dropdownMenu.toggle('hidden');

        }

        // Toggle mobile menu visibility
        document.getElementById('hamburgerButton').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });

        // Close mobile menu
        document.getElementById('closeMobileMenu').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.add('hidden');
        });

        // Handle mobile dropdowns
        document.querySelectorAll('.dropdown-toggle').forEach(button => {
            button.addEventListener('click', function(event) {
                event.stopPropagation(); // Prevent the click from closing the menu immediately
                const dropdownMenu = this.nextElementSibling;
                if (dropdownMenu) {
                    dropdownMenu.classList.toggle('hidden');
                }
            });
        });

        // Close all dropdowns and mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                if (!menu.previousElementSibling.contains(event.target) && !menu.contains(event.target)) {
                    menu.classList.add('hidden');
                }
            });
            // Close mobile menu if clicking outside of it
            if (!document.getElementById('hamburgerButton').contains(event.target) &&
                !document.getElementById('mobileMenu').contains(event.target)) {
                document.getElementById('mobileMenu').classList.add('hidden');
            }
        });
    });
</script>

</html>


