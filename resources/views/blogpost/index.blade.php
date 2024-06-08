<x-app-layout>
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                     <div class="">
        <a href="{{ route('post.create') }}" class="">
            New Note
        </a>
        <div class="">
            @foreach ($blogPosts as $blogPost)
                <div class="">
                    <div class="">
                        {{($blogPost->title)}}
                    </div>
                    <div class="">
                        <a href="{{ route('post.show', $blogPost) }}" class="">View</a>
                        <a href="{{ route('post.edit', $blogPost) }}" class="">Edit</a>
                        <form action="{{ route('post.destroy', $blogPost) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="">Delete</button>
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
            </div>
        </div>
    </div>
   

   


</x-app-layout>
