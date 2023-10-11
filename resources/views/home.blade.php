<x-guest-layout>

    {{-- Hero --}}
    <section class="relative flex items-center w-full bg-[#E1ECF0]">
        <div class="relative items-center w-full px-5 pt-20 pb-20 md:pb-0 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-7xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-6">
                    <div class="relative items-center gap-12 m-auto lg:inline-flex sm:order-first">
                        <div class="max-w-xl text-center lg:text-left">
                            <div>
                                <p class="text-sm 2xl:text-xl text-dark font-light">
                                    Hi, I’m Wiwit 👋
                                </p>
                                <p class="text-2xl font-semibold tracking-tight text-dark sm:text-5xl">
                                    Risk Management Pro<span class="text-primary">.</span>
                                </p>
                                <p
                                    class="mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-gray-600 font-light max-w-xs">
                                    Ready to boost your organization's safety. Let's connect!
                                </p>
                            </div>
                            <div class="mt-10">
                                <button
                                    class="inline-flex items-center justify-center text-sm px-8 py-3.5 mt-4 md:mt-0 rounded-full text-white bg-[#67BD65] hover:bg-dark focus:outline-none focus:text-white">
                                    Get Consultation
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="order-first hidden md:block w-full mt-6 lg:mt-0">
                        <img class="object-contain object-center w-full h-[450px] mx-auto lg:ml-auto" alt="hero"
                            src="{{ asset('assets/hero.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section>
        <div class="relative items-center w-full px-5 py-28 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
            <p class="text-2xl 2xl:text-3xl font-semibold text-dark max-w-sm mx-auto text-center">
                Solution for every
                business need<span class="text-primary">.</span>
            </p>
            <div class="grid w-full grid-cols-1 mx-auto lg:grid-cols-3 mt-24 gap-8">
                <div class="max-w-md p-6 mx-auto border border-gray-100 rounded-xl">
                    <ion-icon name="book" class="w-7 h-7 text-primary"></ion-icon>
                    <p class="mt-5 text-lg font-medium leading-6 text-dark">
                        Accounting
                    </p>
                    <p class="mt-3 text-sm 2xl:text-md text-gray-500">
                        Accounting is the systematic process of recording, analyzing interpreting financial growth
                    </p>
                </div>
                <div class="max-w-md p-6 mx-auto border border-gray-100 rounded-xl">
                    <ion-icon name="folder" class="w-7 h-7 text-primary"></ion-icon>

                    <p class="mt-5 text-lg font-medium leading-6 text-dark">
                        Tax Management
                    </p>
                    <p class="mt-3 text-sm 2xl:text-md text-gray-500">
                        It involves techniques and tools to efficiently handle large volumes of text data, such
                    </p>
                </div>
                <div class="max-w-md p-6 mx-auto border border-gray-100 rounded-xl">
                    <ion-icon name="trending-up" class="w-7 h-7 text-primary"></ion-icon>

                    <p class="mt-5 text-lg font-medium leading-6 text-dark">
                        Financial Planning
                    </p>
                    <p class="mt-3 text-sm 2xl:text-md text-gray-500">
                        involves budgeting, saving, investing, and risk management to ensure individuals
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Personalized --}}
    <section>
        <div class="relative items-center w-full px-5 py-8 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-lg text-center">
            <p class="text-2xl 2xl:text-3xl font-semibold text-dark">
                Need a personalized solution<span class="text-primary">?</span>
            </p>
            <p class="text-sm 2xl:text-md text-gray-500 mt-3 max-w-md mx-auto">
                I assist companies in developing and implementing effective risk management strategies.
            </p>
            <div class="mt-7">
                <a href="#personal-consultation"
                    class="inline-flex items-center justify-center text-sm px-8 py-3.5 mt-4 md:mt-0 rounded-full text-white bg-[#67BD65] hover:bg-dark focus:outline-none focus:text-white font-normal">
                    How we can help?
                </a>
            </div>
        </div>
    </section>

    {{-- Empower --}}
    <section>
        <div class="relative items-center w-full px-5 py-24 mx-auto md:px-12 lg:px-16 max-w-6xl">
            <div class="w-full mx-auto text-left">
                <div class="relative flex-col items-center m-auto align-middle">
                    <div class="items-center gap-12 text-left lg:gap-24 lg:inline-flex">
                        <div class="order-first block w-full mt-12 lg:mt-0">
                            <img class="object-cover object-center w-[452px] h-[536px] rounded-xl mx-auto lg:ml-auto"
                                alt="hero" src="{{ asset('assets/empower.jpg') }}">
                        </div>
                        <div class="flex flex-col mt-6 lg:mt-0">
                            <div>
                                <p class="text-2xl font-semibold tracking-tight text-dark sm:text-4xl">
                                    Empowering you to make sound financial decision.
                                </p>
                            </div>
                            <p class="mt-5 text-sm 2xl:text-md leading-7 text-gray-500">
                                Our mission is to empower you with the knowledge and tools you need
                            </p>
                            <div class="mt-4 space-y-3">
                                <div
                                    class="inline-flex items-center py-3.5 px-12 bg-[#FAFBFD] text-dark rounded-lg w-fit">
                                    <ion-icon name="checkmark-circle-outline" class="w-6 h-6 mr-2"></ion-icon>
                                    <span class="font-medium">Financial assessment reports</span>
                                </div>
                                <div
                                    class="inline-flex items-center py-3.5 px-12 bg-[#FAFBFD] text-dark rounded-lg w-fit">
                                    <ion-icon name="checkmark-circle-outline" class="w-6 h-6 mr-2"></ion-icon>
                                    <span class="font-medium">Income tax planning and consulting</span>
                                </div>
                                <div
                                    class="inline-flex items-center py-3.5 px-12 bg-[#FAFBFD] text-dark rounded-lg w-fit">
                                    <ion-icon name="checkmark-circle-outline" class="w-6 h-6 mr-2"></ion-icon>
                                    <span class="font-medium">Payroll and sales taxes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonial --}}
    <section class="bg-[#F9FAFC]">
        <div class="relative items-center w-full px-5 py-24 mx-auto md:px-12 lg:px-16 max-w-7xl">
            <p class="text-2xl font-semibold tracking-tight text-dark sm:text-4xl max-w-md mx-auto text-center">
                No matter who you are,
                we’ve got what you need<span class="text-primary">.</span>
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-24">
                @foreach ($testimonials as $data)
                    <div class="rounded-xl border-[1.5px] bg-white border-[#EDEDED] p-6 custom-box-shadow">
                        <p class="font-semibold text-dark">{{ $data->job }}</p>
                        <img src="{{ $data->avatar ? asset('storage/testimonial/' . $data->avatar) : asset('assets/default.png') }}"
                            class="bg-gray-300 rounded-full mx-auto border border-gray-100 mt-12 w-60 h-60 object-center object-cover"
                            alt="">
                        <div class="text-xs 2xl:text-sm px-4">
                            <p class="mt-8 text-gray-500 leading-7">
                                “{{ $data->testimonial }}”
                            </p>
                            <p class="text-dark mt-7">
                                <span class="font-semibold">{{ $data->name }},</span> <span
                                    class="text-gray-500">{{ $data->position }}</span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Partner --}}
            <div class="mx-auto mt-24">
                <div class="grid grid-cols-2 gap-0.5 md:grid-cols-5">
                    @foreach ($partners as $data)
                        <div class="flex justify-center col-span-1 px-8">
                            <img class="h-24 w-full object-contain" src="{{ asset('storage/partner/' . $data->logo) }}"
                                alt="logo">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @push('js-internal')
        <script>
            @if (Session::has('success'))
                Swal.fire(
                    'Success!',
                    '{{ Session::get('success') }}',
                    'success'
                )
            @endif

            @if (Session::has('error'))
                Swal.fire(
                    'Error!',
                    '{{ Session::get('error') }}',
                    'error'
                )
            @endif
        </script>
    @endpush
</x-guest-layout>
