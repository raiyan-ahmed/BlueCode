<?php
session_start();
if (isset($_SESSION['username'])) {
    session_unset();
    session_destroy();
    echo "<script>alert('Logout Page !')</script>";
    echo "<script>location.href='index.php'</script>";
} else {
    echo "<script>alert('Do not access through URL ! ')</script>";
    echo "<script>location.href='index.php'</script>";
}
