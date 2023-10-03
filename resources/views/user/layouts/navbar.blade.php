<div class="bg-[#E1ECF0]">
    <div class="w-full mx-auto lg:max-w-7xl">
        <div x-data="{ open: false }"
            class="relative flex flex-col w-full p-4 md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            {{-- Hamburger --}}
            <div class="flex flex-row items-center justify-between lg:justify-start">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-black focus:outline-none focus:text-black md:hidden">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                        </path>
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <nav :class="{ 'flex': open, 'hidden': !open }" class="items-center flex-grow hidden md:pb-0 md:block md:justify-between">
                <div class="flex-col items-center flex-grow hidden md:pb-0 md:flex md:justify-between md:flex-row">
                    <div class="hidden md:flex">
                        <a class="py-2 text-sm md:mr-4 text-[#435660] hover:text-[#67BD65]" href="#">
                            OFFICES
                        </a>
                        <a class="py-2 text-sm text-[#435660] hover:text-[#67BD65]" href="#">
                            CAREERS
                        </a>
                    </div>

                    <div class="hidden md:inline-flex items-center gap-2 list-none lg:ml-auto">
                        <a class="flex items-center px-2 py-2 text-sm text-[#435660] lg:px-6 md:px-3 hover:text-[#67BD65]"
                            href="#">
                            <span class="mdi mdi-phone-settings mr-2"></span> 081392113276
                        </a>

                        <a class="flex items-center px-2 py-2 text-sm text-[#435660] lg:px-6 md:px-3 hover:text-[#67BD65]"
                            href="#">
                            <span class="mdi mdi-email mr-2"></span> Email Me
                        </a>
                    </div>

                    <div class="items-center gap-2 lg:ml-auto hidden md:inline-flex">
                        <a class="flex items-center text-[#435660] hover:text-[#67BD65]" href="#">
                            <span class="mdi mdi-facebook text-lg"></span>
                        </a>

                        <a class="flex items-center text-[#435660] hover:text-[#67BD65]" href="#">
                            <span class="mdi mdi-youtube text-lg"></span>
                        </a>

                        <a class="flex items-center text-[#435660] hover:text-[#67BD65]" href="#">
                            <span class="mdi mdi-instagram text-lg"></span>
                        </a>

                        <a class="flex items-center text-[#435660] hover:text-[#67BD65]" href="#">
                            <span class="mdi mdi-linkedin text-lg"></span>
                        </a>
                    </div>
                </div>

                <hr class="h-px bg-[#DAE6EB] border-0 my-3 hidden md:block">

                <div class="flex flex-col py-5 px-2 md:px-2 md:py-0 md:justify-between md:flex-row">
                    <a class="py-4 px-2 text-sm text-[#435660] transition ease-in-out transform border-b-2 border-t-2 border-transparent duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-[#67BD65] hover:text-[#67BD65]"
                        href="#">
                        Home
                    </a>
                    <a class="py-4 px-2 text-sm text-[#435660] transition ease-in-out transform border-b-2 border-t-2 border-transparent duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-[#67BD65] hover:text-[#67BD65]"
                        href="#">
                        Portfolio
                    </a>
                    <a class="py-4 px-2 text-sm text-[#435660] transition ease-in-out transform border-b-2 border-t-2 border-transparent duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-[#67BD65] hover:text-[#67BD65]"
                        href="#">
                        Events
                    </a>
                    <a class="py-4 px-2 text-sm text-[#435660] transition ease-in-out transform border-b-2 border-t-2 border-transparent duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-[#67BD65] hover:text-[#67BD65]"
                        href="#">
                        Material
                    </a>
                    <a class="py-4 px-2 text-sm text-[#435660] transition ease-in-out transform border-b-2 border-t-2 border-transparent duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-[#67BD65] hover:text-[#67BD65]"
                        href="#">
                        Blog
                    </a>
                    <a class="py-4 px-2 text-sm text-[#435660] transition ease-in-out transform border-b-2 border-t-2 border-transparent duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-[#67BD65] hover:text-[#67BD65]"
                        href="#">
                        Contact Me
                    </a>
                    <button
                        class="inline-flex items-center justify-center text-sm px-8 py-3 h-10 mt-4 md:mt-0 rounded-full text-white bg-[#67BD65] hover:bg-[#435660] focus:outline-none focus:text-black">
                        Free Consultation
                    </button>
                </div>
            </nav>

        </div>
    </div>
</div>
