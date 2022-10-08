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
                  <li >
                    <a href="#">
                      
                      <span>A propos</span>
                    </a>
                  </li>
                  <li class="is-active">
                    <a href="#">
                      
                      <span> {{$page->title}}</span>
                    </a>
                  </li>
                </ul>
              </nav>
         <p class="title">
        {{$page->title}}
      </p>   
      <button class="button is-warning">click here</button>
        </div>
      
   
    </div>
  </section>

  <div class="container">
 <div class="columns">
  <div class="column">
    {!!$page->body!!}
  </div>
 </div>
 
  </div>
@endsection