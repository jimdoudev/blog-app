@extends('layouts.app')


@section('content')
<h1 class="text-5xl text-center my-10">My Posts</h1>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 px-12 max-w-7xl mx-auto">
    @foreach ($posts as $post)
        <x-blog.article
            :title="$post->title"
            :excerpt="$post->excerpt"
            :slug="$post->slug"
        />
    @endforeach
</div>

@endsection
