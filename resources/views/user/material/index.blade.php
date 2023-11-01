<x-guest-layout>

    {{-- Hero --}}
    <section class="relative flex items-center w-full bg-[#E1ECF0]">
        <div class="relative items-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="relative items-center m-auto lg:inline-flex sm:order-first col-span-2">
                    <div class="text-center lg:text-left">
                        <div>
                            <p class="text-sm 2xl:text-lg text-primary font-light">
                                Material
                            </p>
                            <p class="text-2xl font-semibold tracking-tight text-dark sm:text-5xl">
                                Empower yourself <br>for success<span class="text-primary">.</span>
                            </p>
                            <p class="mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-gray-600 font-light">
                                Unlock your success potential with our transformative business courses
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Learning Resources --}}
    <section class="relative flex items-center w-full">
        <div class="relative items-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-7xl">
            <p class="text-3xl 2xl:text-3xl font-semibold text-dark">
                Discover the best learning resources<span class="text-primary">.</span>
            </p>
            <div class="block md:grid md:grid-cols-6 md:gap-8 mt-16">
                <div class="block mb-8 md:col-span-2 lg:col-span-1">
                    <div class="mb-6 ">
                        <label for="year" class="block mb-2 text-sm font-medium text-dark">Year</label>
                        <select name="year" id="year"
                            class="bg-gray-50 border-none text-dark text-sm rounded-lg focus:outline-none min-w-full py-3">
                            <option id="" name="" value="" selected>Any year</option>
                            @for ($i = 2023; $i >= 2016; $i--)
                                <option id="{{ $i }}" name="{{ $i }}" value="{{ $i }}">
                                    {{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="category" class="block mb-2 text-sm font-medium text-dark">Category</label>
                        <select name="category" id="category"
                            class="bg-gray-50 border-none text-dark text-sm rounded-lg focus:outline-none min-w-full py-3">
                            <option value="" selected>All</option>
                            @foreach ($materialCategories as $data)
                                <option id="{{ $data->id }}" name="{{ $data->id }}" value="{{ $data->id }}">
                                    {{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="download" class="block mb-2 text-sm font-medium text-dark">Download</label>
                        <select name="download" id="download"
                            class="bg-gray-50 border-none text-dark text-sm rounded-lg focus:outline-none w-full py-3">
                            <option value="" selected>Any</option>
                            <option id="100" name ="100" value="101,9999999">> 100
                            </option>
                            <option id="50" name ="50" value="51,100">51- 100</option>
                            <option id="10" name ="10" value="11,50">11 - 50</option>
                            <option id="0" name ="0" value="0,10">0 - 10</option>
                        </select>
                    </div>

                    <button id="run-filter" name="run-filter"
                        class="inline-flex w-full items-center justify-center text-sm px-8 py-3.5 rounded-full text-white bg-dark hover:bg-[#435660] font-medium">
                        Run filter
                    </button>
                </div>

                <div class="col-span-4 lg:col-span-5">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8" id="material-list">
                        @foreach ($materials as $data)
                            <a href="{{ route('material.download', $data->id) }}">
                                <div class="bg-white shadow-sm p-4 rounded-xl border border-gray-100"
                                    onclick="download('{{ $data->id }}')">
                                    <div class="flex gap-3 items-start">
                                        <div class="w-28 h-36">
                                            <img src={{ $data->thumbnail ? asset('storage/materials/' . $data->thumbnail) : asset('assets/default.png') }}
                                                class="hidden border border-gray-100 md:block w-28 h-36 object-center object-cover rounded-lg bg-gray-50 mr-4"
                                                alt="">
                                        </div>
                                        <div>
                                            <div
                                                class="flex items-center rounded-lg justify-center py-2 text-sm px-6 text-white bg-primary mb-3 w-fit">
                                                <span>{{ $data->materialCategory->name }}</span>
                                            </div>
                                            <p
                                                class="line-clamp-1 font-semibold text-sm xl:text-md tracking-tight leading-7 text-dark">
                                                {{ Str::limit($data->title, 50) }}
                                            </p>
                                            <p class="text-sm 2xl:text-sm font-normal text-gray-500 mb-3">
                                                {{ $data->author }}
                                            </p>
                                            <p class="text-sm 2xl:text-sm font-normal text-gray-500">
                                                {{ $data->download_count }} downloads
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    @push('js-internal')
        <script>
            //run filter
            $('#run-filter').click(function() {
                var year = $('#year').val();
                var category = $('#category').val();
                var download = $('#download').val();
                console.log(download);

                $.ajax({
                    url: "{{ route('material.filter') }}",
                    type: "GET",
                    data: {
                        year: year,
                        category: category,
                        download: download,
                    },
                    success: function(data) {
                        $('#material-list').html(data);
                    }
                });
            });
        </script>
    @endpush


</x-guest-layout>
