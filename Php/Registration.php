
<?php

if(isset($_POST['submit']))
{
    $conn=mysqli_connect('localhost','root','','food-order');
    $name=$_POST['name'];
    $address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];

$sql="INSERT INTO users(Name,address,email,phone,password) VALUES('$name','$address','$email','$phone','$password')";
$result=mysqli_query($conn,$sql);
if($result){
echo "Data inserted";
header("location:Login.php");
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/food-order/CSS/styles.css" rel="stylesheet">
 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    
    

</head>
<body>
    <div class="form_container">
<form action="Registration.php" method="POST">
  

  <div class="container">
  <label for="name">Name</label>
    <input type="text" placeholder="Enter name" name="name" required></br>

    <label for="phone">Phone</label>
    <input type="text" placeholder="Enter Phone" name="phone" required></br>
    <label for="address">Address</label>
    <input type="text" placeholder="Enter address" name="address" required></br>

  
    <label for="email">Email</label>
    <input type="text" placeholder="Enter email" name="email" required></br>

    <label for="password">Password</label>
    <input type="password" placeholder="Enter Password" name="password" required></br>

  
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label></br>
    <button type="submit" name="submit">Register</button></br>
  </div>

  <div class="container">
   <p>Already have an account <a href="Login.php">Login</a></p>
  </div>
</form>

</div>


    
</body>
</html>



