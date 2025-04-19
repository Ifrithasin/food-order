
<?php include('admin_dashboard.php'); ?>     

                <?php
                $conn=mysqli_connect('localhost','root','','food-order');
                if(isset($_POST['submit']))
                {   
                    $pname=$_POST['pname'];
                    $description=$_POST['description'];
                    $food_items=$_POST['food_items'];
                    $price=$_POST['price'];
                   $imagename= $_FILES['image']['name'];
                  $tmpname= $_FILES['image']['tmp_name'];
                  $uploc='../../images/'.$imagename;
                 $sql="INSERT INTO food_items(pname,description,category,price,image) VALUES('$pname','$description','$food_items','$price','$imagename')";
                if(mysqli_query($conn,$sql)==TRUE)
                {
                echo "Data inserted";
                move_uploaded_file($tmpname,$uploc);
                }
                else{
                 echo "data not inserted";
                }
                }


?>
                 <div>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
  <label for="pname">Product Name</label>
  <input type="text" id="pname" name="pname"></br>
  <label for="description">Description</label>
  <input type="text" id="description" name="description"></br>
  <label for="food">Choose food type</label>
 <select name="food_items" id="food_items">
 <option value="chinese">chinese</option>
  <option value="fast_food">fast food</option>
  <option value="Biryani items">Biryani items</option>
  <option value="Healthy_snacks">Healthy snacks</option>
  <option value="salad">salad</option>
</select></br>
<label for="price">Price</label>
<input type="number" id="price" name="price"></br>
   <input type="file" name="image"></br></br>
  <input type="submit" name="submit" value="Add">
</form>

</div>                    
         

                               
                                    

            <!-- Footer -->
            <?php include('footer.php'); ?> 