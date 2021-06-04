<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
</head>

<body id="scrollbar">
    <x-guest-layout>
        @livewire('header')
        <div>
            <div class="lg:hidden">
                <div class="py-14 text-white text-center p-2 pb-9 " style="background-color: #121212;">
                    <h1 class="text-3xl font-semibold" data-aos="fade">Social Media Site</h1>
                    <p class="text-xl py-4 " data-aos="fade">Photoshoto
                    </p>
                    <a href="#" x-data={show:false} class="flex flex-col w-6/12 mx-auto justify-items-center">
                        <button id="socialbtn" data-aos="fade" data-aos-delay="200" @click="show = !show"
                            :aria-expanded="show ? 'true' : 'false'" :class="{ 'active': show }"
                            class=" text-white  shadow-lg  pr-3  focus:outline-none  rounded p-1.5 ">
                            <i class="fas fa-external-link-alt pl-1 pr-1" aria-hidden="true"></i> View Live
                            Site</button>
                        <p x-show="show" class="flex  text-sm mt-2 mx-auto">
                            <img class="w-5 h-5 mr-2" src="storage/images/sad.png">
                            Not Available
                        </p>
                    </a>
                    <div>
                        <a href="#">
                            <button id="socialbtn" data-aos="fade" data-aos-delay="400"
                                class="text-white shadow-lg mt-2 pr-3 focus:outline-none  rounded p-1.5 ">
                                <i class="fab fa-github text-lg pl-1 pr-1" aria-hidden="true"></i> View source on github
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mt-7 p-3">

                    <h1 class="text-2xl font-medium text-gray-800 " data-aos="fade-right" data-aos-delay="600">
                        Key Features</h1>
                    <p class="text-lg text-left text-gray-700 pl-0 p-2" data-aos="fade-right" data-aos-delay="800">
                        Photoshoto is a social media site where you can upload photos and make a battle between them.
                        You
                        can battle with DP by making a post. Other users can like or comment on posts and create most
                        liked
                        photos from both of them.
                        <ul class="list-disc mx-auto pl-3 w-11/12 text-gray-700" data-aos="fade-right"
                            data-aos-delay="800">
                            <li>All important key function like :
                                <ul class="list-decimal mx-auto pl-3 w-11/12 text-gray-700">
                                    <li>Log in</li>
                                    <li>Create account</li>
                                    <li>Change profile picture</li>
                                    <li>Email verification</li>
                                    <li>Forgot password?</li>
                                    <li>Reset password</li>
                                    <li>Manage browsers sessions</li>
                                    <li>Delete account</li>

                                </ul>
                            </li>
                            <li class="mt-2">Photoshoto user can upload photos with captions.</li>
                            <li class="mt-2">Users can like and comment on posts.</li>
                            <li class="mt-2">Users can find each one by searching feature</li>
                            <li class="mt-2">Account user can also edit or delete posts.
                            </li>
                        </ul>
                    </p>
                </div>
                <div class="flex justify-center m-5 ml-0 mr-0" data-aos="zoom-in">
                    <img src="storage/images/Photoshoto.png" class=" w-full h-full" alt="Photoshoto">

                </div>

                <div class="mt-7 p-3 mb-7">
                    <h1 class="text-2xl font-medium text-gray-800" data-aos="fade">Technologies Used</h1>
                    <div class="grid grid-cols-4 md:grid-cols-7  md:gap-16 gap-8 px-4 mt-5 ">
                        <img class="py-3 w-12" title="Tailwindcss" src="storage/images/Tailwindcss.svg"
                            alt="Tailwindcss" data-aos="fade" data-aos-delay="200">
                        <img class="w-12" title="Laravel Livewire" src="storage/images/LaravelLivewire.png"
                            alt="Laravel Livewire" data-aos="fade" data-aos-delay="400">
                        <img class="w-12" title="Alpinejs" src="storage/images/Alpinejs.png" alt="Alpinejs"
                            data-aos="fade" data-aos-delay="600">
                        <img class="w-12" title="Laravel" src="storage/images/Laravel.svg" alt="Laravel" data-aos="fade"
                            data-aos-delay="800">
                        <img class="w-12" title="Javascript" src="storage/images/JS.svg" alt="Javascript"
                            data-aos="fade" data-aos-delay="1000">
                        <img class="w-12" title="HTML5" src="storage/images/HTML.svg" alt="HTML5" data-aos="fade"
                            data-aos-delay="1200">
                        <img class="w-12" title="CSS3" src="storage/images/CSS.svg" alt="CSS3" data-aos="fade"
                            data-aos-delay="1400">
                        <img class="w-12" title="MySQL" src="storage/images/MySQL.svg" alt="MySQL" data-aos="fade"
                            data-aos-delay="1600">
                        <img class="py-3 w-16" title="Apache Web Server" src="storage/images/Apache.svg"
                            alt="Apache Web Server" data-aos="fade" data-aos-delay="1800">
                    </div>
                </div>

            </div>

            <div class="hidden lg:block">
                <div class="py-24 pb-10" style="background-color: #121212;">
                    <div class="flex justify-between w-10/12 pl-2 mx-auto ">
                        <div>
                            <h1 class="text-3xl text-white font-semibold" data-aos="fade">Social Media Site</h1>
                            <p class="text-xl py-4 text-white" data-aos="fade">Photoshoto
                            </p>
                            <a href="#">
                                <button id="socialbtn" data-aos="fade"
                                    class="text-white  shadow-lg  pr-3  focus:outline-none  rounded p-1.5 ">
                                    <i class="fab fa-github text-lg pl-1 pr-1" aria-hidden="true"></i> View source on
                                    github</button>
                            </a>
                        </div>

                        <div>
                            <a href="#" x-data={show:false}>
                                <button id="socialbtn" data-aos="fade" @click="show = !show"
                                    :aria-expanded="show ? 'true' : 'false'" :class="{ 'active': show }"
                                    class="text-white bg-green-600 shadow-lg mt-5 pr-3 focus:outline-none rounded p-1.5 ">
                                    <i class="fas fa-external-link-alt pl-1 pr-1" aria-hidden="true"></i> View Live
                                    Site</button>
                                <p x-show="show" class="flex text-sm mt-4 pl-2 text-white">
                                    <img class="w-6 h-6 mr-2 -mt-0.5" src="storage/images/sad.png">
                                    Not Available</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-9">
                    <h1 class="text-2xl font-medium ml-32 text-gray-800" data-aos="fade" data-aos-delay="200">
                        Key Features</h1>
                    <p class="w-10/12text-lg text-left ml-32 mt-3  pl-0 p-2 text-gray-700" data-aos="fade"
                        data-aos-delay="400">
                        Photoshoto is a social media site where you can upload photos and make a battle between them.
                        You
                        can battle with DP by making a post. Other users can like or comment on posts and create most
                        liked
                        photos from both of them.
                        <ul class="list-disc mx-auto pl-32 w-11/12 text-gray-700" data-aos="fade" data-aos-delay="600">
                            <li>All important key function like :
                                <ul class="list-decimal mx-auto pl-3 w-11/12 text-gray-700">
                                    <li>Log in</li>
                                    <li>Create account</li>
                                    <li>Change profile picture</li>
                                    <li>Email verification</li>
                                    <li>Forgot password?</li>
                                    <li>Reset password</li>
                                    <li>Manage browsers sessions</li>
                                    <li>Delete account</li>
                                </ul>
                            </li>
                            <li class="mt-2">Photoshoto user can upload photos with captions.</li>
                            <li class="mt-2">Users can like and comment on posts.</li>
                            <li class="mt-2">Users can find each one by searching feature</li>
                            <li class="mt-2">Account user can also edit or delete posts.
                            </li>
                        </ul>
                </div>
                <div class="flex justify-center  mt-11" data-aos="zoom-in" data-aos-delay="400">
                    <img src="storage/images/Photoshoto.png" alt="Photoshoto">
                </div>
                <div class="m-12 ml-0 mr-0">
                    <h1 class="text-2xl font-medium ml-32 text-gray-800" data-aos="fade">Technologies Used</h1>
                    <div class="grid mx-auto lg:grid-cols-5 w-9/12 mt-7">

                        <div class="flex">
                            <img class="w-12 mr-9" title="Tailwindcss" src="storage/images/Tailwindcss.svg"
                                alt="Tailwindcss" data-aos="fade" data-aos-delay="200">
                            <img class="w-12  mr-9" title="Laravel Livewire" src="storage/images/LaravelLivewire.png"
                                alt="Laravel Livewire" data-aos="fade" data-aos-delay="400">
                            <img class="w-12  mr-9" title="Alpinejs" src="storage/images/Alpinejs.png" alt="Alpinejs"
                                data-aos="fade" data-aos-delay="600">
                            <img class="w-12  mr-9" title="Laravel" src="storage/images/Laravel.svg" alt="Laravel"
                                data-aos="fade" data-aos-delay="800">
                            <img class="w-12 mr-9" title="Javascript" src="storage/images/JS.svg" alt="Javascript"
                                data-aos="fade" data-aos-delay="1000">
                            <img class="w-12 mr-9" title="HTML5" src="storage/images/HTML.svg" alt="HTML5"
                                data-aos="fade" data-aos-delay="1200">
                            <img class="w-12 mr-9" title="CSS3" src="storage/images/CSS.svg" alt="CSS3" data-aos="fade"
                                data-aos-delay="1400">
                            <img class="w-12 mr-8" title="MySQL" src="storage/images/MySQL.svg" alt="MySQL"
                                data-aos="fade" data-aos-delay="1600">
                            <img class="w-32 py-2 mr-" title="Apache Web Server" src="storage/images/Apache.svg"
                                alt="Apache Web Server" data-aos="fade" data-aos-delay="1800">
                        </div>


                    </div>
                </div>
            </div>
        </div>

        @livewire('footer')
        @livewireScripts
    </x-guest-layout>

</body>

</html>