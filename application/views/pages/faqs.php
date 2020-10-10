
<!-- ========================= SECTION PAGETOP ========================= -->
<body>
<section class="section-pagetop bg-secondary">
<div class="container clearfix">
	<h2 class="title-page">Frequently Asked Questions</h2>

	<nav class="float-left">
	<ol class="breadcrumb text-white">
	    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="#">Faqs</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Data</li>
	</ol>  
	</nav>
</div> <!-- container //  -->
</section>
<section class="section-content bg padding-y">
<div class="container">

<?php 

		if($faqs->num_rows()>0)
		{
				foreach($faqs->result() as $row)
				{

			?>

			<div class="row">
			<main class="col-sm-9">
			<header class="section-heading">
			<h6 class="title-section"> Q. <?php echo $row->ques ?></h6>
			</header>
			<article>
				
			<p>Ans. <?php echo $row->answer ?>
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

