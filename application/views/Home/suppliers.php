
<section class="section-links bg padding-y-sm">
<div class="container">
<div class="row">
	<div class="col-sm-6">
<header class="section-heading heading-line">
	<h4 class="title-section bg text-uppercase">Suppliers by Region</h4>
</header>

<ul class="list-icon row">
	<?php 

	foreach($regions->result() as $region)
	{
		?>


		<li class="col-md-4"><a href="#"><img src="<?php echo base_url()."uploads/images/region/".$region->image ?>"><span><?php echo $region->name ?></span></a></li>
<?php
	}

	?>
	
	
</ul>
	</div> <!-- col // -->

	<div class="col-sm-6">
<header class="section-heading heading-line">
	<h4 class="title-section bg text-uppercase">Trade services</h4>
</header>
<ul class="list-icon row">
	<li class="col-md-4"><a href="#"><i class="icon fa fa-comment"></i><span>Trade Assistance</span></a></li>
	<li class="col-md-4"><a href="#"><i class="icon  fa fa-suitcase"></i><span>Business Identity</span></a></li>
	<li class="col-md-4"><a href="#"><i class="icon fa fa-globe"></i><span>Worldwide delivery</span></a></li>
	<li class="col-md-4"><a href="#"><i class="icon fa fa-phone-square"></i><span>Customer support</span></a></li>
	<li class="col-md-4"><a href="#"><i class="icon fa fa-globe"></i><span>Worldwide delivery</span></a></li>
	<li class="col-md-4"><a href="#"><i class="icon fa fa-phone-square"></i><span>Customer support</span></a></li>
</ul>
	</div> <!-- col // -->
</div><!-- row // -->



</div><!-- container // -->
</section>