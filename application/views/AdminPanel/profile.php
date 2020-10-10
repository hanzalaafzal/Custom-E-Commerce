<div class="page-wrapper">
<div class="page-container">
           
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">

                        <?php

                            foreach($admin_->result() as $row)
                            {
                                $ad_fname=$row->admin_fname;
                                $ad_lname=$row->admin_lname;
                                $ad_email=$row->admin_email;
                                $ad_username=$row->admin_username;
                            }
                            ?>
                        <?php 
                        echo form_open_multipart('Admin/updateAdmin');
                        ?>

                                <div class="card-body">
                                    <h4 class="card-title">Update Your Profile</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">First Name</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="fname_field" value="<?php echo $ad_fname ?>">
                                           
                                        </div>
                                    </div>

                       				  <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Last Name</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="lname_field" value="<?php echo $ad_lname?>">
                                           
                                        </div>
                                    </div>
                       			  <div class="form-group row">
                                        <label for="uname" class="col-sm-2 text-right control-label col-form-label">Username</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="uname_field" value="<?php echo $ad_username?>">
                                           
                                        </div>
                                    </div>
                         			 <div class="form-group row">
                                        <label for="name" class="col-sm-2 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="email_field" value="<?php echo $ad_email ?>">
                                           
                                        </div>
                                    </div>
                         


                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="btn_update_admin" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                  
                     

                    </div>
                </div>
            </div>
              <?php
    error_reporting(0);
    if($_GET['upd'])
    {
        if($_GET['upd']==1)
        {
            echo '<div class="alert alert-success" role="alert">
                                 Updated !
                                </div>';
        }
        elseif($_GET['upd']==2)
        {
            echo '<div class="alert alert-warning" role="alert">
                                  Update Failed !
                                </div>';

        }
        else
        {

        }
    }

    elseif($_GET['pp_upd'])
    {
    	if($_GET['pp_upd']==1)
    	{

    		echo '<div class="alert alert-success" role="alert">
                                Password Updated !
                                </div>';

    	}
    	elseif($_GET['pp_upd']==2)
    	{
    		echo '<div class="alert alert-warning" role="alert">
                               Failed to Upate Password !
                                </div>';
    	}
    

    }

    ?>

<!------  CHANGE PASSWORD SECTION  ----------------->

<div class="page-container">
           
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">

                       
                        <?php 
                        echo form_open('Admin/updateAdmin');
                        ?>

                                <div class="card-body">
                                    <h4 class="card-title">Change Your Password</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Old Password</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="old_pass_field" required="">
                                           
                                        </div>
                                    </div>

                       		  <div class="form-group row">
                                        <label for="name" class="col-sm-2 text-right control-label col-form-label">New Password</label>
                                        <div class="col-sm-3">
                                            <input type="password" id="new_pass_field"  onfocusout="changePassMatch(this.form,this.form.new_pass_field.value,this.form.cnew_passid.value)" class="form-control"  name="newadd_pass_field" required="">
                                           
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name"  class="col-sm-2 text-right control-label col-form-label">Confirm New Password</label>
                                        <div class="col-sm-3">
                                            <input type="password" class="form-control" id="cnew_passid" onfocusout="changePassMatch(this.form,this.form.new_pass_field.value,form.cnew_passid.value)"  name="add_pass_field" required="">
                                           
                                        </div>
                                    </div>
                                       <div class="form-group row">
                                    	<label class="col-sm-5 text-right control-label col-form-label" id="newnotmatch" hidden="true" style="color: red">Password Not matched</label>
                                    	<label class="col-sm-5 text-right control-label col-form-label" id="newmatchid" hidden="true" style="color: green">Password matched</label>
                                    	<label class="col-sm-5 text-right control-label col-form-label" id="chkid" hidden="true" style="color: red">Password cannot be empty</label>


                                    </div>
                         		

                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" id="btn_update_pass_admin" name="btnn_update_pass_admin" class="btn btn-primary">Update Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                  
                     

                    </div>
                </div>
            </div>







<!------------------------------ ADD NEW ADMIN SECTION -------------------->
 

</div>

     
