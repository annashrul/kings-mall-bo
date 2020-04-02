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
			<!-- fill this part -->

			<div class="multisteps-form">
				<!--progress bar-->
				<div class="row">
					<div class="col-12 col-lg-12 ml-auto mr-auto mb-4">
						<div class="multisteps-form__progress">
							<button class="multisteps-form__progress-btn js-active" type="button" title="Cicilan">Cicilan</button>
							<button class="multisteps-form__progress-btn" type="button" title="Air">DP</button>
							<button class="multisteps-form__progress-btn" type="button" title="Air">Air</button>
							<button class="multisteps-form__progress-btn" type="button" title="Listrik">Listrik</button>
							<button class="multisteps-form__progress-btn" type="button" title="Servis">Servis</button>
							<button class="multisteps-form__progress-btn" type="button" title="Servis">PBB</button>
						</div>
					</div>
				</div>
				<!--form panels-->
				<div class="row">
					<div class="col-12 col-lg-12 m-auto">
						<form class="multisteps-form__form">
							<!--single form panel-->
							<div
								class="multisteps-form__panel shadow p-4 rounded bg-white js-active"
								data-animation="scaleIn">
								<h3 class="multisteps-form__title mb-5"><a href="<?=base_url().'tagihan?session='.$token.'&q='.base64_encode('timeline');?>"><i class="fa fa-arrow-circle-left"></i></a> Tagihan Cicilan</h3>
								<?php include("cicilan.php") ?>
							</div>
							<!--single form panel-->
							<div
								class="multisteps-form__panel shadow p-4 rounded bg-white"
								data-animation="scaleIn">
								<h3 class="multisteps-form__title mb-5"><a href="<?=base_url().'tagihan?session='.$token.'&q='.base64_encode('timeline');?>"><i class="fa fa-arrow-circle-left"></i></a> Tagihan DP</h3>
								<?php include("dp.php") ?>
							</div>
							<!--single form panel-->
							<div
								class="multisteps-form__panel shadow p-4 rounded bg-white"
								data-animation="scaleIn">
								<h3 class="multisteps-form__title mb-5"><a href="<?=base_url().'tagihan?session='.$token.'&q='.base64_encode('timeline');?>"><i class="fa fa-arrow-circle-left"></i></a> Tagihan Air</h3>
								<?php include("air.php") ?>
							</div>
							<!--single form panel-->
							<div
								class="multisteps-form__panel shadow p-4 rounded bg-white"
								data-animation="scaleIn">
								<h3 class="multisteps-form__title mb-5"><a href="<?=base_url().'tagihan?session='.$token.'&q='.base64_encode('timeline');?>"><i class="fa fa-arrow-circle-left"></i></a> Tagihan Listrik</h3>
								<?php include("listrik.php") ?>
							</div>
							<!--single form panel-->
							<div
								class="multisteps-form__panel shadow p-4 rounded bg-white"
								data-animation="scaleIn">
								<h3 class="multisteps-form__title mb-5"><a href="<?=base_url().'tagihan?session='.$token.'&q='.base64_encode('timeline');?>"><i class="fa fa-arrow-circle-left"></i></a> Tagihan Servis</h3>
								<?php include("service.php") ?>
							</div>
							<!--single form panel-->
							<div
								class="multisteps-form__panel shadow p-4 rounded bg-white"
								data-animation="scaleIn">
								<h3 class="multisteps-form__title mb-5"><a href="<?=base_url().'tagihan?session='.$token.'&q='.base64_encode('timeline');?>"><i class="fa fa-arrow-circle-left"></i></a> Tagihan PBB</h3>
								<?php include("pbb.php") ?>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- end fill this part -->
		</div>
	</div>
</div>


