<style>
	.theiaStickySidebar{
		width:41%!important;
	}
</style>
<!-- Main Content Area -->
<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<!-- Column -->
			<?php for($i=1;$i<21;$i++): ?>
				<!-- Single Widget -->
				<div class="col-12 col-xl-3 height-card box-margin" style="cursor:pointer" onclick="pindah();">
					<div class="card">
						<div class="card-body py-3" style="<?=$i%2==0?'background-color:#EEEEEE' : 'background-color:white' ?>">
							<div class="media align-items-center">
								<div class="d-inline-block mr-3">
									<i class="<?=$i%2!=0?'icon_info_alt text-warning' : 'icon_check_alt text-success'?> font-30 "></i>
								</div>
								<div class="media-body">
									<h3 class="mb-2 font-24">TRX01092020</h3>
									<div class="mb-0 font-14 font-weight-bold">20 desember 2020</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			<?php endfor ?>
		</div>
	</div>
</div>

<script>
	function pindah(){
		window.location.href = "<?=base_url().'tagihan?session='.$token.'&hal=timeline';?>";
	}
</script>
