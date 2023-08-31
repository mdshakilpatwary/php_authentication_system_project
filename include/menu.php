<div class="menu">
    <ul>
        <li><a href="Dashboard.php">Dashboard</a></li>
        <li><a href="profile.php">Profile</a></li>
        <?php 
            if($_SESSION['userRole'] === 'admin'){ ?>
             <li><a href="add_product.php">Add Product</a></li>
        
        <?php } ?>
        <li><a href="viewproduct.php">View Product</a></li>
        <li><a href="logout.php" class="btn btn-sm btn-danger">Logout</a></li>
    </ul>
</div>