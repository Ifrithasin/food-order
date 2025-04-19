<?php ob_start(); ?>
<?php include('admin_dashboard.php'); ?>


<?php

$conn=mysqli_connect('localhost','root','','food-order');
             if(isset($_GET['edit'])){
            $id=$_GET['edit'];
           
            
       $query="SELECT * FROM food_items WHERE ID
       =$id";
        $result=mysqli_query($conn, $query);
        $row=mysqli_fetch_assoc($result);

              
                if(isset($_POST['submit']))
                {   $ID=$_POST['ID'];
                    $pname=$_POST['pname'];
                    $description=$_POST['description'];
                    $category=$_POST['food_items'];
                    $price=$_POST['price'];
                   $imagename= $_FILES['image']['name'];
                  $tmpname= $_FILES['image']['tmp_name'];
                  $uploc='../../images/'.$imagename;
                 $sql="UPDATE food_items set pname='$pname',description='$description',category='$category',price='$price',image='$imagename'
                 WHERE ID=$id";
                $result=mysqli_query($conn,$sql);
                 if($result)
                {
                echo "Data inserted";
                move_uploaded_file($tmpname,$uploc);
                header('location:home.php');
                }
                else{
                 echo "data not inserted";
                }
                }}


?>
                 <div>
<form action="edit.php?edit=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
<input type="hidden" name="ID" value="<?php echo $id; ?>">

<label for="pname">Product Name</label>
  <input type="text" id="pname" name="pname" value="<?php echo $row['pname']; ?>"></br>
  <label for="description">Description</label>
  <input type="text" id="description" name="description" value="<?php echo $row['description']; ?>"></br>
  <label for="food">Choose food type</label>
 <select name="food_items" id="food_items" value="<?php echo $row['category']; ?>">
 <option value="chinese">chinese</option>
  <option value="fast_food">fast food</option>
  <option value="Biryani items">Biryani items</option>
  <option value="Healthy_snacks">Healthy snacks</option>
  <option value="salad">salad</option>
</select></br>
<label for="price">Price</label>
<input type="number" id="price" name="price" value="<?php echo $row['price']; ?>"></br>
   <input type="file" name="image"></br></br>
  <input type="submit" name="submit" value="edit">
</form>

</div>                    




<?php include('footer.php'); ?>
<?php ob_end_flush(); ?>
