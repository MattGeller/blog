<x-layout>
{{--    @foreach ($posts as $post)--}}
{{--        <article>--}}
{{--            <h1>--}}
{{--                <a href="/posts/{{$post->slug}}">--}}
{{--                    {{ $post->title }}--}}
{{--                </a>--}}
{{--            </h1>--}}

{{--            <x-author-and-category :post="$post"></x-author-and-category>--}}

{{--            <div>--}}
{{--                {{ $post->excerpt }}--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    @endforeach--}}

    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-post-featured-card/>

        <div class="lg:grid lg:grid-cols-2">
            <x-post-card/>
            <x-post-card/>
        </div>

        <div class="lg:grid lg:grid-cols-3">
            <x-post-card/>
            <x-post-card/>
            <x-post-card/>
        </div>
    </main>
</x-layout>
