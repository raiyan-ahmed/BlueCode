<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BlueCode</title>

    <!--Link CSS File-->
    <link rel="stylesheet" href="Style/buy-style.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- google Montserrat  font  -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet" />
    
    <style>
      body{
        background: #D1E9F7;
      }
      input{
        height:40px;
        width:80px;
        background:#0275d8;
        border:none;
        color:white;
        border-radius:5px;
      }
      nav{
        background: rgb(68,151,200);
          background: linear-gradient(90deg, rgba(68,151,200,1) 0%, rgba(169,202,222,1) 44%, rgba(72,152,168,1) 100%);
        }
        #delivery_info img{
          height:500px;
        }
        #delivery_info input{
          height:40px;
          width:180px;
          background:#0275d8;
          border:none;
          color:white;
          border-radius:5px;
        }
         footer {
          background: rgb(68,151,200);
          background: linear-gradient(90deg, rgba(68,151,200,1) 0%, rgba(169,202,222,1) 44%, rgba(72,152,168,1) 100%);
        }

    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><span class="decorating">Blue</span>Code</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#products">Products</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="delivery_details.php">Delivery_Details</a>
      </li>
      <li class="nav-item-active">
      <form class="d-flex ml-5">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn btn-primary" type="submit">Search</button>
        </form>
      </li>
      
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <?php
      echo "<br><a href='logout.php'><input type='button' value='Logout' name='logout'></a>";
      ?>
    </form>
    
  </div>
</nav>
<main class="main">

<h3 class="text-center mt-5 mb-3" id="products">Our Products</h3>

    <div class="row ">
      <div class="col-md-9 col-lg-9 col-sm-7">
        <div id="all-products" class="">
        </div>
      </div>
      <div class="col-md-3 col-lg-3 col-sm-5 cart-main">
        <div class="cart" id="my-cart">
          <table class="table">
            <thead>
              <h1>My-Cart</h1>
              <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Total Added-Products:</th>
                <td> <span id="total-Products">0</span></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th>Price:</th>
                <td>$ <span id="price">0</span></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th>Delivery-Charge:</th>
                <td>$ <span id="delivery-charge">20</span></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th>Total-Tax:</th>
                <td>$ <span id="total-tax">0</span></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">Total</th>
                <td colspan="2">$ <span id="total">0</span></td>
                <td></td>
              </tr>
            </tbody>
          </table>
          <div class="parces text-center">
            <button class="btn btn-primary text-center">Buy Now</button>
          </div>
        </div>
      </div>
    </div>
  </main>

<!-- Delivery Details Part -->

<div class="container mt-5" id="delivery_info">
  <h3 class="text-center mb-3">Give Information for Home Delivery</h3>
  <div class="card mb-3">
  <img class="card-img-top" src="Images/delivery-det.png" alt="Card image cap">
  <div class="card-body">
  <a class="btn btn-primary" href="delivery_details.php">Submit Your Details</a>
  </div>
</div>
</div>

<!-- Footer -->
<footer class="bg-light text-center text-lg-start mt-5">
  <!-- Copyright -->
  <div class="text-center p-3">
    © 2022 Copyright:
    <a class="text-dark" href=" ">Raiyan Ahmed</a>
  </div>
</footer>
<!-- add javascript  file  -->
<script src="JS/buy.js"></script>
  </body>
</html>