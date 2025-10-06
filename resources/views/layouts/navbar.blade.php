<div class="drawer sticky top-0 z-100 bg-merino-50 navbar-batik">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />

    <div class="drawer-content flex flex-col">
        {{-- Navbar --}}
        <div class="navbar shadow-sm justify-around w-full">
            <div class="flex-none lg:hidden">
                <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block h-6 w-6 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </label>
            </div>

            <div class="flex mx-auto lg:mx-0">
                <a href="{{ url('/') }}">
                    <div class="flex items-center gap-3">
                        <div class="h-16 w-auto hidden sm:flex fill-sunshade-400">
                            <?php include public_path('images/logo/cak_ning_full.svg'); ?>
                        </div>
                        <div class="h-18 w-auto flex sm:hidden fill-sunshade-400">
                            <?php include public_path('images/logo/cak_ning.svg'); ?>
                        </div>

                        {{-- <div
                            class="text-md font-normal text-justify flex flex-col tracking-wide cakning-accent text-nowrap">
                            <span>PAGUYUBAN</span>
                            <span class="text-xl font-semibold">Cak & Ning</span>
                            <span>SURABAYA</span>
                        </div> --}}
                    </div>
                </a>
            </div>

            <div class="hidden flex-none lg:block">
                <ul class="menu menu-horizontal px-1">
                    <li>
                        <a href="{{ url('/about') }}"
                            class="text-lg font-bold @if (Request::is('about')) text-pumpkin-500 @else text-stone-800 @endif">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/event') }}"
                            class="text-lg font-bold @if (Request::is('event')) text-pumpkin-500 @else text-stone-800 @endif">
                            Event
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/blog') }}"
                            class="text-lg font-bold @if (Request::is('blog')) text-pumpkin-500 @else text-stone-800 @endif">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/gallery') }}"
                            class="text-lg font-bold @if (Request::is('gallery')) text-pumpkin-500 @else text-stone-800 @endif">
                            Galeri
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}"
                            class="text-lg font-bold @if (Request::is('contact')) text-pumpkin-500 @else text-stone-800 @endif">
                            Kontak
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="drawer-side">
        <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-base-200 min-h-full w-80 p-4">
            {{-- Sidebar content here --}}
            <li><a>Sidebar Item 1</a></li>
            <li><a>Sidebar Item 2</a></li>
        </ul>
    </div>
</div>
