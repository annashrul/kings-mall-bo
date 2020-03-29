<style>
	.theiaStickySidebar{
		width:41%!important;
	}
</style>
<div class="main-content">
	<div class="container-fluid">
		<div class="row">

			<div class="col-6 height-card box-margin">
				<div class="card">
					<div class="card-body">
						<!-- Ibox content -->
						<div class="ibox-content" id="ibox-content">
							<div id="vertical-timeline" class="vertical-container light--timeline">
								<?php for($i=1;$i<12;$i++):?>
									<div class="vertical-timeline-block"  style="cursor:pointer" onclick="pindah();">
										<div class="vertical-timeline-icon bg-info btn-floating pulse">
											<i class="fa fa-fa fa-user-circle-o"></i>
										</div>
										<div class="vertical-timeline-content">
											<h5>Annashrul Yusuf (penanggung jawab)</h5>
											<p>nama toko - lantai - blok - no</p>
											<span class="vertical-date">
                                        Periode <br>
                                        <small>24 Desember 2019 - 24 Desember 2019</small>
                                    </span>
										</div>
									</div>
								<?php endfor; ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-6 height-card box-margin side" style="width:200px!important;">
				<div class="card">
					<div class="card-body">
						<!-- Ibox content -->
						<div class="ibox-content" id="ibox-content">
							<div class="form-group">
								<label>No LOI</label>
								<div class="input-group m-b-20">
									<input type="text" name="no_loi" class="form-control" id="no_loi">
									<div class="input-group-append">
										<button type="button" id="check-minutes" class="btn waves-effect waves-light btn-primary">Cari </button>
									</div>
								</div>
							</div>
							<div class="widget-todo">
								<div class="media">
									<div class="mr-3 photo-table">
										<i class="fa fa-circle text-primary font-11 mr-2"></i>
									</div>
									<div class="media-body">
										<h6>Nama Perusahaan</h6>
										<p class="m-b-0 text-muted">CV. Surona Bella</p>
									</div>
								</div>
								<div class="media">
									<div class="mr-3 photo-table">
										<i class="fa fa-circle text-primary font-11 mr-2"></i>
									</div>
									<div class="media-body">
										<h6>Nama Usaha</h6>
										<p class="m-b-0 text-muted">UPNORMAL</p>
									</div>
								</div>
								<div class="media">
									<div class="mr-3 photo-table">
										<i class="fa fa-circle text-primary font-11 mr-2"></i>
									</div>
									<div class="media-body">
										<h6>Jenis Usaha</h6>
										<p class="m-b-0 text-muted">Makanan</p>
									</div>
								</div>
								<div class="media">
									<div class="mr-3 photo-table">
										<i class="fa fa-circle text-primary font-11 mr-2"></i>
									</div>
									<div class="media-body">
										<h6>Alamat</h6>
										<p class="m-b-0 text-muted">jalan xxxxx</p>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>

	$( document ).ready(function() {
		$('.side')
			.theiaStickySidebar({
				additionalMarginTop: 100
			});

	});
	function pindah(){
		window.location.href = "<?=base_url().'tagihan?session='.$token.'&hal=registrasi';?>";
	}
</script>
