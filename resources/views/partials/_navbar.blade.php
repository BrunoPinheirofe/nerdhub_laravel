<header class="bg-[#001A35] text-gray-200">
    <nav class="flex justify-between items-center w-[95%] m-auto">
        <div>
            <a href='/'><img class="w-16 p-1" src="{{ asset('assets/img/logos/logo.png') }}" alt="Logo"></a>
        </div>
        <div
            class="nav-links duration-500 z-10 md:static absolute bg-[#001A35] md:min-h-fit min-h-[20vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
            <ul class="flex md:flex-row flex-col md:items-center md:gap-[6vw] gap-6 text-gray-200 text-lg p-4">
                @foreach ($links as $key => $link)
                    <li>
                        <a class="hover:text-xl hover:underline duration-300"
                            href={{ $link }}>{{ $key }}</a>
                    </li>
                @endforeach



            </ul>
        </div>
        <div class="flex items-center gap-6">
            <div class="relative group">
                <button
                    class="text-lg text-gray-200 px-5 py-2 rounded-3xl duration-300 ease-out focus:outline-none flex items-center">
                    Olá

                    <svg class="ml-2 w-4 h-4 fill-current" viewbox="0 0 20 20">
                        <path d="M5.25 7.5L10 12.25L14.75 7.5H5.25Z" />
                    </svg>
                </button>
                <div
                    class="absolute right-0 mt-2 w-40 bg-[#001A35] rounded-md shadow-lg opacity-0 group-hover:opacity-100 group-focus-within:opacity-100 pointer-events-none group-hover:pointer-events-auto group-focus-within:pointer-events-auto transition-opacity z-20">

                    <a href="#" class="block px-4 py-2 hover:bg-neutral-600 text-gray-200">Ver Perfil</a>
                    <a href='#'class="block px-4 py-2 hover:bg-neutral-600 text-gray-200">Logout</a>
                </div>
            </div>
            <ion-icon onclick="onToggleMenu(this)" name="menu"
                class="text-3xl text-gray-200 cursor-pointer md:hidden"></ion-icon>
        </div>
    </nav>
</header>
