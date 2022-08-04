<?php

session_start();
if (isset($_SESSION['username'])) {
    echo "<script>location.href='homepage.php'</script>";
} else if ($_POST['username'] == $username && $_POST['pass'] == $pass) {
    $_SESSION['username'] = $username;
    echo "<script>alert('valid user!')</script>";
    echo "<script>location.href='homepage.php'</script>";
    
} else {
    echo "<script>alert('invalid user !')</script>";
    echo "<script>location.href='index.php'</script>";
}