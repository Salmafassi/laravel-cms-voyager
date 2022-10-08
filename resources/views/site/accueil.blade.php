
   @extends('master')
   @section('content')
  <div class="container">

   <div class="is-divider" data-content="Nos récents services"></div>

   @foreach($services->chunk(2) as $chunk)
   <div class="columns is-marginless">
       @foreach($chunk as $service)
   <div class="column is-marginless">
       <div class="card">
           <div class="card-image ">
            <figure class="image is-16by9">
 <a href="{{ url('service/'.$service->id)}}">
               <img src="{{ asset('storage/'.$service->Image)}}" alt="Placeholder image">
             </a>
            </figure>
            
           </div>
           <div class="card-content">
             <div class="media">
              
               <div class="media-content">
                 <p class="title is-4">{{$service->title}}</p>
               
               </div>
             </div>
         
             <div class="content">
               {{$service->Description}}
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
<br>
<div class="is-divider" data-content="Nos actualités"></div>
<section class="hero is-warning">
   <div class="hero-body">
      <div class="container">
        


         @foreach($posts->chunk(2) as $chunk)
<div class="columns is-marginless">
    @foreach($chunk as $post)
<div class="column is-marginless">
    <div class="card">
        <div class="card-image">
         <figure class="image is-16by9">
 <a href="{{ url('blog/'.$post->id)}}">
            <img src="{{ asset('storage/'.$post->image)}}" alt="Placeholder image">
          </a>
         </figure>
         
        </div>
        <div class="card-content">
          <div class="media">
           
            <div class="media-content">
              <p class="title is-4">{{$post->title}}</p>
            
            </div>
          </div>
      
          <div class="content">
            {{ \Illuminate\Support\Str::limit($post->excerpt, 20,'...') }}
            <br>
            <time>{{Carbon\Carbon::parse($post->created_at)->toFormattedDateString()}}</time>
          </div>
        </div>
      </div>
      
</div>
@endforeach
</div>
@endforeach
      </div>
   </div>
</section>


  </div>
   @endsection
   @section('stylecaroussel')
<link rel="stylesheet" href="{{asset('css/bulma-carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bulma-divider.min.css')}}">
   @endsection
   @section('scriptcaroussel')
<script src="{{ asset('js/bulma-carousel.min.js')}}"></script>
<script>
   bulmaCarousel.attach('#carousel-demo', {
      slidesToScroll: 1,
      slidesToShow: 4
   });
   </script>
   @endsection