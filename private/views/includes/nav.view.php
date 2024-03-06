<style>
  nav ul li a:hover {
    background-color: #ccc;
    color: #fff !important;
  }
</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary p-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= ROOT ?>">
      <img src="<?= ROOT ?>/assets/logo.png" style="width:50px"> My School </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= ROOT ?>">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= ROOT ?>">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= ROOT ?>">Classes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= ROOT ?>/tests">Tests</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            USER
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= ROOT ?>/profile">Profile</a></li>
            <li><a class="dropdown-item" href="<?= ROOT ?>">Dashboard</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item" href="<?= ROOT ?>/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>