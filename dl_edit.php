<?php 
//Database Connection
include('config.php');
if(isset($_POST['submit']))
  {
  $eid=$_GET['editid'];
  //Getting Post Values
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $add=$_POST['address'];
 
//Query for data updation
$query=mysqli_query($conn, "update  delivery_infos set FirstName='$fname',LastName='$lname', MobileNumber='$contno', Email='$email', Address='$add' where ID='$eid'");
 
if ($query) {
echo "<script>alert('You have successfully update the data');</script>";
echo "<script type='text/javascript'> document.location ='delivery_details.php'; </script>";
}
else
{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
}
}
?>
    <form  method="POST">
 <?php
$eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from delivery_infos where ID='$eid'");
while ($row=mysqli_fetch_array($ret)) {
?>
 
<h2>Update </h2>
<p class="hint-text">Update your info.</p>
 
<div class="form-group">
<img src="profilepics/<?php  echo $row['ProfilePic'];?>" width="120" height="120">
<a href="dl_change_image.php?userid=<?php echo $row['ID'];?>">Change Image</a>
</div>
 
<div class="form-group">
<div class="row">
<div class="col"><input type="text" class="form-control" name="fname" value="<?php  echo $row['FirstName'];?>" required="true"></div>
 
<div class="col"><input type="text" class="form-control" name="lname" value="<?php  echo $row['LastName'];?>" required="true"></div>
</div>        	
</div>
 
<div class="form-group">
<input type="text" class="form-control" name="contactno" value="<?php  echo $row['MobileNumber'];?>" required="true" maxlength="10" pattern="[0-9]+">
</div>
        
<div class="form-group">
<input type="email" class="form-control" name="email" value="<?php  echo $row['Email'];?>" required="true">
</div>
		
<div class="form-group">
<textarea class="form-control" name="address" required="true"><?php  echo $row['Address'];?></textarea>
</div>   
 
<?php 
}?>
 
<div class="form-group">
 <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
        </div>
    </form>