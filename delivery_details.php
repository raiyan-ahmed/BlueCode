<table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Profile Pic</th>
                        <th>Name</th>                       
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
$ret=mysqli_query($con,"select * from delivery_infos");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {
 
?>
<!--Fetch the Records -->
<tr>
<td><?php echo $cnt;?></td>
<td><img src="profilepics/<?php  echo $row['ProfilePic'];?>" width="80" height="80"></td>
<td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
<td><?php  echo $row['Email'];?></td>                        
 <td><?php  echo $row['MobileNumber'];?></td>
<td> <?php  echo $row['CreationDate'];?></td>
<td>
<a href="dl_read.php?viewid=<?php echo htmlentities ($row['ID']);?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
<a href="dl_edit.php?editid=<?php echo htmlentities ($row['ID']);?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
<a href="delivery_details.php?delid=<?php echo ($row['ID']);?>&&ppic=<?php echo $row['ProfilePic'];?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
</td>
</tr>
<?php 
$cnt=$cnt+1;
} } else {?>
<tr>
<th style="text-align:center; color:red;" colspan="6">No Record Found</th>
</tr>
<?php } ?>                 
                
</tbody>
</table>