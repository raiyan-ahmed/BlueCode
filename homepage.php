<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <!-- <style>
      nav{
        background: #EBF5FB;
      }
    </style> -->
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">View Cart</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <?php
      echo "<br><a href='logout.php'><input type='button' value='logout' name='logout'></a>";
      ?>
    </form>
  </div>
</nav>

    
  </body>
</html>
<?php
$username = "";
$pass = "";

session_start();
if (isset($_SESSION['username'])) {
    echo "<h1>Hello " . $_SESSION['username'] . "</h1>";

    echo "<br><a href='products.php'>Products</a>";
    echo "<br><a href='logout.php'><input type='button' value='logout' name='logout'></a>";
    } 
    
   else{
        if ($_POST['username'] == $username && $_POST['pass'] == $pass) {
            $_SESSION['username'] = $username;
            // echo "<script>alert('valid user!')</script>";
            echo "<script>location.href='homepage.php'</script>";
        } 
        else {
            // echo "<script>alert('invalid user!')</script>";
            echo "<script>location.href='index.php'</script>";
        }
   }
   ?>