<x-app-layout>
    <div class="">
        <div class="">
            <h1 class="">post : {{ $blogPost->created_at }}</h1>
            <div class="">
                <a href="{{ route('post.edit', $blogPost) }}" class="">Edit</a>
                <form action="{{ route('post.destroy', $blogPost) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="">Delete</button>
                </form>
            </div>
        </div>
        <div class="">
            <div class="">
                {{ $blogPost->body }}
            </div>
        </div>
    </div>
</x-app-layout>