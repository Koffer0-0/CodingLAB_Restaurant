

<nav class="navbar navbar-expand-lg navbar-dark" style = "background-color: rgb(128, 128, 0);">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class = "collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class = "navbar-brand" href="#">Qazan<span style = "color: rgb(255, 69, 0);">OK</span></a>
    <ul class = "navbar-nav mr-auto mt-2 mt-lg-0">
      <li class = "nav-item active">
        <a class = "nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">First Page</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">DELIVERY AT EVERY HOME</a>
      </li>
    </ul>
    <?php
        session_start();
        if ($_SESSION['user']) {
    ?> 
      <button class = "btn btn-warning m-2" onclick = "window.location.href = 'Authorization/logout.php'">
        Log out
      </button>
   
    <?php } else {
    ?>
    <button class = "btn btn-outline-warning mx-2" onclick = "window.location.href = 'Authorization/loginpanel.php'">
      Sign up
    </button>
  <?php }
    ?>
  </div>
</nav>