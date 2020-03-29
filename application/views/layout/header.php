
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.riktheme.com/motrila-2/side-menu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jan 2020 17:22:29 GMT -->
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

	<!-- These plugins only need for the run this page -->
	<link rel="stylesheet" href="<?=base_url().'assets/'?>css/default-assets/notification.css">
	<link rel="stylesheet" href="<?=base_url().'assets/'?>css/c3.min.css">

	<!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
	<link rel="stylesheet" href="<?=base_url().'assets/'?>style.css">
	<link rel="stylesheet" href="<?=base_url().'assets/'?>css/default-assets/modal.css">

	<script src="<?=base_url().'assets/'?>js/jquery.min.js"></script>
	<script src="<?=base_url().'assets/'?>js/popper.min.js"></script>
	<script src="<?=base_url().'assets/'?>js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?=base_url().'assets/'?>css/default-assets/new/sweetalert-2.min.css">

	<!-- Form Validation -->
	<script type="text/javascript" src="<?=base_url().'assets/plugin/jquery-validation/'?>jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?=base_url().'assets/plugin/jquery-validation/'?>additional-methods.min.js"></script>
	<script type="text/javascript" src="<?=base_url().'assets/plugin/sticky/'?>jquery.sticky-kit.js"></script>
	<script type="text/javascript" src="<?=base_url().'assets/plugin/sticky/'?>dist/ResizeSensor.js"></script>
	<script type="text/javascript" src="<?=base_url().'assets/plugin/sticky/'?>dist/theia-sticky-sidebar.js"></script>
	<script type="text/javascript" src="<?=base_url().'assets/plugin/sticky/'?>js/test.js"></script>
	<script type="text/javascript" src="<?=base_url().'assets/plugin/sticky/'?>jquery.sticky.js"></script>
	<style>
		html,body,h1,h2,h3,h4,h5,h6,a{
			/* font-family: 'Baloo Thambi 2', cursive; */
			font-family: 'Special Elite', cursive!important;

			font-weight: bold!important;
		}
		.error {
			color: red;
			display: block;
		}
		/*Loading*/
		.first-loader {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 1050;
			background: rgba(168, 168, 168, .5)
		}
		.first-loader img {
			position: absolute;
			top: 50%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			width: 60px;
			height: 60px
		}
		.modal-full {
			width: 98%;
		}

		.modal { overflow: auto !important; }

	</style>
</head>

<body class="sidebar sidebar-dark">



<!-- Setting Panel -->
<div class="theme-setting-wrapper">
	<div id="settings-trigger"><i class="ti-settings font-17"></i></div>
	<div id="theme-settings" class="settings-panel">
		<i class="settings-close zmdi zmdi-close font-18 font-weight-bold"></i>
		<p class="settings-heading font-18">Side Menu Color sd :</p>
		<div class="sidebar-bg-options selected" id="sidebar-dark-theme">
			<div><span class="font-14 font-weight-bold">Default</span></div>
		</div>
		<div class="sidebar-bg-options" id="sidebar-light-theme">
			<div><span class="font-14 font-weight-bold">Light</span></div>
		</div>
		<div class="sidebar-bg-options" id="sidebar-color-theme">
			<div><span class="font-14 font-weight-bold">Colorfull</span></div>
		</div>
	</div>
</div>

