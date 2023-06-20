<?php
require_once 'linkmeta/linkmeta.php';
?>
    
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Jim's Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  
</nav>
<!--Navbar-->

<div class="container-fluid">
    <div class="row">

      <!-- Sidebar -->
      <div class="custom-margin  col-3">
        <div class="bg-dark full-height">
          <div class="text-muted small fw-bold text-uppercase px-3">
            CORE
          </div>
          <ul class="navbar-nav">
            <li>
              <a href="#" class="nav-link px-3 text-white active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Interface
              </div>
            </li>
            <li>
              <a class="nav-link text-white px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span>Pending Books</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                      <span>Dashboard</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#" class="text-white nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Reserved Dates</span>
                  </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Addons
              </div>
            </li>
            <li>
              <a href="#" class=" text-white nav-link px-3">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Charts</span>
              </a>
            </li>
            <li>
              <a href="#" class="text-white nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Tables</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
<?php
      require_once 'linkmeta/scripts.php';
?>
   