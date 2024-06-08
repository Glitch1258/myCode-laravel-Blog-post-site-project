<x-app-layout>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-white-900 dark:text-gray-100 h-screen flex flex-col">
        <h1>Create Post</h1>
        <form action="{{ route('post.store') }}" method="POST" class="flex flex-col flex-grow">
            @csrf
            <textarea name="title" rows="3" class="bg-black block mt-5 w-full max-w-[calc(100vw-100px)] mx-auto text-white-900" placeholder="Enter post title here"></textarea>
            <textarea name="body" class="bg-black block mt-5 w-full max-w-[calc(100vw-100px)] mx-auto text-white-900 flex-grow" placeholder="Post here"></textarea>
            <div class="flex items-center mt-5">
                <a href="{{ route('dashboard') }}" class="mr-4 block bg-green-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Back
                </a>
                <button class="block bg-green-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-app-layout>





<!-- w-full: Makes the textarea take up the full available width.
max-w-[calc(100vw-100px)]: Uses a custom CSS value to set the maximum width to the full viewport width minus 100 pixels (50 pixels for each side).
mx-auto: Centers the textarea horizontally by setting the left and right margins to auto. -->