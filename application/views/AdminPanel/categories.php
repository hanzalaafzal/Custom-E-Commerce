







<div class="page-wrapper">
<div class="page-container">
           
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <form class="form-horizontal" method="post" action="<?php echo base_url('Admin/updateCategory')?>">
                                <div class="card-body">
                                    <h4 class="card-title">Add Category</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Category Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="catname">
                                           
                                        </div>
                                    </div>

                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="btn_addCat" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                  
                     

                    </div>
     
                </div>
   
             
    </div>







    <div class="page-container">
       

        <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Categories</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb"> 
                                    <li class="breadcrumb-item"><a href="<?php base_url()."Admin/dashboard"; ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
                                                
                                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column descending" style="width: 231px;" aria-sort="ascending">Category Name</th>
                                                <th class="sorting " tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Office: activate to sort column ascending" style="width: 1px;">Edit</th>
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Age: activate to sort column ascending" style="width: 1px;">Delete</th>
                                               </tr>
                                        </thead>
                                        <tbody>
                                    <?php
                                    foreach($cats->result() as $rows)
                                    {
                                        ?>

                                            <tr role="row" class="odd">
                                                <td class=""><?php echo $rows->cat_id ?></td>
                                                <td class="sorting_1"><?php echo $rows->cat_name ?></td>
                                                <td><form action="<?php echo base_url()."Admin/editCategory?cat_id=".$rows->cat_id?>" method="POST">
                                                    <input name="cat_id" hidden="true" value="<?php echo $rows->cat_id ?>">

                                                    <button type="button submit" name="btn_editcat" class="btn btn-cyan btn-sm">Edit</button>
                                                </form>
                                                </td>
                                                <td>
                                                    <form action="<?php echo base_url('Admin/updateCategory') ?>" method="POST">
                                                        <input name="cat_id" hidden="true" value="<?php echo $rows->cat_id ?>">
                                                        <button type="button submit" onClick="return confirm('Are you absolutely sure you want to delete?')" name="btn_delcat" class="btn btn-danger btn-sm">Delete</button>
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
</div>
</div>
</div>
</div>
