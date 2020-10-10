<div class="page-wrapper">


  <?php
    error_reporting(0);
    if($_GET['did'])
    {
        if($_GET['did']==1)
        {
            echo '<div class="alert alert-success" role="alert">
                                  Deleted Successfully
                                </div>';
        }
        elseif($_GET['did']==2)
        {
            echo '<div class="alert alert-warning" role="alert">
                                  Deletion Failed
                                </div>';

        }
    }
  

    ?>



        <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Queries</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb"> 
                                    <li class="breadcrumb-item"><a href="<?php base_url()."Admin/dashboard"; ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Queries</li>
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

                                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column descending" style="width: 231px;" aria-sort="ascending">Email</th>

                                                <th class="sorting " tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Office: activate to sort column ascending" style="width: 1px;">Name</th>

                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Age: activate to sort column ascending" style="width: 1px;">Number</th>

                                                 <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Age: activate to sort column ascending" style="width: 1px;">Subject</th>

                                                 <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Age: activate to sort column ascending" style="width: 1px;">View</th>

                                                 <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="0" aria-label="Age: activate to sort column ascending" style="width: 1px;">Delete</th>


                                               </tr>
                                        </thead>
                                        <tbody>
                                    <?php
                                    foreach($queries->result() as $rows)
                                    {
                                        ?>

                                           <tr role="row" class="odd">
                                            <form action="#">
                                                <td class=""><?php echo $rows->id ?></td>
                                                <td class="sorting_1"><input id="email" hidden="true" value="<?php echo $rows->email ?>"> <?php echo $rows->email ?></td>
                                             
                                                <td class="sorting"><input id="name" hidden="true" value="<?php echo $rows->name ?>"><?php echo $rows->name ?></td>
                                             
                                                <td class="sorting"><input id="number" hidden="true" value="<?php echo $rows->number ?>"><?php echo $rows->number ?></td>
                                          
                                                <td class="sorting"><input id="subject" hidden="true" value="<?php echo $rows->subject ?>"><?php echo $rows->subject ?></td>
                                            
                                                <td>
                                                	<input id="msg" value="<?php echo $rows->message ?>" hidden="true">
                                                	<button type="button submit" id="myBtn" onClick="getModal(this.form,this.form.email.value,this.form.name.value,this.form.number.value,this.form.subject.value,this.form.msg.value)"  class="btn btn-success btn-sm">View</button>
                                                </form>

                                                </td>
                                                

                                                <td>
                                                	<form action="<?php echo base_url('Admin/delQuery')?>" method="POST">
                                                		<input name="qid" hidden="true" value="<?php echo $rows->id ?>">
                                                	<button type="button submit" onClick="return confirm('Are you absolutely sure you want to delete?')" class="btn btn-danger btn-sm">Delete</button>
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