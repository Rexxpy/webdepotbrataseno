<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link link-dark active<?php echo e(Request::is('dashboard') ? 'active' : ''); ?>" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-dark active <?php echo e(Request::is('dashboard/menu') ? 'active' : ''); ?>" href="/dashboard/menu">
            <span data-feather="file-text"></span>
            Data menu
          </a>
        </li>
      </ul>
    </div>
  </nav><?php /**PATH C:\Users\andik\Documents\app\proyekeas\resources\views/dashboard/layouts/sidebar.blade.php ENDPATH**/ ?>