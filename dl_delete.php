<?php
//database conection  file
include('config.php');
//Code for deletion
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$profilepic=$_GET['ppic'];
$ppicpath="profilepics"."/".$profilepic;
$sql=mysqli_query($con,"delete from delivery_infos where ID=$rid");
unlink($ppicpath);
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'delivery_details.php'</script>";     
} 
?>