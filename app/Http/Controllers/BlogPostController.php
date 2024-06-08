<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = BlogPost::where('user_id',Auth::id())->paginate();
        $blogPosts = BlogPost::paginate();
         return view('dashboard', ['blogPosts'=>$blogPosts]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogpost.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'body' => ['required', 'string'],
        ]);
        $blogPost = new BlogPost();
        $blogPost->title = $request->title;
        $blogPost->body = $request->body;
        $blogPost->user_id = $request->user()->id;
        $blogPost->save();
        return redirect()->route('dashboard')->with('message', 'posted');;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blogPost = BlogPost::findOrFail($id);


        // if ($blogPost->user_id !== request()->user()->id) {
        //     abort(403, 'Unauthorized action.');
        // }

        return view('blogpost.show', ['blogPost' => $blogPost]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogPost = BlogPost::findOrFail($id);
        if ($blogPost->user_id !== request()->user()->id) {
            abort(403, 'Unauthorized action.');
        }
        return view('blogpost.edit', ['blogPost' => $blogPost]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blogPost = BlogPost::findOrFail($id);
        if ($blogPost->user_id !== request()->user()->id) {
            abort(403, 'Unauthorized action.');
        }
        $request->validate([
            'title' => ['required', 'string'],
            'body' => ['required', 'string'],
        ]);
        $blogPost->update($request->all());
        return redirect()->route('dashboard')->with('message', 'post was updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogPost = BlogPost::findOrFail($id);
        if ($blogPost->user_id !== request()->user()->id) {
            abort(403, 'Unauthorized action.');
        }
        $blogPost->delete();
        return to_route('dashboard')->with('message', 'post was deleted');
    }
}
