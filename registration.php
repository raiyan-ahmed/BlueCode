<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
        span{
            color: red;
            font-size: smaller;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="insert.php" method="post" onsubmit="return formValidation()">
                <div class="logo mb-5 d-flex justify-content-center">
          <img src="Images/Blue_Code.png" alt="logo">
          </div>
                    <div class="mb-3 text-center">
                        <h4>Registration</h4>
                    </div>
                    <div class="mb-3">
                        <label for="fname">Username:</label>
                        <input type="text" class="form-control" name="ruser_name" id="ifname">
                        <span id="efname"></span>
                    </div>
                    <div class="mb-3">
                        <label for="pass">Password:</label>
                        <input type="text" class="form-control" name="rpassword" id="ipass">
                        <span id="epass"></span>
                    </div>
                    <div class="mb-3">
                        <label for="cpass">Confirm Password:</label>
                        <input type="text" class="form-control" name="rcon_pass" id="iconfirm-pass">
                        <span id="econfirm-pass"></span>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="remail" id="iemail">
                        <span id="e-email"></span>
                    </div>
                    <div class="mb-3">
                        <label for="mobile">Phone:</label>
                        <input type="text" class="form-control" name="rphone" id="imob">
                        <span id="emob"></span>
                    </div>
                    <button type="Register" class="btn btn-primary col-12">Register</button>
                    <div class="text-end mt-1">
              Already have an account?<a class="text-decoration-none" href="index.php"> Login</a>
              </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>