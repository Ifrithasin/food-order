<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");
?>
<?php include('admin_dashboard.php'); ?>     
     <!-- End of Topbar -->

                <!-- Begin Page Content -->
                 <?php 
 $conn = mysqli_connect('localhost', 'root', '', 'food-order');
$sql="SELECT * FROM food_items ORDER BY ID DESC";
$data=mysqli_query($conn,$sql);
//$row=mysqli_fetch_assoc($data);

?>

 
<div class="grid-container">
<?php
while ($row = mysqli_fetch_assoc($data))
{
 ?>  

<div class="card">

    <img src="/food-order/images/<?php echo $row['image']; ?>">    
<div class="text"><?php echo $row['pname']; ?></div>
<div class="text"><?php echo $row['description']; ?></div>
<div class="text"><?php echo $row['price']; ?></div>
<a href="edit.php?edit=<?php echo $row['ID']; ?>"><button class="custom-button">Edit</button></a>
<a href="delete.php?delete=<?php echo $row['ID']; ?>"><button class="custom-button">Delete</button></a>
</div>
<?php

}
?>

</div>

<?php include('footer.php'); ?>
         