<x-app-layout>
    <!-- <x-slot name="Create blog post">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
         Create blog post
        </h2>
       
    </x-slot> -->

    <div class="p-6 text-gray-900 dark:text-gray-100">
        <h1> create post</h1>
        <form action="{{ route('post.store') }}" method="POST" class="">
            @csrf
            <textarea name="title" rows="3" class="" placeholder="Enter post title hear"></textarea>
            <textarea name="body" rows="10" class="" placeholder="Post here"></textarea>
            <div class="">
                <a href="{{ route('dashboard') }}" class="">Cancel</a>
                <button class="">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
