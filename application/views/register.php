<?php include ("inc/header.php");?>
<div class="container">
    <?php echo form_open("welcome/adminSignup", ['class' => 'form horizontal']); ?>
        <h3 class="m-4" > ADMIN REGISTRATION </h3>
<hr>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-3 control-label">Username</label>
            <div class="col-md-9">
                <?php echo form_input(['name'=> 'username', 'class'=> 'form-control', 'placeholder'=> 'Username']);?>
            </div>
        </div>
     </div>
     <div class="col-md-6">
        <?php echo form_error('username', '<div class="text-danger" >', ' </div>'); ?>
     </div>
   </div>

   <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-3 control-label">Email</label>
            <div class="col-md-9">
                <?php echo form_input(['name'=> 'email', 'class'=> 'form-control', 'placeholder'=> 'Email']);?>
            </div>
        </div>
     </div>
     <div class="col-md-6">
         <?php echo form_error('email', '<div class="text-danger" >', ' </div>'); ?>
     </div>
   </div>

   <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-3 control-label">Gender</label>
            <select class="col-md-9  form-select" aria-label="Default select example" name="gender" >
              <option value="" >Select</option>
              <option value="Male" >Male</option>
              <option value="Female" >Female</option>
            </select>
        </div>
     </div>
     <div class="col-md-6">
         <?php echo form_error('gender', '<div class="text-danger" >', ' </div>'); ?>
     </div>
   </div>

<!-- start fetch data (admin , co - admin from database) -->
   <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-3 control-label">Role</label>
            <select class="col-md-9  form-select" aria-label="Default select example"name="role_id">
                <option value="">Select </option>
                <?php if(count($roles)): ?>
                    <?php foreach($roles as $role):?>
                <option value=<?php echo $role->rolename ?>><?php echo $role->rolename ?></option>
                <?php endforeach;?>
                <?php endif; ?>
            </select>
        </div>
     </div>
     <div class="col-md-6">
         <?php echo form_error('role_id', '<div class="text-danger" >', ' </div>'); ?>
     </div>
   </div> <!-- end fetch data (admin , co - admin from database) -->

   <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-3 control-label">Password</label>
            <div class="col-md-9">
                <?php echo form_password(['name'=> 'password', 'class'=> 'form-control', 'placeholder'=> 'Password']);?>
            </div>
        </div>
     </div>
     <div class="col-md-6">
        <?php echo form_error('password', '<div class="text-danger" >', ' </div>'); ?>
     </div>
   </div>

   
   <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-3 control-label">Password Again</label>
            <div class="col-md-9">
                <?php echo form_password(['name'=> 'confpassword', 'class'=> 'form-control', 'placeholder'=> 'Password Again']);?>
            </div>
        </div>
     </div>
     <div class="col-md-6">
         <?php echo form_error('confpassword', '<div class="text-danger" >', ' </div>'); ?>
     </div>
   </div>

   <button type="submit" class="btn btn-primary my-2" > REGISTER </button>
   <?php echo anchor("welcome", "BACK", ['class' => 'btn btn-danger']); ?>
   
</div>
<?php echo form_close(); ?>

</div>
<?php include ("inc/footer.php");?>