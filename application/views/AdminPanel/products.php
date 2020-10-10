



<div class="page-wrapper">
    <div class="page-container">
           
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">

                     <!-----       <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php// echo base_url('Admin/updateSubCategory')?>"> ---->
                        <?php 
                        echo form_open_multipart('Admin/updateProduct');
                        ?>

                                <div class="card-body">
                                    <h4 class="card-title">Add New Product</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Product Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="productname" required>
                                           
                                        </div>
                                    </div>

                        <div class="form-group row">
                                    <label class="col-md-3 text-right m-t-15">Main Category</label>
                                    <div class="col-md-9">
                                        <select  name="catid_Fieldd" id="catid_Fieldd" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option selected>Select</option>
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
                                       
                                        </select>

                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-149p-container"><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-3 text-right">Product Image</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <?php echo form_upload(['name' =>'userFile','class' => 'custom-file-input']);
                                            ?>
                              <!--------- <input type="file" name="userfile" class="custom-file-input" id="validatedCustomFile" required> ----->
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Product Info</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="productinfo" required>
                                           
                                        </div>
                                    </div>

                                 <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Product Description</label>
                                        <div class="col-sm-9">
                                            <textarea  style="resize: both" name="productdesc"></textarea>
                                           
                                        </div>
                                    </div>

                                 <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Product Price in (Dollars)</label>
                                        <div class="col-sm-2">
                                            <input name="productPrice" type="text" class="form-control" required>
                                           
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Product Discount Price in (Dollars)</label>
                                        <div class="col-sm-2">
                                            <input name="productDPrice" type="text" class="form-control" required>
                                           
                                        </div>
                                    </div>




                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="btn_addProduct" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                  
                     

                    </div>
     
                </div>
             
    </div>
    <?php
    error_reporting(0);
    if($_GET['add'])
    {
        if($_GET['add']==1)
        {
            echo '<div class="alert alert-success" role="alert">
                                 Added Successfully
                                </div>';
        }
        elseif($_GET['add']==0)
        {
            echo '<div class="alert alert-warning" role="alert">
                                  Failed to Add product
                                </div>';

        }

    }
    if($_GET['ed'])
    {
        if($_GET['ed']==1)
        {
              echo '<div class="alert alert-success" role="alert">
                                 Edited Successfully
                                </div>';
        }
        elseif($_GET['ed']==2)
        {
              echo '<div class="alert alert-warning" role="alert">
                                Error Uploading File
                                </div>';
        }
        elseif($_GET['ed']==3)
        {
              echo '<div class="alert alert-success" role="alert">
                                 Nothing to EDIT !
                                </div>';
        }
    }
    if($_GET['d'])
    {
        if($_GET['d']==1)
        {
              echo '<div class="alert alert-success" role="alert">
                                 Deleted Successfully
                                </div>';
        }
        elseif($_GET{'d'}==2)
        {
                echo '<div class="alert alert-warning" role="alert">
                                 Deletion Failed !
                                </div>';
        }
    }

    ?>



<!---------------------------- TABLES ------------>
    <div class="page-container">
       

        <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Categories</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb"> 
                                    <li class="breadcrumb-item"><a href="<?php base_url()."Admin/dashboard"; ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Sub Categories</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


<div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row">
                                        <div class="col-sm-12 col-md-6">

                                            <div class="dataTables_length" id="zero_config_length">
                                            </div></div></div><div class="row">
                                                <div class="col-sm-8">

                                      <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 143px;">ID</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column descending" style="width: 231px;" aria-sort="ascending"> Product Name</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column descending" style="width: 231px;" aria-sort="ascending"> Product Info</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column descending" style="width: 231px;" aria-sort="ascending"> Description</th>

                                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column descending" style="width: 231px;" aria-sort="ascending">Sub Category</th>

                                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column descending" style="width: 231px;" aria-sort="ascending"> Main Category</th>

                                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column descending" style="width: 231px;" aria-sort="ascending">Price</th>

                                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column descending" style="width: 231px;" aria-sort="ascending"> Discounted Price</th>

                                                   <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column descending" style="width: 231px;" aria-sort="ascending"> Image</th>

                                                <th class="sorting " tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Office: activate to sort column ascending" style="width: 1px;">Edit</th>
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Age: activate to sort column ascending" style="width: 1px;">Delete</th>
                                               </tr>
                                        </thead>
                                        <tbody>
                                    <?php
                                    foreach($products->result() as $rows)
                                    {
                                        ?>

                                            <tr role="row" class="odd">
                                                <td class="sorting"><?php echo $rows->p_id ?></td>
                                                <td class="sorting_1"><?php echo $rows->p_name ?></td>
                                                <td class="sorting"><?php echo $rows->p_info?></td>
                                                <td class="sorting"><textarea disabled="true"><?php echo $rows->p_desc ?></textarea></td>
                                                <td class="sorting"><?php echo $rows->subcat_name?></td>
                                                <td class="sorting"><?php echo $rows->cat_name?></td>
                                                <td class="sorting"><?php echo $rows->p_price?></td>
                                                <td class="sorting"><?php echo $rows->p_discount_price?></td>

                                                <td>
                                                    <img class="rounded-circle" width="40" src="<?php echo base_url().'uploads/images/products/'.$rows->p_image?>"  data-toggle="tooltip" data-placement="top">
                                                </td>

                                                <td><form action="<?php echo base_url('Admin/editProduct')?>" method="POST">
                                                    <input name="prod_id" hidden="true" value="<?php echo $rows->p_id ?>">

                                                    <button type="button submit" name="btn_editProd" class="btn btn-cyan btn-sm">Edit</button>
                                                </form>
                                                </td>

                                                <td>
                                                <form action="<?php echo base_url('Admin/updateProduct') ?>" method="POST">
                                                        <input name="prod_id" hidden="true" value="<?php echo $rows->p_id ?>">
                                                        <button type="button submit" onClick="return confirm('Are you absolutely sure you want to delete?')" name="btn_delProd" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                                
                                            </tr>

                                        <?php

                                    }


                                     ?>
                                      
                                           </tbody>
                                        
                                    </table></div></div><div class="row">

                                        <div class="col-sm-12 col-md-5">
                                       </div>
                        </div> 
            </div>
</div>
