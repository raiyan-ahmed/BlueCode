<?php
include 'config.php';
$id = $_GET['id'];

$deleteQuery = "DELETE FROM `dl_infos` WHERE id='$id'";

mysqli_query($conn, $deleteQuery);

echo "<script>location.href='delivery_details.php'</script>";
