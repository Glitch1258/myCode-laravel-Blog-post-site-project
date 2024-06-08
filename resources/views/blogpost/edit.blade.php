<x-app-layout>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-white-900 dark:text-gray-100 h-screen flex flex-col pb-20">
        <h1 class="mt-5">Edit your post</h1>
        <form action="{{ route('post.update',  $blogPost->id) }}" method="POST" class="flex flex-col flex-grow">
            @csrf
            @method('PUT')
            <label class="mt-5 "> Post title </label>
            <textarea name="title" rows="3" class="bg-black block mt-5 w-full max-w-[calc(100vw-100px)] mx-auto text-white-900" placeholder="Edit post title hear">{{ $blogPost->title }}</textarea>
            <label class="mt-5 "> Post text </label>
            <textarea name="body" rows="10" class="bg-black block mt-5 w-full max-w-[calc(100vw-100px)] mx-auto text-white-900 flex-grow"placeholder="Enter your post here">{{ $blogPost->body }}</textarea>
            <div class="flex items-center mt-5">
                <a href="{{ route('dashboard') }}" class="mr-4 block bg-green-500 text-white px-4 py-2 rounded hover:bg-blue-700">Back</a>
                <button class="block bg-green-500 text-white px-4 py-2 rounded hover:bg-blue-700">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>