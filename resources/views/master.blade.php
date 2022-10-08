
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
    @yield('stylecaroussel')
</head>
<body>
<nav class="navbar is-warning">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://bulma.io">
        
          <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
        
      </a>
      <div class="navbar-burger" data-target="navMenuColorwarning-example">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  
    <div id="navMenuColorwarning-example" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="{{url('/')}}">
          Accueil
        </a>
        <a class="navbar-item" href="{{url('/services')}}">
            Services
          </a>
          <a class="navbar-item" href="{{url('/about')}}">
            A propos
          </a>
          <a class="navbar-item" href="{{url('/blog')}}">
            Blog
          </a>
          <a class="navbar-item" href="{{url('/contact')}}">
            Contactez-nous
          </a>
      </div>
  
     
    </div>
  </nav>
  @yield('content')
  @yield('scriptcaroussel')
</body>
</html>
