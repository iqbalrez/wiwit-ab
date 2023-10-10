<x-guest-layout>
    <section class="relative flex items-center w-full bg-[#E1ECF0]">
        <div class="flex items-center justify-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="relative items-center m-auto lg:inline-flex sm:order-first col-span-2">
                    <div class="text-center lg:text-center">
                        <div>
                            <p class="2xl:text-sm  text-primary font-semibold">
                                {{ $blogs->blogCategory->title }}
                            </p>
                            <p class="mb-8 text-2xl font-bold tracking-tight text-dark sm:text-xl">
                                {{ $blogs->title }}
                            </p>
                            <p class="text-sm font-semibold text-dark">
                                {{ $blogs->author }}
                            </p>
                            <p class="text-sm font-normal text-gray-500">
                                {{ date('d-F-Y', strtotime($data->published_date)) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-4xl w-full px-8 mx-auto transform -translate-y-20 sm:-translate-y-14">
            <img class="rounded-lg" src="{{ asset('storage/blogs/thumbnail/' . $blogs->thumbnail) }}" alt="">
        </div>

        <div class="flex items-center justify-center px-8 w-full mt-0  mx-auto md:px-12 lg:px-14 xl:px-0 max-w-4xl">
            <div>
                <P class="overflow-x-auto font-normal text-left text-sm 2xl:text-xl text-black leading-8">
                  {{ $blogs->content }}
                </P>
                <div class="flex items-center justify-center mt-14">
                    <a href="{{ route('blog.index') }}"
                        class="flex items-center justify-center text-sm px-8 py-3.5 mt-4 md:mt-0 rounded-full text-grey-500 bg-gray-200 hover:bg-[#435660] focus:outline-none focus:text-dark">
                        Kembali ke blog
                    </a>
                </div>
</section>
</x-guest-layout>