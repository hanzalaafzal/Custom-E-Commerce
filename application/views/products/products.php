
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y-sm">
<div class="container">


<div class="padding-y-sm">
<span><?php echo $product->num_rows(); ?> results</span>	
</div>

<div class="row-sm">

<?php 
if($product->num_rows()>0)
{
	foreach($product->result() as $row)
	{
		?>
		<div class="col-md-3 col-sm-6">
			<figure class="card card-product">
				<div class="img-wrap"> <img class="img-md" src="<?php echo base_url()."uploads/images/products/".$row->p_image ?>"></div>
					<figcaption class="info-wrap">
						<a href="<?php echo base_url()."products/ShowDetails/".$row->p_id ?>" class="title"><?php echo $row->p_name ?></a>
						<div class="price-wrap">
								<span class="price-new">$<?php echo $row->p_discount_price ?></span>
								<del class="price-old">$<?php echo $row->p_price ?></del>
								<a href="<?php echo base_url()."YourCart/add/".$row->p_id ?>">
								<i href="#" class="text-warning icon-sm fa fa-shopping-cart"></i>
							</a>
						</div> <!-- price-wrap.// -->
					</figcaption>
			</figure> <!-- card // -->
</div> <!-- col // -->

		<?php
	}
}
else
{
	echo "Data related to your access field not found in database ";
}

?>


</div> <!-- row.// -->


</div><!-- container // -->
</section>
