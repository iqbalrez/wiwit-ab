<x-guest-layout>
    <section class="relative flex items-center w-full bg-[#E1ECF0]">
        <div class="relative items-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 md:max-w-6xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="relative items-center m-auto lg:inline-flex sm:order-first col-span-2">
                    <div class="text-center lg:text-left">
                        <div>
                            <p class="text-sm 2xl:text-lg text-primary font-light">
                                Events
                            </p>
                            <p class="text-2xl font-bold tracking-tight text-dark sm:text-5xl">
                                Elevate your skills and network <br>Join me at upcoming events<span
                                    class="text-primary">.</span>
                            </p>
                            <p
                                class="mx-auto lg:mx-0 mt-3 text-sm md:text-xl tracking-tight leading-8 text-gray-600 font-light">
                                Discover the best event for your improve journey
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Events Cards --}}
    <section class="relative flex items-center w-full bg-white py-8 px-8 md:px-0">
        <div x-data="{ tab: 'tab1' }" class="w-full mx-auto max-w-6xl">

            {{-- Category --}}
            <div class="flex justify-between text-center gap-y-6 mb-16 py-8">
                <a @click.prevent="tab = 'tab1'" href="#"
                    class="font-normal text-xs 2xl:text-sm bg-[#67BD65] text-[#757575] rounded-3xl w-80 text-center py-3 px-4"
                    :class="{ 'bg-[#67BD65] text-white': tab === 'tab1' }">
                    All
                </a>

                <a @click.prevent="tab = 'tab2'" href="#"
                    class="font-normal text-xs 2xl:text-sm bg-[#67BD65] text-[#757575] w-80 text-center rounded-3xl  py-3 px-4"
                    :class="{ 'bg-[#67BD65] text-white': tab === 'tab2' }">
                    Certification
                </a>

                <a @click.prevent="tab = 'tab3'" href="#"
                    class="font-normal text-xs 2xl:text-sm bg-[#67BD65] text-[#757575] w-80 text-center rounded-3xl  py-3 px-4"
                    :class="{ 'bg-[#67BD65] text-white': tab === 'tab3' }">
                    Training
                </a>

                <a @click.prevent="tab = 'tab4'" href="#"
                    class="font-normal text-xs 2xl:text-sm bg-[#67BD65] text-[#757575] w-80 text-center rounded-3xl  py-3 px-4"
                    :class="{ 'bg-[#67BD65] text-white': tab === 'tab4' }">
                    Social
                </a>

                <a @click.prevent="tab = 'tab5'" href="#"
                    class="font-normal text-xs 2xl:text-sm bg-[#67BD65] text-[#757575] w-80 text-center rounded-3xl  py-3 px-4"
                    :class="{ 'bg-[#67BD65] text-white': tab === 'tab5' }">
                    Seminar
                </a>

                <a @click.prevent="tab = 'tab6'" href="#"
                    class="font-normal text-xs 2xl:text-sm bg-[#67BD65] text-[#757575] w-80 text-center rounded-3xl  py-3 px-4"
                    :class="{ 'bg-[#67BD65] text-white': tab === 'tab6' }">
                    Coaching
                </a>
            </div>

            {{-- Events Cards --}}
            <div x-show="tab==='tab1'">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-8">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="bg-white rounded-lg ces">
                            <div class="w-full">
                                <a href="#">
                                    <img class="rounded-t-lg w-full h-48 bg-gray-50 object-cover object-center"
                                        src="" alt="" />
                                </a>
                            </div>
                            <div class="p-4 w-full">
                                <p class="mb-3 text-xs 2xl:text-sm text-gray-500">Mon, Oct 31, 6:30 AM</p>
                                <p class="mb-6 text-lg font-semibold text-dark line-clamp-2">Critical Magic Skill For
                                    Professional Witch
                                </p>
                                <p class="text-xs 2xl:text-sm text-gray-500">Sleman, Yogyakarta</p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>


    </section>

    {{-- Join Now --}}
    <section class="relative flex items-center w-full bg-white py-8">
        <div class="relative items-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div>
                    <img class="rounded-lg h-96 w-full bg-gray-50 object-cover object-center" src=""
                        alt="" />
                </div>

                <div class="p-11">
                    <p class="text-2xl text-dark font-bold mb-3">Make your business better with AI.</p>
                    <p class="text-xs 2xl:text-sm text-gray-500 mb-8 max-w-xs">Our mission is to empower you with the
                        knowledge
                        and tools you need</p>
                    <div class="mt-6 flex mb-8">
                        <div class="mr-20">
                            <ion-icon name="calendar-clear"class="text-dark h-7 w-7"></ion-icon>
                            <p class="text-xs 2xl:text-sm text-dark font-light mb-3">31 Oct 2023</p>
                        </div>
                        <div class="mr-16">
                            <ion-icon name="location"class="text-dark h-7 w-7"></ion-icon>
                            <p class="text-xs 2xl:text-sm text-dark font-light mb-3">Jakarta Indonesia</p>
                        </div>
                        <div class="mr-10">
                            <ion-icon name="bookmark"class="text-dark h-7 w-7"></ion-icon>
                            <p class="text-xs 2xl:text-sm text-dark font-light mb-3">Rp.750.000</p>
                        </div>
                    </div>
                    <button class="px-12 py-3 bg-dark rounded-full text-white text-sm font-medium">Join Now</button>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
