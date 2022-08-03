<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Log in</title>
    <style>
      form {
            background: #EBF5FB;
            padding: 15px;
            box-shadow: 0px 0px 15px 0px;
            border-radius: 10px;
        }
        
        body{
          background: rgb(68,151,200);
          background: linear-gradient(90deg, rgba(68,151,200,1) 0%, rgba(169,202,222,1) 44%, rgba(72,152,168,1) 100%);
        }
        .logo img{
          width:20%;
          height:20%;
        }
    </style>
  </head>
  <body>
    
    <div class="container-fluid">
      <div class="row justify-content-center mt-4">
        <div class="col-lg-4 col-md-6 col-sm-12">
        <form action="homepage.php" method="post">
          <div class="logo mb-5 d-flex justify-content-center">
          <img src="Images/Blue_Code.png" alt="logo">
          </div>
          <div class="mb-3 text-center">
            <h4>Log in</h4>
          </div>
              <div class="mb-3">
              <label for="fname">Username:</label>
                <input type="text" class="form-control" name="username">
              </div>
              <div class="mb-3">
              <label for="fpass">Password:</label>
                <input type="text" class="form-control" name="pass">
              </div>
              <button type="log_in" class="btn btn-primary col-12">Log in</button>
              <br>
              <div class="text-end mt-1">
              Don't have an account?<a class="text-decoration-none" href="registration.php"> Register Now</a></div>
        </form>
        </div>
      </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>