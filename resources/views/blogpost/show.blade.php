<x-app-layout>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-white-900 dark:text-gray-100 h-screen flex flex-col">
        
            <h1 class="mb-5">post created at : {{ $blogPost->created_at }}</h1>



            <div class="">
                {{ $blogPost->body }}
            </div>

            <div class="flex items-center mt-5">
                <a href="{{ route('dashboard') }}" class="mr-4 block bg-green-500 text-white px-4 py-2 rounded hover:bg-blue-700">Back</a>
                <a href="{{ route('post.edit', $blogPost) }}"  class="mr-4 block bg-green-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</a>
                <form action="{{ route('post.destroy', $blogPost) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="block bg-green-500 text-white px-4 py-2 rounded hover:bg-blue-700">Delete</button>
                </form>
            </div>
        
        
            
        
    </div>
</x-app-layout>