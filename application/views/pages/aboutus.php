
<!-- ========================= SECTION PAGETOP ========================= -->
<body>
<section class="section-pagetop bg-secondary">
<div class="container clearfix">
	<h2 class="title-page">About Us</h2>

	<nav class="float-left">
	<ol class="breadcrumb text-white">
	    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="#">Library</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Data</li>
	</ol>  
	</nav>
</div> <!-- container //  -->
</section>
<section class="section-content bg padding-y">
<div class="container">

<?php 

		if($about->num_rows()>0)
		{
				foreach($about->result() as $row)
				{

			?>

			<div class="row">
			<main class="col-sm-9">
			<header class="section-heading">
			<h2 class="title-section"><?php echo $row->name ?></h2>
			</header>
			<article>
				
			<p><?php echo $row->content ?>
			</p>
			</article>
			</main> <!-- col.// -->

		</div>


<?php

				}
		}

?>



</div> <!-- container .//  -->
</section>
</body>
<!-- ========================= SECTION CONTENT END// ========================= -->

