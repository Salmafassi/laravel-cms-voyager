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
                    <a href="#">
                      
                      <span>Contactez nous</span>
                    </a>
                  </li>
                
                </ul>
              </nav>
         <p class="title">
        Contactez-nous
      </p>  
      <p class="subtitle">
       Laissez un message
      </p>  
     
        </div>
      
   
    </div>
  </section>
<div class="container">
    @if(session('status'))
   <div class="notification is-success">{{session('status')}}</div>
    @endif
    <div class="columns is-marginless">
        <div class="tile is-ancestor is-marginless">
            <div class="tile is-parent ">
              <article class="tile is-child box notification is-warning">
                <p class="title">Telephone</p>
                <p class="subtitle">{{setting('contact.telephone')}}</p>
              </article>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child box notification is-warning">
                <p class="title">Email</p>
                <p class="subtitle">{{setting('contact.email')}}</p>
              </article>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child box notification is-warning">
                <p class="title">Réseaux sociaux</p>
                <p class="subtitle"></p>
              </article>
            </div>
            
          </div>
 
    </div>
    <div class="columns is-marginless">
        <div class="column is-9">
           {!!setting('contact.map') !!}
        </div>
        <div class="column is-3">
            <form action='/contact1' method="post">
                {{csrf_field()}}
                <div class="field">
                    <label for="nom" class="label">Nom</label>
                    <div class="control">
                <input type="text"  value="{{old('name')}}" name="name" id="nom" class="input @if($errors->has('name')) is-danger @endif" placeholder="Votre nom complet">
                    </div>
                    @if($errors->has('name'))
                       <p class="help is-danger">{{$errors->first('name')}}</p>
                       @endif
                </div>
                <div class="field">
                    <label for="email" class="label">email</label>
                    <div class="control">
                <input type="email" value="{{old('email')}}" name="email" id="email" class="input @if($errors->has('email')) is-danger @endif" placeholder="Votre email ">
                    </div>
                    @if($errors->has('email'))
                    <p class="help is-danger">{{$errors->first('email')}}</p>
                    @endif
                </div>
                <div class="field">
                    <label for="message" class="label">message</label>
                    <div class="control">
                        <textarea type="text"  name="message" id="message" class="input @if($errors->has('message')) is-danger @endif" placeholder="Votre message ">{{old('message')}}</textarea>
                    </div>
                    @if($errors->has('message'))
                    <p class="help is-danger">{{$errors->first('message')}}</p>
                    @endif
                </div>
                <button  class="button is-warning">Envoyer</button>
            </form>
        </div>
    </div>
</div>
@endsection