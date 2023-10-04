<x-guest-layout>
    {{-- Hero --}}
    <section class="relative flex items-center w-full bg-[#E1ECF0]">
        <div class="relative items-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="relative items-center m-auto lg:inline-flex sm:order-first col-span-2">
                    <div class="text-center lg:text-left">
                        <div>
                            <p class="text-sm 2xl:text-xl text-primary font-light">
                                Blog
                            </p>
                            <p class="text-2xl font-bold tracking-tight text-dark sm:text-5xl">
                                Explore my insightful <br>perspectives in every blogs<span class="text-primary">.</span>
                            </p>
                            <p class="mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-gray-600 font-light">
                                Discover risk management insights in my blog
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Header Blog --}}
    <section>
        <div class="relative items-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div>
                    <img src=""
                        class="bg-gray rounded-2xl custom-box-shadow mb-5 w-full h-80 object-center object-cover"
                        alt="">
                    <div class="flex gap-3 items-center mb-6">
                        <div class="flex items-center rounded-lg justify-center py-3 px-8 text-white bg-primary">
                            <span>Technology</span>
                        </div>
                        <p class="text-xs 2xl:text-sm font-semibold text-dark">• 4 min</p>
                    </div>
                    <p class="line-clamp-3 font-bold text-2xl tracking-tight leading-7 text-dark mb-6">
                        Tertarik Menjadi Blogger? Begini Tips Menulis Blog untuk Pemula
                    </p>
                    <p class="line-clamp-3 text-gray-500 text-xs 2xl:text-sm leading-6 font-normal">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit
                        urna. Pellentesque sit amet sapien fringilla
                    </p>
                </div>
                <div class="space-y-6">
                    <div class="flex gap-3 items-center">
                        <div>
                            <img src="" class="w-36 h-36 object-center object-cover rounded-lg bg-gray-50 mr-4"
                                alt="">
                        </div>
                        <div>
                            <div class="flex gap-3 items-center mb-6">
                                <div
                                    class="flex items-center rounded-lg justify-center py-2 text-sm px-6 text-white bg-primary">
                                    <span>Education</span>
                                </div>
                                <p class="text-xs 2xl:text-sm font-semibold text-dark">• 4 min</p>
                            </div>
                            <p class="line-clamp-3 font-bold text-lg tracking-tight leading-7 text-dark mb-6">
                                Tertarik Menjadi Blogger? Begini Tips Menulis Blog untuk Pemula
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-3 items-center">
                        <div>
                            <img src="" class="w-36 h-36 object-center object-cover rounded-lg bg-gray-50 mr-4"
                                alt="">
                        </div>
                        <div>
                            <div class="flex gap-3 items-center mb-6">
                                <div
                                    class="flex items-center rounded-lg justify-center py-2 text-sm px-6 text-white bg-primary">
                                    <span>Education</span>
                                </div>
                                <p class="text-xs 2xl:text-sm font-semibold text-dark">• 4 min</p>
                            </div>
                            <p class="line-clamp-3 font-bold text-lg tracking-tight leading-7 text-dark mb-6">
                                Tertarik Menjadi Blogger? Begini Tips Menulis Blog untuk Pemula
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-3 items-center">
                        <div>
                            <img src="" class="w-36 h-36 object-center object-cover rounded-lg bg-gray-50 mr-4"
                                alt="">
                        </div>
                        <div>
                            <div class="flex gap-3 items-center mb-6">
                                <div
                                    class="flex items-center rounded-lg justify-center py-2 text-sm px-6 text-white bg-primary">
                                    <span>Education</span>
                                </div>
                                <p class="text-xs 2xl:text-sm font-semibold text-dark">• 4 min</p>
                            </div>
                            <p class="line-clamp-3 font-bold text-lg tracking-tight leading-7 text-dark mb-6">
                                Tertarik Menjadi Blogger? Begini Tips Menulis Blog untuk Pemula
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Latest Blog --}}
    <section>
        <div class="relative items-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-24 max-w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8">
                @for ($i = 1; $i <= 9; $i++)
                <div class="flex gap-3 items-center">
                    <div>
                        <img src="" class="w-36 h-36 object-center object-cover rounded-lg bg-gray-50 mr-4"
                            alt="">
                    </div>
                    <div>
                        <div class="flex gap-3 items-center mb-6">
                            <div
                                class="flex items-center rounded-lg justify-center py-2 text-sm px-6 text-white bg-primary">
                                <span>Education</span>
                            </div>
                            <p class="text-xs 2xl:text-sm font-semibold text-dark">• 4 min</p>
                        </div>
                        <p class="line-clamp-3 font-bold text-lg tracking-tight leading-7 text-dark mb-6">
                            Tertarik Menjadi Blogger? Begini Tips Menulis Blog untuk Pemula
                        </p>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>

</x-guest-layout>
