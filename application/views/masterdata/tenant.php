<style>
	.multisteps-form__progress {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(0, 1fr));
	}

	.multisteps-form__progress-btn {
		transition-property: all;
		transition-duration: 0.15s;
		transition-timing-function: linear;
		transition-delay: 0s;
		position: relative;
		padding-top: 20px;
		color: rgba(108, 117, 125, 0.7);
		text-indent: -9999px;
		border: none;
		background-color: transparent;
		outline: none !important;
		cursor: pointer;
	}

	@media (min-width: 500px) {
		.multisteps-form__progress-btn {
			text-indent: 0;
		}
	}

	.multisteps-form__progress-btn:before {
		position: absolute;
		top: 0;
		left: 50%;
		display: block;
		width: 13px;
		height: 13px;
		content: '';
		-webkit-transform: translateX(-50%);
		transform: translateX(-50%);
		transition: all 0.15s linear 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
		transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
		transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
		border: 2px solid currentColor;
		border-radius: 50%;
		background-color: #fff;
		box-sizing: border-box;
		z-index: 3;
	}

	.multisteps-form__progress-btn:after {
		position: absolute;
		top: 5px;
		left: calc(-50% - 13px / 2);
		transition-property: all;
		transition-duration: 0.15s;
		transition-timing-function: linear;
		transition-delay: 0s;
		display: block;
		width: 100%;
		height: 2px;
		content: '';
		background-color: currentColor;
		z-index: 1;
	}

	.multisteps-form__progress-btn:first-child:after {
		display: none;
	}

	.multisteps-form__progress-btn.js-active {
		color: #5d78ff;
	}

	.multisteps-form__progress-btn.js-active:before {
		-webkit-transform: translateX(-50%) scale(1.2);
		transform: translateX(-50%) scale(1.2);
		background-color: currentColor;
	}

	.multisteps-form__form {
		position: relative;
	}

	.multisteps-form__panel {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 0;
		opacity: 0;
		visibility: hidden;
	}

	.multisteps-form__panel.js-active {
		height: auto;
		opacity: 1;
		visibility: visible;
	}

	.multisteps-form__panel[data-animation="scaleIn"] {
		-webkit-transform: scale(0.9);
		transform: scale(0.9);
	}

	.multisteps-form__panel[data-animation="scaleIn"].js-active {
		transition-property: all;
		transition-duration: 0.2s;
		transition-timing-function: linear;
		transition-delay: 0s;
		-webkit-transform: scale(1);
		transform: scale(1);
	}

