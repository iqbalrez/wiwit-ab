<x-guest-layout>
    @section('title', 'Events')
    <section class="relative flex items-center w-full bg-[#E1ECF0]"
        style="background-color:#E1ECF0; background-image: url('<?= asset('assets/SG-WIWIT-01.svg') ?>'); background-size: cover; background-position: right top">
        <div class="relative items-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 md:max-w-6xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="relative items-center m-auto lg:inline-flex sm:order-first col-span-2">
                    <div class="text-center lg:text-left">
                        <div>
                            <p class="text-sm 2xl:text-lg text-primary font-light">
                                Events
                            </p>
                            <p class="text-2xl font-semibold tracking-tight text-dark sm:text-5xl">
                                Choose the best training <br> to boost your capacity<span class="text-primary">.</span>
                            </p>
                            <p
                                class="mx-auto lg:mx-0 mt-3 text-sm md:text-xl tracking-tight leading-8 text-gray-600 font-light">
                                Our training is designed to upgrade your hard skills and other related soft skills to
                                elevate your profession
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Events Cards --}}
    <section class="relative flex items-center w-full bg-white py-8 px-8 md:px-0">
        <div x-data="{ tab: '{{ $eventCategories->first()->id }}' }" class="w-full mx-auto max-w-6xl">

            {{-- Category --}}
            <div class="flex justify-evenly text-center gap-y-6 mb-16 py-8">
                <a @click.prevent="tab = '{{ $eventCategories->first()->id }}'" href="#"
                    class="font-normal text-xs 2xl:text-sm bg-[#67BD65] text-[#757575] rounded-3xl w-80 text-center py-3 px-4"
                    :class="{ 'bg-[#67BD65] text-white': tab === '{{ $eventCategories->first()->id }}' }">
                    {{ $eventCategories->first()->name }}
                </a>

                @foreach ($eventCategories->skip(1) as $eventCategory)
                    <a @click.prevent="tab = '{{ $eventCategory->id }}'" href="#"
                        class="font-normal text-xs 2xl:text-sm bg-[#67BD65] text-[#757575] w-80 text-center rounded-3xl  py-3 px-4"
                        :class="{ 'bg-[#67BD65] text-white': tab === '{{ $eventCategory->id }}' }">
                        {{ $eventCategory->name }}
                    </a>
                @endforeach
            </div>

            {{-- Events Cards --}}
            @foreach ($eventCategories as $eventCategory)
                <div x-show="tab==='{{ $eventCategory->id }}'">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-8">
                        @foreach ($eventCategory->events as $event)
                            <div class="bg-white rounded-lg ces">
                                <div class="w-full">
                                    <a href="#">
                                        <img class="rounded-t-lg w-full h-48 bg-gray-50 object-cover object-center"
                                            src="{{ $event->thumbnail ? asset('storage/event/' . $event->thumbnail) : asset('assets/default.png') }}"
                                            alt="" />
                                    </a>
                                </div>
                                <div class="p-4 w-full">
                                    <p class="mb-3 text-xs 2xl:text-sm text-gray-500">
                                        {{ \Carbon\Carbon::parse($event->created_at)->format('d M Y') }}
                                    </p>
                                    <p class="mb-6 text-lg font-semibold text-dark line-clamp-2">
                                        {{ $event->name }}
                                    </p>
                                    <p class="text-xs 2xl:text-sm text-gray-500">
                                        {{ $event->location }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>


    </section>

    {{-- Join Now --}}
    {{-- <section class="relative flex items-center w-full bg-white py-8">
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
    </section> --}}
</x-guest-layout>
