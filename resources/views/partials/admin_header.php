<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid justify-content-between">
    <div class="d-flex">
      <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
        <h3>Portfolio</h3>
      </a>


    </div>



    <ul class="navbar-nav flex-row">
      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link d-sm-flex align-items-sm-center" href="#">
          <img
            src="https://mdbcdn.b-cdn.net/img/new/avatars/1.webp"
            class="rounded-circle"
            height="22"
            alt="Profile Picture"
            loading="lazy" />
          <strong class="d-none d-sm-block ms-1">
            <?php echo $user->name; ?>
          </strong>
        </a>
      </li>
      <li class="nav-item dropdown me-3 me-lg-1">
        <a
          class="nav-link dropdown-toggle"
          href="#"
          id="messagesDropdown"
          role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false">
          Messaggi
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="messagesDropdown">
          <li><a class="dropdown-item" href="#">Some news</a></li>
          <li><a class="dropdown-item" href="#">Another news</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown me-3 me-lg-1">
        <a
          class="nav-link dropdown-toggle"
          href="#"
          id="notificationsDropdown"
          role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false">
          Azioni
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationsDropdown">
          <li><a class="dropdown-item" href="#">Some news</a></li>
          <li><a class="dropdown-item" href="#">Another news</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown me-3 me-lg-1">
        <a
          class="nav-link dropdown-toggle"
          href="#"
          id="menuDropdown"
          role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false">
          ⚙️
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="menuDropdown">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>