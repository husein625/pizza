    
<head><link rel="stylesheet" href="css/drop-down.css"> <!-- My css file -->
</head>
     <div class="header" >

     <div class="logo" >
     <img src="img/logo.png" width="151px" height="129px">
        </div>

         <a href="index.php" style="text-decoration:none;color:white;">Home</a>

      <a href ="order.php" style="text-decoration:none;color:white;word-spacing:0 !important;">Order</a>
         <a href="menu.php" style="text-decoration:none;color:white;" >Menu</a> 
      <a href="locations.php" style="text-decoration:none;color:white;">Locations</a>
            <a href="#about" style="text-decoration:none;color:white;">About</a>
                  <a href="#contact" style="text-decoration:none;color:white">Contact</a>
                  <?php 
session_start();
if(!empty($_SESSION['role'])){
if ($_SESSION['role'] == "admin")
{
 ?>   
                  <div class="dropdown">
  <button onclick="myFunction()" style="background-color:none!important; "class="dropbtn">Change <i class="fa fa-angle-double-down" style="font-size:20px;"></i> </button>
  <div id="myDropdown" class="dropdown-content">
    <a href="PizzaIndex.php"style="text-indent:1px;">Pizzas </a>
    <a href="IngrediantsIndex.php"style="text-indent:1px;">Ingrediants</a>
  </div>
</div>

<?php } 
}
?>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


<?php 
if (empty($_SESSION['username']))
{
 ?>
<nav class="navbar navbar-light bg-light button-nav" >
  <form class="form-inline">
  <a href="L-form.php">  <button class="btn btn-outline-success biggerButton" type="button" >Login</button> </a>
    <a href="LS-form.php"> <button class="btn btn-sm btn-outline-secondary smallerButton" type="button">Sign up</button></a>
  </form>
</nav>
 <!-- </div> -->
<?php } 
else {
?>
<nav class="navbar navbar-light bg-light button-nav" >
  <form class="form-inline">
  <a href="configuration.php">  <button class="btn btn-outline-success biggerButton" type="button">Logout</button> </a>
      <a href="" style="width:100px;color:black; position: absolute; left: 65px;text-decoration: none;font-size: 17px;"><?php echo "" . $_SESSION['username'] . "";?></a> 
  </form>
</nav>




<?php } 
?>
</div>
