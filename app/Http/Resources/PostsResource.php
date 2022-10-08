<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use \Illuminate\Support\Str;

class PostsResource extends JsonResource
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
            'categoryId'=>$this->category_id,
            'title'=>$this->title,
            'slug'=>$this->slug,
            'contenu'=>$this->body,
            'description'=>$this->excerpt,
            'extrait'=>Str::limit($this->excerpt,80),
            'image'=>asset('storage/'.$this->image),
            'dateCreation'=>$this->created_at,
        ];

    }
}
