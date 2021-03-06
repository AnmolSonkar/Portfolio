<div>
    <div class="lg:hidden">

        <div class="py-4" style="background-color: #121212;">
            <img class=" w-28 h-28 shadow-lg mx-auto mt-12 rounded-full relative" data-aos="fade"
                src="storage/images/Anmol.jpeg" alt="Anmol Sonkar">
            <div class=" py-4 text-white text-center relative">
                <h1 class="text-3xl text-white  font-semibold" data-aos="fade">Anmol's Blog</h1>
                <p class="text-xl pt-1.5" data-aos="fade">
                    I write about technology and life as a developer.
                </p>

                <div class="relative mt-5   mx-auto text-gray-600" data-aos="fade">

                    <i class="absolute ml-16 pl-8  fa fa-search text-sm my-auto  text-gray-400 left-0 p-2.5 focus:outline-none"
                        aria-hidden="true" wire:target="search" wire:loading.remove></i>

                    <input id="Search"
                        class="border-2 border-gray-300 bg-white h-10 px-9   rounded-lg text-sm focus:outline-none focus:ring-2  hover:shadow focus:ring-green-600 focus:border-transparent"
                        type="search" name="search" wire:model.debounce.300ms="search" placeholder="Search">



                    <h1>
                        <img src="storage/images/Search.svg" wire:target="search" wire:loading
                            class="w-8 absolute left-0 ml-20 -mt-9 " alt="Loading...">
                    </h1>

                    <div class="p-1.5 mr-3">
                        <div class="text-sm bg-white text-gray-600  mx-auto rounded w-64 mt-4">
                            <ul class="shadow-md rounded">
                                @foreach ($results as $result)
                                <li class="p-1">
                                    <div class="p-1 rounded-md text-left ml-2 hover:bg-gray-100 active:bg-white">
                                        <h1><a href="blog"> {{$result->Heading}}</a></h1>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="p-1 w-10/12  mx-auto">

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-9  mt-9 mb-9 ">
                @foreach ($blogs as $blog)


                <div data-aos="fade-up">
                    <div class="zoom  rounded  text-gray-200 hover:text-white  shadow-lg flex flex-col mx-auto"
                        style="background-color:#121212">
                        <div class="flex">
                            <div>
                                <img class="object-fill inset-0   bg-cover bg-center z-0"
                                    src="storage/Blogs/Blog1/0.png">

                                <div
                                    class=" opacity-0 hover:opacity-100 bg-black bg-opacity-90 duration-300 absolute inset-0 z-10 flex justify-center items-center">
                                    <a id="click" href="{{ ('/Blog1') }}"
                                        class="bg-green-600 shadow-lg focus:outline-none  rounded p-1.5 mt-3 pl-3 pr-3">
                                        Read more</a></div>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="flex text-left  flex-col">
                                <a href="{{ ('/Blog1') }}"
                                    class="hover:underline text-lg font-medium">{{ $blog->Heading }}</a>
                                <p class="text-sm "> {{ $blog->Paragraph }}
                                </p>
                            </div>
                        </div>
                        <div class="p-2 mb-2 text-sm">
                            <span style="background-color: #1E1E1E;"
                                class="shadow-lg  text-white  rounded-2xl p-3  py-1.5">
                                <span class="far fa-clock">
                                </span><span> {{date('M d, Y', strtotime( $blog->upload_at)) }}</span>

                                <span style="background-color: #1E1E1E;"
                                    class="shadow-lg  text-white ml-2  rounded-2xl p-3  py-1.5">
                                    <span class="fas fa-comment me-2"></span> 12 Comments</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="flex justify-center">
                <h1 wire:loading>
                    <img src="storage/images/Loadmore.svg" class="w-12 opacity-50" alt="Loading...">
                </h1>
            </div>
        </div>
    </div>
</div>

<style>
    #Search::-webkit-search-cancel-button {
        position: absolute;
        right: 20px;
        cursor: pointer;
    }
</style>