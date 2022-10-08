@extends('master')
@section('content')
<section class="hero is-black">
    <div class="hero-body">
        <div class="container">
            <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                  <li>
                    <a href="url('/')">
                     
                      <span>Accueil</span>
                    </a>
                  </li>
                  <li class="is-active">
                    <a href="url('/blog')">
                      
                      <span>Blog</span>
                    </a>
                  </li>
                
                </ul>
              </nav>
         <p class="title">
        Mes derniers posts
      </p>   
      <button class="button is-warning">click here</button>
        </div>
      
   
    </div>
  </section>

  <div class="container">
   <div class="columns is-marginless">
    <div class="column">
      <div class="tabs is-toggle">
        <ul>
          <li class="@if($status) is-active @endif">
            <a href="{{url('/blog')}}">
              <span class="icon is-small"><i class="fas fa-image" aria-hidden="true"></i></span>
              <span>All</span>
            </a>
          </li>
          @foreach($categories as $categorie)
          <li class="@if($categorie->selected==1) is-active @endif">
            <a href="{{url('/posts/'.$categorie->slug)}}">
              <span class="icon is-small"><i class="fas fa-image" aria-hidden="true"></i></span>
              <span>{{$categorie->name}}</span>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
   </div>
    @foreach($posts->chunk(2) as $chunk)
    <div class="columns is-marginless">
        @foreach($chunk as $post)
    <div class="column">
        <div class="card">
            <div class="card-image">
              <a href="{{ url('blog/'.$post->slug)}}">
                <img src="{{ asset('storage/'.$post->image)}}" alt="Placeholder image">
              </a>
            </div>
            <div class="card-content">
              <div class="media">
               
                <div class="media-content">
                  <p class="title is-4">{{$post->title}}</p>
                
                </div>
              </div>
          
              <div class="content">
                {{$post->excerpt}}
                <small>
                  <a href="{{url('/posts/'.$post->category->slug)}}">{{$post->category->name}}</a>
                </small>
                <br>
                <time>{{Carbon\Carbon::parse($post->created_at)->toFormattedDateString()}}</time>
              </div>
            </div>
          </div>
          
    </div>
    @endforeach
    </div>
   @endforeach
   
 <div class="is-marginless columns">
<div class="column is-half" align="left">
    @if(!($posts->currentPage() ==1))
     <a href="{{$posts->previousPageUrl()}}" class="button is-dark"><span>Precedent</span></a>
    @endif
</div>
<div class="column is-half" align="right">
    @if(($posts->hasMorePages()))
     <a href="{{$posts->nextPageUrl()}}" class="button is-dark"><span>next</span></a>
    @endif
</div>
 </div>
  </div>
@endsection