<script type="text/javascript">
	$( document ).ready(function() {
		$('input[name="daterange"]').daterangepicker({
			opens: 'left'
		}, function (start, end, label) {
			console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
		});
	});
	//DOM elements
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
		.addEventListener('dblclick', e => {

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

			localStorage.setItem("activePanel", activeStep);
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
				localStorage.setItem("activePanel", activePanelNum);
				// const getActivePanel = localStorage.getItem("activePanel");
				// console.log(getActivePanel);

			} else {

				// activePanelNum++;
				// localStorage.setItem("activePanel", activePanelNum);
				var v_cicilan = document.getElementsByName('t_cicilan[]');
				var v_air = document.getElementsByName('t_air[]');
				var v_listrik = document.getElementsByName('t_listrik[]');
				var v_service = document.getElementsByName('t_service[]');
				var v_pbb = document.getElementsByName('t_pbb[]');
				// var val = [];
				var inp_cicilan = [];
				var inp_air = [];
				var inp_listrik = [];
				var inp_service = [];
				var inp_pbb = [];
				for (var i = 0; i <v_cicilan.length; i++) {
					inp_cicilan.push(v_cicilan[i].value);
					// alert("t_air["+i+"].value="+inp.value);
				}
				for (var i = 0; i <v_air.length; i++) {
					inp_air.push(v_air[i].value);
					// alert("t_air["+i+"].value="+inp.value);
				}
				for (var j = 0; j <v_listrik.length; j++) {
					inp_listrik.push(v_listrik[j].value);
					// alert("t_air["+i+"].value="+inp.value);
				}
				// val.push(inp);
				if(inp_cicilan.includes("") === true && activePanelNum === 0){
					// alert('data masih kosong 1');
					console.log(activePanelNum);
				} else {
					activePanelNum++;
					localStorage.setItem("activePanel", activePanelNum);

					if(inp_listrik.includes("") !== true && activePanelNum !== 1){

						// alert('data masih kosong 2');
					} else {

					}
				}
				// console.log(inp.includes(""));
				// const getActivePanel = localStorage.getItem("activePanel");
				// console.log(getActivePanel);

			}

			setActiveStep(activePanelNum);
			setActivePanel(activePanelNum);

		});

	$('#next_cicilan').click(e =>{

		const eventTarget = e.target;

		// //check if we clicked on `PREV` or NEXT` buttons
		// if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`))) {
		//     return;
		// }

		//find active panel
		const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

		let activePanelNum = Array
			.from(DOMstrings.stepFormPanels)
			.indexOf(activePanel);
		// activePanelNum++;
		// localStorage.setItem("activePanel", activePanelNum);
		var v_cicilan = document.getElementsByName('t_cicilan[]');
		var v_air = document.getElementsByName('t_air[]');
		var v_listrik = document.getElementsByName('t_listrik[]');
		var v_service = document.getElementsByName('t_service[]');
		var v_pbb = document.getElementsByName('t_pbb[]');
		// var val = [];
		var inp_cicilan = [];
		var inp_air = [];
		var inp_listrik = [];
		var inp_service = [];
		var inp_pbb = [];
		for (var i = 0; i <v_cicilan.length; i++) {
			inp_cicilan.push(v_cicilan[i].value);
			// alert("t_air["+i+"].value="+inp.value);
		}
		for (var i = 0; i <v_air.length; i++) {
			inp_air.push(v_air[i].value);
			// alert("t_air["+i+"].value="+inp.value);
		}
		for (var j = 0; j <v_listrik.length; j++) {
			inp_listrik.push(v_listrik[j].value);
			// alert("t_air["+i+"].value="+inp.value);
		}
		// val.push(inp);
		if(inp_cicilan.includes("") === true && activePanelNum === 0){
			// alert('data masih kosong 1');
			console.log(activePanelNum);
		} else {
			activePanelNum++;
			localStorage.setItem("activePanel", activePanelNum);

			// if(inp_listrik.includes("") == true && activePanelNum == 1){
			//     alert('data masih kosong 2');
			// } else {
			//     activePanelNum++;
			//     localStorage.setItem("activePanel", activePanelNum);
			// }
		}

		setActiveStep(activePanelNum);
		setActivePanel(activePanelNum);
	});

	window.onload = (event) => {
		var getActivePanel = localStorage.getItem("activePanel");
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

	function isEmpty(obj) {

		// null and undefined are "empty"
		if (obj == null) return true;

		// Assume if it has a length property with a non-zero value
		// that that property is correct.
		if (obj.length > 0)    return false;
		if (obj.length === 0)  return true;

		// If it isn't an object at this point
		// it is empty, but it can't be anything *but* empty
		// Is it empty?  Depends on your application.
		if (typeof obj !== "object") return true;

		// Otherwise, does it have any properties of its own?
		// Note that this doesn't handle
		// toString and valueOf enumeration bugs in IE < 9
		for (var key in obj) {
			if (hasOwnProperty.call(obj, key)) return false;
		}

		return true;
	}
</script>
