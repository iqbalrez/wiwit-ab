<x-app-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="shadow-md border-2 bg-white rounded-2xl flex p-4">
            <div class="flex items-center justify-center mr-4">
                <ion-icon name="medal-outline" class="w-10 h-10 text-dark"></ion-icon>
            </div>

            <div class="">
                <p class="flex items-center text-xl font-bold">
                    {{ $events->count()}}
                </p>
                <p class="flex items-center text-xs 2xl:text-sm">
                    Experience
                </p>
            </div>
        </div>

        <div class="shadow-md border-2 bg-white rounded-2xl flex p-4">
            <div class="flex items-center justify-center mr-4">
                <ion-icon name="briefcase-outline" class="w-10 h-10 text-dark"></ion-icon>
            </div>

            <div class="">
                <p class="flex items-center text-xl font-bold">
                    {{ $works->count() }}
                </p>
                <p class="flex items-center text-xs 2xl:text-sm">
                    Works
                </p>
            </div>
        </div>

        <div class="shadow-md border-2 bg-white rounded-2xl flex p-4">
            <div class="flex items-center justify-center mr-4">
                <ion-icon name="grid-outline" class="w-10 h-10 text-dark"></ion-icon>
            </div>

            <div class="">
                <p class="flex items-center text-xl font-bold text-dark">
                    {{ $events->count() }}
                </p>
                <p class="flex items-center text-xs 2xl:text-sm text-dark">
                    Events
                </p>
            </div>
        </div>

        <div class="shadow-md border-2 bg-white rounded-2xl flex p-4">
            <div class="flex items-center justify-center mr-4">
                <ion-icon name="document-outline" class="w-10 h-10 text-dark"></ion-icon>
            </div>

            <div class="">
                <p class="flex items-center text-2xl text-dark">
                    {{ $blogs->count() }}
                </p>
                <p class="flex items-center text-xs 2xl:text-sm text-dark">
                    Blogs
                </p>
            </div>
        </div>

        <div class="shadow-md border-2 bg-white rounded-2xl flex p-4">
            <div class="flex items-center justify-center mr-4">
                <ion-icon name="book-outline" class="w-10 h-10 text-dark"></ion-icon>
            </div>

            <div class="">
                <p class="flex items-center text-2xl text-dark">
                    {{ $materials->count() }}
                </p>
                <p class="flex items-center text-xs 2xl:text-sm text-dark">
                    Materials
                </p>
            </div>
        </div>

        <div class="shadow-lg border-2 bg-white rounded-2xl flex p-4">
            <div class="flex items-center justify-center mr-4">
                <ion-icon name="chatbubble-outline" class="w-10 h-10 text-dark"></ion-icon>
            </div>

            <div class="">
                <p class="flex items-center text-2xl text-dark">
                    {{ $testimonials->count() }}
                </p>
                <p class="flex items-center text-xs 2xl:text-sm text-dark">
                    Testimonials
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
