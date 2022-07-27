<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "<h1>Hello " . $_SESSION['username'] . " 's Products page</h1>";
    }
    else{
        echo "<script>alert('invalid user !')</script>";
            echo "<script>location.href='login.php'</script>";
    }
