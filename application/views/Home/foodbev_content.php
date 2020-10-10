<section class="section-content padding-y-sm bg">
<div class="container">

<header class="section-heading heading-line">
	<h4 class="title-section bg">Home Appliances</h4>
</header>

<div class="card">
<div class="row no-gutters">
	<div class="col-md-3">
	
<article href="#" class="card-banner h-100 bg2">
	<div class="card-body zoom-wrap">
		<h5 class="title">Home Equipments</h5>
		<p>Consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, cLorem ipsum dolor sit amet, cLorem ipsum dolor sit amet, cLorem ipsum dolor sit amet, c</p>
		<a href="#" class="btn btn-warning">Explore</a>
		<img src="<?php echo base_url()?>/assets/images/items/item-sm.png" height="200" class="img-bg zoom-in">
	</div>
</article>

	</div> <!-- col.// -->
	<div class="col-md-9">
<ul class="row no-gutters border-cols">

	<?php 
	
		if($sub_home->num_rows()>0)
		{
			foreach($sub_home->result() as $row)
			{		


	?>
		<li class="col-6 col-md-3">
			<a href="<?php echo base_url()."products/".$row->cat_url ?>" class="itembox"> 
				<div class="card-body">
					<p style="text-align: center;" class="word-limit"><?php echo $row->subcat_name ?>  </p>
					<img class="img-sm" style="margin-left: 60px" src="<?php echo base_url()."uploads/images/subcategories/".$row->sub_images ?>">
				</div>
			</a>
		</li>

	<?php

			}
		}

	?>

	

	</div> <!-- col.// -->
</div> <!-- row.// -->
	
</div> <!-- card.// -->

</div> <!-- container .//  -->
</section>