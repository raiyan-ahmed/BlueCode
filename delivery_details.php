<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R_Shop</title>
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
        table {
            background: #EBF5FB;
            padding: 15px;
            box-shadow: 0px 0px 15px 0px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">

                <form action="dl_insert.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <h3 class="text-center">Submit Your Informations</h3>
                    </div>
                    <div class="mb-3">
                        <label for="y_name">Your Name:</label>
                        <input type="text" class="form-control" name="y_name" placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="address">Your Address:</label>
                        <input type="text" class="form-control" name="address" placeholder="Your Address">
                    </div>
                    <div class="mb-3">
                        <label for="productname">Product Name:</label>
                        <input type="text" class="form-control" name="p_name" placeholder="Product name">
                    </div>
                    <div class="mb-3">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" name="price" placeholder="Price">
                    </div>                   
                    <div class="mb-3">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <button type="Submit" class="btn btn-primary fw-bold col-12">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-5">

        <table class="table table-color">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Your Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">P_Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $allData = mysqli_query($conn, "SELECT * FROM `dl_infos`");
                while ($row = mysqli_fetch_array($allData)) {
                    echo "<tr>
            <td>$row[id]</td>
            <td>$row[y_name]</td>
            <td>$row[address]</td>
            <td>$row[p_name]</td>
            <td>$row[price]</td>
            <td><img src='$row[image]' width='100px'></td>
            <td><a class='btn btn-warning' href='dl_update.php? id=$row[id]'>Update</a></td>
            <td><a class='btn btn-danger' href='dl_delete.php? id=$row[id]'>Delete</a></td>
    </tr>";
                }

                ?>


            </tbody>
        </table>

    </div>
</body>

</html>