<?php
session_start();
if(!isset($_SESSION['userName'])){
    header("location: index.php");
}

?>

<!-- html head include  -->
<?php 
$pageTitle= "Dashboard";
include "include/head.php" ;
    
?>
<body>



<h1>Hello! Welcome <?php echo $_SESSION['userName']?></h1>
<h2>This is my email address <a href="#"><?php echo $_SESSION['userEmail']?></a></h2>
<h2>This is my phone address <?php echo $_SESSION['userPhone']?></h2>


<?php
include "include/menu.php";
?>


<!-- html foter body include php  -->
<?php 
include "include/footer.php";
?>
