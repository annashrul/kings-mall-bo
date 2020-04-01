
<style>
	p.title-kwitansi{
		font-weight:bold;
	}
	.table td, .table th {
		padding: .6rem;
		vertical-align: top;
		border-top: 1px solid #e3eaef;
		font-size: 14px;
		font-weight: 600;
	}
	.watermark{
		background:url("https://lh3.googleusercontent.com/proxy/pcl1Wg6UDcZS8Qr6HlFZXiWcSUmI1wRQGjJWoPfFK9VrPRPFy67CFJ8WPacK18Ci1IzWSuF5_9iTOtgFDrErMeyx1QyJAXu3TqexmBnbxJI3Fh_3590YGMC4ho20cZDAxiYCXA") center center no-repeat;
		opacity: 0.3;
		position: absolute;
		width: 100%;
		height: 100%;
	}
</style>
<!-- Main Content Area -->
<div class="main-content">
	<div class="watermark"></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12" style="padding:10px;border: 2px solid darkgoldenrod;">
				<div class="row">
					<div class="col-2">
						<img src="data:image/png;base64,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" alt="">
					</div>
					<div class="col-9">
						<p class="title-kwitansi">PT. DALEH MUKTI
							<br/>JL KEPATIHAN 11 12 # BANDUNG # INDONESIA
							<br/>+621223165037
							<br/>MANAGEMENT@THEKINGS.CO.ID # WWW.THEKING.ID</p>
					</div>
				</div>
			</div>

			<div class="col-12" style="padding:10px;border: 2px solid darkgoldenrod;margin-top: 5px;">
				<div class="row">
					<div class="col-8">
						<h1 style="text-align: left;color: black;">CV.SURONA MULIA</h1>
						<div class="row">
							<div class="col-2">NPWP</div>
							<div class="col-9">: 85.666.884.3-423.000</div>
							<div class="col-2">Alamat</div>
							<div class="col-9">: Jalan Naripan No. 110 Bandung</div>
						</div>
					</div>
					<div class="col-4">
						<h1 style="text-align: center;color: darkgoldenrod;">INVOICE</h1>
						<div class="row">
							<div class="col-5">Tanggal</div>
							<div class="col-7">: 01 Februari 2020</div>
							<div class="col-5">No. Bukti</div>
							<div class="col-7">: 00084/TSK/II/2020</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12" style="padding:10px;border: 2px solid darkgoldenrod;margin-top: 5px;">
				<h3 style="text-align: center;color: black;"> <span>&#183;</span> PERHITUNGAN SEWA KONTRAK <span>&#183;</span>  </h3>
			</div>
			<div class="col-12" style="padding:10px;border-left: 2px solid darkgoldenrod;border-right: 2px solid darkgoldenrod;border-bottom: 2px solid darkgoldenrod;margin-top: 0px;">
				<div class="row">
					<div class="col-3"><span>&#183;</span> Nama Toko</div>
					<div class="col-2">: UPNORMAL</div>
					<div class="col-2"></div>
					<div class="col-3"><span>&#183;</span> Lokasi</div>
					<div class="col-2">: GF 01A</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-3"><span>&#183;</span> Harga Swa/Mtr<sup>2</sup>/Thn (IN)</div>
					<div class="col-2">: Rp <span style="float:right;">21.554.774</span></div>
					<div class="col-2"></div>
					<div class="col-3"><span>&#183;</span> Luas (Mtr<sup>2</sup>)</div>
					<div class="col-2">: <span style="float:right;">138,87</span></div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-3"><span>&#183;</span> Harga Swa/Mtr<sup>2</sup>/Thn (OUT)</div>
					<div class="col-2">: Rp <span style="float:right;">600.000</span></div>
					<div class="col-2"></div>
					<div class="col-3"><span>&#183;</span> Luas (Mtr<sup>2</sup>)</div>
					<div class="col-2">: <span style="float:right;">32,63</span></div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-3"><span>&#183;</span> Periode Sewa (Tahun)</div>
					<div class="col-2">: <span style="display:table;margin-left: auto;margin-right: auto;margin-top: -20px;">5</span></div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-3"><span>&#183;</span> Nilai Sewa Kontrak (IN)</div>
					<div class="col-2">: Rp <span style="float:right;">833.220.000</span></div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="row" style="margin-top: 10px;">
							<div class="col-6"><span>&#183;</span> Nilai Sewa Kontrak (OUT)</div>
							<div class="col-4" style="border-bottom: 1px solid black;">: Rp <span style="float:right;">97.890.000</span></div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-6"><span>&#183;</span> Nilai Sewa Kontrak</div>
							<div class="col-4">: Rp <span style="float:right;">931.110.000</span></div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-6"><span>&#183;</span> PPN : 10%</div>
							<div class="col-4">: Rp <span style="float:right;">93.111.000</span></div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-6"><span>&#183;</span> Uang Muka</div>
							<div class="col-4" style="border-bottom: 1px solid black;">: Rp <span style="float:right;">(204.844.200)</span></div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-6"><span>&#183;</span> Total Sewa Kontrak</div>
							<div class="col-4">: Rp <span style="float:right;">819.367.800</span></div>
						</div>
					</div>
					<div class="col-1"></div>
					<div class="col-5">
						<table class="table table-bordered" style="margin-top: -50px;">
							<thead style="padding: -10px!important;">
							<tr>
								<th colspan="2" style="text-align: center;">JUMLAH ANGSURAN / BULAN</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td rowspan="4" align="center" style="vertical-align: middle;">60</td>
								<td>Rp <span style="float:right;">833.220.000</span></td>
							</tr>
							<tr><td>Rp <span style="float:right;">833.220.000</span></td></tr>
							<tr><td style="border-bottom: 1px solid black;">Rp <span style="float:right;">833.220.000</span></td></tr>
							<tr><td>Rp <span style="float:right;">833.220.000</span></td></tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="col-12" style="padding:10px;border: 2px solid darkgoldenrod;margin-top: 5px;">
				<h3 style="text-align: center;color: black;"> <span>&#183;</span> INFORMASI PEMBAYARAN <span>&#183;</span>  </h3>
			</div>
			<div class="col-12" style="padding:10px;border-left: 2px solid darkgoldenrod;border-right: 2px solid darkgoldenrod;border-bottom: 2px solid darkgoldenrod;margin-top: 0px;">
				<div class="row" style="margin-bottom: 10px;">
					<div class="col-6"><span>&#183;</span> Tagihan Sewa Kontrak yang sudah dibayar (Mei s/d Des 2019)</div>
					<div class="col-1">8</div>
					<div class="col-2">: Rp <span style="float: right"> (109/250.240)</span></div>
				</div>
				<div class="row">
					<div class="col-6"><span>&#183;</span> Tagihan yang masih harus dibayar</div>
					<div class="col-1">52</div>
					<div class="col-2">: Rp <span style="float: right"> 710.126.560</span></div>
				</div>

			</div>
			<div class="col-12" style="padding:10px;border: 2px solid darkgoldenrod;margin-top: 5px;">
				<h1 style="text-align: center;color: darkgoldenrod;"> <span>&#183;</span> TAGIHAN SEWA KONTRAK <span>&#183;</span>  </h1>
			</div>
			<div class="col-12" style="padding:10px;border-left: 2px solid darkgoldenrod;border-right: 2px solid darkgoldenrod;border-bottom: 2px solid darkgoldenrod;margin-top: 0px;">
				<div class="row" style="margin-bottom: 10px;">
					<div class="col-6">
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-5"><span>&#183;</span> Tagihan Sewa Kontrak</div>
							<div class="col-1">:</div>
							<div class="col-6" style="text-align: left">BULAN FEBRUARI 2020</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-5"><span>&#183;</span> PPN</div>
							<div class="col-1">:</div>
							<div class="col-6" style="text-align: left">10%</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-5"></div>
							<div class="col-1"></div>
							<div class="col-6" style="text-align: right">Total Setelah PPN</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-5"><span>&#183;</span> Pph pasal 4(2)</div>
							<div class="col-1">:</div>
							<div class="col-6" style="text-align: left">10%</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-4"></div>
							<div class="col-1"></div>
							<div class="col-7" style="text-align: right">Total Setelah dikurangi Pph pasal 4(2)</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-4"></div>
							<div class="col-1"></div>
							<div class="col-7" style="text-align: right">B.Administrasi</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-4"></div>
							<div class="col-1"></div>
							<div class="col-7" style="text-align: right">Total Yang Harus Dibayarkan</div>
						</div>
					</div>
					<div class="col-6">
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-1">:</div>
							<div class="col-1">Rp</div>
							<div class="col-5" style="text-align: right">12.414.800</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-1">:</div>
							<div class="col-1" style="border-bottom: 1px solid black">Rp</div>
							<div class="col-5" style="border-bottom: 1px solid black;text-align: right">1.241.480</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-1">:</div>
							<div class="col-1">Rp</div>
							<div class="col-5" style="text-align: right">13.656.280</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-1">:</div>
							<div class="col-1">Rp</div>
							<div class="col-5" style="text-align: right">-</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-1">:</div>
							<div class="col-1">Rp</div>
							<div class="col-5" style="text-align: right">13.656.280</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-1">:</div>
							<div class="col-1">Rp</div>
							<div class="col-5" style="text-align: right">25.000</div>
						</div>
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-1">:</div>
							<div class="col-1" style="background-color: darkgoldenrod;">Rp</div>
							<div class="col-5" style="background-color: darkgoldenrod;text-align: right">13.681.280</div>
						</div>
					</div>
					<div class="col-3">
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-4"></div>
							<div class="col-1"></div>
							<div class="col-6" style="text-align: right"></div>
						</div>
					</div>
					<div class="col-9">
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-9" style="text-align: right">Tiga belas juta enam ratus delapan puluh satu ribu dua ratus delapan puluh rupiah</div>
						</div>
					</div>
					<div class="col-3">
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-4"></div>
							<div class="col-1"></div>
							<div class="col-6" style="text-align: right"></div>
						</div>
					</div>
					<div class="col-9">
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-9" style="text-align: right">Jatuh Tempo Pembayaran Maksimal pada tanggal : 20 Februari 2020</div>
						</div>
					</div>

				</div>

			</div>
			<div class="col-6" style="padding:10px;margin-outside:20px;border: 2px solid darkgoldenrod;margin-top: 5px;">
				Keterangan
				<ul>
					<li><span>&#183;</span> Pembayaran dengan Giro/Cek dianggap sah bila telah diuangkan</li>
					<li><span>&#183;</span> Abaikankan Tagihan ini apabila anda sudah melakukan pembayaran</li>
					<li><span>&#183;</span> Pembayaran melalui Transfer ke : </li>
					<ul>
						<li> &nbsp;&nbsp;&nbsp;&nbsp;VIRTUAL ACCOUNT Anda  : 50742 920110</li>
						<li> &nbsp;&nbsp;&nbsp;&nbsp;Atas Nama : PT. DALEH MUKTI, No. Rekening : 008-3048-121</li>
					</ul>
				</ul>
			</div>
			<div class="col-6" style="padding:10px;border: 2px solid darkgoldenrod;margin-top: 5px;">
				<p style="text-align: center">
					Hormat Kami <br/><br/><br/><br/><br/>
					Bagian Keuangan
				</p>
			</div>
		</div>
	</div>

</div>
