<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "<script>location.href='homepage.php'</script>";
} else {
    echo "<script>alert('Do not access through URL')</script>";
    echo "<script>location.href='index.php'</script>";
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BlueCode</title>

    <!--Link CSS File-->
     <link rel="stylesheet" href="Style/buy-style.css"/> 

     <!--Adding Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- google Montserrat  font  -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet" />
    
    <style>
      body{
        background: #D1E9F7;
        margin:0%;
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
        .logo img{
          width:22%;
          height:20%;
        }
        /*********Details Part Style**********/
.details-container {
    display: flex;
    flex-direction: row;
    width: 100%;
    background: rgb(68,151,200);
    background: linear-gradient(90deg, rgba(68,151,200,1) 0%, rgba(169,202,222,1) 44%, rgba(72,152,168,1) 100%);
    color: black;
    margin-top: 75px;
    padding-top: 20px;
    justify-content: space-evenly;
}

.info-title {
    margin-bottom: 15px;
}

.basic-info p {
    margin-top: 3px;
}

.social-icon {
    color: black;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.social-icon i {
    color: black;
}

/***** Footer ******/
footer {
          width: 100%;
          background: rgb(68,151,200);
          background: linear-gradient(90deg, rgba(68,151,200,1) 0%, rgba(169,202,222,1) 44%, rgba(72,152,168,1) 100%);
          color: black;
          text-align: center;
          padding-top: 50px;
          font-size: 16px;
          border:1px solid #4d9dcb; 
          
        }
        
    </style>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="logo d-flex justify-content-start ml-1">
        <img src="Images/Blue_Code_hm.png" alt="logo">
        <a class="navbar-brand ml-3" href="#"><span class="decorating">Blue</span>Code</a>
      </div>
  
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
        <a class="nav-link" href="#delivery_info">Delivery Details</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#contact">Contact</a>
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

<div class="container mt-5 mb-5" id="delivery_info">
  <h3 class="text-center mb-3">Give Information for Home Delivery</h3>
  <div class="card mb-3">
  <img class="card-img-top" src="Images/delivery-det.png" alt="Card image cap">
  <div class="card-body">
  <a class="btn btn-primary" href="delivery_details.php">Submit Your Details</a>
  </div>
</div>
</div>

<!-- About us part -->
<div class="details-container mb-0" id="contact">
        <div class="basic-info">
            <h3 class="info-title">BlueCode</h3>
            <p><i class="fa-solid fa-location-dot"></i> Sylhet Sadar, Sylhet-3100</p>
            <p><i class="fa-solid fa-envelope"></i> blue_code@support.com</p>
            <p><i class="fa-solid fa-phone"></i> +880821000000</p>
            <p><i class="fa-solid fa-phone"></i> (Available : 10:00am to 07:00pm)</p>
        </div>
        <div class="social-info">
            <h3 class="info-title">Follow Us</h3>
            <div class="social-icon">
                <div>
                    <a target="_blank" href="https://web.facebook.com/"> <i
                            class="fa-brands fa-facebook-square"></i></a>
                </div>
                <div>
                    <a target="_blank" href="https://www.instagram.com/"> <i
                            class="fa-brands fa-instagram-square"></i></a>
                </div>
                <div>
                    <a target="_blank" href="https://www.linkedin.com/signup"> <i class="fa-brands fa-linkedin"></i></a>
                </div>
                <div>
                    <a target="_blank" href="https://www.youtube.com"> <i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>


<!--------Footer Section--------->
<footer>
        <p>Copyright <i class="fa-regular fa-copyright"></i> 2022 BlueCode.com</p>
      </footer>

<!-- add javascript  file  -->
<script src="JS/buy.js"></script>

  </body>
</html>