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
									<div class="vertical-timeline-block">
										<div class="vertical-timeline-icon bg-info btn-floating pulse">
											<i class="fa fa-fa fa-user-circle-o"></i>
										</div>
										<div class="vertical-timeline-content">
											<h5>Annashrul Yusuf (penanggung jawab)</h5>
											<p>nama toko - lantai - blok - no</p>
											<span class="vertical-date">Periode <br>
                                        		<small>24 Desember 2019 - 24 Desember 2019</small>
                                    		</span>
											<span class="vertical-date">
                                        		<button class="btn btn-primary btn-sm" onclick="showForm('detail');">Detail</button>
												<a href="<?=base_url().'tagihan?session='.$token.q(1,'registrasi').q(2,'lanjut');?>" class="btn btn-primary btn-sm" >Lanjut</a>
												<button class="btn btn-primary btn-sm">Cetak</button>
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
							<div class="form-group">
								<button class="btn btn-primary" style="width: 100%;" onclick="pindah('buat')">BUAT TAGIHAN</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	$content = '
	<div class="row">
		<div class="col-6 col-sm-6">
			<div class="row">
				<div class="col-sm-5">No LOI</div>
				<div class="col-sm-7">: xxxxxxxxxxxx</div>
				<div class="col-sm-5">Unit</div>
				<div class="col-sm-7">: Upnormal</div>
				<div class="col-sm-5">Nama Perusahaan</div>
				<div class="col-sm-7">: PT NETINDO</div>
				<div class="col-sm-5">Periode</div>
				<div class="col-sm-7">: 20 Jan 2020</div>
			</div>

		</div>
	</div>
	<br/>
	<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
			<thead>
			<tr>
				<th>Field Name</th>
				<th>Field Name</th>
				<th>Field Name</th>
				<th>Field Name</th>
				<th>Field Name</th>
				<th>Field Name</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Dummy</td>
				<td>Dummy</td>
				<td>Dummy</td>
				<td>Dummy</td>
				<td>Dummy</td>
				<!-- <td><a href="#" id="showUpdt"><i class="icon-edit btn btn-info btn-circle"></i></a></td> -->
				<td>
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Aksi
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#" id="showUpdt">Ubah</a>
							<a class="dropdown-item" href="#" id="deleteBtn">Hapus</a>
						</div>
					</div>
				</td>
			</tr>
			</tbody>
		</table>
	</div>
	';
?>

<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" id="modalDetail" style="display: none">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Detail</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<?php $air='Air'; $listrik='Listrik'; $service = 'Servis'; $pbb = 'PBB'; ?>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#<?=$air?>"><?=$air?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#<?=$listrik?>"><?=$listrik?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#<?=$service?>"><?=$service?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#<?=$pbb?>"><?=$pbb?></a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div id="<?=$air?>" class="container tab-pane active">
						<?=$content?>
					</div>
					<div id="<?=$listrik?>" class="container tab-pane fade">
						<?=$content?>
					</div>
					<div id="<?=$service?>" class="container tab-pane fade">
						<?=$content?>
					</div>
					<div id="<?=$pbb?>" class="container tab-pane fade">
						<?=$content?>
					</div>
				</div>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>


<script>

	$( document ).ready(function() {
		$('.side')
			.theiaStickySidebar({
				additionalMarginTop: 100
			});
	});
	function pindah(param){
		if(param === 'lanjut'){
			window.location.href = "<?=base_url().'tagihan?session='.$token.q(1,'registrasi').q(2,'lanjut');?>";
		}else{
			window.location.href = "<?=base_url().'tagihan?session='.$token.q(1,'registrasi').q(2,'buat');?>";
		}

	}

	function showForm(param){
		if(param === 'detail'){
			$("#modalDetail").modal("show");
		}
	}
</script>
