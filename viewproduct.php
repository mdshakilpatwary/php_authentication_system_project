<?php
session_start();
if(!isset($_SESSION['userName'])){
    header("location: index.php");
}

?>

<!-- html head include  -->
<?php 
$pageTitle= "viewProduct";
include "include/head.php" ;
    
?>

<body>


<h1>This is View Product</h1>

<?php
include "include/menu.php";
?>


<!-- html foter body include php  -->
<?php 
include "include/footer.php";
?>
