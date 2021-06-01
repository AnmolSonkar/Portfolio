<div class="hidden lg:block">
    <!-- Main Content -->

    <div class=" py-24  pb-10" style="background-color: #121212;">

        <h1 class=" text-3xl text-white  pl-28 font-semibold" data-aos="fade">Projects</h1>
        <p class="text-xl py-4 text-white  pl-28 " data-aos="fade">In-depth Case Studies to show you what I can offer
            and how I work
        </p>

    </div>

    <section class="gallery p-1 w-10/12 py-5 mx-auto" x-data="{ tab: 'all' }">
        <div class="sort" data-aos="fade">
            <ul class="sort-links">
                <li class="link-item">
                    <a class="focus:outline-none font-medium rounded p-1.5 mt-3 pl-3 pr-3" href="#"
                        @click.prevent="tab = 'all'" :class="{ 'active' : tab === 'all' }">All</a>
                </li>
                <li class="link-item">
                    <a class="focus:outline-none font-medium rounded p-1.5 mt-3 pl-3 pr-3" href="#"
                        @click.prevent="tab = 'PHP'" :class="{ 'active' : tab === 'PHP' }">PHP</a>
                </li>
                <li class="link-item">
                    <a class="focus:outline-none font-medium rounded p-1.5 mt-3 pl-3 pr-3" href="#"
                        @click.prevent="tab = 'Laravel'" :class="{ 'active' : tab === 'Laravel' }">Laravel</a>
                </li>

                <li class="link-item">
                    <a class="focus:outline-none font-medium rounded p-1.5 mt-3 pl-3 pr-3" href="#"
                        @click.prevent="tab = 'Javascript'" :class="{ 'active' : tab === 'Javascript' }">Javascript</a>
                </li>
            </ul>
        </div>

        <div class="grid lg:grid-cols-3 gap-9 mt-10 mb-5">

            <div x-show="tab === 'all' || tab === 'PHP' || tab=='Javascript'" data-aos="zoom-in" data-aos-delay="200">

                <div class="zoom rounded text-gray-200 hover:text-white  shadow-lg flex flex-col mx-auto"
                    style="background-color:#121212">
                    <video id="inlineVideo" class="rounded" width="100%" controls="controls"
                        poster="storage/images/PPSVMIC.png">
                        <source src="storage/videos/PPSVMIC.mp4" type="video/mp4">
                    </video>
                    <div class="mx-auto m-2">
                        <div class="flex  flex-col text-center ">
                            <a href="{{ '/PPSVMIC' }}" class="hover:underline text-lg font-medium">My School Site</a>
                            <a href="{{ '/PPSVMIC' }}" class="hover:underline text-sm ">P.P.S.V.M.Inter
                                College Nanakmatta</a>
                        </div>
                    </div>
                    <div class="py-1.5  mx-auto pb-5 text-sm">
                        <span style="background-color: #1E1E1E;"
                            class="shadow-lg focus:outline-none text-white  rounded-2xl p-3  py-1.5 pb-1.5">
                            Bootstrap</span>
                        <span style="background-color: #1E1E1E;"
                            class="shadow-lg focus:outline-none text-white  rounded-2xl p-3 ml-1 py-1.5 pb-1.5">
                            PHP</span>
                        <span style="background-color: #1E1E1E;"
                            class="shadow-lg focus:outline-none text-white  rounded-2xl p-3 ml-1 py-1.5 pb-1.5">
                            javascript</span>
                    </div>
                </div>
            </div>
            <div x-show="tab === 'all' || tab === 'PHP' || tab=== 'Javascript'" data-aos="zoom-in" data-aos-delay="400">

                <div class="zoom rounded text-gray-200 hover:text-white  shadow-lg flex flex-col mx-auto"
                    style="background-color:#121212">

                    <video id="inlineVideo" class="rounded" width="100%" controls="controls"
                        poster="storage/images/KeshavMahavidyalaya.png">
                        <source src="storage/videos/KeshavMahavidyalaya.mp4" type="video/mp4">
                    </video>

                    <div class="mx-auto m-2">
                        <div class="flex  flex-col text-center ">
                            <a href="{{ '/KeshavMahavidyalaya' }}" class="hover:underline text-lg font-medium">My
                                College
                                Site</a>
                            <a href="{{ '/KeshavMahavidyalaya' }}" class="hover:underline text-sm ">Keshav
                                Mahavidyalaya</a>
                        </div>
                    </div>
                    <div class="py-1.5 mx-auto  pb-5 text-sm">
                        <span style="background-color: #1E1E1E;"
                            class="shadow-lg focus:outline-none text-white  rounded-2xl p-3  py-1.5 pb-1.5">
                            Bootstrap</span>
                        <span style="background-color: #1E1E1E;"
                            class="shadow-lg focus:outline-none text-white  rounded-2xl p-3 ml-1 py-1.5 pb-1.5">
                            PHP</span>
                        <span style="background-color: #1E1E1E;"
                            class="shadow-lg focus:outline-none text-white  rounded-2xl p-3 ml-1 py-1.5 pb-1.5">
                            javascript</span>
                    </div>
                </div>
            </div>
            <div x-show="tab === 'all' || tab === 'PHP' || tab=== 'Javascript' || tab==='Laravel'" data-aos="zoom-in"
                data-aos-delay="600">

                <div class="zoom rounded text-gray-200 hover:text-white  shadow-lg flex flex-col mx-auto"
                    style="background-color:#121212">

                    <video id="inlineVideo" class="rounded" width="100%" controls="controls"
                        poster="storage/images/Photoshoto.png">
                        <source src="storage/videos/Photoshoto.mp4" type="video/mp4">
                    </video>

                    <div class="mx-auto m-2">
                        <div class="flex  flex-col text-center ">
                            <a href="{{ '/Photoshoto' }}" class="hover:underline text-lg font-medium">Social Media
                                Site</a>
                            <a href="{{ '/Photoshoto' }}" class="hover:underline text-sm ">Photoshoto</a>
                        </div>
                    </div>
                    <div class="py-1.5 mx-auto pb-5 text-sm ">
                        <span style="background-color: #1E1E1E;"
                            class="shadow-lg focus:outline-none text-white  rounded-2xl p-3  py-1.5 pb-1.5">
                            Tailwindcss</span>
                        <span style="background-color: #1E1E1E;"
                            class="shadow-lg focus:outline-none text-white  rounded-2xl p-3 ml-1 py-1.5 pb-1.5">
                            Javascript</span>
                        <br>
                        <br>
                        <span style="background-color: #1E1E1E;"
                            class="shadow-lg focus:outline-none text-white  rounded-2xl p-3 ml-1  py-1.5 pb-1.5">
                            Alpinejs</span>

                        <span style="background-color: #1E1E1E;"
                            class="shadow-lg focus:outline-none text-white  rounded-2xl p-3 ml-1 py-1.5 pb-1.5">
                            Laravel Livewire</span>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>