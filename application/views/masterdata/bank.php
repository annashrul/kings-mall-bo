<!-- Main Content Area -->
<div class="main-content">
	<div class="dashboard-area">
		<div class="container-fluid">
			<h4 class="card-title">Tambah Bank &nbsp; <a href="javascript:void(0)" onclick="showForm('bank')"><i class="fa fa-plus btn btn-info btn-circle rotate0"></i></a></h4>

			<div class="card mt-3 fadeInUp animated" id="cdList">
				<div class="card-body">
					<h4 class="card-title">List Master Bank</h4>
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



<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" id="modalBank" style="display: none">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Bank</h4>
			</div>
			<form class="form-horizontal" id="formBank">
				<div class="modal-body">
					<div class="box-body">
						<div class="form-group">
							<?php $field = 'nama'; ?>
							<label for="<?=$field?>>">Nama</label>
							<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
						</div>
					</div>
					<div class="box-body">
						<div class="form-group">
							<?php $field = 'norek'; ?>
							<label for="<?=$field?>>">Nomer Rekening</label>
							<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
						</div>
					</div>
					<div class="box-body">
						<div class="form-group">
							<?php $field = 'atasnama'; ?>
							<label for="<?=$field?>>">Atas Nama</label>
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
		if(param == 'bank'){
			setTimeout(function () {
				$("#nama").focus();
			}, 600);
			$("#modalBank").modal('show');
		}
	}
	$('#formBank').validate({
		rules: {
			nama: {required: true},
			norek: {required: true},
			atasnama: {required: true},
		},
		//For custom messages
		messages: {
			nama:{required: "Nama tidak boleh kosong!"},
			norek:{required: "Nomer Rekening tidak boleh kosong!"},
			atasnama:{required: "Atas Nama tidak boleh kosong!"},
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
				data: {namaTipe:'acuy'},
				beforeSend: function() {$('body').append('<div class="first-loader"><img src="<?=base_url()?>assets/images/spin.svg"></div>');},
				complete: function() {$('.first-loader').remove();},
				success: function (res) {
					if (res.status == 'success') {
						$("#modalBank").modal('hide');
						document.getElementById("formBank").reset();
						$( "#formBank" ).validate().resetForm();
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
