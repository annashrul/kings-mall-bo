
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.riktheme.com/motrila-2/side-menu/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jan 2020 17:30:50 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<title>Motrila - Responsive Bootstrap Admin Template</title>

	<!-- Favicon -->
	<link rel="icon" href="<?=base_url().'assets/'?>img/core-img/favicon.png">
	<link rel="stylesheet" href="<?=base_url().'assets/'?>css/default-assets/new/sweetalert-2.min.css">

	<!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
	<link rel="stylesheet" href="<?=base_url().'assets/'?>style.css">

</head>

<body class="login-area">



<!-- ======================================
******* Page Wrapper Area Start **********
======================================= -->
<div class="main-content- h-100vh">
	<div class="container h-100">
		<div class="row h-100 align-items-center justify-content-center">
			<div class="col-12">
				<!-- Middle Box -->
				<div class="middle-box">
					<div class="card">
						<div class="card-body p-4">
							<div class="row align-items-center">
								<div class="col-md-6">
									<div class="xs-d-none mb-50-xs break-320-576-none">
										<img src="<?=base_url().'assets/'?>img/bg-img/1.png" alt="">
									</div>
								</div>

								<div class="col-md-6">
									<!-- Logo -->
									<h4 class="font-18 mb-30">Welcome back! Log in to your account.</h4>
									<form action="<?=base_url().'auth'?>" method="post">
										<script type="application/javascript">
											/** After windod Load */
											$(window).bind("load", function() {
												window.setTimeout(function() {
													$(".alert").fadeTo(500, 0).slideUp(500, function(){
														$(this).remove();
													});
												}, 4000);
											});
										</script>


										<div class="form-group">
											<?php $field = 'email'; ?>
											<label class="lock-text text-dark">Email</label>
											<input type="<?=$field?>" class="form-control height-50" id="<?=$field?>" name="<?=$field?>" placeholder="Email" >
											<?=form_error($field, '<div class="error" style="color:red;">', '</div>')?>
										</div>
										<div class="form-group">
											<?php $field = 'password'; ?>
											<label for="<?=$field?>">Password</label>
											<input class="form-control  height-50" type="password" id="<?=$field?>" name="<?=$field?>" placeholder="Password" >
											<?=form_error($field, '<div class="error" style="color:red;">', '</div>')?>
										</div>
										<div class="form-group mb-0">
											<button class="btn btn-primary btn-block" type="submit" id="btn_logins">Login</button>
										</div>
									</form>
								</div> <!-- end card-body -->
							</div>
							<!-- end card -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

<!-- Must needed plugins to the run this Template -->
<script src="<?=base_url().'assets/'?>js/jquery.min.js"></script>
<script src="<?=base_url().'assets/'?>js/popper.min.js"></script>
<script src="<?=base_url().'assets/'?>js/bootstrap.min.js"></script>
<script src="<?=base_url().'assets/'?>js/bundle.js"></script>

<!-- Active JS -->
<script src="<?=base_url().'assets/'?>js/default-assets/active.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/sweetalert2.min.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/sweetalert-init.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$("#email").focus();
	});

	function login(){
		var id = $(this).attr('data');
		var ax = $("#"+id)[0];
		var dat = new FormData(ax);
		console.log(dat);
		if($("#email").val() === "" || $("#pass").val() === ""){
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'email atau password tidak boleh kosong!',
			})
		}else{
			$.ajax({
				dataType:'json',
				type: 'POST',
				url: '<?php echo base_url(); ?>auth/sendRequest',
				data: dat,
				processData: false,
				contentType: false,
				enctype: 'multipart/form-data',
				success: function(data){
					if(data.status==='success'){
						ax.reset();
						// swal(data.pesan, "", data.class);
						document.location=data.redirect;
					}else{
						// swal(data.pesan, "", data.class);
						Swal.fire({
							icon: data.class,
							title: 'Oops...',
							text: data.pesan,
						})
					}
				}
			});
		}
	}
</script>
<!-- Mirrored from demo.riktheme.com/motrila-2/side-menu/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jan 2020 17:30:50 GMT -->
</html>
