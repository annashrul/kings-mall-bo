<!-- Main Content Area -->
<div class="main-content">
	<div class="dashboard-area">
		<div class="container-fluid">
			<h4 class="card-title">Tambah Unit &nbsp; <a href="javascript:void(0)" onclick="showForm('unit')"><i class="fa fa-plus btn btn-info btn-circle rotate0"></i></a></h4>
			<div class="card mt-3 fadeInUp animated" id="cdList">
				<div class="card-body">
					<h4 class="card-title">List Master Unit</h4>
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


<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" id="modalUnit" style="display: none">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="modal_title"></h4>
			</div>
			<form class="form-horizontal" id="formUnit">
				<div class="modal-body">
					<div class="box-body">
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<?php $field = 'kode'; ?>
									<label for="<?=$field?>>">Kode</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'nama'; ?>
									<label for="<?=$field?>>">Nama</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'tipe'; ?>
									<label for="<?=$field?>>">Tipe</label>
									<div class="row">
										<div class="col-10">
											<select class="form-control" name="<?=$field?>" id="<?=$field?>">
												<option value="">pilih</option>
												<option value="dummy">dummy</option>
												<option value="dummy">dummy</option>
												<option value="dummy">dummy</option>
												<option value="dummy">dummy</option>
											</select>
										</div>
										<div class="col-2">
											<button type="button" class="btn btn-primary" onclick="showForm('tipe')"><i class="fa fa-plus"></i></button>
										</div>
									</div>

								</div>
								<div class="form-group">
									<?php $field = 'lantai'; ?>
									<label for="<?=$field?>>">Lantai</label>

									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'luas'; ?>
									<label for="<?=$field?>>">Luas</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<?php $field = 'harga'; ?>
									<label for="<?=$field?>>">Harga</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'daya'; ?>
									<label for="<?=$field?>>">Daya Listrik</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'jenis'; ?>
									<label for="<?=$field?>>">Jenis Meteran</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'factor'; ?>
									<label for="<?=$field?>>">Factor Meter</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
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


<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" id="modalTipe" style="display: none">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Tipe</h4>
			</div>
			<form class="form-horizontal" id="formTipe">
				<div class="modal-body">
					<div class="box-body">
						<div class="form-group">
							<?php $field = 'namaTipe'; ?>
							<label for="<?=$field?>>">Nama</label>
							<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
						</div>

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
		if(param == 'unit'){
			$("#modal_title").text("Tambah Unit");
			$("#param").val("add");
			setTimeout(function () {
				$("#kode").focus();
			}, 600);
			$("#modalUnit").modal('show');
		}else{
			setTimeout(function () {
				$("#namaTipe").focus();
			}, 600);
			$("#modalTipe").modal('show');
		}
	}
	$('#formUnit').validate({
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
			kode:{required: "Kode tidak boleh kosong!"},
			nama:{required: "Nama tidak boleh kosong!"},
			tipe:{required: "Tipe tidak boleh kosong!"},
			lantai:{required: "Lantai tidak boleh kosong!"},
			luas:{required: "Luas tidak boleh kosong!"},
			harga:{required: "Harga tidak boleh kosong!"},
			daya:{required: "Daya Listrik tidak boleh kosong!"},
			jenis:{required: "Jenis Meteran tidak boleh kosong!"},
			factor:{required: "Factor Meter tidak boleh kosong!"},

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
				data: $("#formUnit").serialize(),
				beforeSend: function() {$('body').append('<div class="first-loader"><img src="<?=base_url()?>assets/images/spin.svg"></div>');},
				complete: function() {$('.first-loader').remove();},
				success: function (res) {
					if (res.status == 'success') {
						loadData(1);
						$("#modalUnit").modal('hide');
						document.getElementById("formUnit").reset();
						$( "#formUnit" ).validate().resetForm();
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
	$('#formTipe').validate({
		rules: {
			namaTipe: {required: true},
		},
		//For custom messages
		messages: {
			namaTipe:{required: "Nama tidak boleh kosong!"},
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
				url: "<?=base_url().'masterdata/tipe/simpan?session='.$token?>",
				type: "POST",
				dataType: "JSON",
				data: $("#formTipe").serialize(),
				beforeSend: function() {$('body').append('<div class="first-loader"><img src="<?=base_url()?>assets/images/spin.svg"></div>');},
				complete: function() {$('.first-loader').remove();},
				success: function (res) {
					if (res.status == 'success') {
						$("#modalTipe").modal('hide');
						document.getElementById("formUnit").reset();
						$( "#formTipe" ).validate().resetForm();
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
