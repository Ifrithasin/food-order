<?php include('index_header.php'); ?>
<?php

$conn=mysqli_connect('localhost','root','','food-order');
$sql="SELECT * from food_items";
$result=mysqli_query($conn,$sql);

?>

<div class="grid-container">
<?php 
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <div class="card">
<img class="" src="/food-order/images/<?php echo $row['image']; ?>">
<div class="text"><?php echo $row['pname']; ?></div>
<div class="text"><?php echo $row['description']; ?></div>
<div class="text"><?php echo $row['price']; ?></div>
<a href=""><button>Add to cart</button></a>
</div>

<?php
}
?>
</div>
<?php include('footer.php'); ?>

