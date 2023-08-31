
<!-- html head include  -->
<?php
$pageTitle= "Register";
include "include/head.php" ; ?>

<body>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-4 border border-info rounded p-5 mt-5">
                <form >
                    <div class="form-group my-3">
                        <input type="text" name="resName" class="form-control py-3" placeholder="enter your Username">
                    </div>
                    <div class="form-group my-3">
                        <input type="email" name="resName" class="form-control py-3" placeholder="enter your Email">
                    </div>
                    <div class="form-group my-3">
                        <input type="password" name="logPass"  class="form-control py-3" placeholder="enter your Password">
                    </div>
                    <div class="form-group my-4">
                        <button class="btn btn-lg btn-info mb-3" name="logBtn" value="">registration</button>
                        <p>Already member? <a href="index.php">login</a></p>

                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<!-- html foter body include php  -->
<?php 
include "include/footer.php";
?>