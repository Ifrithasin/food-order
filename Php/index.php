
<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");
?>
<?php include('index_header.php'); ?>

<div class="main-body">


<div class="font-layer">
  <div class="slide">
  <img src="../images/food1.jpg">
  <h1 href="menu.php">See our menu</h1>
  </div>
  <div class="slide">
  <img src="../images/food2.jpg">
  <h1 href="menu.php">See our menu</h1>
  </div>
  <div class="slide">
  <img src="../images/food3.jpg">
  <h1 href="menu.php">See our menu</h1>
  </div>
</div>


<div class="menu-body">
 <h1 style="animation-timing-function:ease-out;">Our special menu</h1>   
<div class="grid-container-head">
<div><button type="button" onclick="showCategory('')">All</button></div>
<div><button type="button" onclick="showCategory('chinese')">Chinese</button></div>
<div><button type="button" onclick="showCategory('fast food')">Fast food</button></div>
<div><button type="button" onclick="showCategory('Biryani items')">Biryani items</button></div>
<div><button type="button" onclick="showCategory('Healthy snacks')">Healthy snacks</button></div>
<div><button type="button" onclick="showCategory('salad')">salad</button></div>
</div>


<div class="grid-container">
<div id="txtHint">
</div>
</div>

</div>
</div>
<?php include('footer.php'); ?>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("slide");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<script>
  function showCategory(str){
      const xhttp=new XMLHttpRequest();
      xhttp.onload=function(){
    document.getElementById("txtHint").innerHTML = this.responseText;
    
  }
if(str==''){
  xhttp.open("GET","display.php?q=");
  }
else{
  xhttp.open("GET","categorywise.php?q="+str); 
}  

  xhttp.send();
}
  window.onload = function() {
    showCategory('');
  
}
  </script>
</body>
</html>