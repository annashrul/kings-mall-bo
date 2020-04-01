<!-- Main Content Area -->
<div class="main-content">
	<div class="dashboard-area">
		<div class="container-fluid">
			<h4 class="card-title">Tambah <?=rplc_($page)?> &nbsp; <a href="javascript:void(0)" onclick="showForm('<?=$page?>')"><i class="fa fa-plus btn btn-info btn-circle rotate0"></i></a></h4>
			<div class="card mt-3 fadeInUp animated" id="cdList">
				<div class="card-body">
					<h4 class="card-title">List Master <?=rplc_($page)?></h4>
					<hr>
					<!-- <div class="col-12"> -->
					<form class="form-inline d-flex justify-content-between">
						<div class="form-group mb-30">
							<label for="inputPassword2" class="sr-only">Search</label>
							<input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
						</div>
						<div class="form-group mb-30">
							<label for="status-select" class="mr-2">Status</label>
							<select class="custom-select" id="status-select">
								<option selected="">Choose...</option>
								<option value="1">Paid</option>
								<option value="2">Awaiting Authorization</option>
								<option value="3">Payment failed</option>
								<option value="4">Cash On Delivery</option>
								<option value="5">Fulfilled</option>
								<option value="6">Unfulfilled</option>
							</select>
						</div>
					</form>

					<!-- </div> -->
					<div class="table-responsive">
						<table class="table table-striped table-hover">
							<thead class="primary-color">
							<tr>
								<th class="text-white">Field Name</th>
								<th class="text-white">Field Name</th>
								<th class="text-white">Field Name</th>
								<th class="text-white">Field Name</th>
								<th class="text-white">Field Name</th>
								<th class="text-white">Field Name</th>
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
				</div>
			</div>
		</div>
	</div>
</div>

<style>
	.modal-full {
		min-width: 100%;
		margin: 0;
	}

	.modal-full .modal-content {
		min-height: 100vh;
	}
</style>


<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" id="modal<?=$page?>" style="display: none">
	<div class="modal-dialog modal-full">
		<div class="modal-content full_modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="modalTitle<?=rplc_($page)?>"></h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form class="form-horizontal" id="form<?=$page?>">
				<div class="modal-body">
					<div class="form-group">
						<?php $field = 'user_level'; ?>
						<label for="<?=$field?>">Nama Level</label>
						<input type="text" name="<?=$field?>" id="<?=$field?>" class="form-control">
					</div>
					<?php $access_menu = array(
						'Tagihan'=>array(0=>'Tagihan'),     // 0
						'Dealform'=>array(1=>'Deal Form'),     // 0
						'Masterdata'=>array(
							2=>'Unit',
							3=>'Tipe',
							4=>'Lantai',
							5=>'Bank',
							6=>'Tenant',
							7=>'Pengguna',
							8=>'Level Pengguna'
						),
						'Booking'=>array(
							11=>'Form Booking',
							12=>'List Booking'
						),
						'Laporan'=>array(
							21=>'Pembayaran Tenant',
							22=>'Pendapatan',
							23=>'Deal',
							24=>'Outstanding Tagihan',
						),
					);?>
					<input type="hidden" id="jumlah" name="jumlah" value="300" />
					<div class="row">
						<?php foreach($access_menu as $row => $value){ ?>
							<div class="col-12" style="margin-bottom: 10px; border: 1px dotted black;padding:10px;">
								<?php $field = $row; ?>
								<div class="custom-control custom-checkbox">
									<input onclick="check('<?=str_replace(' ', '_', $field)?>')" type="checkbox" class="custom-control-input" id="<?=str_replace(' ', '_', $field)?>" name="<?=$field?>" value="1" >
									<label class="custom-control-label" for="<?=$field?>"> <?=strtoupper($row)?></label>
								</div>
								<div class="row">
									<div class="col-12">
										<?php if(is_array($value)){ ?>
										<div class="row">
											<?php foreach($value as $rows => $values){ ?>
												<?php $field = $rows; ?>
												<div class="col-2" style="padding: 15px;margin-top: 2px;">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input <?=str_replace(' ', '_', $row)?>" id="<?=$field?>" name="<?=$field?>" value="1">
														<label class="custom-control-label" for="<?=$field?>"> <?=$values?></label>
													</div>
												</div>
											<?php } ?>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>




<script type="text/javascript">
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	$(document).ready(function(){
		// loadData(1);
	});

	function check(param){
		console.log(param);
		if ($("#"+param).is(":checked")) {
			$("."+param).prop('checked', true);
		} else {
			$("."+param).prop('checked', false);
		}
	}


	function loadData(page,data={}){
		$.ajax({
			url: "<?=base_url().'masterdata/unit/ambil?session='.$token?>",
			type: "POST",
			dataType: "JSON",
			data: data,
			beforeSend: function() {$('body').append('<div class="first-loader"><img src="<?=base_url()?>assets/images/spin.svg"></div>');},
			complete: function() {$('.first-loader').remove();},
			success: function (res) {
				if (res.status === 'success') {
					console.log(res.result);
				} else {
					console.log(res.msg);
				}
			}
		});
	}

	function showForm(param){
		if(param === '<?=$page?>'){
			$("#modalTitle<?=$page?>").text("Tambah <?=rplc_($page)?>");
			setTimeout(function () {
				$("#nama").focus();
			}, 600);
			$("#modal<?=$page?>").modal('show');
		}
	}
	$('#form<?=$page?>').validate({
		submitHandler: function (form) {
			$.ajax({
				url: "<?=base_url().$control.'/'.base64_decode($_GET['q']).'/simpan?session='.$token?>",
				type: "POST",
				dataType: "JSON",
				data: $("#form<?=$page?>").serialize(),
				beforeSend: function() {$('body').append('<div class="first-loader"><img src="<?=base_url()?>assets/images/spin.svg"></div>');},
				complete: function() {$('.first-loader').remove();},
				success: function (res) {
					if (res.status === 'success') {
						$("#modal<?=$page?>").modal('hide');
						document.getElementById("form<?=$page?>").reset();
						$( "#form<?=$page?>" ).validate().resetForm();
						Swal.fire({
							icon: "success",
							title: 'Horay...',
							text: 'berhasil',
						})
					} else {
						console.log(res.msg);
					}
				}
			});
		}
	});
</script>
