<?php ob_start(); ?>
<?php include('admin_dashboard.php'); ?>


<?php

$conn=mysqli_connect('localhost','root','','food-order');
             if(isset($_GET['delete'])){
            $id=$_GET['delete'];
$sql="DELETE FROM food_items WHERE ID=$id";
$result=mysqli_query($conn,$sql);
if($result)
{    
    echo "product is deleted";
    header('location:home.php');
    exit();
}

             }
  
?>

            <?php include('footer.php'); ?>
<?php ob_end_flush(); ?>
