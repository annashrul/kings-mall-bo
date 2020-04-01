<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>KINGS SHOPPING CENTER</title>
	<link rel="icon" href="<?=base_url().'assets/'?>images/favicon.png">
	<link rel="stylesheet" href="<?=base_url().'assets/'?>css/default-assets/notification.css">
	<link rel="stylesheet" href="<?=base_url().'assets/'?>css/c3.min.css">
	<link rel="stylesheet" href="<?=base_url().'assets/'?>style.css">
	<link rel="stylesheet" href="<?=base_url().'assets/'?>css/default-assets/modal.css">
	<link rel="stylesheet" href="<?=base_url().'assets/'?>css/default-assets/new/sweetalert-2.min.css">
	<link rel="stylesheet" href="<?=base_url().'assets/plugin/'?>daterangepicker/daterangepicker.css" />

	<!-- Form Validation -->
	<script type="text/javascript" src="<?=base_url().'assets/'?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url().'assets/'?>js/popper.min.js"></script>
	<script type="text/javascript" src="<?=base_url().'assets/'?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url().'assets/plugin/jquery-validation/'?>jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?=base_url().'assets/plugin/jquery-validation/'?>additional-methods.min.js"></script>
	<script type="text/javascript" src="<?=base_url().'assets/plugin/sticky/'?>jquery.sticky-kit.js"></script>
	<script type="text/javascript" src="<?=base_url().'assets/plugin/sticky/'?>dist/ResizeSensor.js"></script>
	<script type="text/javascript" src="<?=base_url().'assets/plugin/sticky/'?>dist/theia-sticky-sidebar.js"></script>
	<script type="text/javascript" src="<?=base_url().'assets/plugin/sticky/'?>js/test.js"></script>
	<script type="text/javascript" src="<?=base_url().'assets/plugin/sticky/'?>jquery.sticky.js"></script>
	<!--Daterangepicker-->
	<script type="text/javascript" src="<?=base_url().'assets/plugin/'?>daterangepicker/moment.js"></script>
	<script type="text/javascript" src="<?=base_url().'assets/plugin/'?>daterangepicker/daterangepicker.js"></script>
<!--	<script>-->
<!--		$(document).ready(function() {-->
<!--			document.onkeydown = function(e){-->
<!--				if (e.ctrlKey &&-->
<!--					(e.keyCode === 67 ||-->
<!--						e.keyCode === 86 ||-->
<!--						e.keyCode === 85 ||-->
<!--						e.keyCode === 117)) {-->
<!--					return false;-->
<!--				} else {-->
<!--					return true;-->
<!--				}-->
<!--			};-->
<!--		});-->
<!--	</script>-->
	<style>
		html,body,h1,h2,h3,h4,h5,h6,a{
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
