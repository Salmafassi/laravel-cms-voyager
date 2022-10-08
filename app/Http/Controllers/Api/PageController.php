<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PageResource;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getpage($slug){
    $page=Page::where('slug',$slug)->first();
    return new PageResource($page);
    }
}
