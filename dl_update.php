<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "<script>location.href='dl_update.php'</script>";
} else {
    echo "<script>alert('Do not access through URL')</script>";
    echo "<script>location.href='index.php'</script>";
}

?>

<?php
include 'config.php';

$id = $_GET['id'];

$dataFetchQuery = "SELECT * FROM `dl_infos` WHERE id='$id'";
$record = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($record);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueCode</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            background: rgb(68,151,200);
          background: linear-gradient(90deg, rgba(68,151,200,1) 0%, rgba(169,202,222,1) 44%, rgba(72,152,168,1) 100%);
        }

        form {
            background: #EBF5FB;
            padding: 15px;
            box-shadow: 0px 0px 15px 0px;
            border-radius: 10px;
        }
        .logo img{
          width:20%;
          height:20%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="dl_updateAction.php" method="post" enctype="multipart/form-data">
                <div class="logo mb-5 d-flex justify-content-center">
          <img src="Images/Blue_Code.png" alt="logo">
          </div>
                    <div class="mb-3">
                        <h3 class="text-center">Update Your Information</h3>
                    </div>
                    <div class="mb-3">
                        <label for="y_name" class=" text-light">Your Name:</label>
                        <input type="text" class="form-control" name="y_name" value="<?php echo $data['y_name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="address" class=" text-light">Your Address:</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $data['address'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="productname" class=" text-light">Product Name:</label>
                        <input type="text" class="form-control" name="p_name" value="<?php echo $data['p_name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="price" class=" text-light">Price:</label>
                        <input type="text" class="form-control" name="price" value="<?php echo $data['price'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="image" class=" text-light">Image:</label>
                        <input type="file" class="form-control" name="image" value="<?php echo $data['image'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <img src="<?php echo $data['image'] ?>" alt="Image" width="100px">
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    </div>
                    <button type="Submit" class="btn btn-primary fw-bold col-12">Update</button>

                </form>
            </div>

        </div>
    </div>
</body>

</html>