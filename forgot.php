<?php include('include/header.php');?>
<script type="text/javascript" language="javascript">
	function resetpass() {
		var str=true;
		document.getElementById("cmail").innerHTML="";
		var email=document.getElementById("email").value;
		if(email=="") {
			document.getElementById("cmail").innerHTML="<font color='red'>Please Enter Email-Id.</font>";
			document.getElementById("email").focus();
			return false;	
		}
		return true;
	}
</script>
<div class="main-container inner">
	<div class="main-content">
		<div class="container"><br><br>
			<div class="panel panel-white">
				<div class="panel-body" >
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-8">
							<h1>Enter Your Email Address</h1>
							<span id="msg"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="alert alert-success">
				<form action="controller/value.php" onSubmit="return resetpass();" method="post" class="form-horizontal">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="user-left">
							<div class="form-group">
								<label class="col-sm-3 control-label"> Email <span class="symbol required"></span>	</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" placeholder="Email" id="email" name="email" style="width:250px;margin-left:28px;" />
									<span id="cmail"></span>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-2"></div>
								<div class="col-sm-8">
									<div class="g-recaptcha" data-sitekey="6LeLChITAAAAAOFpIJA1cffah_7vsbEIvELL2D4b"></div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-4 col-sm-offset-8">
									<button type="submit" class="btn btn-blue" name="check" > Submit </button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<h2><b> Forget Your Password?</b></h2>
						<p>You can use this form to reset it.</p>
						<p>Once submitted, you will recieve an email with further instructions.</p>
					</div>
				</div>
				</form>
			</div>
		</div><!-- end: PAGE -->
	</div>
</div>
<?php include('include/footer.php'); ?>