<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Internship PKT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Admin") ? 'active' : '' }}" href="/admin">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "User") ? 'active' : '' }}" href="/user">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Category") ? 'active' : '' }}" href="/categories">Category</a>
        </li>
      </ul>
    </div>
  </div>
</nav>