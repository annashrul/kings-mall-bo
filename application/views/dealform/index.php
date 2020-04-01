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
			<div class="card mt-3 fadeInUp animated" id="cdList">
				<div class="card-body">
					<h4 class="card-title">Deal Form</h4>
					<hr>
					<!-- <div class="col-12"> -->
					<div class="row">
						<div class="col-lg-3">
							<div class="form-group mb-30">
								<label for="">No LOI</label>
								<input type="search" class="form-control" id="inputPassword2" placeholder="Masukan No LOI">
							</div>
						</div>
						<div class="col-lg-1">
							<button class="btn btn-primary" style="margin-top: 28px;">Cari</button>
						</div>
						<div class="col-lg-8">
							<div class="multisteps-form__progress" style="margin-top: 26px;">
								<button class="multisteps-form__progress-btn js-active" type="button" title="Air">Tenant</button>
								<button class="multisteps-form__progress-btn" type="button" title="Listrik">Unit</button>
							</div>
						</div>
					</div>
					<div class="multisteps-form">
						<!--form panels-->
						<div class="row">
							<div class="col-12 col-lg-12 m-auto">
								<form class="multisteps-form__form">
									<!--single form panel-->
									<div
										class="multisteps-form__panel shadow p-4 rounded bg-white js-active"
										data-animation="scaleIn">
										<h3 class="multisteps-form__title mb-5">Tenant Info</h3>
										<?php include("tenant.php") ?>
									</div>
									<!--single form panel-->
									<div
										class="multisteps-form__panel shadow p-4 rounded bg-white"
										data-animation="scaleIn">
										<h3 class="multisteps-form__title mb-5">Unit Info</h3>
										<?php include("unit.php") ?>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>


		</div>
	</div>
</div>

<script type="text/javascript">
	$( document ).ready(function() {

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
