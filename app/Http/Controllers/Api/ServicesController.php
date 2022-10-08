<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServicesResource;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function getAllservices($limit=null){
        if($limit){
            return ServicesResource::collection(Service::take($limit)->get()); 
        }
        return ServicesResource::collection(Service::all());
    }
    public function getservice($slug){
       
        return new ServicesResource(Service::where('slug',$slug)->first());
    }
}
