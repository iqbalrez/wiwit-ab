<x-guest-layout>
    @section('title', 'Contact')
    <section class="relative flex items-center w-full bg-[#E1ECF0]"
        style="background-color:#E1ECF0; background-image: url('<?= asset('assets/SG-WIWIT-01.svg') ?>'); background-size: cover; background-position: right top">
        <div class="relative items-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 md:max-w-6xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="relative items-center m-auto lg:inline-flex sm:order-first col-span-2">
                    <div class="text-center lg:text-left">
                        <div>
                            <p class="text-sm 2xl:text-lg text-primary font-light">
                                Contact Me
                            </p>
                            <p class="text-2xl font-semibold tracking-tight text-dark sm:text-5xl">
                                Wanna talk or ask something<span class="text-primary">?</span>
                            </p>
                            <p
                                class="mx-auto lg:mx-0 mt-3 text-sm md:text-xl tracking-tight leading-8 text-gray-600 font-light">
                                I'm always open to discuss your project, or just to say hi. Don't hesitate to
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative flex items-center w-full" id="contact">
        <div
            class="flex justify-center relative items-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 md:max-w-6xl">
            <div class="grid md:grid-cols-2 gap-8">
                <div class="h-full pr-6">
                    <p class="mt-3 mb-12 text-md text-gray-600 ">
                        If you have any questions or want to know more about me, feel free to contact me.
                    </p>
                    <ul class="mb-6 md:mb-0 space-y-6">
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded text-primary">
                                <ion-icon name="location" class="w-7 h-7"></ion-icon>
                            </div>
                            <div class="ml-4 mb-4">
                                <h3 class="mb-2 text-md font-medium leading-6 text-dark ">Our
                                    Address
                                </h3>
                                <p class="text-gray-600 ">{{ $contact->address }}
                                </p>
                            </div>
                        </li>
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded text-primary">
                                <ion-icon name="call" class="w-7 h-7"></ion-icon>
                            </div>
                            <div class="ml-4 mb-4">
                                <h3 class="mb-2 text-md font-medium leading-6 text-dark ">Contact
                                </h3>
                                <p class="text-gray-600">{{ $contact->personal_email }}</p>
                                <p class="text-gray-600">{{ $contact->office_email }}</p>
                            </div>
                        </li>
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded text-primary">
                                <ion-icon name="time" class="w-7 h-7"></ion-icon>
                            </div>
                            <div class="ml-4 mb-4">
                                <h3 class="mb-2 text-md font-medium leading-6 text-dark ">Working
                                    hours</h3>
                                <p class="text-gray-600">{{ $contact->working_hours }}</p>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card h-fit max-w-6xl p-5 md:p-12 bg-dark rounded-2xl ces" id="form">

                    <h2 class="mb-4 text-2xl font-semibold text-white">
                        Send me a message
                    </h2>
                    <form action="{{ route('user.message.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <div class="mx-0 mb-1 sm:mb-4 space-y-6">
                                <div>
                                    <label for="name" class="block mb-2 text-sm text-white">Name *</label>
                                    <input type="text" id="name" name="name"
                                        class="bg-gray-50 border border-gray-50 text-dark text-sm rounded-lg focus:outline-none block w-full py-3"
                                        placeholder="Jhon" required>
                                </div>
                                <div>
                                    <label for="email" class="block mb-2 text-sm text-white">Email address *</label>
                                    <input type="text" id="email" name="email"
                                        class="bg-gray-50 border border-gray-50 text-dark text-sm rounded-lg focus:outline-none block w-full py-3"
                                        placeholder="example@company.com" required>
                                </div>
                            </div>
                            <div class="mb-6">
                                <label for="message" class="block mb-2 text-sm text-white ">How we can help?</label>
                                <textarea id="message" rows="8" name="message"
                                    class="block p-2.5 w-full bg-gray-50 border border-gray-50 text-dark text-sm rounded-lg focus:outline-none "
                                    placeholder="I need help with this problem"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit"
                                class="w-full bg-primary text-white px-6 py-3 font-xl rounded-md sm:mb-0">Send
                                Message</button>
                        </div>
                    </form>
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
