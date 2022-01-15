<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
  public function index()
  {
     $posts = DB::table('posts')->get();
        
     return response()->json([
         'posts' => $posts
     ], 200);
  }

  
}