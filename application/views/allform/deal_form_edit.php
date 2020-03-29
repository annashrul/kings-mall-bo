<!-- Main Content Area -->
<div class="main-content">
	<div class="dashboard-area">
		<div class="container-fluid">
			<h4 class="card-title">Edit Deal Form</h4>
			<div class="card">
				<div class="card-body">
					<!-- <div class="stacked-form-area"> -->
					<div class="row" style="padding-right: 15px;">
						<div class="col-3 col-sm-3">
							<div class="form-group row">
								<label class="col-4 col-sm-4 text-left">Filter</label>
								<select class="form-control col-8 col-sm-8" id="exampleSelectGender">
									<option>DP</option>
									<option>Pelunasan</option>
								</select>
								<small id="textHelp" class="form-text text-muted"></small>
							</div>
						</div>
						<div class="col-4 col-sm-4">
							<div class="form-group row">
								<label class="col-4 col-sm-4 text-left">No. Deal</label>
								<input type="text" class="form-control col-8 col-sm-8" aria-describedby="textHelp"
									   placeholder="">
								<small id="textHelp" class="form-text text-muted"></small>
							</div>
						</div>
						<div class="col-5 col-sm-5">
							<div class="form-group row">
								<label class="col-4 col-sm-4 text-left">Nama Toko</label>
								<input type="text" class="form-control col-8 col-sm-8" aria-describedby="textHelp"
									   placeholder="">
								<small id="textHelp" class="form-text text-muted"></small>
							</div>
						</div>
					</div>
					<div class="row" style="padding-right: 15px;">
						<div class="col-6 col-sm-6 offset-6">
							<div class="form-group row float-right">
								<label class="col-4 col-sm-4 text-left">&nbsp;</label>
								<button type="submit" class="btn btn-primary">Cari</button>
								<small id="textHelp" class="form-text text-muted"></small>
							</div>
						</div>
					</div>

					<h4 class="card-title">List Deal Form</h4>
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
								<th class="text-white">NO.</th>
								<th class="text-white">NO. DEALFORM</th>
								<th class="text-white">NAMA TOKO</th>
								<th class="text-white">UNIT</th>
								<th class="text-white">LUAS UNIT</th>
								<th class="text-white">AKSI</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>Dummy</td>
								<td>Dummy</td>
								<td>Dummy</td>
								<td>Dummy</td>
								<td>Dummy</td>
								<td><a href="#"><i class="icon-edit btn btn-info btn-circle"></i></a></td>
							</tr>
							</tbody>
						</table>
					</div>
					<!-- </div> -->
				</div>
			</div>
		</div>
	</div>
</div>
