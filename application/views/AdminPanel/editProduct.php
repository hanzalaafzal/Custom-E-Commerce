

<div class="page-wrapper">
            
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Edit Product</h4>
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
                        echo form_open_multipart('Admin/updateProduct');
                        ?>
                                <div class="card-body">
                                    <h4 class="card-title">Update your product</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Product Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="prod_name" value="<?php echo $product_details->p_name;?>">
                                            <input type="text" name="pid" value="<?php echo $product_details->p_id; ?>" hidden="true">
                                        </div>
                                    </div>

                                  <div class="form-group row">
                                    <label class="col-md-3 text-right m-t-15">Main Category</label>
                                    <div class="col-md-9">
                                        <select  name="catid_Fieldd" id="catid_Fieldd" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            
                                            <option value="<?php echo $product_details->p_cat?>" selected><?php echo $product_details->cat_name  ?></option>
                               <?php
                                            foreach($cats->result() as $rows)
                                            {

                                        ?>
                                                <option value="<?php echo $rows->cat_id ?>"><?php echo $rows->cat_name?></option>

                             <?php

                                            }


                                        ?>
                                           
                                       
                                        </select>

                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-149p-container"><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 text-right m-t-15">Sub Category</label>
                                    <div class="col-md-9">
                                        <select name="subcatid_Fieldd" id="subcatid_Fieldd" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option value="<?php echo $product_details->p_sub_cat ?>"><?php echo $product_details->subcat_name ?></option>
                                       
                                        </select>

                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-149p-container"><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>




                                   <div class="form-group row">
                                    <label class="col-md-3 text-right">Upload New Image</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <?php echo form_upload(['name' =>'userFile','class' => 'custom-file-input']);
                                            ?>
                           
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-3 text-right">Old picture</label>
                                    <div class="col-md-9">
                                        <img class="rounded-circle" width="40" src="<?php echo base_url().'uploads/images/products/'.$product_details->p_image?>"  data-toggle="tooltip" data-placement="top">
                                    </div>
                                </div>

                                 <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Product Info</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="productinfo" required value="<?php echo $product_details->p_info ?>">
                                           
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Product Description</label>
                                        <div class="col-sm-9">
                                            <textarea  style="resize: both" name="productdesc"><?php echo $product_details->p_desc ?></textarea>
                                           
                                        </div>
                                    </div>

                                      <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Product Price in (Dollars)</label>
                                        <div class="col-sm-2">
                                            <input name="productPrice" type="text" class="form-control" required value="<?php echo $product_details->p_price ?>">
                                           
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Product Discount Price in (Dollars)</label>
                                        <div class="col-sm-2">
                                            <input name="productDPrice" type="text" class="form-control" required value="<?php echo $product_details->p_discount_price ?>">
                                           
                                        </div>
                                    </div>



                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="btn_updateProd" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                  
                     

                    </div>
     
                </div>
   
              
            </div>
     
          
      
        </div>