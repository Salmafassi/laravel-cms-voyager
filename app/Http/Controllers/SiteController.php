<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class SiteController extends Controller
{
   public function index(){
      $services=Service::take(2)->get();
      $posts=Post::take(3)->get();
return view('site.accueil',['services'=>$services,'posts'=>$posts]);
   }
   public function services(){
      $services=Service::all();
   return view('site.services',['services'=>$services]); 
}
public function blog(){
   $posts=Post::paginate(2);
   $categories=Category::all();
   $status=true;
   foreach($categories as $categ){
      $categ->selected=0;
      $categ->save();
   }
   return view('site.blog',['posts'=>$posts,'categories'=>$categories,'status'=>$status]); 
}
public function contact(){
   return view('site.contact'); 
} 
public function about(){
   $page=Page::where('slug','about1')->first();
   return view('site.about',['page'=>$page]); 
}
public function show($slug){
   $post=Post::where('slug',$slug)->first();
   return view('site.show',['post'=> $post]); 
}
public function showService($id){
   $service=Service::find($id);
   return view('site.service',['service'=> $service]); 
}
public function storecontact(Request $request){
   $data=$request->validate([
      'name'=>'required',
      'email'=>'required|email',
      'message'=>'required|min:5|max:200'
   ]);
   $message=new Message();
   $message->name=$data['name'];
   $message->email=$data['email'];
   $message->message=$data['message'];
   $message->save();
   return Redirect('/contact')->with('status','votre message est envoye avec succes');
}
public function postCategory($slug){
   $categorie=Category::where('slug',$slug)->first();
$posts=$categorie->posts()->paginate(2);
$categories=Category::all();

//$Categories1=Category::where('id','!=',$id)->get();
$categorie->selected=1;
$categorie->save();
$status=false;
foreach($categories as $categ){
   if($categ->id!=$categorie->id){
      $categ->selected=0;
   $categ->save();
   }
   
}
$posts=$categorie->posts()->paginate(2);
$categories=Category::all();
return view('site.blog',['posts'=>$posts,'categories'=>$categories,'status'=>$status]); 
}
}
