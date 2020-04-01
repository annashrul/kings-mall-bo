<!-- Main Content Area -->
<div class="main-content">
	<div class="dashboard-area">
		<div class="container-fluid">
			<div class="card mt-3 fadeInUp animated" id="cdList">
				<div class="card-body">
					<h4 class="card-title">Laporan</h4>
					<hr>

					<div class="row">
						<div class="col-md-3">
							<label>Periode</label>
							<?php $field = 'field-date';?>
							<div id="daterange" style="cursor: pointer;">
								<div class="input-group">
									<input type="text" readonly id="<?=$field?>" class="form-control" value="<?=isset($this->session->search[$field])?$this->session->search[$field]:(set_value($field)?set_value($field):date("Y/m/d")." - ".date("Y/m/d"))?>">
								</div>
							</div>
						</div>
						<div class="form-group mb-30">
							<label for="status-select" class="mr-2">Status</label>
							<select class="form-control" id="status-select">
								<option selected="">Choose...</option>
								<option value="1">Paid</option>
								<option value="2">Awaiting Authorization</option>
								<option value="3">Payment failed</option>
								<option value="4">Cash On Delivery</option>
								<option value="5">Fulfilled</option>
								<option value="6">Unfulfilled</option>
							</select>
						</div>
						<div class="col-md-3">
							<div class="form-group mb-30">
								<label>Search</label>
								<input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
							</div>
						</div>
						<div class="col-md-1">
							<button class="btn btn-primary" style="margin-top: 26px;">Cari</button>
						</div>
						<div class="col-md-1">
							<button class="btn btn-primary" style="margin-top: 26px;">Export</button>
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
							<?php for($i=0;$i<6;$i++):?>
							<tr>
								<td>Dummy</td>
								<td>Dummy</td>
								<td>Dummy</td>
								<td>Dummy</td>
								<td>Dummy</td>
								<!-- <td><a href="#" id="showUpdt"><i class="icon-edit btn btn-info btn-circle"></i></a></td> -->
								<td>
									<button type="button" class="btn dropdown-toggle btn-primary font-15" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
									<div class="dropdown-menu language-dropdown dropdown-menu-right">
										<a href="javascript:void(0)" class="dropdown-item">Detail</a>
										<a href="javascript:void(0)" class="dropdown-item">Print</a>
										<a href="javascript:void(0)" class="dropdown-item">Download</a>
										<a href="javascript:void(0)" class="dropdown-item">Hapus</a>
									</div>

								</td>
							</tr>
							<?php endfor; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

