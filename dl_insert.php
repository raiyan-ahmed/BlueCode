<?php
include 'config.php';
$y_name = $_POST['y_name'];
$address = $_POST['address'];
$p_name = $_POST['p_name'];
$price = $_POST['price'];
$image = $_FILES['image'];

$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

$image_des = "image/" . $imageName;

move_uploaded_file($imageLocation, $image_des);

$insertInfoQuery = "INSERT INTO `dl_infos`(`y_name`, `address`, `p_name`, `price`, `image`) VALUES ('$y_name','$address','$p_name','$price','$image_des')";

if (!mysqli_query($conn, $insertInfoQuery)) {
    echo "<script>alert('Product is not inserted !')</script>";
    echo "<script>location.href='delivery_details.php'</script>";
} else {
    echo "<script>alert('Product is INSERTED !')</script>";
    echo "<script>location.href='delivery_details.php'</script>";
}
