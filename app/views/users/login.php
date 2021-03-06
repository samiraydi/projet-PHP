<?php require APPROOT . '/views/inc/header.php';?>
<div class="row" style="
    width: 100%;
">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
        <?php flash('register_success');?> 
        <h2>Login</h2>
            <p>Please fill in your credentials to log in</p>
            <form action="<?php echo URLROOT;?>/users/login" method="post">
            
            <div class="form-group">
                <label for="Email">Email:<sup>*</sup></label>
                <input type="email" name="Email" class="form-control form-control-lg <?php echo (!empty($data['Email_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['Email'];?>">
                <span class="invalid-feedback"><?php echo $data['Email_err'];?></span>
            </div>
            <div class="form-group">
                <label for="Password">Password:<sup>*</sup></label>
                <input type="password" name="Password" class="form-control form-control-lg <?php echo (!empty($data['Password_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['Password'];?>">
                <span class="invalid-feedback"><?php echo $data['Password_err'];?></span>
            </div>
            
            <div class="row">
                <div class="col">
                    <input type="submit"  value="Login" class="btn btn-success btn-block">
                </div>
                <div class="col">
                    <a href="<?php echo URLROOT?>/users/register" class="btn btn-light btn-block">no
                account? regiter</a>
                </div>
            </div>
            </form>
        </div>
    </div>

</div>

<?php require APPROOT . '/views/inc/footer.php';?>