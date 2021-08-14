<div>
    <!-- For Mobile-->
    <div class="antialiased  lg:hidden w-full " x-cloak x-data="{open: false}">
        <nav class="absolute inset-0 transform lg:transform-none lg:opacity-100 duration-200 lg:relative z-10 w-80 text-white h-screen p-3"
            style="background-color: #121212;"
            :class="{'translate-x-0 ease-in opacity-100':open === true, '-translate-x-full ease-out opacity-0': open === false}">
            <div class="flex justify-between">
                <span class="font-bold text-2xl sm:text-3xl p-2">Menu</span>
                <button class="p-2 focus:outline-none rounded-md lg:hidden" @click="open = false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
            </div>
            <ul class="mt-8">
                <li>
                    @if (Route::has('login'))
                    @auth
                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="flex items-center px-4">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <a class="flex-shrink-0 mr-3" href="{{ route('profile.show') }}">
                                <img class="h-10 w-10 rounded-full object-cover"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </a>
                            @endif

                            <div>
                                <div class="font-medium text-base">{{ Auth::user()->name }}</div>
                                <div class="font-medium text-sm">{{ Auth::user()->email }}</div>
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <!-- Account Management -->

                            <a href="{{ route('profile.show') }}" id="item"
                                class="block px-4 py-2  rounded-md">Profile</a>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}"
                                :active="request()->routeIs('api-tokens.index')">
                                {{ __('API Tokens') }}
                            </x-jet-responsive-nav-link>
                            @endif

                            <a href="{{ ('/') }}" id="item" class="block px-4 py-2  rounded-md">Home</a>
                            <a href="{{ ('/Projects') }}" id="item" class="block px-4 py-2  rounded-md">Projects</a>
                            <a href="{{ ('/Resume') }}" id="item" class="block px-4 py-2  rounded-md">Resume</a>
                            <a href="{{ ('/Blog') }}" id="item" class="block px-4 py-2  rounded-md">Blog</a>

                            @if( Auth::user() && Auth::user()->email=='anmolsonkar742@gmail.com')
                            <a href="{{ ('/Create') }}" id="item" class="block px-4 py-2  rounded-md">Create</a>
                            @endif


                            <a href="{{ ('/Contact') }}" id="item" class="block px-4 py-2  rounded-md">Contact</a>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                this.closest('form').submit();" id="item" class="block px-4 py-2  rounded-md">Log
                                    Out</a>
                            </form>
                        </div>
                    </div>
                    @else
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <a href="{{ ('/') }}" id="item" class="block px-4 py-2  rounded-md">Home</a>
                        <a href="{{ ('/Projects') }}" id="item" class="block px-4 py-2  rounded-md">Projects</a>
                        <a href="{{ ('/Resume') }}" id="item" class="block px-4 py-2  rounded-md">Resume</a>
                        <a href="{{ ('/Blog') }}" id="item" class="block px-4 py-2  rounded-md">Blog</a>
                        <a href="{{ ('/Contact') }}" id="item" class="block px-4 py-2  rounded-md">Contact</a>
                        <a href="{{ route('login') }}" id="item" class="block px-4 py-2  rounded-md">Log in</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" id="item" class="block px-4 py-2  rounded-md">Create
                            account</a>
                    </div>
                    @endif
                    @endauth
                    @endif


                </li>
            </ul>
        </nav>
        <div class="relative z-0">

            <div class="w-full" style="background-color: #1F1F1F;">
                <ul class=" p-3 py-4  pb-9 pl-10 text-gray-200" data-aos="fade">

                    <button class="float-left -ml-6 focus:outline-none focus:none" @click="open = true">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <div class="pb-2 float-right">
                        <a href="https://www.linkedin.com/in/anmol-sonkar" title="Linkedin" target="_blank">
                            <span><i class="fab fa-linkedin-in hover:text-white"></i></span>
                        </a>
                        <a href="https://github.com/AnmolSonkar" title="Github" target="_blank">
                            <span><i class="fab fa-github pl-7 hover:text-white"></i></span>
                        </a>
                        <a href="https://codepen.io/Anmolsonkar" title="Codepen" target="_blank">
                            <span><i class="fab fa-codepen pl-7 hover:text-white"></i></span>
                        </a>

                        <a href="https://stackoverflow.com/users/14175452/anmol-sonkar" title="Stack-overflow"
                            target="_blank">
                            <span><i class="fab fa-stack-overflow pl-7 hover:text-white"></i></span>
                        </a>
                        <a href="#" class="pr-2" title="Twitter" target="_blank">
                            <span><i class="fab fa-twitter pl-7 hover:text-white"></i></span>
                        </a>
                    </div>
                </ul>
            </div>
        </div>


    </div>
    <!-- For Desktop-->
    <div class="hidden lg:block">
        <div class="flex flex-col">
            <!-- Header -->
            <div class="fixed z-10 w-full " style="background-color: #1F1F1F;">

                <ul class="float-left p-2 mt-3  pl-10 text-gray-200" data-aos="fade">
                    <a href="https://www.linkedin.com/in/anmol-sonkar" title="Linkedin" target="_blank">
                        <span><i class="fab fa-linkedin-in hover:text-white"></i></span>
                    </a>
                    <a href="https://github.com/AnmolSonkar" title="Github" target="_blank">
                        <span><i class="fab fa-github pl-7 hover:text-white"></i></span>
                    </a>
                    <a href="https://codepen.io/Anmolsonkar" title="Codepen" target="_blank">
                        <span><i class="fab fa-codepen pl-7 hover:text-white"></i></span>
                    </a>

                    <a href="https://stackoverflow.com/users/14175452/anmol-sonkar" title="Stack-overflow"
                        target="_blank">
                        <span><i class="fab fa-stack-overflow pl-7 hover:text-white"></i></span>
                    </a>
                    <a href="#" title="Twitter" target="_blank">
                        <span><i class="fab fa-twitter pl-7 hover:text-white"></i></span>
                    </a>
                </ul>

                <ul class="flex justify-end p-2 mt-3  pr-10 text-gray-200 text-sm" data-aos="fade">
                    <a href="{{ ('/') }}" class="pr-7 hover:text-white">Home</a>
                    <a href="{{ ('/Projects') }}" class="pr-7 hover:text-white">Projects</a>
                    <a href="{{ ('/Resume') }}" class="pr-7 hover:text-white">Resume</a>
                    <a href="{{ ('/Blog') }}" class="pr-7 hover:text-white">Blog</a>
                    <a href="{{ ('/Contact') }}" class="pr-7 hover:text-white">Contact</a>
                    @if(Auth::user() && Auth::user()->email=='anmolsonkar742@gmail.com')
                    <a href="{{ ('/Create') }}" class="pr-7 hover:text-white">Create</a>
                    @endif

                    @if (Route::has('login'))
                    @auth

                    <!-- Settings Dropdown -->
                    <div class="relative">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="-mt-2 flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                                @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                                @endif
                            </x-slot>
                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>

                    @else
                    <a href="{{ route('login') }}" class="pr-7 hover:text-white">Log in</a>
                    @if (Route::has('register'))
                    <a href="{{ ('register') }}">
                        <button id="click"
                            class="bg-green-600 shadow-lg focus:outline-none  rounded p-1.5 -mt-2  pl-3 pr-3">
                            Create account</button>
                    </a>
                    @endif
                    @endauth
                    @endif

                </ul>
            </div>


        </div>
    </div>

</div>