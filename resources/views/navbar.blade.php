<nav class="p-1 fixed w-full backdrop-blur-2xl bg-transparent" style="z-index: 25!important;">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="text-gray-800 text-3xl font-semibold">BRCS</a>
        <button class="text-gray-800 md:hidden" id="hamburgerButton">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>


        <div class="hidden md:flex md:items-center">
            <a href="/" class="text-gray-800 px-4 py-2 navbar-link ">Home</a>
            <a href="/about-us" class="text-gray-800 px-4 py-2 navbar-link ">About Us</a>
            <div class="relative parent">
                <a href="/projects" class="navbar-link flex justify-between md:inline-flex p-4 items-center space-x-2">
                    <span>Projects</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current pt-1" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>
                </a>
                <ul class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b ">
                    <li>
                        <a href="/projects/ongoing" class="block px-4 py-2 text-gray-700 dropdown-link"><span class="p-1">Ongoing</span></a>

                    </li>
                    <li>
                        <a href="/projects/completed" class="block px-4 py-2 text-gray-700 dropdown-link "><span class="p-1">Completed</span></a>
                    </li>
                </ul>
            </div>
            <a href="/teams" class="text-gray-800 px-4 py-2 navbar-link ">Team Member</a>
            <a href="/news-and-events" class="text-gray-800 px-4 py-2 navbar-link ">News & Events</a>
            <a href="/contact-us" class="text-gray-800 px-4 py-2 navbar-link ">Contact Us</a>
            <a href="/support_us" class="text-gray-800 px-4 py-2 navbar-link" style="background-color: #3d90da">Support Us</a>
        </div>


        <div id="mobileMenu" class="fixed inset-0 bg-opacity-75 z-50 hidden md:hidden backdrop-blur-2xl">
            <div class="relative bg-white w-64 h-full p-4 h-screen"   style="background-color: #7cbbb0">

                <div class="flex flex-col">
                    <div class="flex justify-content-between">
                        <a href="#" class="text-gray-800 text-lg pt-2 navbar-link">Home</a>

                        <button class="absolute pt-2 top-4 right-4 text-gray-800" id="closeMobileMenu">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <a href="/about-us" class="text-gray-800 text-lg navbar-link">About Us</a>
                    <button class="text-gray-800 text-lg navbar-link dropdown-toggle text-left ">
                        Projects
                        <svg class="w-4 h-4 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul class="dropdown-menu hidden">
                        <li>
                            <a href="/projects/ongoing" class="block px-4 pt-1 text-sm text-gray-700 dropdown-link2"><span class="p-1">Ongoing</span></a>
                        </li>
                        <li>
                            <a href="/projects/completed" class="block px-4 pt-1 text-sm text-gray-700 dropdown-link2"><span class="p-1">Completed</span></a>
                        </li>
                    </ul>
                    <a href="/teams" class="text-gray-800 text-lg navbar-link">Team Member</a>
                    <a href="/news-and-events" class="text-gray-800 text-lg navbar-link">News & Events</a>
                    <a href="/contact-us" class="text-gray-800 text-lg navbar-link">Contact Us</a>
                    <a href="/support_us" class="text-gray-800 text-lg navbar-link " style="background-color: #3d90da">Support Us</a>

                </div>
        </div>
    </div>
</nav>
