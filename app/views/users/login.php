<?php require APPROOT . '/views/inc/header.php'; ?>
  
  <div class="container">

  <div class="row">
  <div class="col-md-4 col-md-offset-4">

  <!--Tab -->
  <div class="my-account style-1 margin-top-5 margin-bottom-40">
      <?php flash('register_success'); ?>
      <br>
    <ul class="tabs-nav">
      <li class=""><a href="<?php echo URLROOT; ?>/users/login"> Login</a></li>
       <li class=""><a href="<?php echo URLROOT; ?>/users/register"> Register</a></li>
    </ul>
    <div class="tabs-container alt">

      <!-- Login -->
      <div class="tab-content" id="tab1" style="display: none;">
       <form method="post" action="<?php echo URLROOT; ?>/users/login"  class="register">
      
          
        <p class="form-row form-row-wide">
          <label for="email2">Email Address: 
           <br>
        <p style=" color: red;"><?php echo $data['email_err']; ?></p>
       
            <input type="text" class="input-text  <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" name="email" id="email2" required  />
             
          </label>
        </p>


        <p class="form-row form-row-wide">
          <label for="email2">Password: 
            <br>
            <p style=" color: red;"><?php echo $data['password_err']; ?></p>
            <input type="password" class="input-text  <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" name="password" id="email2" required  />
             
          </label>
        </p>

        <!-- <p class="form-row">
            <input type="submit" name="login" class="button border margin-top-10" name="login" value="Login"/>
            
            <label for="rememberme" class="rememberme">
            <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label>
          </p> -->

          <p class="lost_password">
            <a href="<?php echo URLROOT; ?>/users/forget_password">Lost Your Password?</a>
          </p>

  
  
        <p class="form-row">
          <input type="submit"  class="button border fw margin-top-10"  value="Login" />
        </p>

        </form>
      </div>

     

    </div>
  </div>



  </div>
  </div>

</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>



<!-- <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Create An Account</h2>
        <p>Please fill out this form to register with us</p>
        <form action="<?php echo URLROOT; ?>/users/register" method="post">
          <div class="form-group">
            <label for="name">Name: <sup>*</sup></label>
            <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="confirm_password">Confirm Password: <sup>*</sup></label>
            <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
            <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
          </div>

          <div class="row">
            <div class="col">
              <input type="submit" value="Register" class="btn btn-success btn-block">
            </div>
            <div class="col">
              <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> -->