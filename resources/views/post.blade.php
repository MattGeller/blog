<x-layout>
    <article>
        <h1>
            {{ $post->title }}
        </h1>

        <x-author-and-category :post="$post"></x-author-and-category>

        <div>
            {!! $post->body !!}
        </div>
    </article>

    <a href="/">Go Back</a>
</x-layout>
