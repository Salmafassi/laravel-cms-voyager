@extends('master')

@section('content')
<section class="hero is-black">
    <div class="hero-body">
        
      <p class="title">
        {{$post->title}}
      </p>
      <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
          <li><a href="{{url('/')}}">Accueil</a></li>
          <li><a href="{{url('/blog')}}">blog</a></li>
          
          <li class="is-active"><a href="#" aria-current="page">{{$post->title}}</a></li>
        </ul>
      </nav>
      <p class="subtitle">
       {{$post->excerpt}}
      </p>
    </div>
  </section>
<div class="container">
    <div class="columns is-marginless">
        <div class="column">
            <div class="card">
                <div class="card-image">
                  <a href="{{ url('blog/'.$post->id)}}">
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
                    <br>
                    <time>{{Carbon\Carbon::parse($post->created_at)->toFormattedDateString()}}</time>
                  </div>
                </div>
              </div>
              
        </div>
        </div>
    </div>
</div>  
@endsection
