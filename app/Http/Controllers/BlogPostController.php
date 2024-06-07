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
        $posts = BlogPost::where('user_id',request()->user()->id)->paginate();
        //return view("dashboard",compact('posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogPost $blogPost)
    {// in this case id == foreign id of BlogPost ie id == 'user_id' . (blog_post[user_id]------>user[id]) 
        if( $blogPost->user_id  !==  request()->user()->id  ){
            abort(403);
        }
        //return view('note.show', ['note' => $blogPost]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogPost $blogPost)
    {
        if( $blogPost->user_id  !==  request()->user()->id  ){
            abort(403);
        }
        $blogPost->delete();
        //return to_route('note.index')->with('message', 'Note was deleted');
        
    }
}
