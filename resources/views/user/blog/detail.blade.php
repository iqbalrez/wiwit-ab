<x-guest-layout>
    <section>
        <section class="relative flex items-center w-full bg-[#E1ECF0]">
            <div
                class="flex items-center justify-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
                <div class="relative flex-col items-start m-auto align-middle">
                    <div class="relative items-center m-auto lg:inline-flex sm:order-first col-span-2">
                            <div class="text-center lg:text-center">
                                <div>
                                    <p class="2xl:text-sm  text-primary font-semibold">
                                        {{ $blog->blogCategory->title }}
                                    </p>
                                    <p class="mb-8 text-2xl font-bold tracking-tight text-dark sm:text-xl">
                                        {{ $blog->title }}
                                    </p>
                                    <p class="text-sm font-semibold text-dark">
                                        {{ $blog->author }}
                                    </p>
                                    <p class="text-sm font-normal text-gray-500">
                                        {{ date('d-F-Y', strtotime($blog->published_date)) }}
                                    </p>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-4xl mx-auto">
            @foreach ($blogs as $data)
                <div class="px-8 mx-auto transform -translate-y-20 sm:-translate-y-14">
                    <img class="rounded-lg w-full mx-auto md:max-h-[500px] object-cover object-center"
                        src="{{ asset('storage/blogs/thumbnail/' . $data->thumbnail) }}" alt="">
                </div>

                <div class="max-w-4xl mx-auto px-8 mt-6">
                    <p class="font-normal leading-relaxed text-justify tracking-tight text-sm 2xl:text-md text-black">
                        {!! $data->content !!}
                    </p>
                </div>

                <div
                    class="flex items-center justify-center px-8 w-full mt-6 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-4xl">
                    <div class="flex items-center justify-center mt-14">
                        <a href="{{ route('blog.index') }}"
                            class="flex items-center justify-center text-sm px-8 py-3.5 mt-4 md:mt-0 rounded-full text-grey-500 bg-gray-200 hover:bg-[#435660] focus:outline-none focus:text-dark">
                            Kembali ke blog
                        </a>
                    </div>
                </div>
            @endforeach
        </section>
</x-guest-layout>
