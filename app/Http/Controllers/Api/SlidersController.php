<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SlidesResource;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    public function getAllslides($limit=null){
        if($limit){
            return SlidesResource::collection(Slide::take($limit)->get()); 
        }
        return SlidesResource::collection(Slide::all());
    }
    public function getslide($id){
       
        return new SlidesResource(Slide::find($id));
    }
}
