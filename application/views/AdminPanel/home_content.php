<div class="page-wrapper">


  <?php
    error_reporting(0);
    if($_GET['acv'])
    {
        if($_GET['acv']==1)
        {
            echo '<div class="alert alert-success" role="alert">
                                  Activated
                                </div>';
        }
        elseif($_GET['acv']==2)
        {
            echo '<div class="alert alert-warning" role="alert">
                                  Deactivated
                                </div>';

        }
        else if($_GET['acv']==3)
        {
            echo '<div class="alert alert-warning" role="alert"> 
                            Something Went wrong. Check Category </div>';

        }
    }
  

    ?>



        <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Update Home Template</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb"> 
                                    <li class="breadcrumb-item"><a href="<?php base_url()."Admin/dashboard"; ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Home Template</li>
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

                                                <th class="sorting " tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Office: activate to sort column ascending" style="width: 1px;">Status</th>

                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Age: activate to sort column ascending" style="width: 1px;">Action</th>

                                                


                                               </tr>
                                        </thead>
                                        <tbody>
                                    <?php
                                    foreach($homes->result() as $rows)
                                    {
                                        ?>

                                           <tr role="row" class="odd">
                                           
                                                <td class=""><?php echo $rows->id ?></td>
                                                <td class="sorting_1"><?php echo $rows->cat_name ?></td>
                                             
                                                <td class="sorting"><?php

                                                if($rows->status == 1)
                                                {
                                                    echo "Activated";
                                                }
                                                elseif($rows->status==0)
                                                {
                                                    echo "Not Activated";
                                                }
                                                else

                                                {
                                                    echo "Error";
                                                }

                                                ?></td>
                                             
                                            
                                                <td>
                                                    <?php
                                                    if($rows->status==1)
                                                    {
                                                        ?>
                                                      <form action="<?php echo base_url('Admin/updateHome')?>" method="POST">
                                                    <input name="status_id" hidden="true" value="<?php echo $rows->id ?>">

                                                    <button type="button submit" name="btn_deactivate" class="btn btn-danger btn-sm">Deactivate</button>
                                                    </form>

                                                        <?php
                                                    }
                                                    elseif($rows->status==0)
                                                    {

                                                        ?>
                                                     <form action="<?php echo base_url('Admin/updateHome')?>" method="POST">
                                                    <input name="status_id" hidden="true" value="<?php echo $rows->id ?>">

                                                    <button type="button submit" name="btn_activate" class="btn btn-cyan btn-sm">Activate</button>
                                                </form>


                                                        <?php

                                                    }
                                                    else
                                                    {
                                                        echo "Error";
                                                    }


                                                    ?>

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