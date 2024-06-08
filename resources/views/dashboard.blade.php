<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="flex">
                    <a href="{{ route('post.create') }}" class="mb-10 p-5 block bg-green-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Create New Post
                    </a>
                </div>

                @foreach ($blogPosts as $blogPost)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-5 mb-5">

                    <div class="flex mt-1 mb-1">
                        <h1>Title  :   {{($blogPost->title)}}</h1>
                        <a href="{{ route('post.show', $blogPost->id) }}" class="ml-2 mr-2 block bg-green-500 text-white px-2 py-2 rounded hover:bg-blue-700">View</a>
                        <a href="{{ route('post.edit', $blogPost->id) }}" class="mr-2 block bg-green-500 text-white px-2 py-2 rounded hover:bg-blue-700">Edit</a>
                        <form action="{{ route('post.destroy', $blogPost->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="mr-2 block bg-green-500 text-white px-2 py-2 rounded hover:bg-blue-700">Delete</button>
                        </form>
                    </div>
                   
                </div>
                @endforeach
            </div>

            <div class="p-6">
                {{ $blogPosts->links() }}
            </div>

        </div>

    </div>






</x-app-layout>

