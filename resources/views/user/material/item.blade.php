@foreach ($materials as $data)
    <a href="{{ asset('storage/materials/' . $data->file) }}" target="_blank">
        <div class="bg-white shadow-sm p-4 rounded-xl" onclick="download('{{ $data->id }}')">
            <div class="flex gap-3 items-center">
                <div>
                    <img src={{ $data->thumbnail ? asset('storage/materials/' . $data->thumbnail) : asset('assets/default.png') }}
                        class="w-28 h-32 hidden md:block object-center object-cover rounded-lg bg-gray-50 mr-4"
                        alt="">
                </div>
                <div>
                    <div
                        class="flex items-center rounded-lg justify-center py-2 text-sm px-6 text-white bg-primary mb-3 w-fit">
                        <span>{{ $data->materialCategory->name }}</span>
                    </div>
                    <p class="line-clamp-2 font-semibold text-lg xl:text-lg tracking-tight leading-7 text-dark">
                        {{ $data->title }}
                    </p>
                    <p class="text-sm 2xl:text-sm font-normal text-gray-500 mb-3">
                        {{ $data->author }}</p>
                    <p class="text-sm 2xl:text-sm font-normal text-gray-500">
                        {{ $data->download_count }} downloads</p>
                </div>
            </div>
        </div>
    </a>
@endforeach
