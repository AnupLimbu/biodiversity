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
{{--    SEO DATA--}}
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body >
    @include('navbar')
    <main>
        @yield('content')
    </main>
    @include('footer')
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
                        behavior: 'smooth', // Scroll smoothly
                        block: 'start'
                    });
                    //fixing offset error due to navbar
                    setTimeout(() => {
                        window.scrollBy(0, 6);
                    }, 500);
                }
            });
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const fadeInLeftElements = document.querySelectorAll('.fade-in-left');
        const fadeInRightElements = document.querySelectorAll('.fade-in-right');

        const options = {
            root: null, // Use the viewport as the root
            rootMargin: '0px',
            threshold: 0.7 // Trigger when 70% of the element is visible
        };

        const handleIntersect = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target); // Stop observing once visible
                }
            });
        };

        const observer = new IntersectionObserver(handleIntersect, options);

        fadeInLeftElements.forEach(element => {
            observer.observe(element);
        });

        fadeInRightElements.forEach(element => {
            observer.observe(element);
        });
    });

    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function checkVisibility() {
        const parent = document.querySelector('#banner');
        const child = document.querySelector('.arrow');

        if (parent && child) {
            if (isElementInViewport(parent)) {
                child.style.display = 'block';
            } else {
                child.style.display = 'none';
            }
        }
    }

    // Check visibility on load and resize
    window.addEventListener('load', checkVisibility);
    window.addEventListener('resize', checkVisibility);
    window.addEventListener('scroll', checkVisibility);
</script>

</html>


