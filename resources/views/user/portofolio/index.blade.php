<x-guest-layout>
    @section('title', 'Portfolio')
    {{-- Hero --}}
    <section class="relative flex items-center w-full bg-[#E1ECF0]"
        style="background-color:#E1ECF0; background-image: url('<?= asset('assets/SG-WIWIT-01.svg') ?>'); background-size: cover; background-position: right top">
        <div class="relative items-center w-full px-5 mt-14 mb-16 md:pb-0 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="relative items-center gap-12 m-auto lg:inline-flex sm:order-first">
                    <div class="max-w-xl text-center lg:text-left">
                        <div>
                            <p class="text-sm 2xl:text-lg text-primary font-light">
                                Portfolio
                            </p>
                            <p class="text-2xl font-bold tracking-tight text-dark sm:text-5xl">
                                Transforming your business into
                                a breakthrough at once<span class="text-primary">.</span>
                            </p>
                            <p
                                class="mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-[#435660] font-light max-w-xs">
                                Unleash your true potential with a reliable business coach
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Work Experience --}}
    <section>
        <div
            class="relative items-center w-full mt-16 px-5 py-8 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-lg text-center">
            <p class="text-2xl 2xl:text-3xl font-semibold text-dark">
                My Work Experience<span class="text-primary">.</span>
            </p>
        </div>

        <div>
            <!-- component -->
            <div class="container mx-auto max-w-6xl w-full h-full">
                <div class="relative wrap overflow-hidden p-10 h-full">
                    <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border" style="left: 50%">
                    </div>
                    <div>
                        @foreach ($experiences as $data)
                            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                                {{-- Left Timeline --}}
                                <div class="order-1 w-5/12 px-6 py-4 item">
                                    <h3 class="mb-3 font-semibold text-dark text-xl">
                                        {{ $data->company }}, {{ $data->job_type }}</h3>
                                    <p class="text-sm mt-3 font-normal leading-snug tracking-wide text-[#757575]">
                                        @if ($date->start_date && $date->end_date)
                                            @if (date('F Y', strtotime($date->start_date)) == date('F Y', strtotime($date->end_date)))
                                                {{ date('F Y', strtotime($date->start_date)) }}
                                            @else
                                                {{ date('F Y', strtotime($date->start_date)) }} -
                                                {{ date('F Y', strtotime($date->end_date)) }}
                                            @endif
                                        @elseif ($date->start_date && $date->end_date == null)
                                            {{ date('F Y', strtotime($date->start_date)) }} -
                                            present
                                        @else
                                            -
                                        @endif
                                    </p>
                                </div>
                                <div
                                    class="z-20 flex items-center order-1 bg-white border-2 w-10 h-10 rounded-full relative">
                                    <div
                                        class=" bg-dark w-5 h-5  rounded-full flex items-center justify-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    </div>
                                </div>
                                <!-- right timeline -->
                                <div class="order-1 w-5/12 px-6 py-4">
                                    <h3 class="mb-3 font-semibold text-dark text-xl">{{ $data->position }}</h3>
                                    <p class="text-sm mt-3 font-normal leading-snug tracking-wide text-[#757575]">
                                        {{ $data->description }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

    </section>


    {{-- My Latest work --}}
    <section class="relative flex items-center w-full bg-[#F9FAFC]">
        <div class="relative w-full px-5 mt-14 mb-16 md:pb-0 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
            <div class="flex flex-col items-start justify-between lg:flex-row">
                <div class="max-w-xl mt-24 text-left">
                    <div>
                        <p class="text-2xl 2xl:text-3xl font-semibold text-dark">
                            My Latest Work<span class="text-primary">.</span>
                        </p>
                        <p class="font-light text-[#757575] text-sm">
                            Perfect solution for digital transformation
                        </p>
                    </div>
                </div>
            </div>

            <div>
                <div class="items-center mt-14">
                    <div class="justify-center w-full max-auto">
                        <div x-data="{ tab: 'tab1' }">
                            <div class="flex justify-between">
                                @foreach ($workCategories as $index => $data)
                                    <a @click.prevent="tab = 'tab{{ $index + 1 }}'" href="#"
                                        class="font-normal text-sm bg-[#67BD65] text-[#757575] rounded-3xl w-80 text-center py-3 px-4 "
                                        :class="{ 'bg-[#67BD65] text-white': tab === 'tab{{ $index + 1 }}' }">
                                        {{ $data->name }}
                                    </a>
                                @endforeach

                            </div>


                            <div class="py-4 pt-4 mt-14 mx-auto content">
                                <!-- show tab1 only -->
                                @foreach ($workCategories as $index => $category)
                                    <div x-show="tab === 'tab{{ $index + 1 }}'" class="text-gray-500">
                                        <main>
                                            <div class="col-span-3">
                                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4"
                                                    id="course-list">
                                                    @foreach ($category->works as $data)
                                                        <div class="w-64 rounded-xl mx-auto mb-8 border h-fit">
                                                            <a target="_blank"
                                                                href="{{ asset('storage/works/' . $data->photo) }}">
                                                                <img class="rounded-t-xl h-44 object-center rounded-xl object-cover w-full"
                                                                    src="{{ asset('storage/works/' . $data->photo) }}"
                                                                    alt="" />
                                                            </a>
                                                            <div class="p-5">
                                                                <div class="flex items-center justify-between mb-3">
                                                                    <div class="flex items-center gap-x-2">
                                                                        <p
                                                                            class="text-sm text-black 2xl:text-sm font-semibold">
                                                                            {{ $data->title }} </p>
                                                                    </div>

                                                                </div>
                                                                <a href="#">
                                                                    <h5
                                                                        class="mb-2 text-xs 2xl:text-sm font-normal text-[#757575]">
                                                                        {{ \Carbon\Carbon::parse($data->date)->format('d F Y') }}
                                                                    </h5>
                                                                </a>


                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </main>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Business Insight --}}
    <section>
        <div class="flex justify-between mx-auto md:px-12 lg:px-0 xl:px-0 max-w-6xl py-24">
            <div class="col-span-3">
                <p class="font-bold text-3xl text-black text-center">On The Cutting Edge<span
                        class="text-primary">.</span></p>
                <p class="font-normal text-center max-w-lg text-sm text-[#757575] mt-3 mx-auto leading-relaxed">With
                    over
                    22 years of
                    valuable experience, my portfolio website reflects a journey marked by continuous growth and
                    expertise in my field. xThese numbers aren't just statistics—they represent a wealth of
                    relationships and a
                    testament to the depth of my company relations, each one contributing to a narrative of success and
                    shared accomplishments.</p>
                <div class="grid grid-cols-2 mt-20 p-4 text-center">
                    <div>
                        <div>
                            <p class="font-semibold text-xl text-dark">22+ </p>
                            <p class="mt-5 text-[#757575] text-normal text-sm">Years Of Experience</p>
                        </div>


                        <div class="mt-12">
                            <p class="font-semibold text-xl text-dark">100+</p>
                            <p class="mt-5 text-[#757575] text-normal text-sm">Client</p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <p class="font-semibold text-xl text-dark">1,000+</p>
                            <p class="mt-5 text-[#757575] text-normal text-sm">Connections</p>
                        </div>

                        <div class="mt-12">
                            <p class="font-semibold text-xl text-dark">1,000+</p>
                            <p class="mt-5 text-[#757575] text-normal text-sm">Company Relation</p>

                        </div>
                    </div>
                </div>
            </div>
            <div
                class="flex flex-col justify-center items-center lg:items-start lg:flex-none lg:justify-end lg:item mt-12 lg:mt-0">
                <img src="{{ asset('assets/business insight.svg') }}" class="w-64 h-64 object-contain" alt="">
                <p class="font-semibold text-2xl mt-8 items-start tracking-normal text-dark">
                    Business Insights
                </p>
                <p class="mt-4 text-[#757575] text-normal text-sm max-w-xs leading-relaxed">Engage with compelling
                    narratives and
                    discover a tapestry of
                    perspectives that
                    inform, entertain, and spark meaningful conversations. Welcome to a corner of the digital realm
                    where ideas take flight. </p>

                <div>
                    <a href="{{ route('blog.index') }}"
                        class="bg-[#67BD65] text-white rounded-3xl px-9 text-xs 2xl:text-sm flex items-center w-fit mt-8 py-3.5">
                        Read
                        The Blog</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Personal Consultion --}}
    {{-- <section>
        <div class="bg-[#0E3A51] max-w-6xl w-full mx-auto mt-20 mb-44 md:mt-40 rounded-3xl flex flex-col items-center">
            <div class="grid grid-cols-1 md:grid-cols-2 py-8 md:py-16 px-6 md:px-14">
                <div class="max-w-lg py-4 md:py-0 md:px-0">
                    <p class="font-semibold text-2xl md:text-4xl text-white">Get Personal Consultation<span
                            class="text-primary">.</span></p>
                    <p class="text-white text-xs md:text-sm mt-2">
                        We’ll take care of your accounting and administrative services
                    </p>
                </div>

                <div class="py-2 flex md:flex-col justify-center md:items-end">
                    <div class="w-52">
                        <div>
                            <a href="#"
                                class="bg-[#67BD65] text-white w-full rounded-3xl text-xs 2xl:text-sm flex items-center justify-center px-6 md:px-9 py-3.5 text-center">
                                Free Consultation
                            </a>
                        </div>
                        <div>
                            <a href="#"
                                class="bg-[#285065] text-white w-full rounded-3xl text-xs 2xl:text-sm flex items-center justify-center mt-2 px-6 md:px-9 py-3.5 text-center">
                                <ion-icon class="w-3 h-3 md:w-4 md:h-4 mr-1 md hydrated" name="call" role="img"
                                    aria-label="logo linkedin"></ion-icon>6287834671064
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}

</x-guest-layout>
