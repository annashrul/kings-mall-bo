<div class="multisteps-form__content">
	<div class="row">
		<div class="col-6 col-sm-6">
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">No. LOI</label>
				<div class="input-group col-8 col-sm-8" style="padding: unset;">
					<input type="text" name="t_air[]" id="no_loi" class="form-control" placeholder="" aria-label="" readonly>
				</div>
				<small id="no_loiHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Unit</label>
				<input value="<?=base64_decode($_GET['oq'])=='lanjut'? 'upnormal' :null?>" type="text" name="t_air[]" id="input" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder=""  readonly>
				<small id="inputHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Nama Perusahaan</label>
				<input type="text" name="t_air[]" id="nm_prhn" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="" readonly>
				<small id="nm_prhnHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Nama Penanggung Jawab</label>
				<input type="text" name="t_air[]" id="nm_pj" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="" readonly>
				<small id="nm_pjHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Periode</label>
				<input type="text" name="t_air[]" id="nm_pj" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="" readonly>
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
				<input type="text" name="t_air[]" id="pemakaian" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="" readonly>
				<small id="pemakaianHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">&nbsp;</label>
				<div class="table-responsive  col-8 col-sm-8" style="padding:unset;">
					<table class="table table-striped">
						<thead class="success-color">
						<tr>
							<th>Kelas Pemakaian (M<sup>3</sup>)</th>
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
				<input type="text" name="t_air[]" id="jml" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="" readonly>
				<small id="jmlHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Air Kotor</label>
				<input type="text" name="t_air[]" id="air_kotor" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="" readonly>
				<small id="air_kotorHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">SV Beban & Adm (Rp)</label>
				<input type="text" name="t_air[]" id="adm" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="" readonly>
				<small id="admHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group row">
				<label class="col-4 col-sm-4 text-left">Jumlah Penagihan</label>
				<input type="text" name="t_air[]" id="jml_pen" class="form-control col-8 col-sm-8" aria-describedby="textHelp" placeholder="" readonly>
				<small id="jml_penHelp" class="form-text text-muted"></small>
			</div>
		</div>


	</div>

	<div class="button-row d-flex mt-4">
		<button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
		<button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
	</div>
</div>
