<x-app-layout>
    <div class="">
        <h1 class="">Edit your post</h1>
        <form action="{{ route('post.update',  $blogPost->id) }}" method="POST" class="">
            @csrf
            @method('PUT')
            <textarea name="title" rows="3" class="" placeholder="Edit post title hear">{{ $blogPost->title }}</textarea>
            <textarea name="body" rows="10" class="" placeholder="Enter your post here">{{ $blogPost->body }}</textarea>
            <div class="">
                <a href="{{ route('dashboard') }}" class="">Cancel</a>
                <button class="">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>