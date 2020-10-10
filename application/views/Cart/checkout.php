<div class="col-md-6" style="margin-left: 400px">
<header class="card-header">
	
	<h4 class="card-title mt-2">Checkout </h4>
</header>
<article class="card-body">
<form action="<?php echo base_url('YourCart/placeOrder')?>" method="post">
	<div class="form-row">
		<div class="col form-group">
			<label>First name *</label>
		  	<input type="text" name="fname" class="form-control" placeholder="e.g John" >
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Last name *</label>
		  	<input type="text" name="lname" class="form-control" placeholder="e.g Doe" >
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email address *</label>
		<input type="email" name="email" class="form-control" placeholder="e.g JohnDoe@email.com" >
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> <!-- form-group end.// -->

	<div class="form-row">
		<div class="col form-group">
			<label>Mobile Number *</label>
		  	<input type="text"  name="mob_number" class="form-control" placeholder="e.g +92323123231" >
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Home Number </label>
		  	<input type="text" name="home_number" class="form-control" placeholder="e.g 051232323">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-row">
		<div class="form-group col-md-6" >
		  <label>City *</label>
		  <input name="city_1" type="text" class="form-control" >
		</div> <!-- form-group end.// -->
		<div class="form-group col-md-6">
		  <label>Country * </label>
		  <select name="country_1" id="inputState" class="form-control" >
		    <option> Choose...</option>
		      <option value="Uzbekistan">Uzbekistan</option>
		      <option value="Russia">Russia</option>
		      <option value="Pakistan" selected>Pakistan</option>
		      <option value="India">India</option>
		      <option value="Afganistan">Afganistan</option>
		  </select>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row.// -->
	<div class="form-group">
		<h4>Shipping Address </h4>
		<label>Address Line 1 *</label>
	    <input name="add1" class="form-control" type="text" name="addLine1" >
	   <br>
	    <label>Address Line 2</label>
	    <input name="add2" class="form-control" name="addLine2" type="text">

	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>City *</label>
		  <input name="city_2" type="text" class="form-control">
		</div> <!-- form-group end.// -->
		<div class="form-group col-md-6">
		  <label>Country *</label>
		  <select name="country_2" id="inputState" class="form-control" required>
		    <option> Choose...</option>
		      <option value="Uzbekistan">Uzbekistan</option>
		      <option value="Russia">Russia</option>
		      <option value="Pakistan" selected="">Pakistan</option>
		      <option value="India">India</option>
		      <option value="Afganistan">Afganistan</option>
		  </select>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row.// -->
	 <!-- form-group end.// -->  
    <div class="form-group">
        <button type="submit" name="OrderPlace" class="btn btn-warning btn-block"> Place Order  </button>
    </div> <!-- form-group// -->      
                                        
</form>
</article> <!-- card-body end .// -->

</div> <!-- card.// -->
<?php echo validation_errors() ?>