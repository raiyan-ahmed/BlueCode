<?php
include 'config.php';

$ruser_name = $_POST['ruser_name'];
$rpassword = $_POST['rpassword'];
$rcon_pass = $_POST['rcon_pass'];
$remail = $_POST['remail'];
$rphone = $_POST['rphone'];

$username_pattern = "/[A-Za-z .]{3,20}/";
$mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
$pass_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@%&*#£])).{6,20}/";
$email_pattern = "/(cse|eee|law)_\d{10}@lus.ac.bd/";

$duplicate_username = mysqli_query($conn, "SELECT * FROM `register_users` WHERE username='$ruser_name'");

if (mysqli_num_rows($duplicate_username) > 0) {
    echo "<script>alert('Username Already Registered')</script>";
    echo "<script>location.href='registration.php'</script>";
} else if (!preg_match($username_pattern, $ruser_name)) {
    echo "<script>alert('Invalid Username!')</script>";
    echo "<script>location.href='registration.php'</script>";
} else if (!preg_match($pass_pattern, $rpassword)) {
    echo "<script>alert('Password not Strong enough!')</script>";
    echo "<script>location.href='registration.php'</script>";
} else if ($rpassword !== $rcon_pass) {
    echo "<script>alert('Password not matched')</script>";
    echo "<script>location.href='registration.php'</script>";
} else if (!preg_match($email_pattern, $remail)) {
    echo "<script>alert('LU email required!')</script>";
    echo "<script>location.href='registration.php'</script>";
} else if (!preg_match($mobile_pattern, $rphone)) {
    echo "<script>alert('BD phone number only!')</script>";
    echo "<script>location.href='registration.php'</script>";
} else {

    $insert_query = "INSERT INTO `register_users`(`username`, `password`, `email`, `phone`) VALUES ('$ruser_name','$rpassword','$remail','$rphone')";
    if (!mysqli_query($conn, $insert_query)) 
    {
        echo "<script>alert('Not Inserted!')</script>";
        echo "<script>location.href='index.php'</script>";
    } 
    else {
        echo "<script>alert('Inserted !')</script>";
        echo "<script>location.href='homepage.php'</script>";
    }
}
