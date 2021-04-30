<?php require APPROOT . '/views/inc/header.php'; ?>
<div>
<div class="row register"  >
    <div class="col-md-10 mx-auto">
        <div class="card card-body bg-light mt-5">
        

            

            <h2>Create An Account</h2>
            <p>Please fill out this form to register with us</p>

            <form action="<?php echo URLROOT; ?>/users/register" method="post" enctype="multipart/form-data" style="">
                <div class="row">
                    
                    <div class="form-group col-md-6">
                        <label for="FirstName">First Name:<sup>*</sup></label>
                        <input type="text" name="FirstName" class="form-control form-control-lg bg-light <?php echo (!empty($data['FirstName_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['FirstName']; ?>">
                        <span class="invalid-feedback"><?php echo $data['FirstName_err']; ?></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="LastName">Last Name:<sup>*</sup></label>
                        <input type="text" name="LastName" class="form-control form-control-lg <?php echo (!empty($data['LastName_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['LastName']; ?>">
                        <span class="invalid-feedback"><?php echo $data['LastName_err']; ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Email">Email:<sup>*</sup></label>
                        <input type="email" name="Email" class="form-control form-control-lg <?php echo (!empty($data['Email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['Email']; ?>">
                        <span class="invalid-feedback"><?php echo $data['Email_err']; ?></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Phone">Phone:<sup>*</sup></label>
                        <input type="text" name="Phone" class="form-control form-control-lg <?php echo (!empty($data['Phone_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['Phone']; ?>">
                        <span class="invalid-feedback"><?php echo $data['Phone_err']; ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Sex" class="form-control form-control-lg  <?php echo (!empty($data['Sex_err'])) ? 'is-invalid' : ''; ?>" required  value="Male">
                        <span class="form-check-label"> Male </span>
                    </label>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Sex" class="form-control form-control-lg   <?php echo (!empty($data['Sex_err'])) ? 'is-invalid' : ''; ?>" required value= "Female">
                        <span class="form-check-label"> Female</span>
                    </label>
                    <span class="invalid-feedback"><?php echo $data['Sex_err']; ?></span>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Adress">Adress:<sup>*</sup></label>
                        <input type="text" name="Adress" class="form-control form-control-lg <?php echo (!empty($data['Adress_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['Adress']; ?>">
                        <span class="invalid-feedback"><?php echo $data['Adress_err']; ?></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="DNS">Date of Birth:<sup>*</sup></label>
                        
                        <input type="date" name="DNS" onblur="return dobcheck()" min="2000-01-01"  class="form-control form-control-lg ">
                        <span class="invalid-feedback"><?php echo $data['DNS_err']; ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Password">Password:<sup>*</sup></label>
                    <input type="password" name="Password" class="form-control form-control-lg <?php echo (!empty($data['Password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['Password']; ?>">
                    <span class="invalid-feedback"><?php echo $data['Password_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password:<sup>*</sup></label>
                    <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
                    <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="DrivingLic">Profile Picture:</label>
                    <input type="file" name="Profile_Pic[]" class="form-control form-control-lg ">
                    
                </div>
                <div class="form-group">
                    <label for="DrivingLic">Driving License:</label>
                    <input type="text" name="DrivingLic" class="form-control form-control-lg " value="<?php echo $data['DrivingLic']; ?>">
                    
                </div>
                
                
                <div class="row">
                <div class="col-3"></div>
                    <div class="col-3">
                        <input type="submit" value="register" class="btn btn-success btn-block">
                    </div>
                    <div class="col-3">
                        <a href="<?php echo URLROOT ?>/users/login" class="btn btn-light btn-block">Have
                            an account? Login</a>
                    </div>
                    <div class="col-3"></div>

                </div>
                <!-- FirstName /LastName/Email/Phone
            /Sex/ProfilePic/DrivingLic
            /Password/Adress//DNS -->
            </form>
        </div>
    </div>

</div>
<script type="text/javascript">
function dobcheck()
{
    var birth = document.getElementById('bday')
    if(birth != "")
    {

        var record=document.getElementById('DNS').value.trim();
        var currentdate=new Date();    
        var day1 = currentdate3.getDate();   
        var month1 = currentdate3.getMonth();
        month1++;     
        var year11 = currentdate3.getFullYear()-17;
        var year2= currentdate3.getFullYear()-100;   
        var record_day1=record.split("/");
        var sum=record_day1[1]+'/'+record_day1[0]+'/'+record_day1[2];  
        var current= month1+'/'+day1+'/'+year11;
        var current1= month1+'/'+day1+'/'+year2;
        var d1=new Date(current)
        var d2=new Date(current1)
        var record1 = new Date(sum);      
        if(record1 > d1)
        {

            alert("Sorry ! Minors need parential guidance to use this website");
            document.getElementById('DNS').blur();
            document.getElementById('DNS').value="";
            document.getElementById('DNS').focus();
            return false;
        }
    } 
}
</script>


<?php require APPROOT . '/views/inc/footer.php'; ?>