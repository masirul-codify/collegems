<?php include("inc/header.php") ;?>
    <!-- Admin & Co Admin Login -->
    <h2 class="text-center m-5 fs-1 " > Admin & Co Admin Login </h2> <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <?php echo anchor( "welcome/adminRegister", "ADMIN REGISTER", ['class' => 'btn btn-danger'] ); ?>
            </div>
            <div class="col-lg-4">
                <?php echo anchor( "", "ADMIN LOGIN", ['class' => 'btn btn-danger'] ); ?>
            </div>
        </div>
    </div>
<?php include("inc/footer.php") ;?>