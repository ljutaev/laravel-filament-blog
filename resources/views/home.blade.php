<x-app-layout>
    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            @foreach($posts as $post)
                <x-post-item :post="$post"></x-post-item>
            @endforeach

            {{ $posts->onEachSide(1)->links() }}

        </section>

    <x-sidebar></x-sidebar>

    </div>
</x-app-layout>
