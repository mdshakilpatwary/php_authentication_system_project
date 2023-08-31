<?php
session_start();
if(!isset($_SESSION['userName'])){
    header("location: index.php");
}
else if($_SESSION['userRole'] != 'admin' ){
    header("location: dashboard.php");
}

?>

<!-- html head include  -->
<?php 
$pageTitle= "AddProduct";
include "include/head.php" ;
    
?>
<body>



<h1>This is Add Product page</h1>

<?php
include "include/menu.php";
?>


<!-- html foter body include php  -->
<?php 
include "include/footer.php";
?>
