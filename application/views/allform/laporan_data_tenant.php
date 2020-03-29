<!-- Main Content Area -->
<div class="main-content">
	<div class="dashboard-area">
		<div class="container-fluid">
			<h4 class="card-title">Data Tenant</h4>
			<div class="card">
				<div class="card-body">
					<div class="stacked-form-area">
						<div class="row" style="padding-right: 15px;">
							<div class="col-6 col-sm-6">
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">Nama Perusahaan</label>
									<input type="email" class="form-control col-4 col-sm-4" aria-describedby="emailHelp"
										   placeholder="">
									<button class="btn btn-dark btn-block col-3 col-sm-3 offset-1" type="button">Cari Tenant</button>
									<small id="emailHelp" class="form-text text-muted"></small>
								</div>
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">Nama Toko</label>
									<input type="email" class="form-control col-8 col-sm-8" aria-describedby="emailHelp"
										   placeholder="">
									<small id="emailHelp" class="form-text text-muted"></small>
								</div>
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">Nama Pemilik</label>
									<input type="email" class="form-control col-8 col-sm-8" aria-describedby="emailHelp"
										   placeholder="">
									<small id="emailHelp" class="form-text text-muted"></small>
								</div>
							</div>
							<div class="col-6 col-sm-6">
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">Alamat</label>
									<input type="email" class="form-control col-8 col-sm-8" aria-describedby="emailHelp"
										   placeholder="">
									<small id="emailHelp" class="form-text text-muted"></small>
								</div>
								<div class="form-group row">
									<label class="col-4 col-sm-4 text-left">No. LOI</label>
									<select class="custom-select col-8 col-sm-8" id="status-select">
										<option selected="">Choose...</option>
										<option value="1">Paid</option>
										<option value="2">Awaiting Authorization</option>
										<option value="3">Payment failed</option>
										<option value="4">Cash On Delivery</option>
										<option value="5">Fulfilled</option>
										<option value="6">Unfulfilled</option>
									</select>
									<small id="emailHelp" class="form-text text-muted"></small>
								</div>
							</div>
						</div>
						<div class="row" style="padding-right: 15px;">
							<div class="col-6 col-sm-6 offset-6">
								<div class="form-group row float-right">
									<label class="col-4 col-sm-4 text-left">&nbsp;</label>
									<button type="submit" class="btn btn-primary">Tampilkan</button>
									<small id="emailHelp" class="form-text text-muted"></small>
								</div>
							</div>
						</div>

						<h4 class="card-title">Riwayat Pembayaran Tenant</h4>
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
									<th class="text-white">NAME</th>
									<th class="text-white">RATE</th>
									<th class="text-white">SKILL</th>
									<th class="text-white">TYPE</th>
									<th class="text-white">LOCATION</th>
									<th class="text-white">ACTION</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td class="text-bold-500"><img class="chat-img mr-2 border-radius-50" src="img/member-img/1.png" alt="">Jhon Right</td>
									<td>$18/hr</td>
									<td class="text-bold-500">UI/UX</td>
									<td>Remote</td>
									<td>Dhaka,Taxes</td>
									<td><a href="#"><i class="icon-envelope btn btn-info btn-circle"></i></a></td>
								</tr>
								<tr>
									<td class="text-bold-500"><img class="chat-img mr-2 border-radius-50" src="img/member-img/2.png" alt="">Ajoy Vanblum</td>
									<td>$15/hr</td>
									<td class="text-bold-500">Graphic concepts</td>
									<td>Remote</td>
									<td>India,Taxes</td>
									<td><a href="#"><i class="icon-envelope btn btn-info btn-circle"></i></a></td>
								</tr>
								<tr>
									<td class="text-bold-500"><img class="chat-img mr-2 border-radius-50" src="img/member-img/3.png" alt="">Smith Blogz</td>
									<td>$14/hr</td>
									<td class="text-bold-500">Animation</td>
									<td>Remote</td>
									<td>Austin,Texas</td>
									<td><a href="#"><i class="icon-envelope btn btn-info btn-circle"></i></a></td>
								</tr>
								<tr>
									<td class="text-bold-500"><img class="chat-img mr-2 border-radius-50" src="img/member-img/4.png" alt="">Ashley Jhon</td>
									<td>$18/hr</td>
									<td class="text-bold-500">Animation</td>
									<td>Remote</td>
									<td>USA,Taxes</td>
									<td><a href="#"><i class="icon-envelope btn btn-info btn-circle"></i></a></td>
								</tr>
								<tr>
									<td class="text-bold-500"><img class="chat-img mr-2 border-radius-50" src="img/member-img/5.png" alt="">Lara Mice</td>
									<td>$17/hr</td>
									<td class="text-bold-500">Animation</td>
									<td>Remote</td>
									<td>Austin,Texas</td>
									<td><a href="#"><i class="icon-envelope font-15 btn btn-info btn-circle"></i></a></td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
