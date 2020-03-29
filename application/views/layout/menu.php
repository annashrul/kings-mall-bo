<!-- ======================================
******* Page Wrapper Area Start **********
======================================= -->
<div class="ecaps-page-wrapper">
	<!-- Sidemenu Area -->
	<div class="ecaps-sidemenu-area">
		<!-- Desktop Logo -->
		<div class="ecaps-logo">
			<a href="#"><img class="desktop-logo" src="<?=base_url().'assets/'?>img/core-img/logo.png" alt="Desktop Logo"> <img class="small-logo" src="<?=base_url().'assets/'?>img/core-img/small-logo.png" alt="Mobile Logo"></a>
		</div>

		<!-- Side Nav -->
		<div class="ecaps-sidenav" id="ecapsSideNav">
			<!-- Side Menu Area -->
			<div class="side-menu-area">
				<!-- Sidebar Menu -->
				<nav>
					<ul class="sidebar-menu" data-widget="tree">
						<li class="<?=($page=='dashboard')?'active':null?>"><a href="<?=base_url().'dashboard?session='.$token;?>"><i class="zmdi zmdi-view-dashboard"></i><span>Dashboard</span></a></li>
						<li class="<?=($page=='tagihan')?'active':null?>"><a href="<?=base_url().'tagihan?session='.$token.'&hal=draft';?>"><i class="zmdi zmdi-view-dashboard"></i><span>Tagihan</span></a></li>
						<li class="<?=($page=='index')?'active':null?>"><a href="<?=base_url().'dealform?session='.$token;?>"><i class="zmdi zmdi-view-dashboard"></i><span>Deal Form</span></a></li>
						<?php $side_menu=null; $side_menu=array('0','unit','tipe','lantai','bank','tenant','pengguna'); ?>
						<li class="treeview <?=array_search($page, $side_menu)?'menu-open':null?>">
							<a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span>Masterdata</span> <i class="fa fa-angle-right"></i></a>
							<ul class="treeview-menu" style="<?=array_search($page, $side_menu)?'display:block;':null?>">
								<li class="<?=($page=='unit')?'active':null?>"><a href="<?=base_url().'masterdata/unit?session='.$token;?>">Unit</a></li>
								<li class="<?=($page=='tipe')?'active':null?>"><a href="<?=base_url().'masterdata/tipe?session='.$token;?>">Tipe</a></li>
								<li class="<?=($page=='lantai')?'active':null?>"><a href="<?=base_url().'masterdata/lantai?session='.$token;?>">Lantai</a></li>
								<li class="<?=($page=='bank')?'active':null?>"><a href="<?=base_url().'masterdata/bank?session='.$token;?>">Bank</a></li>
								<li class="<?=($page=='tenant')?'active':null?>"><a href="<?=base_url().'masterdata/tenant?session='.$token;?>">Tenant</a></li>
								<li class="<?=($page=='pengguna')?'active':null?>"><a href="<?=base_url().'masterdata/pengguna?session='.$token;?>">Pengguna</a></li>
							</ul>
						</li>
						<?php $side_menu=null; $side_menu=array('0','booking','persetujuan_deal_form','deal_form_edit','deal_form_inbox','laporan_data_tenant'); ?>
						<li class="treeview <?=array_search($page, $side_menu)?'menu-open':null?>">
							<a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span>Allform</span> <i class="fa fa-angle-right"></i></a>
							<ul class="treeview-menu" style="<?=array_search($page, $side_menu)?'display:block;':null?>">
								<li class="<?=($page=='booking')?'active':null?>"><a href="<?=base_url().'allform?session='.$token.'&hal=booking'?>">Booking</a></li>
								<li class="<?=($page=='persetujuan_deal_form')?'active':null?>"><a href="<?=base_url().'allform?session='.$token.'&hal=persetujuan_deal_form'?>">Persetujuan Deal Form</a></li>
								<li class="<?=($page=='deal_form_edit')?'active':null?>"><a href="<?=base_url().'allform?session='.$token.'&hal=deal_form_edit'?>">Deal Form Edit</a></li>
								<li class="<?=($page=='deal_form_inbox')?'active':null?>"><a href="<?=base_url().'allform?session='.$token.'&hal=deal_form_inbox'?>">Deal Form Inbox</a></li>
								<li class="<?=($page=='laporan_data_tenant')?'active':null?>"><a href="<?=base_url().'allform?session='.$token.'&hal=laporan_data_tenant'?>">Laporan Data Tenant</a></li>
							</ul>
						</li>
						<?php $controller='invoice'; $side_menu=null; $side_menu=array('0','kwitansi','listrik','air','charge','sewa'); ?>
						<li class="treeview <?=array_search($page, $side_menu)?'menu-open':null?>">
							<a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span>Invoice</span> <i class="fa fa-angle-right"></i></a>
							<ul class="treeview-menu" style="<?=array_search($page, $side_menu)?'display:block;':null?>">
								<li class="<?=($page=='kwitansi')?'active':null?>"><a href="<?=base_url().$controller.'?session='.$token.'&XYZ='.base64_encode('kwitansi')?>">Kwitansi</a></li>
								<li class="<?=($page=='listrik')?'active':null?>"><a href="<?=base_url().$controller.'?session='.$token.'&XYZ='.base64_encode('listrik')?>">Listrik</a></li>
								<li class="<?=($page=='air')?'active':null?>"><a href="<?=base_url().$controller.'?session='.$token.'&XYZ='.base64_encode('air')?>">Air</a></li>
								<li class="<?=($page=='charge')?'active':null?>"><a href="<?=base_url().$controller.'?session='.$token.'&XYZ='.base64_encode('charge')?>">Charge</a></li>
								<li class="<?=($page=='sewa')?'active':null?>"><a href="<?=base_url().$controller.'?session='.$token.'&XYZ='.base64_encode('sewa')?>">Sewa Kontrak</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<!-- Page Content -->
	<div class="ecaps-page-content">
		<!-- Top Header Area -->
		<header class="top-header-area d-flex align-items-center justify-content-between">
			<div class="left-side-content-area d-flex align-items-center">
				<!-- Mobile Logo -->
				<div class="mobile-logo mr-3 mr-sm-4">
					<a href="index.html"><img src="<?=base_url().'assets/'?>img/core-img/small-logo.png" alt="Mobile Logo"></a>
				</div>
				<!-- Triggers -->
				<div class="ecaps-triggers mr-1 mr-sm-3">
					<div class="menu-collasped" id="menuCollasped">
						<i class="zmdi zmdi-menu"></i>
					</div>
					<div class="mobile-menu-open" id="mobileMenuOpen">
						<i class="zmdi zmdi-menu"></i>
					</div>
				</div>

			</div>

			<div class="right-side-navbar d-flex align-items-center justify-content-end">
				<!-- Mobile Trigger -->
				<div class="right-side-trigger" id="rightSideTrigger">
					<i class="ti-align-left"></i>
				</div>

				<!-- Top Bar Nav -->
				<ul class="right-side-content d-flex align-items-center">
					<!-- Full Screen Mode -->
					<li class="full-screen-mode ml-1">
						<a href="javascript:" id="fullScreenMode"><i class="zmdi zmdi-fullscreen"></i></a>
					</li>
					<li class="nav-item dropdown">
						<button type="button" class="btn dropdown-toggle font-15 text-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">English<i class="arrow_carrot-down"></i></button>
						<div class="dropdown-menu language-dropdown dropdown-menu-right">
							<a href="#" class="dropdown-item">French</a>
							<a href="#" class="dropdown-item">German</a>
							<a href="#" class="dropdown-item">Hindi</a>

						</div>
					</li>

					<li class="nav-item dropdown">
						<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-shopping-basket" aria-hidden="true"></i></button>

						<div class="dropdown-menu dropdown-menu-right">
							<!-- Top Message Area -->
							<div class="top-message-area">
								<!-- Heading -->
								<div class="top-message-heading">
									<div class="heading-title">
										<h6>Messages</h6>
									</div>
									<span>5 New</span>
								</div>
								<div class="message-box" id="messageBox">
									<a href="#" class="dropdown-item">
										<img src="img/member-img/1.png" alt="">
										<span class="message-text">
                                                <span>6-hour video course on Angular</span>
                                                <span>3 min ago</span>
                                            </span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="img/member-img/2.png" alt="">
										<span class="message-text">
                                                <span>Google Ads: You'll get a refund soon</span>
                                                <span>27 min ago</span>
                                            </span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="img/member-img/3.png" alt="">
										<span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="img/member-img/4.png" alt="">
										<span class="message-text">
                                                <span>The Complete JavaScript Handbook</span>
                                                <span>1 hour ago</span>
                                            </span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="img/member-img/5.png" alt="">
										<span class="message-text">
                                                <span>New comment: ecaps Template</span>
                                                <span>2 days ago</span>
                                            </span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="img/member-img/6.png" alt="">
										<span class="message-text">
                                                <span>6-hour video course on Angular</span>
                                                <span>3 min ago</span>
                                            </span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="img/member-img/7.png" alt="">
										<span class="message-text">
                                                <span>Google Ads: You'll get a refund soon</span>
                                                <span>27 min ago</span>
                                            </span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="img/member-img/8.png" alt="">
										<span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
									</a>
								</div>
							</div>
						</div>
					</li>

					<li class="nav-item dropdown">
						<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-volume-up" aria-hidden="true"></i> <span class="active-status"></span></button>
						<div class="dropdown-menu dropdown-menu-right">
							<!-- Top Notifications Area -->
							<div class="top-notifications-area">
								<!-- Heading -->
								<div class="notifications-heading">
									<div class="heading-title">
										<h6>Notifications</h6>
									</div>
									<span>5 New</span>
								</div>

								<div class="notifications-box" id="notificationsBox">
									<a href="#" class="dropdown-item"><i class="ti-face-smile bg-success"></i><span>We've got something for you!</span></a>
									<a href="#" class="dropdown-item"><i class="zmdi zmdi-notifications-active bg-danger"></i><span>Domain names expiring on Tuesday</span></a>
									<a href="#" class="dropdown-item"><i class="ti-check"></i><span>Your commissions has been sent</span></a>
									<a href="#" class="dropdown-item"><i class="ti-heart bg-success"></i><span>You sold an item!</span></a>
									<a href="#" class="dropdown-item"><i class="ti-bolt bg-warning"></i><span>Security alert for your linked Google account</span></a>
									<a href="#" class="dropdown-item"><i class="ti-face-smile bg-success"></i><span>We've got something for you!</span></a>
									<a href="#" class="dropdown-item"><i class="zmdi zmdi-notifications-active bg-danger"></i><span>Domain names expiring on Tuesday</span></a>
									<a href="#" class="dropdown-item"><i class="ti-check"></i><span>Your commissions has been sent</span></a>
									<a href="#" class="dropdown-item"><i class="ti-heart bg-success"></i><span>You sold an item!</span></a>
									<a href="#" class="dropdown-item"><i class="ti-bolt bg-warning"></i><span>Security alert for your linked Google account</span></a>
								</div>
							</div>
						</div>
					</li>

					<li class="nav-item dropdown">
						<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/member-img/3.png" alt=""></button>
						<div class="dropdown-menu dropdown-menu-right">
							<!-- User Profile Area -->
							<div class="user-profile-area">
								<div class="user-profile-heading">
									<!-- Thumb -->
									<div class="profile-img">
										<img class="chat-img mr-2" src="img/member-img/3.png" alt="">
									</div>
									<!-- Profile Text -->
									<div class="profile-text">
										<h6>Ajoy Das</h6>
										<span>Developer</span>
									</div>
								</div>
								<a href="#" class="dropdown-item"><i class="zmdi zmdi-account profile-icon bg-primary" aria-hidden="true"></i> My profile</a>
								<a href="#" class="dropdown-item"><i class="zmdi zmdi-email-open profile-icon bg-success" aria-hidden="true"></i> Messages</a>
								<a href="#" class="dropdown-item"><i class="zmdi zmdi-brightness-7 profile-icon bg-info" aria-hidden="true"></i> Account settings</a>
								<a href="#" class="dropdown-item"><i class="zmdi zmdi-mouse profile-icon bg-danger" aria-hidden="true"></i> My Tasks</a>
								<a href="#" class="dropdown-item"><i class="zmdi zmdi-wifi-alt profile-icon bg-purple" aria-hidden="true"></i> Support</a>
								<a href="#" class="dropdown-item"><i class="ti-unlink profile-icon bg-warning" aria-hidden="true"></i> Sign-out</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</header>

		<!-- Main Content Area -->
		<?php $this->load->view($content); ?>
	</div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->