</style>
<!-- Main Content Area -->
<div class="main-content">
	<div class="dashboard-area">
		<div class="container-fluid">
			<h4 class="card-title">Tambah Tenant &nbsp; <a href="javascript:void(0)" onclick="showForm('tenant')"><i class="fa fa-plus btn btn-info btn-circle rotate0"></i></a></h4>

			<div class="card mt-3 fadeInUp animated" id="cdList">
				<div class="card-body">
					<h4 class="card-title">List Master Tenant</h4>
					<hr>
					<!-- <div class="col-12"> -->
					<div class="row">
						<div class="col-lg-3">
							<div class="form-group mb-30">
								<label for="inputPassword2" class="sr-only">Search</label>
								<input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
							</div>
						</div>
						<div class="col-lg-3">
							<div class="form-group mb-30">
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

						</div>
						<div class="col-lg-1">
							<div class="form-group">
								<button class="btn btn-primary" onclick="showForm('booking')">Booking</button>
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
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form class="form-horizontal" id="formTenant">
				<div class="modal-body">
					<div class="box-body">
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<?php $field = 'kode'; ?>
									<label for="<?=$field?>>">Nama Perusahaan</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'nama'; ?>
									<label for="<?=$field?>>">Nama Usaha</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'tipe'; ?>
									<label for="<?=$field?>>">Jenis Usaha</label>
									<select class="form-control" name="<?=$field?>" id="<?=$field?>">
										<option value="">pilih</option>
										<option value="dummy">dummy</option>
										<option value="dummy">dummy</option>
										<option value="dummy">dummy</option>
										<option value="dummy">dummy</option>
									</select>

								</div>
								<div class="form-group">
									<?php $field = 'lantai'; ?>
									<label for="<?=$field?>>">Alamat</label>
									<textarea name="<?=$field?>" id="<?=$field?>" class="form-control" cols="30" rows="5"></textarea>
								</div>
								<div class="form-group">
									<?php $field = 'luas'; ?>
									<label for="<?=$field?>>">No Telepon</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'npwp'; ?>
									<label for="<?=$field?>>">NPWP</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'namaPemilik'; ?>
									<label for="<?=$field?>>">Nama Pemilik</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<?php $field = 'harga'; ?>
									<label for="<?=$field?>>">Nama Penanggung Jawab</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'daya'; ?>
									<label for="<?=$field?>>">No KTP</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'jenis'; ?>
									<label for="<?=$field?>>">NPWP Penanggung Jawab</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'factor'; ?>
									<label for="<?=$field?>>">No Telepon Penanggung Jawab</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'factor'; ?>
									<label for="<?=$field?>>">Email Penanggung Jawab</label>
									<input type="text" name="<?=$field?>" class="form-control" id="<?=$field?>" autocomplete="off">
								</div>
								<div class="form-group">
									<?php $field = 'factor'; ?>
									<label for="<?=$field?>>">Email Penanggung Jawab</label>
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
		if(param === 'tenant'){
			$("#modal_title").text("Tambah Tenant");
			setTimeout(function () {
				$("#kode").focus();
			}, 600);
			$("#modalTenant").modal('show');
		}else if(param === 'booking'){
			$("#modalBooking").modal('show');
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
			daya:{required: "Listrik tidak boleh kosong!"},
			jenis:{required: "Meteran tidak boleh kosong!"},
			factor:{required: "Meter tidak boleh kosong!"},

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
					if (res.status == 'success') {
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

	const DOMstrings = {
		stepsBtnClass: 'multisteps-form__progress-btn',
		stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
		stepsBar: document.querySelector('.multisteps-form__progress'),
		stepsForm: document.querySelector('.multisteps-form__form'),
		stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
		stepFormPanelClass: 'multisteps-form__panel',
		stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
		stepPrevBtnClass: 'js-btn-prev',
		stepNextBtnClass: 'js-btn-next'
	};

	//remove class from a set of items
	const removeClasses = (elemSet, className) => {

		elemSet.forEach(elem => {

			elem
				.classList
				.remove(className);

		});

	};

	//return exect parent node of the element
	const findParent = (elem, parentClass) => {

		let currentNode = elem;

		while (!currentNode.classList.contains(parentClass)) {
			currentNode = currentNode.parentNode;
		}

		return currentNode;

	};

	//get active button step number
	const getActiveStep = elem => {
		return Array
			.from(DOMstrings.stepsBtns)
			.indexOf(elem);
	};

	//set all steps before clicked (and clicked too) to active
	const setActiveStep = activeStepNum => {

		//remove active state from all the state
		removeClasses(DOMstrings.stepsBtns, 'js-active');

		//set picked items to active
		DOMstrings
			.stepsBtns
			.forEach((elem, index) => {

				if (index <= activeStepNum) {
					elem
						.classList
						.add('js-active');
				}

			});
	};

	//get active panel
	const getActivePanel = () => {

		let activePanel;

		DOMstrings
			.stepFormPanels
			.forEach(elem => {

				if (elem.classList.contains('js-active')) {

					activePanel = elem;

				}

			});

		return activePanel;

	};

	//open active panel (and close unactive panels)
	const setActivePanel = activePanelNum => {

		//remove active class from all the panels
		removeClasses(DOMstrings.stepFormPanels, 'js-active');

		//show active panel
		DOMstrings
			.stepFormPanels
			.forEach((elem, index) => {
				if (index === activePanelNum) {

					elem
						.classList
						.add('js-active');

					setFormHeight(elem);

				}
			});

	};

	//set form height equal to current panel height
	const formHeight = activePanel => {

		const activePanelHeight = activePanel.offsetHeight;

		DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;

	};

	const setFormHeight = () => {
		const activePanel = getActivePanel();

		formHeight(activePanel);
	};

	//STEPS BAR CLICK FUNCTION
	DOMstrings
		.stepsBar
		.addEventListener('click', e => {

			//check if click target is a step button
			const eventTarget = e.target;

			if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
				return;
			}

			//get active button step number
			const activeStep = getActiveStep(eventTarget);

			//set all steps before clicked (and clicked too) to active
			setActiveStep(activeStep);

			//open active panel
			setActivePanel(activeStep);

			localStorage.setItem("activePanelDF", activeStep);
		});

	//PREV/NEXT BTNS CLICK
	DOMstrings
		.stepsForm
		.addEventListener('click', e => {

			const eventTarget = e.target;

			//check if we clicked on `PREV` or NEXT` buttons
			if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`))) {
				return;
			}

			//find active panel
			const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

			let activePanelNum = Array
				.from(DOMstrings.stepFormPanels)
				.indexOf(activePanel);

			//set active step and active panel onclick
			if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
				activePanelNum--;
				localStorage.setItem("activePanelDF", activePanelNum);
				// const getActivePanel = localStorage.getItem("activePanel");
				// console.log(getActivePanel);

			} else {

				activePanelNum++;
				localStorage.setItem("activePanelDF", activePanelNum);
				// const getActivePanel = localStorage.getItem("activePanel");
				// console.log(getActivePanel);

			}

			setActiveStep(activePanelNum);
			setActivePanel(activePanelNum);

		});

	window.onload = (event) => {
		var getActivePanel = localStorage.getItem("activePanelDF");
		console.log(getActivePanel);
		var valActive = 0;
		if(getActivePanel != null){
			valActive = getActivePanel;
		} else {
			valActive = 0;
		}
		// console.log(parseInt(valActive));
		setActiveStep(parseInt(valActive));
		setActivePanel(parseInt(valActive));
	}
	//SETTING PROPER FORM HEIGHT ONLOAD
	window.addEventListener('load', setFormHeight, false);

	//SETTING PROPER FORM HEIGHT ONRESIZE
	window.addEventListener('resize', setFormHeight, false);

</script>
