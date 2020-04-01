<!-- Main Content Area -->
<div class="main-content">
	<div class="dashboard-area">
		<div class="container-fluid">
			<h4 class="card-title">Tambah Pengguna &nbsp; <a href="javascript:void(0)" onclick="showForm('pengguna')"><i class="fa fa-plus btn btn-info btn-circle rotate0"></i></a></h4>

			<div class="card mt-3 fadeInUp animated" id="cdList">
				<div class="card-body">
					<h4 class="card-title">List Master Pengguna</h4>
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


<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" id="modalTenant" style="display: none">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="modal_title"></h4>
			</div>
			<form class="form-horizontal" id="formTenant">
				<div class="modal-body">
					<div class="box-body">
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<?php $field = 'kode'; ?>
									<label for="<?=$field?>>">Nama Pengguna</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'nama'; ?>
									<label for="<?=$field?>>">Katasandi</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'lantai'; ?>
									<label for="<?=$field?>>">Ulangi Katasandi</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'luas'; ?>
									<label for="<?=$field?>>">Level Pengguna</label>
									<select name="<?=$field?>" id="<?=$field?>" class="form-control">
										<option value="">Pilih</option>
										<option value="dummy">dummy</option>
										<option value="dummy">dummy</option>
										<option value="dummy">dummy</option>
										<option value="dummy">dummy</option>
									</select>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<?php $field = 'luas'; ?>
									<label for="<?=$field?>>">Status</label>
									<select name="<?=$field?>" id="<?=$field?>" class="form-control">
										<option value="">Pilih</option>
										<option value="dummy">dummy</option>
										<option value="dummy">dummy</option>
										<option value="dummy">dummy</option>
										<option value="dummy">dummy</option>
									</select>
								</div>
								<div class="form-group">
									<?php $field = 'daya'; ?>
									<label for="<?=$field?>>">Otorisasi Katasandi</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'jenis'; ?>
									<label for="<?=$field?>>">Nama Lengkap</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<label>Foto</label>
									<input type="file" name="img[]" class="file-upload-default">
									<div class="input-group col-xs-12">
										<input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
										<span class="input-group-append">
											<button class="file-upload-browse btn btn-primary" type="button">Upload</button>
										</span>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" id="simpan" name="simpan">Simpan</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
				</div>
				<input type="hidden" name="param" id="param" value="add">
				<input type="hidden" name="id" id="id">
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>



<script type="text/javascript">
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	$(document).ready(function(){
		loadData(1);
	});

	function loadData(page,data={}){
		$.ajax({
			url: "<?=base_url().'masterdata/unit/ambil?session='.$token?>",
			type: "POST",
			dataType: "JSON",
			data: data,
			beforeSend: function() {$('body').append('<div class="first-loader"><img src="<?=base_url()?>assets/images/spin.svg"></div>');},
			complete: function() {$('.first-loader').remove();},
			success: function (res) {
				if (res.status == 'success') {
					console.log(res.result);
				} else {
					console.log(res.msg);
				}
			}
		});
	}

	function showForm(param){
		if(param == 'pengguna'){
			$("#modal_title").text("Tambah Pengguna");
			setTimeout(function () {
				$("#kode").focus();
			}, 600);
			$("#modalTenant").modal('show');
		}
	}
	$('#formTenant').validate({
		rules: {
			kode: {required: true},
			nama: {required: true},
			tipe: {required: true},
			lantai: {required: true},
			luas: {required: true},
			harga: {required: true},
			daya: {required: true},
			jenis: {required: true},
			factor: {required: true},
		},
		//For custom messages
		messages: {
			kode:{required: "tidak boleh kosong!"},
			nama:{required: "tidak boleh kosong!"},
			tipe:{required: "tidak boleh kosong!"},
			lantai:{required: "tidak boleh kosong!"},
			luas:{required: "tidak boleh kosong!"},
			harga:{required: "tidak boleh kosong!"},
			daya:{required: "tidak boleh kosong!"},
			jenis:{required: "tidak boleh kosong!"},
			factor:{required: "tidak boleh kosong!"},

		},
		errorElement : 'div',
		errorPlacement: function(error, element) {
			var placement = $(element).data('error');
			var type = $(element).attr("type");
			if (placement) {
				$(placement).append(error)
			} else {
				if (type === "radio") {
					error.insertAfter(".errorRadio");
				} else {
					error.insertAfter(element);
				}
			}
		},
		submitHandler: function (form) {
			$.ajax({
				url: "<?=base_url().'masterdata/unit/simpan?session='.$token?>",
				type: "POST",
				dataType: "JSON",
				data: $("#formTenant").serialize(),
				beforeSend: function() {$('body').append('<div class="first-loader"><img src="<?=base_url()?>assets/images/spin.svg"></div>');},
				complete: function() {$('.first-loader').remove();},
				success: function (res) {
					if (res.status === 'success') {
						loadData(1);
						$("#modalTenant").modal('hide');
						document.getElementById("formTenant").reset();
						$( "#formTenant" ).validate().resetForm();
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
