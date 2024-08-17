<nav class="bg-white border-gray-200 dark:bg-white dark:border-gray-200 fixed top-0 z-50 w-full">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{asset('images/biodiversity_logo.png')}}" class="h-8 border-none" alt="NBRCC Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-black dark:text-black">NBRCC</span>
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-200 dark:focus:ring-gray-300" aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-white md:dark:bg-white dark:border-gray-200">
                <li>
                    <a href="#" class="block py-2 px-3 text-black bg-gray-200 rounded md:bg-transparent md:text-black md:p-0 md:dark:text-black hover:text-green-700 dark:bg-gray-200 md:dark:bg-transparent dark:hover:text-green-500" aria-current="page">Home</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 md:w-auto dark:text-black md:dark:hover:text-green-500 dark:focus:text-black dark:border-gray-200 dark:hover:bg-gray-200 md:dark:hover:bg-transparent">
                        About Us
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-white dark:divide-gray-200">
                        <ul class="py-2 text-sm text-black dark:text-black" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-200 hover:text-green-700 dark:hover:text-green-500">Advisors</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-200 hover:text-green-700 dark:hover:text-green-500">Team</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-gray-200 hover:text-green-700 dark:text-black dark:hover:text-green-500">Sign out</a>
                        </div>
                    </div>
                </li>
                <li>
                    <button id="projectDropdownNavbarLink" data-dropdown-toggle="projectDropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 md:w-auto dark:text-black md:dark:hover:text-green-500 dark:focus:text-black dark:border-gray-200 dark:hover:bg-gray-200 md:dark:hover:bg-transparent">
                        Projects
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="projectDropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-white dark:divide-gray-200">
                        <ul class="py-2 text-sm text-black dark:text-black" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-200 hover:text-green-700 dark:hover:text-green-500">Conservation</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-200 hover:text-green-700 dark:hover:text-green-500">Research</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 dark:text-black md:dark:hover:text-green-500 dark:hover:bg-gray-200 dark:hover:text-green-500 md:dark:hover:bg-transparent">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
