<body style="">
 <!-- section-header.// -->


<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y border-top">
<div class="container">

<div class="row">
	<main class="col-sm-9">

<div class="card">
<table class="table table-hover shopping-cart-wrap">
<thead class="text-muted">
<tr>
  <th scope="col">Product</th>
  <th class="text-center" scope="col">Increase</th>

  <th class="text-center" scope="col">Quantity</th>
  <th class="text-center" scope="col">Decrease</th>
  <th class="text-center" scope="col">Price</th>
  <th class="text-center" scope="col">Total Price</th>
  <th class="text-center" scope="col"></th>
</tr>
</thead>
<tbody>
	<!----------------------- ---------------------------------------------------------------->
	<?php

	if($this->cart->total_items() >0)
	{

		foreach($cart_Items as  $citems)
		{
			?>

<tr>
		<td>
		<figure class="media">
				<div class="img-wrap"><img src="<?php echo base_url()."uploads/images/products/".$citems['image'] ?>" class="img-thumbnail img-sm"></div>
		<figcaption class="media-body">
			<h6 class="title text-truncate"><?php echo $citems['name'] ?> </h6>
			<dl class="dlist-inline small">
		 
			</dl>
		<dl class="dlist-inline small">
		  <dt>Info: </dt>
		  <dd><?php echo $citems['info'] ?></dd>
		</dl>
			</figcaption> 
		</figure> 
	</td>
	<td class="text-center"> 
		<form>
		<input id="increment_idd" hidden="true" value="<?php echo $citems['rowid'] ?>">
		<input id="increment_qty" hidden="true" value="<?php echo $citems['qty'] ?>">

		<button data-original-title="Increase Quantity" onClick="updateCartItemInc(this.form,this.form.increment_qty.value,this.form.increment_idd.value)" class="btn btn-outline-success" data-toggle="tooltip">+</button> 
	</form>
	</td>
	<td class="text-center"> 
		<div class="price-wrap"> 
			<var class="price"><?php echo $citems['qty'] ?></var> 
			
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-center"> 
		<form>
		<input id="decrement_idd" hidden="true" value="<?php echo $citems['rowid'] ?>">
		<input id="decrement_qty" hidden="true" value="<?php echo $citems['qty'] ?>">
	<button data-original-title="Decrease Quantity" onClick="updateCartItemDec(this.form,this.form.decrement_qty.value,this.form.decrement_idd.value)" class="btn btn-outline-danger" data-toggle="tooltip">-</button>
	</form>
	</td>
	<td class="text-center">
		<div class="price">
			$<?php echo $citems['price'] ?>
		</div>

	</td>
	<td class="text-center">
		<div class="price">
			$<?php echo $citems['subtotal']?>
		</div>

	</td>
	<td class="text-center">
	<form>
		<input id="remove_idd" hidden="true" value="<?php echo $citems['rowid'] ?>">
		<button data-original-title="Remove All Items" onClick="removeCartItem(this.form,this.form.remove_idd.value)" class="btn btn-outline-danger">Remove</button> 
	</form>
	</td>
</tr>

			<?php

		}

	}
	else
	{

	}


	 ?>
	
<!----------------------- cart items display end ---------------------------------------------------------------->	
</tbody>
</table>
</div> <!-- card.// -->

	</main> <!-- col.// -->
	<?php if($this->cart->total_items()>0)
	{
		?>
	<aside class="col-sm-3">

			<dl class="dlist-align">
  		<dt>Total price: </dt>
  			<dd class="text-right">$ <?php echo $this->cart->total()?></dd>
		</dl>
				<dl class="dlist-align">
 				 <dt>Discount:</dt>
		  <dd class="text-right">$ 0</dd>
		</dl>
		<dl class="dlist-align">
  			<dt>Shipping:</dt>
  		<dd class="text-right">$ 23</dd>
		</dl>
				<dl class="dlist-align h5">
  		<dt>Net Total:</dt>
  			<dd class="text-right">$<?php echo $this->cart->total()+23?><strong></strong></dd>
		</dl>
			<hr>

			<figure class="itemside mb-3">
			<div>
			<a style="width:300%"href="<?php echo base_url()."YourCart/checkout"?>" class="btn btn-warning">
				Check Out
				</a>		
			</div>
		</figure>

	</aside>


		<?php
	}
	else
	{

		echo "<h2>Your Cart is Empty</h2>";


	}



	        ?>
 <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>
















</body>