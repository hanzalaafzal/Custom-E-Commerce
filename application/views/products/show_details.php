
<body style="">
 <!-- section-header.// --><section class="section-content bg padding-y-sm">
<div class="container">
<nav class="mb-3">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="#">
    	

    </a></li>
    <li class="breadcrumb-item"><a href="#">
    	
   
    </a></li>
    <li class="breadcrumb-item active" aria-current="page">
    	
    	<?php
    	echo $product->p_name;

    	?>
    </li>
</ol> 
</nav>

<div class="row">
<div class="col-xl-10 col-md-9 col-sm-12">


<main class="card">
	<div class="row no-gutters">
		<aside class="col-sm-6 border-right">
<article class="gallery-wrap"> 
<div class="img-big-wrap">
  <div> <a href="<?php echo base_url()."uploads/images/products/".$product->p_image ?>" data-fancybox=""><img src="<?php echo
  base_url()."uploads/images/products/".$product->p_image ?>"></a></div>
</div> <!-- slider-product.// -->

</article> <!-- gallery-wrap .end// -->
		</aside>
		<aside class="col-sm-6">
<article class="card-body">
<!-- short-info-wrap -->
	<h3 class="title mb-3"><?php echo $product->p_name?></h3>

<div class="mb-3"> 
	<var class="price h3 text-warning"> 
		<span class="currency">US $</span><span class="num"><?php echo $product->p_discount_price ?></span>
	</var> 
	
</div> <!-- price-detail-wrap .// -->
<dl>
  <dt>Info</dt>
  <dd><p><?php echo $product->p_info ?></p></dd>
</dl>
<dl class="row">
  <dt class="col-sm-3">Model#</dt>
  <dd class="col-sm-9">12345611</dd>

  <dt class="col-sm-3">Color</dt>
  <dd class="col-sm-9">Black and white </dd>

  <dt class="col-sm-3">Delivery</dt>
  <dd class="col-sm-9">Russia, USA, and Europe </dd>
</dl>
<div class="rating-wrap">

	<ul class="rating-stars">
		<li style="width:80%" class="stars-active"> 
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> 
		</li>
		<li>
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> 
		</li>
	</ul>
	<div class="label-rating">132 reviews</div>
	<div class="label-rating">154 orders </div>
</div> <!-- rating-wrap.// -->
<hr>
	<div class="row">
		<div class="col-sm-5">
			<dl class="dlist-inline">
				<form action="<?php echo base_url()."YourCart/add/".$product->p_id ?>" method="POST">
		

			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->
		
	</div> <!-- row.// -->
	<hr>

	<a  href="<?php echo base_url()."YourCart/add/".$product->p_id ?> " id="add_cart" name="add_cart" class="btn  btn-outline-warning" > Add to Cart 
	</a>
</form>
<!-- short-info-wrap .// -->
</article> <!-- card-body.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</main> <!-- card.// -->

<!-- PRODUCT DETAIL -->
<article class="card mt-3">
	<div class="card-body">
		<h4>Detail overview</h4>
	<p><?php echo $product->p_desc ?>	</p>
	<p><?php echo $product->p_desc ?>	</p>
	<p><?php echo $product->p_desc ?>	</p>
	<p><?php echo $product->p_desc ?>	</p>
	
	</div> <!-- card-body.// -->
</article> <!-- card.// -->

<!-- PRODUCT DETAIL .// -->

</div> <!-- col // -->
 <!-- col // -->
</div> <!-- row.// -->



</div><!-- container // -->
</section>
<!-- ========================= FOOTER END // ========================= -->



</body>
	


<script type="text/javascript">

	$(document).ready(function(){
		$('.add_cart.').click(function(){
			var product_id	= $(this).data("productid");
			var product_name= $(this).data("productname");
			var product_price=$(this).data("price");
			var quantity=$('#'+'qtyFieldd').val();
			if(quantity>0)
			{
				$.ajax({
					url:"<?php echo base_url()."YourCart/add" ?>",
					method: "POST",
					data:{product_id:product_id, product_name:product_name,product_price:product_price,quantity:quantity},
					success:function(data)
					{
						alert("Added Into Cart");
						$('#cart_details').html(data);
						$('#'+product_id).val('');
					}
				});
			}
			else
			{
				alert("ENter Quntity");
			}

		});


});
	</script>