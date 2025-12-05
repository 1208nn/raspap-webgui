  <nav class="sb-topnav navbar navbar-expand navbar-light bg-light">
  <!-- Navbar Brand-->
  <a class="sidebar-brand-text navbar-brand ps-5" href="wlan0_info">RaspAP</a>
  <!-- Sidebar Toggle-->
  <button class="btn btn-link btn-sm order-1 order-lg-0 me-auto p-3 bd-highlight" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
  <!-- Navbar-->
  <ul class="navbar-nav ms-auto ms-md-0 me-2 me-lg-4">
    <!-- Display mode toggle -->
    <li class="nav-item p-2 mt-1">
      <button type="button" class="btn btn-link nav-link p-0" id="theme-toggle" aria-label="Toggle theme">
        <i id="theme-icon" class="fas fa-sun fa-lg text-muted"></i>
      </button>
    </li>
    <!-- Auth user -->
    <li class="nav-item mt-1">
      <a class="nav-link" href="auth_conf">
        <span class="mr-2 small nav-user"><?php echo htmlspecialchars($_SESSION['user_id'] ?? '', ENT_QUOTES); ?></span>
        <i class="fas fa-user-circle text-muted mt-2 fa-3x"></i>
      </a>
    </li>
  </ul>
</nav>
