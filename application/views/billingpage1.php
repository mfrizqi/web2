<?php include('header.php') ?>
<!DOCTYPE html>
<html>
	<!--
		by nim = 1301164036 /alfisar 1301164550 / amalia
	-->	
<head>
	<title>T</title>
	<!-- Load your Bootstrap CSS Library Here -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Load your CSS Style Here! -->
	<link href="<?php echo base_url();?>assets/css/construct.css" rel="stylesheet" >
	<link href="<?php echo base_url();?>assets/css/billingstyle.css" rel="stylesheet">
	<!-- Load your Bootstrap JS Library Here -->
	<script src="Boostrap/js/bootstrap.min.js"></script>
	<!-- Bootstrap-4-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../js/JavaScript.js"></script>
</head>

<body>
 <?php $atribut = array(
                'class' => 'login-form',
                'role' => 'form'
            );?>
            <?php
                echo form_open("Billing_C/pesan",$atribut);
            ?>
	<div>
		<div>
			<div>
				<div class="container">
					<div class="row">
						<div id="billingF" class="col-md-6">
							<!-- Insert Upper Text Here -->
							<p style="padding-top: 2%; font-size: 20px;">
								<strong>Billing Detail</strong>
							</p>
							<!-- Insert Your Form Here -->
							<form class="form-group">
								<div class="form-row">
									<div class="fname-cont col-md-6 mb-6">
										<label for="fname">First name</label>
										<input type="text" name="fname" class="form-control" id="fname" required>
									</div>
									<div class="lname-cont col-md-6 mb-6">
										<label for="lname">Last name</label>
										<input type="text" name="lname" class="form-control" id="lname" required>
									</div>
								</div>
								<div class="form-row">
									<div class="email-cont col-md-12 mb-12">
										<label for="email">Email</label>
										<input type="email" name="email" class="form-control" id="email">
									</div>
								</div>
								<div class="form-row">
									<div class="prov-cont col-md-4 mb-3">
										<label for="prov">Province</label>
										<input type="text" name="province" class="form-control" id="prov" required>
									</div>
									<div class="city-cont col-md-4 mb-3">
										<label for="city">City</label>
										<input type="text" name="city" class="form-control" id="city" required>
									</div>
									<div class="dist-cont col-md-4 mb-3">
										<label for="district">District</label>
										<input type="text" name="district" class="form-control" id="district" required>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12 mb-12">
										<label class="äddress-cont" for="address">Address</label>
										<input type="text" name="address" class="form-control" id="adress" placeholder="Street name">
										<input type="text" style="margin-top: 4%" class="form-control" id="street" placeholder="Cluster, Suite, Apartment, etc">
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 mb-6">
										<label class="zip-cont" for="zip">Zip Code</label>
										<input type="text" name="zip" class="form-control" id="zip">
									</div>
									<div class="col-md-6 mb-6">
										<label class="phone-cont" for="phone">Phone Number</label>
										<input type="text" name="phone" class="form-control" id="phone">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-6">
							<!-- Insert Upper Text Here -->
							<p style="padding-top: 2%; font-size: 20px;">
								<strong>Your Order</strong>
							</p>
							<!-- Insert Your Item and Payment method Here -->
							<img src="<?php echo base_url();?>assets/img/product/Door Bumper.jpg" class="item-dummy" alt="item" />
							<span class="door-item">Doorbumper</span>
							<p class="price">$ 79.00</p>
							<table class="table">
								<thead>
									<tr>
										<th>Subtotal</th>
										<th>$ 79.00</th>
									</tr>
									<tbody>
										<tr>
											<td>Shipping</td>
											<td></td>
										</tr>
										<tr>
											<td>
												<label>
													<input type="radio" name="shipOpt1">Standard</label>
											</td>
											<td>$ 9.00</td>
										</tr>
										<td>
											<label>
												<input type="radio" name="shipOpt2">Express</label>
										</td>
										<td>$ 18.00</td>
									</tbody>
									<tr>
										<th>Total</th>
										<th>$ 158.00</th>
									</tr>
									</head>
							</table>
							<table class="table">
								<thead>
									<tr>
										<td>
											<label>
												<input type="radio" name="shipOpt3">Check Payments</label>
											<small id="helpLine" class="text-muted">
												Please send a check to Nearest Store
											</small>
										</td>
									</tr>
									<tr>
										<td>
											<label>
												<input type="radio" name="shipOpt4">Paypal</label>
										</td>
									</tr>
									</head>
							</table>
							<button type="submit" class="btn btn-dark btn-block">Check Out</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<nav class="navbar for-footer">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link" href="#">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">FAQs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Order Tracking</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact</a>
				</li>
			</ul>
		</nav>
	</footer>
</body>

</html>
