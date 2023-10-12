{{-- Consultation --}}
<section class="py-24 bg-[#E1ECF0]">
    <div class="bg-[#0E3A51] rounded-3xl relative items-center w-full mx-auto p-16 max-w-6xl shadow-xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <p class="text-white text-5xl font-semibold tracking-tight">
                    Get a personal
                    consultation<span class="text-primary">.</span>
                </p>

                <div class="mt-14">
                    <div class="inline-flex items-center gap-x-3">
                        <ion-icon name="location" class="text-primary w-7 h-7"></ion-icon>
                        <p class="text-white text-lg font-semibold">Office</p>
                    </div>
                    <p class="text-white leading-7 max-w-sm mt-4 text-xs 2xl:text-sm">
                        {{ \App\Models\ContactPageSetting::first()->address }}
                    </p>
                </div>
                <div class="mt-12">
                    <div class="inline-flex items-center gap-x-3">
                        <ion-icon name="mail" class="text-primary w-7 h-7"></ion-icon>
                        <p class="text-white text-lg font-semibold">Contact</p>
                    </div>
                    <div class="text-white leading-7 max-w-sm mt-4 text-xs 2xl:text-sm">
                        <p>{{ \App\Models\ContactPageSetting::first()->personal_email }}</p>
                        <p>{{ \App\Models\ContactPageSetting::first()->office_email }}</p>
                    </div>
                </div>
                <div class="mt-12">
                    <div class="inline-flex items-center gap-x-3">
                        <ion-icon name="time" class="text-primary w-7 h-7"></ion-icon>
                        <p class="text-white text-lg font-semibold">Open Hours</p>
                    </div>
                    <div class="text-white leading-7 max-w-sm mt-4 text-xs 2xl:text-sm">
                        {{ \App\Models\ContactPageSetting::first()->working_hours }}
                    </div>
                </div>
            </div>
            <div class="p-8 bg-white shadow-lg shadow-black rounded-3xl h-fit">
                <form action="{{ route('user.consultation-request.store') }}" method="POST" id="personal-consultation"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="name" class="block mb-2 text-sm text-dark">Name <span
                                    class="text-danger">*</span></label>
                            <input type="text" id="name" name="name"
                                class="bg-gray-50 border border-gray-50 text-dark text-sm rounded-lg focus:outline-none block w-full py-3"
                                placeholder="Jhon" required>
                        </div>
                        <div>
                            <label for="phone" class="block mb-2 text-sm text-dark">Phone <span
                                    class="text-danger">*</span></label>
                            <input type="text" id="phone_number" name="phone_number"
                                class="bg-gray-50 border border-gray-50 text-dark text-sm rounded-lg focus:outline-none block w-full py-3"
                                placeholder="62 xxx xxx" required>
                            <small class="text-xs text-gray-600">contoh: 6281515144981</small>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm text-dark">Email <span
                                    class="text-danger">*</span></label>
                            <input type="text" id="email" name="email"
                                class="bg-gray-50 border border-gray-50 text-dark text-sm rounded-lg focus:outline-none block w-full py-3"
                                placeholder="email@company.com" required>
                        </div>
                        <div class="">
                            <label for="countries" class="block mb-2 text-sm text-dark">Service
                                interest in <span class="text-danger">*</span></label>
                            <select id="consultation_request_category_id" name="consultation_request_category_id"
                                class="bg-gray-50 border border-gray-50 text-dark text-sm rounded-lg focus:outline-none min-w-full py-3">
                                @foreach (\App\Models\ConsultationRequestCategory::all() as $data)
                                    <option selected>Choose Service </option>
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="subject" class="block mb-2 text-sm text-dark">Subject <span
                                class="text-danger">*</span></label>
                        <input type="text" id="subject" name="subject"
                            class="bg-gray-50 border border-gray-50 text-dark text-sm rounded-lg focus:outline-none block w-full py-3"
                            placeholder="Personal text planning" required>
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm text-dark ">How we can help? <span
                                class="text-danger">*</span></label>
                        <textarea id="message" rows="8" name="message"
                            class="block p-2.5 w-full bg-gray-50 border border-gray-50 text-dark text-sm rounded-lg focus:outline-none "
                            placeholder="I need help with this problem"></textarea>
                    </div>
                    <button type="submit"
                        class="inline-flex w-full items-center justify-center text-md px-8 py-3.5 rounded-full text-white bg-[#67BD65] hover:bg-dark focus:outline-none focus:text-white font-normal">
                        Request a Quote
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
