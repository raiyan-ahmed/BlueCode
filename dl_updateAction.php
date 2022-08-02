<?php
include 'config.php';
$id = $_POST['id'];
$updatey_name = $_POST['y_name'];
$updateaddress = $_POST['address'];
$updatep_name = $_POST['p_name'];
$updatePrice = $_POST['price'];
$updateImage = $_FILES['image'];

$imageLocation = $updateImage['tmp_name'];
$imageName = $updateImage['name'];

$image_des = "image/" . $imageName;

move_uploaded_file($imageLocation, $image_des);
$updateQuery = "UPDATE `dl_infos` SET `y_name`='$updatey_name',`address`='$updateaddress',`p_name`='$updatep_name',`price`='$updatePrice',`image`='$image_des' WHERE id='$id'";

if (!mysqli_query($conn, $updateQuery)) {
    echo "<script>alert('Cart is not UPDATED !')</script>";
    echo "<script>location.href='delivery_details.php'</script>";
} else {
    echo "<script>alert('Cart is UPDATED !')</script>";
    echo "<script>location.href='delivery_details.php'</script>";
}
