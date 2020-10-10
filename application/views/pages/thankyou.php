
<!-- ========================= SECTION PAGETOP ========================= -->
<body>

<section class="section-content bg padding-y">
<div class="container">




			<div class="row">
			<main class="col-sm-12" style="text-align: center;">
			<header class="section-heading">
			<h1 class="title-section">Thankyou for Shopping with us.</h1><br><br>
			<img src="<?php echo base_url()."assets/images/tick.png" ?>" style="width:150px"><br><br><br>
			<h3>Your Order has been placed</h3><br><br>

				
			

				<h5>Your Order ID is <u><?php echo $this->session->userdata('order_id') ?></u></h5>
				<h6>Order Details</h6>

				<table border="0" align="center">
				<thead >
					<th style="padding-right: 250px"  >Item</th>
					<th style="padding-right: 150px">Quantity</th>
					<th>Sub Total</th>
				</thead>
				<tbody>
				<?php 
				foreach($cart_Items as $citems)
				{

				?>

					<tr>
						<td><?php echo $citems['name'] ?></td>
						<td ><?php echo $citems['qty'] ?></td>
						<td>$<?php echo $citems['subtotal']?></td>
					</tr>


				<?php
				}



				?><br>
				<tr>
					<td></td>
					<td><h6 align="right">Total:</h6> </td>
					<td><h6>$<?php echo $this->cart->total() ?></h6></td>

				</tr>
				<tr>
					<td></td>
					<td> </td>
					<td></td>
					
				</tr>
				<tr>
					<td></td>
					<td><h6 align="right">Delivery Charges:</h6> </td>
					<td><h6>$23</h6></td>
					
				</tr>
				<tr>
					<td></td>
					<td> </td>
					<td></td>
					
				</tr>
				<tr>
					<td></td>
					<td><h6 align="right">Net Total:</h6> </td>
					<td><h6><?php echo $this->cart->total()+23?></h6></td>
					
				</tr>
			</tbody>
		</table>

		<?php 
		$this->cart->destroy();
		$this->session->unset_userdata('order_id');

		?>


				<br><br>
			
			

			</header>
			<article>
				
			<p>
			</p>
			</article>
			</main>
		</div>





</div> <!-- container .//  -->
</section>
</body>
<!-- ========================= SECTION CONTENT END// ========================= -->

