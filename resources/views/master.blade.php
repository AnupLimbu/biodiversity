<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body >
    @include('navbar')
    <main>
        @yield('content')
    </main>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Get all links with the data-scroll-to attribute
        document.querySelectorAll('[data-scroll-to]').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault(); // Prevent default link behavior

                // Get the target ID from the data-scroll-to attribute
                const targetId = link.getAttribute('data-scroll-to');
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth' // Scroll smoothly
                    });
                }
            });
        });
    });
</script>

</html>


