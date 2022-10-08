<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostsResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function getAllposts($limit=null){
        if($limit){
            return PostsResource::collection(Post::take($limit)->get()); 
        }
        return PostsResource::collection(Post::all());
    }
    public function getpost($slug){
       
        return new PostsResource(Post::where('slug',$slug)->first());
    }
}
