

<div class="page-wrapper">
            
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Edit Sub Category</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php base_url()."Admin" ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
       
            <div class="container-fluid">
             
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                           <?php 
                        echo form_open_multipart('Admin/updateSubCategory');
                        ?>
                                <div class="card-body">
                                    <h4 class="card-title">Update Sub Category</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Category Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="subcatname" value="<?php echo $cate->subcat_name;?>">
                                            <input type="text" name="subcatid" value="<?php echo $cate->subcat_id; ?>" hidden="true">
                                        </div>
                                    </div>

                                          <div class="form-group row">
                                    <label class="col-md-3 text-right m-t-15">Main Category</label>
                                    <div class="col-md-9">
                                        <select name="subcat_selected_id" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                 <option value="<?php echo $cate->cat_id ?>" selected><?php echo $cate->cat_name ?></option>
                                 <?php 
                                    foreach($cats->result() as $cat)
                                    {
                                        ?>

                                        <option value="<?php echo $cat->cat_id ?>"><?php echo $cat->cat_name ?></option>

                                        <?php
                                    }


                                 ?>
                                
                                        </select>

                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-149p-container"><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                   <div class="form-group row">
                                    <label class="col-md-3 text-right">File Upload</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <?php echo form_upload(['name' =>'userFil','class' => 'custom-file-input']);
                                            ?>
                           
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 text-right">Old picture</label>
                                    <div class="col-md-9">
                                        <img class="rounded-circle" width="40" src="<?php echo base_url().'uploads/images/subcategories/'.$cate->sub_images?>"  data-toggle="tooltip" data-placement="top">
                                    </div>
                                </div>

                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="btn_updateSubCat" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                  
                     

                    </div>
     
                </div>
   
              
            </div>
     
          
      
        </div>