<nav class="navbar p- navbar-expand-lg bg-dark sticky-top " data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?page=home">Jims Private Resort</a>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php?page=home">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="index.php?page=aboutus">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="index.php?page=reservation">Reserve Now!</a>
        </li>
       
      </ul>
   <!--For Register -->   
<ul class="navbar-nav">
   
<?php if (isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn']) { ?>
    <li class="nav-item">
        <a class="nav-link me-1" href="index.php?page=profile">
            <?php echo $_SESSION['fname']; ?>'s Profile
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link me-1" href="index.php?page=logout">Sign-out</a>
    </li>
<?php } else { ?>
    <li class="nav-item">
        <a class="nav-link me-1" href="index.php?page=login">Sign-in</a>
    </li>
    <li class="nav-item">
        <a class="nav-link me-1" href="index.php?page=register">Register</a>
    </li>
<?php } ?>

</ul>


  <!--For Register --> 
</div>
  </div>
</nav>