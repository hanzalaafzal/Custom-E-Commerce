
<div class="page-wrapper">

 <div class="page-container">
           
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">

                   

                                <div class="card-body">
                                    <h4 class="card-title">View Order Details </h4>

                                    <p>Order ID: <?php echo $oid ?></p>
	                                 <p>Name: <?php echo $order->row()->first_name." ".$order->row()->last_name ?></p>
	                                 <p>Email: <?php echo $order->row()->email ?></p>
									<p>Contact Number: <?php echo $order->row()->contact_num ?></p>   
									<p>Name: <?php echo $order->row()->home_num ?></p>    
									<p>City: <?php echo $order->row()->city ?></p> 
									<p>Country: <?php echo $order->row()->country ?></p>     
									<p>Shipping Address: <?php echo $order->row()->s_ad_1." || ".$order->row()->s_ad_2?></p>
									<p>Shipping City: <?php echo $order->row()->s_city ?></p>                       
									<p>Shipping Country: <?php echo $order->row()->s_country ?></p> 
									  
									<?php
									if($order->row()->status==0)
									{
										echo "<p>Status : Not Confirm";
									}
									elseif($order->row()->status==1)
									{
										echo "<p>Status: Confirmed";
									}
									elseif($order->row()->status==2)
									{
										echo "<p>Status: Dispatched";
									}
									elseif($order->row()->status==3)
									{
										echo "<p>Status: Completed";
									}
									elseif($order->row()->status==4)
									{
										echo "<p>Status: Canceled";
									}

									?>  
									<hr>    
									<h4>Products</h4>

									<?php
									foreach($order->result() as $rows)
									{
										?>
										<h6><?php echo $rows->prod_name ?></h6>
										<p>Quantity: <?php echo $rows->prod_qty?></p>
										<p>Product Price: $<?php echo $rows->prod_price?></p>
										<p>Sub Total: $<?php echo $rows->prod_subtotal?></p>

										<?php
									}


									?>
									<hr>
									<h3>Net Total : $<?php echo $rows->net_total?></h3>

									<a href="<?php echo base_url()."Admin/showOrders" ?>" class="btn btn-cyan">< Back to Orders</a>

                                </div>
                              
                            </form>
                        </div>
                  
                     

                    </div>
     
                </div>
             
    </div>




</div>