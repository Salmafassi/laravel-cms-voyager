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
                    <a href="url('/services')">
                      
                      <span>Services</span>
                    </a>
                  </li>
                
                </ul>
              </nav>
         <p class="title">
        Nos services
      </p>   
      <button class="button is-warning">click here</button>
        </div>
      
   
    </div>
  </section>

  <div class="container">
   
    @foreach($services->chunk(2) as $chunk)
    <div class="columns is-marginless">
        @foreach($chunk as $service)
    <div class="column is-marginless">
        <div class="card">
            <div class="card-image">
              <a href="{{ url('service/'.$service->id)}}">
                <img src="{{ asset('storage/'.$service->Image)}}" alt="Placeholder image">
              </a>
            </div>
            <div class="card-content">
              <div class="media">
               
                <div class="media-content">
                  <p class="title is-4">{{$service->title}}</p>
                
                </div>
              </div>
          
              <div class="content">
                {{$service->excerpt}}
                <br>
                <time>{{Carbon\Carbon::parse($service->created_at)->toFormattedDateString()}}</time>
              </div>
            </div>
          </div>
          
    </div>
    @endforeach
    </div>
   @endforeach
   

  </div>
@endsection