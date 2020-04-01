<!-- Main Content Area -->
<div class="main-content">
	<div class="dashboard-area">
		<div class="container-fluid">
			<div class="card mt-3 fadeInUp animated" id="cdList">
				<div class="card-body">
					<h4 class="card-title">List Master Booking</h4>
					<hr>
					<!-- <div class="col-12"> -->
					<div class="row">

						<div class="col-lg-3">
							<div class="form-group mb-30">
								<select class="custom-select" id="status-select">
									<option selected="">Pilih...</option>
									<option value="1">Paid</option>
									<option value="2">Awaiting Authorization</option>
									<option value="3">Payment failed</option>
									<option value="4">Cash On Delivery</option>
									<option value="5">Fulfilled</option>
									<option value="6">Unfulfilled</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="form-group mb-30">
								<input type="search" class="form-control" id="inputPassword2" placeholder="Tulis Sesuatu Disini...">
							</div>
						</div>
						<div class="col-lg-1">
							<div class="form-group mb-30">
								<button class="btn btn-primary">Cari</button>
							</div>
						</div>
					</div>

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
											<a class="dropdown-item" href="javascript:void(0)" onclick="showForm('detail')">Detail</a>
											<a class="dropdown-item" href="#" id="showUpdt">Terima</a>
											<a class="dropdown-item" href="#" id="deleteBtn">Tolak</a>
											<a class="dropdown-item" href="#" id="deleteBtn">Cetak</a>
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

<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" id="modalDetail" style="display: none">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Detail Booking</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<thead class="primary-color">
						<tr>
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
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>


<script>
	function showForm(param){
		if(param === 'detail'){
			$("#modalDetail").modal("show");
		}
	}
</script>
