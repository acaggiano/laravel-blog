<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      <a class="nav-link" href="/">Home</a>
    
    <div class="ml-auto row">
      @if(Auth::check())
        <a class="nav-link" href="#">{{ Auth::user()->name}}</a>
        <a class="nav-link" href="/logout">Logout</a>
      @else
        <a class="nav-link" href="/login">Login</a>
        <a class="nav-link" href="/register">Register</a>
      @endif
    </div>
    </nav>
  </div>
</div>