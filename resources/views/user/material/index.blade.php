<x-guest-layout>

    {{-- Hero --}}
    <section class="relative flex items-center w-full bg-[#E1ECF0]">
        <div class="relative items-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="relative items-center m-auto lg:inline-flex sm:order-first col-span-2">
                    <div class="text-center lg:text-left">
                        <div>
                            <p class="text-sm 2xl:text-xl text-primary font-light">
                                Material
                            </p>
                            <p class="text-2xl font-bold tracking-tight text-dark sm:text-5xl">
                                Unlock a wealth of knowledge <br>and resources<span class="text-primary">.</span>
                            </p>
                            <p class="mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-gray-600 font-light">
                                Enhance your learning experience
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Learning Resources --}}
    <section class="relative flex items-center w-full">
        <div class="relative items-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
            <p class="text-3xl 2xl:text-3xl font-bold text-dark">
                Discover the best learning resources<span class="text-primary">.</span>
            </p>
            <div class="block md:grid md:grid-cols-6 md:gap-8 mt-16">
                <div class="block mb-8 md:col-span-2 lg:col-span-1">
                    <div class="mb-6 ">
                        <label for="countries" class="block mb-2 text-sm font-medium text-dark">Year *</label>
                        <select id="countries"
                            class="bg-gray-50 border-none text-dark text-sm rounded-lg focus:outline-none min-w-full py-3">
                            <option selected>Choose a year</option>
                            <option>2021</option>
                            <option>2020</option>
                            <option>2019</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="category" class="block mb-2 text-sm font-medium text-dark">Category *</label>
                        <select id="category"
                            class="bg-gray-50 border-none text-dark text-sm rounded-lg focus:outline-none min-w-full py-3">
                            <option selected>Bussiness</option>
                            <option>Technology</option>
                            <option>Science</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="download" class="block mb-2 text-sm font-medium text-dark">Download *</label>
                        <select id="download"
                            class="bg-gray-50 border-none text-dark text-sm rounded-lg focus:outline-none min-w-full py-3">
                            <option selected>> 100</option>
                            <option>50 - 100</option>
                            <option>10 - 50</option>
                            <option>0 - 10</option>
                        </select>
                    </div>

                    <button
                        class="inline-flex w-full items-center justify-center text-sm px-8 py-3.5 rounded-full text-white bg-dark hover:bg-[#435660] focus:outline-none focus:text-dark font-medium">
                        Run filter
                    </button>
                </div>
                <div class="col-span-4 lg:col-span-5">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        @for ($i = 0; $i < 8; $i++)
                            <div class="bg-white shadow-sm p-4 rounded-xl">
                                <div class="flex gap-3 items-center">
                                    <div>
                                        <img src=""
                                            class="w-28 h-32 hidden md:block object-center object-cover rounded-lg bg-gray-50 mr-4"
                                            alt="">
                                    </div>
                                    <div>
                                        <div
                                            class="flex items-center rounded-lg justify-center py-2 text-sm px-6 text-white bg-primary mb-3 w-fit">
                                            <span>Education</span>
                                        </div>
                                        <p
                                            class="line-clamp-2 font-bold text-lg xl:text-lg tracking-tight leading-7 text-dark">
                                            Lingkungan Bisnis
                                        </p>
                                        <p class="text-sm 2xl:text-sm font-normal text-gray-500 mb-3">Wiji Nurastuti</p>
                                        <p class="text-sm 2xl:text-sm font-normal text-gray-500">251 downloads</p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-guest-layout>
