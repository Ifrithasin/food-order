
<?php
 $conn=mysqli_connect('localhost','root','','food-order');
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];
if($email=='admin@gmail.com' && $password=='1234')
{
    header('location:/food-order/php/admin/home.php');
    exit();
}
$sql="SELECT * FROM users WHERE email='$email' and password='$password'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

if($count==1){
    header('location:index.php');
    exit();
}
else 
{
    echo "<script>alert('Invalid credentials');</script>"; 
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
<form action="" method="post">
  

  <div class="container">
    <label for="email">Email</label>
    <input type="text" placeholder="Enter email" name="email" required></br>
</br>
    <label for="password">Password</label>
    <input type="password" placeholder="Enter Password" name="password" required></br>
</br>
  
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <button type="submit" name="submit">Login</button></br>
  </div>

  <div class="container" >
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span><br>
    <span class="psw">Dont have an account <a href="Registration.php">Signin</a></span>
  </div>
</form>

</div>


    
</body>
</html>




