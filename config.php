<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "blue_code";

$conn = mysqli_connect($servername, $username, $password, $db_name);
if (!$conn) {
    die("Connection failed :" . mysqli_connect_error());
} else {
    // echo"<script>alert('Database Connected !')</script>";
}
