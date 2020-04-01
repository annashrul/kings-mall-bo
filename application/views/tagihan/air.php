<div class="multisteps-form__content">
	<div class="row">
		<div class="col-6 col-sm-6">
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">No. LOI</label>
				<div class="input-group col-8 col-sm-8" style="padding: unset;">
					<input type="text" name="t_air[]" id="no_loi" class="form-control" placeholder="" aria-label="">
					<div class="input-group-append">
						<button class="btn btn-dark" type="button">Cari</button>
					</div>
				</div>
				<small id="no_loiHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Unit</label>
				<input value="<?=base64_decode($_GET['oq'])=='lanjut'? 'upnormal' :null?>" type="text" name="t_air[]" id="input" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="">
				<small id="inputHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Nama Perusahaan</label>
				<input type="text" name="t_air[]" id="nm_prhn" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="">
				<small id="nm_prhnHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Nama Penanggung Jawab</label>
				<input type="text" name="t_air[]" id="nm_pj" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="">
				<small id="nm_pjHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Periode</label>
				<select class="form-control col-4 col-sm-4" name="t_air[]" id="sl_periode_th">
					<option>List</option>
					<option>List</option>
				</select>
				<select class="form-control col-4 col-sm-4" name="t_air[]" id="sl_periode_bl">
					<option>List</option>
					<option>List</option>
				</select>
				<small id="sl_periodeHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Meter Awal</label>
				<input type="text" name="t_air[]" id="m_awal" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="">
				<small id="m_awalHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Meter Akhir</label>
				<input type="text" name="t_air[]" id="m_akhir" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="">
				<small id="m_akhirHelp" class="form-text text-muted"></small>
			</div>
		</div>
		<div class="col-6 col-sm-6">
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Pemakaian</label>
				<input type="text" name="t_air[]" id="pemakaian" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="">
				<small id="pemakaianHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">&nbsp;</label>
				<div class="table-responsive  col-8 col-sm-8" style="padding:unset;">
					<table class="table table-striped">
						<thead class="success-color">
						<tr>
							<th>Kelas Pemakaian (M3)</th>
							<th>Tarif Pemakaian</th>
							<th>Pemakaian</th>
							<th>Jumlah Pemakaian</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>Dummy</td>
							<td>Dummy</td>
							<td>Dummy</td>
							<td>Dummy</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Jumlah (Rp)</label>
				<input type="text" name="t_air[]" id="jml" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="">
				<small id="jmlHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Air Kotor</label>
				<input type="text" name="t_air[]" id="air_kotor" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="">
				<small id="air_kotorHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">SV Beban & Adm (Rp)</label>
				<input type="text" name="t_air[]" id="adm" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="">
				<small id="admHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Jumlah Penagihan</label>
				<input type="text" name="t_air[]" id="jml_pen" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="">
				<small id="jml_penHelp" class="form-text text-muted"></small>
			</div>
		</div>

		<div class="col-6 col-sm-6" style="display:none;">
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Periode Bulan</label>
				<!-- <input type="text" class="form-control  col-8 col-sm-8" data-provide="datepicker" data-date-format="MM yyyy" data-date-min-view-mode="1"> -->
				<select class="form-control col-8 col-sm-8" id="example-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
				<!-- <input type="text" class="form-control col-8 col-sm-8" name="daterange" value="01/01/2018 - 01/15/2018" /> -->
				<small id="textHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Periode Tahun</label>
				<!-- <input type="text" class="form-control  col-8 col-sm-8" data-provide="datepicker" data-date-min-view-mode="2"> -->
				<select class="form-control col-8 col-sm-8" id="example-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
				<!-- <input type="text" class="form-control col-8 col-sm-8" name="daterange" value="01/01/2018 - 01/15/2018" /> -->
				<small id="textHelp" class="form-text text-muted"></small>
			</div>
		</div>
	</div>
	<div class="row" style="display:none;">
		<div class="col-6 col-sm-6">
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Nama LOI</label>
				<input type="text" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="">
				<small id="textHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Nama Toko</label>
				<input type="text" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="">
				<small id="textHelp" class="form-text text-muted"></small>
			</div>
		</div>
		<div class="col-6 col-sm-6">
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Periode Bulan</label>
				<!-- <input type="text" class="form-control  col-8 col-sm-8" data-provide="datepicker" data-date-format="MM yyyy" data-date-min-view-mode="1"> -->
				<select class="form-control col-8 col-sm-8" id="example-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
				<!-- <input type="text" class="form-control col-8 col-sm-8" name="daterange" value="01/01/2018 - 01/15/2018" /> -->
				<small id="textHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Periode Tahun</label>
				<!-- <input type="text" class="form-control  col-8 col-sm-8" data-provide="datepicker" data-date-min-view-mode="2"> -->
				<select class="form-control col-8 col-sm-8" id="example-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
				<!-- <input type="text" class="form-control col-8 col-sm-8" name="daterange" value="01/01/2018 - 01/15/2018" /> -->
				<small id="textHelp" class="form-text text-muted"></small>
			</div>
		</div>
	</div>
	<div class="form-row" style="display:none;">
		<div class="col-12 col-sm-6">
			<div class="form-group">
				<label>Nama LOI</label>
				<input type="text" class="form-control" aria-describedby="textHelp" placeholder="">
				<small id="textHelp" class="form-text text-muted"></small>
			</div>
		</div>
		<div class="col-12 col-sm-6 mt-4 mt-sm-0">
			<div class="form-group">
				<label>Nama Toko</label>
				<input type="text" class="form-control" aria-describedby="textHelp" placeholder="">
				<small id="textHelp" class="form-text text-muted"></small>
			</div>
		</div>
	</div>
	<div class="form-row" style="display:none;">
		<div class="col-12 col-sm-6">
			<div class="form-group">
				<label>Periode</label>
				<!-- <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true"> -->
				<input type="text" class="form-control" name="daterange" value="01/01/2018 - 01/15/2018" />

				<small id="textHelp" class="form-text text-muted"></small>
			</div>
		</div>
		<div class="col-12 col-sm-6 mt-4 mt-sm-0">
			<div class="form-group">
				<label>&nbsp;</label>
				<input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true">
				<small id="textHelp" class="form-text text-muted"></small>
			</div>
		</div>
	</div>
	<div class="button-row d-flex mt-4">
		<button class="btn btn-primary ml-auto " id="next_air" type="button" title="Next">Next</button>
	</div>
</div>
