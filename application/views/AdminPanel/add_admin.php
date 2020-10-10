<div class="page-wrapper">
   <div class="page-container">
           
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">

                 
                         <?php 
                        echo form_open('Admin/updateAdmin');
                        ?>

                                <div class="card-body">
                                    <h4 class="card-title">Add new Admin</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">First Name</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="add_fname_field" required="Enter your name">
                                           
                                        </div>
                                    </div>

                       				  <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Last Name</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="add_lname_field" required="">
                                           
                                        </div>
                                    </div>
                       			  <div class="form-group row">
                                        <label for="uname" class="col-sm-2 text-right control-label col-form-label">Username</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="add_uname_field" required="">
                                           
                                        </div>
                                    </div>
                         			 <div class="form-group row">
                                        <label for="name" class="col-sm-2 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="add_email_field" required="">
                                           
                                        </div>
                                    </div>
                                    
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 text-right control-label col-form-label">Password</label>
                                        <div class="col-sm-3">
                                            <input type="password"  onfocusout="passMatch(this.form,this.form.add_passid.value,this.form.add_cpassid.value)" class="form-control" id="add_passid" name="add_pass_field" required="">
                                           
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name"  class="col-sm-2 text-right control-label col-form-label">Confirm Password</label>
                                        <div class="col-sm-3">
                                            <input type="password" class="form-control" id="add_cpassid" onfocusout="passMatch(this.form,this.form.add_passid.value,this.form.add_cpassid.value)"  name="add_pass_field" required="">
                                           
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    	<label class="col-sm-5 text-right control-label col-form-label" id="notmatchid" hidden="true" style="color: red">Password Not matched</label>
                                    	<label class="col-sm-5 text-right control-label col-form-label" id="matchid" hidden="true" style="color: green">Password matched</label>

                                    </div>

                         


                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" id="btn_add_admin"  name="btn_add_admin" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                  
                     

                    </div>
                            <?php
                            error_reporting(0);
        		if($_GET['a_upd'])
    				{
        			if($_GET['a_upd']==1)
        			{
            			echo '<div class="alert alert-success" role="alert">
                                Admin Created !
                                </div>';
           
        			}
        			elseif($_GET['a_upd']==2)

        				{
            				echo '<div class="alert alert-warning" role="alert">
                               Failed to create New Admin !
                                </div>';
        			}
        			else
        			{

        			}
        		}
      			 ?>
                </div>

            </div>

       

 
        



</div>