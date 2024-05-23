<?php
session_start(); // Start session at the beginning

// Your PHP code here
?>
<!DOCTYPE html>
<html land="en">
<head>
    <meta charset="UTF=8">
    <meta name ="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../asset/style.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="about.php">Abouts</a>
        </li>

        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="menu_admin.php">Admin</a></li>
            <li><a class="dropdown-item" href="menu_user.php">User</a></li>
          </ul>
        </li> -->

        <?php
        if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == "admin") {

            echo '<li class="nav-item"><a class="nav-link active" href="menu_admin.php">Menu</a></li>';
        } 
        if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == "user") {

            echo '<li class="nav-item"><a class="nav-link active" href="menu_user.php">Menu</a></li>';
        }
        ?>
          
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="categories.php">Category</a>
        </li>

       

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="signup.php">Signup</a>
        </li>
      </ul>
      <form class="d-flex" name = "Search" action="../controller/search.php" method="POST">
        <div class="input-group">
          <input class="form-control me-2" type="search" name="username" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit" name="search" value="search">Search</button>
        </div>
      </form>
      <?php
        if (isset($_SESSION['login']) && $_SESSION['login'] == true) {

            echo '<a class="nav-link active" href="../controller/logout.php">Logout</a>';
        } else {

            echo '<a class="nav-link active" href="login.php">Login</a>';
        }
        ?>

    </div>
  </div>
</nav>
</body>
</html>        

    