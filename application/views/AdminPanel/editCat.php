

<div class="page-wrapper">
            
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Edit Category</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                            <form class="form-horizontal" method="post" action="<?php echo base_url('Admin/updateCategory')?>">
                                <div class="card-body">
                                    <h4 class="card-title">Update Category</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Category Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="catname" value="<?php echo $cate->cat_name;?>">
                                            <input type="text" name="catid" value="<?php echo $cate->cat_id; ?>" hidden="true">
                                        </div>
                                    </div>
                                  
                                
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="btn_updateCat" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                  
                     

                    </div>
     
                </div>
   
              
            </div>
     
          
      
        </div>