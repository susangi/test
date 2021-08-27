<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class HomeController extends Controller
{
    public function index(){

        // $post_comments = Post::join('comments', 'posts.id', '=', 'comments.post_id')
        //        ->get(['posts.*', 'comments.*']);
// $post = Post::all();
// $comment = Comment::all();
        
            //    echo($post_comments);

            $post = Post::with('comments')->get();;
           
            // dd($post);
        return view ('viewPost',compact('post'));
    }
}
