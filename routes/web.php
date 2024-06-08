<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\BlogPost;

Route::get('/', function () {
    return view('welcome');
});

// <make group hear>

//-----------------------------

Route::middleware(['auth', 'verified'])->group(function () {
    // Route::get('/note', [NoteController::class, 'index'])->name('note.index');
    // Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
    // Route::post('/note', [NoteController::class, 'store'])->name('note.store');
    // Route::get('/note/{id}', [NoteController::class, 'show'])->name('note.show');
    // Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');
    // Route::put('/note/{id}', [NoteController::class, 'update'])->name('note.update');
    // Route::delete('/note/{id}', [NoteController::class, 'destroy'])->name('note.destroy');

    Route::resource('post', BlogPostController::class);
});

//--------------------------------
Route::get('/dashboard', function () {
    $blogPosts = BlogPost::where('user_id',request()->user()->id)->paginate();
    return view('dashboard', ['blogPosts'=>$blogPosts]); 
})->middleware(['auth', 'verified'])->name('dashboard');


// </make group hear>

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
