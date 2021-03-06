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
                    <h1 class="text-3xl font-semibold" data-aos="fade">My School Site</h1>
                    <p data-aos="fade" class="text-xl py-4 ">P.P.S.V.M.Inter College Nanakmatta U.S.Nagar, Uttarakhand
                        [Pin
                        Code
                        : 262405]
                    </p>
                    <a href="#" x-data={show:false} class="flex flex-col w-6/12 mx-auto justify-items-center">
                        <button id="socialbtn" data-aos="fade" data-aos-delay="200" @click="show = !show"
                            :aria-expanded="show ? 'true' : 'false'" :class="{ 'active': show }"
                            class="  text-white  shadow-lg  pr-3  focus:outline-none  rounded p-1.5 ">
                            <i class="fas fa-external-link-alt pl-1 pr-1" aria-hidden="true"></i> View Live
                            Site</button>
                        <p x-show="show" class="flex  text-sm mt-2 mx-auto">
                            <img class="w-5 h-5 mr-2" src="storage/images/sad.png">
                            Not Available
                        </p>
                    </a>
                    <div>
                        <a href="https://github.com/manojbhatt101010/ppsvmic.git">
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
                    <p class="text-lg text-left pl-0 p-2">

                        <ul class="list-disc mx-auto pl-3 w-11/12 text-gray-700" data-aos="fade-right"
                            data-aos-delay="800">
                            <li>Pictures and galleries, to make your website colourful and full of life.</li>
                            <li class="mt-2">School curriculum.</li>
                            <li class="mt-2">Meritorious students details.</li>
                            <li class="mt-2">Location and map, for easily finding your school.</li>
                            <li class="mt-2">Admission information for new students, so that it is easy to become a new
                                student.</li>
                            <li class="mt-2">About us, to inform about the school's portfolios, vision and mission.</li>
                            <li class="mt-2">Contact details.</li>
                            <li class="mt-2">Staff directory with contact and subjects.</li>
                            <li class="mt-2">Simple navigation and easy-to-find answers.</li>
                            <li class="mt-2">Accessibility with mobile devices, since most visitors nowadays use a
                                mobile
                                device to visit your school website.</li>
                        </ul>
                    </p>
                </div>
                <div class="flex justify-center m-5 ml-0 mr-0" data-aos="zoom-in">
                    <img src="storage/images/PPSVMIC.png" class=" w-full h-full" alt="School">

                </div>

                <div class="mt-7 p-3 mb-7">
                    <h1 class="text-2xl font-medium text-gray-800" data-aos="fade">Technologies Used</h1>
                    <div class="grid grid-cols-4 md:grid-cols-7  md:gap-16 gap-8 px-4 mt-5 ">
                        <img class="w-12" title="Bootstrap4" src="storage/images/Bootstrap.svg" alt="Bootstrap"
                            data-aos="fade" data-aos-delay="200">
                        <img class="py-3 w-12" title="PHP" src="storage/images/PHP.svg" alt="PHP" data-aos="fade"
                            data-aos-delay="400">
                        <img class="w-12" title="Javascript" src="storage/images/JS.svg" alt="Javascript"
                            data-aos="fade" data-aos-delay="600">
                        <img class="w-12" title="HTML5" src="storage/images/HTML.svg" alt="HTML5" data-aos="fade"
                            data-aos-delay="800">
                        <img class="w-12" title="CSS3" src="storage/images/CSS.svg" alt="CSS3" data-aos="fade"
                            data-aos-delay="1000">
                        <img class="w-12" title="MySQL" src="storage/images/MySQL.svg" alt="MySQL" data-aos="fade"
                            data-aos-delay="1200">
                        <img class="py-3 w-12" title="Apache Web Server" src="storage/images/Apache.svg"
                            alt="Apache Web Server" data-aos="fade" data-aos-delay="1400">
                    </div>
                </div>
            </div>

            <div class="hidden lg:block">
                <div class="py-24 pb-10" style="background-color: #121212;">
                    <div class="flex justify-between w-10/12 pl-2 mx-auto ">
                        <div>
                            <h1 class="text-3xl text-white font-semibold" data-aos="fade">My School Site</h1>
                            <p class="text-xl py-4 text-white" data-aos="fade">P.P.S.V.M.Inter College Nanakmatta
                                U.S.Nagar,
                                Uttarakhand [Pin Code : 262405]
                            </p>
                            <a href="https://github.com/manojbhatt101010/ppsvmic.git">
                                <button id="socialbtn"
                                    class="text-white  shadow-lg  pr-3  focus:outline-none  rounded p-1.5 "
                                    data-aos="fade">
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
                                <p x-show="show" class="flex text-sm text-white mt-4 pl-2">
                                    <img class="w-6 h-6 mr-2 -mt-0.5" src="storage/images/sad.png">
                                    Not Available</p>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="mt-9">
                    <h1 class="text-2xl font-medium ml-32 text-gray-800" data-aos="fade" data-aos-delay="200">
                        Key Features</h1>
                    <p class="text-lg text-left ml-32 pl-0 p-2">
                        <ul class="list-disc mx-auto pl-32 w-11/12 text-gray-700" data-aos-delay="400" data-aos="fade">
                            <li>Pictures and galleries, to make your website colourful and full of life.</li>
                            <li class="mt-2">School curriculum.</li>
                            <li class="mt-2">Meritorious students details.</li>
                            <li class="mt-2">Location and map, for easily finding your school.</li>
                            <li class="mt-2">Admission information for new students, so that it is easy to become a new
                                student.</li>
                            <li class="mt-2">About us, to inform about the school's portfolios, vision and mission.</li>
                            <li class="mt-2">Contact details.</li>
                            <li class="mt-2">Staff directory with contact and subjects.</li>
                            <li class="mt-2">Simple navigation and easy-to-find answers.</li>
                            <li class="mt-2">Accessibility with mobile devices, since most visitors nowadays use a
                                mobile
                                device to visit your school website.</li>
                        </ul>
                    </p>
                </div>
                <div class="flex justify-center  mt-11" data-aos="zoom-in" data-aos-delay="400">
                    <img src="storage/images/PPSVMIC.png" alt="School">
                </div>
                <div class="m-12 ml-0 mr-0">
                    <h1 class="text-2xl font-medium ml-32 text-gray-800" data-aos="fade">Technologies Used</h1>
                    <div class="grid mx-auto lg:grid-cols-5 w-9/12 mt-7">

                        <div class="flex">
                            <img class="w-12 mr-9" title="Bootstrap4" src="storage/images/Bootstrap.svg" alt="Bootstrap"
                                data-aos="fade" data-aos-delay="200">
                            <img class="w-16 py-2 mr-9" title="PHP" src="storage/images/PHP.svg" alt="PHP"
                                data-aos="fade" data-aos-delay="400">
                            <img class="w-12 mr-9" title="Javascript" src="storage/images/JS.svg" alt="Javascript"
                                data-aos="fade" data-aos-delay="600">
                            <img class="w-12 mr-9" title="HTML5" src="storage/images/HTML.svg" alt="HTML5"
                                data-aos="fade" data-aos-delay="800">
                            <img class="w-12 mr-9" title="CSS3" src="storage/images/CSS.svg" alt="CSS3" data-aos="fade"
                                data-aos-delay="1000">
                            <img class="w-12 mr-8" title="MySQL" src="storage/images/MySQL.svg" alt="MySQL"
                                data-aos="fade" data-aos-delay="1200">
                            <img class="w-32 py-2 mr-" title="Apache Web Server" src="storage/images/Apache.svg"
                                alt="Apache Web Server" data-aos="fade" data-aos-delay="1400">
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