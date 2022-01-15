<?php 
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);
...
use App\Models\Post;
...
public function index()
{ 
  $posts = Post::all();
 
  return response()->json([
     'posts' => $posts
  ], 200); 
}