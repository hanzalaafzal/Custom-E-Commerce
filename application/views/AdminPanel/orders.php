<div class="page-wrapper">


  <?php
    error_reporting(0);
    if($_GET['ed'])
    {
        if($_GET['ed']==1)
        {
            echo '<div class="alert alert-success" role="alert">
                                  Order Updated Successfully
                                </div>';
        }
        elseif($_GET['ed']==2)
        {
            echo '<div class="alert alert-warning" role="alert">
                                  Order Not Updated
                                </div>';

        }
    }
  

    ?>



        <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Orders</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb"> 
                                    <li class="breadcrumb-item"><a href="<?php base_url()."Admin/dashboard"; ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
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
                                                <th  tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Name: activate to sort column ascending" style="width: 143px;"> Order ID</th>

                                                <th  tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Position: activate to sort column descending" style="width: 231px;" aria-sort="ascending">Customer email</th>

                                                <th class="sorting " tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Office: activate to sort column ascending" style="width: 1px;">Customer Name</th>

                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Age: activate to sort column ascending" style="width: 1px;"> Customer Number</th>

                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Age: activate to sort column ascending" style="width: 1px;">City</th>

                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Age: activate to sort column ascending" style="width: 1px;">Country</th>

                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Age: activate to sort column ascending" style="width: 1px;">Shipping Address</th>

                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Age: activate to sort column ascending" style="width: 1px;">Shipping City</th>

                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Age: activate to sort column ascending" style="width: 1px;">Shipping Country</th>

                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Age: activate to sort column ascending" style="width: 1px;">Order Status</th>

                                                 <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Age: activate to sort column ascending" style="width: 1px;">Update Status</th>

                                               </tr>
                                        </thead>
                                        <tbody>
                                    <?php
                                    foreach($orders->result() as $rows)
                                    {
                                        ?>

                                           <tr role="row" class="odd">
                                            
                                                <td class="sorting"><a href="<?php echo base_url()."Admin/viewOrder/".$rows->order_id ?>"><?php echo $rows->order_id ?></a></td>
                                                <td class="sorting"><?php echo $rows->email?></td>
                                                <td class="sorting"><?php echo $rows->first_name." ".$rows->last_name?></td>
                                                <td class="sorting"><?php echo $rows->contact_num?></td>
                                                <td class="sorting"><?php echo $rows->city?></td>
                                                <td class="sorting"><?php echo $rows->country ?></td>
                                                <td class="sorting"><?php echo $rows->s_ad_1." ".$rows->s_ad_2 ?></td>
                                                <td class="sorting"><?php echo $rows->s_city ?></td>
                                                <td class="sorting"><?php echo $rows->country?></td>
                                                <td>
                                                    <?php

                                                    if($rows->status==0)
                                                    {
                                                        echo "Not Confirmed";
                                                    }
                                                    elseif($rows->status==1)
                                                    {
                                                        echo "Confirmed";
                                                    }
                                                    elseif($rows->status==2)
                                                    {
                                                        echo "Dispatches";
                                                    }
                                                    elseif($rows->status==3)
                                                    {
                                                        echo "Completed";
                                                    }
                                                    elseif($rows->status==4)
                                                    {
                                                        echo "Canceled";
                                                    }

                                                    ?>
                                                </td>
                                                <td>
                                                    <form action="<?php echo base_url('Admin/updateOrder') ?>" method="POST">

                                                        <input name="order_id" hidden="true" value="<?php echo $rows->order_id?>">
                                                <select name="changeStatus">
                                                    
                                                    <option selected>Select</option>
                                                    <option value="0">Not Confirm</option>
                                                    <option value="1">Confirm</option>
                                                    <option value="2">Dispatch</option>
                                                    <option value="3">Completed</option>
                                                    <option value="4">Canceled</option>
                                                </select>
                                                <button type="btn submit" class="btn btn-cyan"> 
                                                    update status</button>
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