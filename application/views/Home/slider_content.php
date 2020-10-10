<section class="section-main bg padding-y-sm">
<div class="container">
<div class="card">
	<div class="card-body">
<div class="row row-sm">
	<aside class="col-md-3">
<h5 class="text-uppercase">My Markets</h5>
	<ul class="menu-category">
		<?php 

		if($cats->num_rows() > 0)
		{
			foreach($cats->result() as $row)
			{
				?>

				<li> <a href='#'><?php echo $row->cat_name ?> </a></li>

				 <?php


			}
		}
		

		?>
		
		
		
	
	</ul>

	</aside> <!-- col.// -->
	<div class="col-md-6">

<!-- ================= main slide ================= -->
<div class="owl-init slider-main owl-carousel owl-loaded owl-drag" data-items="1" data-nav="true" data-dots="false">
	
	
	
<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1756px, 0px, 0px); transition: all 0s ease 0s; width: 6585px;"><div class="owl-item cloned" style="width: 439px;"><div class="item-slide">
		<img src="<?php echo base_url()?>/assets/images/banners/slide2.jpg">
	</div></div><div class="owl-item cloned" style="width: 439px;"><div class="item-slide">
		<img src="<?php echo base_url()?>/assets/images/banners/slide3.jpg">
	</div></div><div class="owl-item cloned" style="width: 439px;"><div class="item-slide">
		<img src="<?php echo base_url()?>/assets/images/banners/slide1.jpg">
	</div></div><div class="owl-item cloned" style="width: 439px;"><div class="item-slide">
		<img src="<?php echo base_url()?>/assets/images/banners/slide2.jpg">
	</div></div><div class="owl-item active" style="width: 439px;"><div class="item-slide">
		<img src="<?php echo base_url()?>/assets/images/banners/slide1.jpg">
	</div></div><div class="owl-item" style="width: 439px;"><div class="item-slide">
		<img src="<?php echo base_url()?>/assets/images/banners/slide2.jpg">
	</div></div><div class="owl-item" style="width: 439px;"><div class="item-slide">
		<img src="<?php echo base_url()?>/assets/images/banners/slide3.jpg">
	</div></div><div class="owl-item cloned" style="width: 439px;"><div class="item-slide">
		<img src="<?php echo base_url()?>/assets/images/banners/slide2.jpg">
	</div></div><div class="owl-item cloned" style="width: 439px;"><div class="item-slide">
		<img src="<?php echo base_url()?>/assets/images/banners/slide3.jpg">
	</div></div><div class="owl-item cloned" style="width: 439px;"><div class="item-slide">
		<img src="<?php echo base_url()?>/assets/images/banners/slide1.jpg">
	</div></div><div class="owl-item cloned" style="width: 439px;"><div class="item-slide">
		<img src="<?php echo base_url()?>/assets/images/banners/slide2.jpg">
	</div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right"></i></button></div><div class="owl-dots disabled"></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right"></i></button></div><div class="owl-dots disabled"></div></div>
<!-- ============== main slidesow .end // ============= -->

	</div> <!-- col.// -->
	<aside class="col-md-3">

<h6 class="title-bg bg-secondary"> Qualified Suppliers</h6>
<div style="height:280px;">
	<figure class="itemside has-bg border-bottom" style="height: 33%;">
		<img class="img-bg" src="<?php echo base_url()?>/assets/images/items/item-sm.png">
		<figcaption class="p-2">
			<h6 class="title">One request, many offers </h6>
			<a href="#">Good link</a>
		</figcaption>
	</figure>

	<figure class="itemside has-bg border-bottom" style="height: 33%;">
		<img class="img-bg" src="<?php echo base_url()?>/assets/images/items/1.jpg" height="80">
		<figcaption class="p-2">
			<h6 class="title">One request, many offers </h6>
			<a href="#">Good link</a>
		</figcaption>
	</figure>
	<figure class="itemside has-bg border-bottom" style="height: 33%;">
		<img class="img-bg" src="<?php echo base_url()?>/assets/images/items/2.jpg" height="80">
		<figcaption class="p-2">
			<h6 class="title">One request, many offers </h6>
			<a href="#">Good link</a>
		</figcaption>
	</figure>
</div>

	</aside>
</div> <!-- row.// -->
	</div> <!-- card-body .// -->
</div> <!-- card.// -->



</div> <!-- container .//  -->
</section>