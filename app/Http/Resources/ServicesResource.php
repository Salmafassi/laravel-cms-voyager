<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use \Illuminate\Support\Str;
class ServicesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"=>$this->id,
      
            'title'=>$this->title,
            'slug'=>$this->slug,
            'body'=>$this->body,
            'description'=>$this->description,
            'Image'=>asset('storage/'.$this->Image),
            'extrait'=>Str::limit($this->description,80),
            'dateCreation'=>$this->created_at,
        ];
    }
}
