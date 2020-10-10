


<html lang="en"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bootstrap-ecommerce by Vosidiy">

<title><?php echo $title ?> </title>

<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>/assets/images/favicon.ico">

<!-- jQuery -->
<script src="<?php echo base_url()?>/assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="<?php echo base_url()?>/assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="<?php echo base_url()?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">

<!-- Font awesome 5 -->
<link href="<?php echo base_url()?>/assets/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

<!-- plugin: owl carousel  -->
<link href="<?php echo base_url()?>/assets/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>/assets/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
<script src="<?php echo base_url()?>/assets/plugins/owlcarousel/owl.carousel.min.js"></script>

<!-- custom style -->
<link href="<?php echo base_url()?>/assets/css/ui.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>/assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)">

<!-- custom javascript -->
<script src="<?php echo base_url()?>/assets/js/script.js" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start


	function  updateCartItemInc(form,qtyy,idd)
	{
		
	
		$.post("<?php echo base_url('YourCart/updateCartInc'); ?>",{rowid:idd,qty:qtyy},function(resp){
			if(resp=='ok')
			{
			//	location.reload();	
			}
			else
			{ 
				alert('Cart not updated');
			}
		});

	}
	function  updateCartItemDec(form,qtyy,idd)
	{

		$.post("<?php echo base_url('YourCart/updateCartDec'); ?>",{rowid:idd,qty:qtyy},function(resp){
			if(resp=='ok')
			{
			//	location.reload();
			}
			else
			{ 
				alert('Cart not updated');
			}
		});

	}
	function  removeCartItem(form,idd)
	{
		
		$.get("<?php echo base_url('YourCart/removeItem'); ?>",{rowid:idd},function(resp){
			if(resp=='ok')
			{
				location.reload();
			}
			else
			{ 
				alert('Cart not updated');
			}
		});

	}

// jquery end
</script>

</head>
<body style="">
<header class="section-header">
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
  	<a class="navbar-brand" href="<?php echo base_url()?>"><img class="logo" src="<?php echo base_url()?>/assets/images/logos/logo-alibaba.png" alt="alibaba style e-commerce html template file" title="alibaba e-commerce html css theme"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTop">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a href="<?php echo base_url() ?>pages/AboutUs" class="nav-link" aria-expanded="false">About us</a>
          
        </li>
		<li class="nav-item"><a href="<?php echo base_url() ?>pages/ContactUs" class="nav-link"  aria-expanded="false">   Contact us </a>
            
        </li>
        <li class="nav-item"><a href="<?php echo base_url() ?>pages/Faqs" class="nav-link"  aria-expanded="false">  Faqs </a>
            
        </li>
		<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">   Community </a>
            <ul class="dropdown-menu">
				<li><a class="dropdown-item" href="#">Help Center</a></li>
				<li><a class="dropdown-item" href="#">Submit a Dispute </a></li>
				<li><a class="dropdown-item" href="#">For Suppliers </a></li>
            </ul>
        </li>
      </ul>
      
    </div> <!-- collapse.// -->
  </div>
</nav>

<section class="header-main shadow-sm">
	<div class="container">
<div class="row-sm align-items-center">
	<div class="col-lg-4-24 col-sm-3">
	<div class="category-wrap dropdown py-1">
		<button type="button" class="btn btn-light  dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Categories</button>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="#">Machinery / Mechanical Parts / Tools </a>
			<a class="dropdown-item" href="#">Consumer Electronics / Home Appliances </a>
			<a class="dropdown-item" href="#">Auto / Transportation</a>
			<a class="dropdown-item" href="#">Apparel / Textiles / Timepieces </a>
			<a class="dropdown-item" href="#">Home &amp; Garden / Construction / Lights </a>
			<a class="dropdown-item" href="#">Beauty &amp; Personal Care / Health </a> 
		</div>
	</div> 
	</div>
	<div class="col-lg-11-24 col-sm-8">
			<form action="#" class="py-1">
				<div class="input-group w-100">
					<select class="custom-select" name="category_name">
						<option value="">All type</option>
						<option value="">Special</option>
						<option value="">Only best</option>
						<option value="">Latest</option>
					</select>
				    <input type="text" class="form-control" style="width:50%;" placeholder="Search">
				    <div class="input-group-append">
				      <button class="btn btn-warning" type="submit">
				        <i class="fa fa-search"></i> Search 
				      </button>
				    </div>
			    </div>
			</form> <!-- search-wrap .end// -->
	</div> <!-- col.// -->
	<div class="col-lg-9-24 col-sm-12">
		<div class="widgets-wrap float-right row no-gutters py-1">
			<div class="col-auto">
			<div class="widget-header dropdown">
				<a href="#" data-toggle="dropdown" data-offset="20,10">
					<div class="icontext">
						<div class="icon-wrap"><i class="text-warning icon-sm fa fa-user"></i></div>
						<div class="text-wrap text-dark">
							Sign in <br>
							My account <i class="fa fa-caret-down"></i> 
						</div>
					</div>
				</a>
				<div class="dropdown-menu">
					<form class="px-4 py-3">
						<div class="form-group">
						  <label>Email address</label>
						  <input type="email" class="form-control" placeholder="email@example.com">
						</div>
						<div class="form-group">
						  <label>Password</label>
						  <input type="password" class="form-control" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-primary">Sign in</button>
						</form>
						<hr class="dropdown-divider">
						<a class="dropdown-item" href="#">Have account? Sign up</a>
						<a class="dropdown-item" href="#">Forgot password?</a>
				</div> <!--  dropdown-menu .// -->
			</div>  <!-- widget-header .// -->
			</div> <!-- col.// -->
			<div class="col-auto">
				<a href="#" class="widget-header">
					<div class="icontext">
						<div class="icon-wrap">
							<a href="<?php echo base_url()."YourCart" ?>">
								<i href="<?php echo base_url()."YourCart" ?>" class="text-warning icon-sm fa fa-shopping-cart"></i>
								<span class="small round badge badge-secondary">
							<?php 
							echo $this->cart->total_items();
						?>
							
						</span>
							</a>
							<a href="#" class="b" data-toggle="dropdown" data-offset="10,10" aria-expanded="false"> 
									 	Your Cart <i class="fa fa-caret-down"></i> 
							</a>
							<div class="dropdown-menu dropdown-menu-right" style="min-width: 250px; position: absolute; transform: translate3d(95px, 61px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-end">
					<article class="p-2">	
							<?php 
							if($this->cart->total_items()>0)
							{
								foreach($cart_Items as  $citems)
									{

										?>	
									<figure class="media">
										<div class="img-wrap"><img src="<?php echo base_url()."uploads/images/products/".$citems['image'] ?>" class="img-thumbnail img-xs"></div>
											<figcaption class="media-body">
												<a href="<?php echo base_url()."YourCart" ?>"><?php echo $citems['name'] ?></a> <br>
											<span class="text-muted">Quantity: <?php echo $citems['qty'] ?> </span><br>
											<span class="text-muted">Price: $<?php echo $citems['subtotal'] ?> </span>
										</figcaption>
										</figure> <!-- media.// -->
										<hr>
										<?php

									}
							}
							else
							{
								?>
									<figure class="media">
									
											<figcaption class="media-body">
											
											<span class="text-muted">Your Cart is Empty </span><br>
										
										</figcaption>
										</figure> 


								<?php
							}
						


							?>
			
							
						</div> <!--  dro
						</div>
						
						
					</div>
				</a>
			</div> <!-- col.// -->


		</div> <!-- widgets-wrap.// row.// -->
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->
</header> <!-- section-header.// -->