<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">KY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "About")? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Posts")? 'active' : '' }}" href="/posts">Blog</a>
        </li>
      </ul>
      @auth
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="/admin" class="nav-link">Admin</a>
       <a href="/admin/dashboard"></a>
        </li>
        <li>
          <a href="/logout" class="nav-link"><i class="bi bi-box-arrow-left"></i> Logout</a>
        </li>  
      </ul>
      @else
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
      </ul> 
  
      @endauth
              
    </div>
  </div>
</nav>