<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button"
    class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-4 py-8 overflow-y-auto bg-[#0E3A51]">
        <ul class="space-y-2">

            <p class="px-3 py-3 text-xs font-semibold text-white uppercase">Umum</p>
            <x-sidebar-menu name="Dashboard" icon="fas fa-home" route="{{ route('admin.dashboard') }}"
            active="{{ request()->routeIs('admin.dashboard') }}" />
            <x-sidebar-menu name="Message" icon="fas fa-envelope" route="{{ route('admin.message') }}"
                active="{{ request()->routeIs('admin.message') }}" />
            <x-sidebar-menu name="Partner" icon="fas fa-handshake" route="{{ route('admin.partner') }}"
                active="{{ request()->routeIs('admin.partner') }}" />
            <x-sidebar-menu name="Social Media" icon="fas fa-share-alt" route="{{ route('admin.social-media') }}"
                active="{{ request()->routeIs('admin.social-media') }}" />
            <x-sidebar-menu name="Testimonial" icon="fas fa-quote-right" route="{{ route('admin.testimonial') }}"
                active="{{ request()->routeIs('admin.testimonial') }}" />

                <p class="px-3 py-3 text-xs font-semibold text-white uppercase">Pengaturan Portofolio</p>
            <x-sidebar-menu name="Experience" icon="fas fa-briefcase" route="{{ route('admin.experience') }}"
                active="{{ request()->routeIs('admin.experience') }}" />
            <x-sidebar-menu name="Work" icon="fas fa-briefcase" route="{{ route('admin.work') }}"
                active="{{ request()->routeIs('admin.work') }}" />
            <x-sidebar-menu name="Work Category" icon="fas fa-sort" route="{{ route('admin.work-category') }}"
                active="{{ request()->routeIs('admin.work-category') }}" />

            <p class="px-3 py-3 text-xs font-semibold text-white uppercase">Blog</p>
            <x-sidebar-menu name="Blog" icon="fas fa-blog" route="{{ route('admin.blog') }}"
                active="{{ request()->routeIs('admin.blog') }}" />
            <x-sidebar-menu name="Blog Category" icon="fas fa-sort" route="{{ route('admin.blog-category') }}"
                active="{{ request()->routeIs('admin.blog-category') }}" />

            <x-sidebar-menu name="Consultation Request" icon="fas fa-comments"
                route="{{ route('admin.consultation-request') }}"
                active="{{ request()->routeIs('admin.consultation') }}" />
            <x-sidebar-menu name="Consultation Category" icon="fas fa-sort"
                route="{{ route('admin.consultation-request-category') }}"
                active="{{ request()->routeIs('admin.consultation-category') }}" />

            <p class="px-3 py-3 text-xs font-semibold text-white uppercase">Contact</p>

            <x-sidebar-menu name="Contact Page Setting" icon="fas fa-phone"
                route="{{ route('admin.contact-page-setting') }}"
                active="{{ request()->routeIs('admin.contact') }}" />

            <p class="px-3 py-3 text-xs font-semibold text-white uppercase">Event</p>
            <x-sidebar-menu name="Event" icon="fas fa-calendar" route="{{ route('admin.event') }}"
                active="{{ request()->routeIs('admin.event') }}" />
            <x-sidebar-menu name="Event Category" icon="fas fa-sort" route="{{ route('admin.event-category') }}"
                active="{{ request()->routeIs('admin.event-category') }}" />


            <p class="px-3 py-3 text-xs font-semibold text-white uppercase">Material</p>
            <x-sidebar-menu name="Material" icon="fas fa-book" route="{{ route('admin.material') }}"
                active="{{ request()->routeIs('admin.material') }}" />
            <x-sidebar-menu name="Material Category" icon="fas fa-sort" route="{{ route('admin.material-category') }}"
                active="{{ request()->routeIs('admin.material-category') }}" />

            


            <!-- Logout -->
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a class="flex items-center py-3 pl-6 nav-item hover:text-orange-400 rounded-md"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        <i
                            class="fas fa-sign-out-alt text-white w-4 h-4 transition duration-75  group-hover:text-orange-400 "></i>
                        <span class="ml-3 text-white">
                            Keluar
                        </span>
                    </a>
                </form>
            </li>
        </ul>
    </div>
</aside>
