<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{$post->slug}}">
                    {{ $post->title }}
                </a>
            </h1>

            <x-author-and-category :post="$post"></x-author-and-category>

            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>
