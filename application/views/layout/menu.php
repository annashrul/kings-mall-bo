<!-- ======================================
******* Page Wrapper Area Start **********
======================================= -->
<div class="ecaps-page-wrapper">
	<!-- Sidemenu Area -->
	<div class="ecaps-sidemenu-area">
		<!-- Desktop Logo -->
		<div class="ecaps-logo">
			<a href="#"><img class="desktop-logo" src="<?=base_url().'assets/'?>images/logo.png" style="max-height: 60px;" alt="Desktop Logo"> <img class="small-logo" src="<?=base_url().'assets/'?>images/favicon.png" style="max-height: 60px;" alt="Mobile Logo"></a>
		</div>

		<!-- Side Nav -->
		<div class="ecaps-sidenav" id="ecapsSideNav">
			<!-- Side Menu Area -->
			<div class="side-menu-area">
				<!-- Sidebar Menu -->
				<nav>
					<ul class="sidebar-menu" data-widget="tree">
						<li class="<?=($page=='dashboard')?'active':null?>"><a href="<?=base_url().'dashboard?session='.$token;?>"><i class="zmdi zmdi-view-dashboard"></i><span>Dashboard</span></a></li>
						<?php $controller='booking';$side_menu=null; $side_menu=array('0','form_booking','list_booking'); ?>
						<li class="treeview <?=array_search($page, $side_menu)?'menu-open':null?>">
							<a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span><?=$controller?></span> <i class="fa fa-angle-right"></i></a>
							<ul class="treeview-menu" style="<?=array_search($page, $side_menu)?'display:block;':null?>">
								<?php foreach($side_menu as $key => $value):?>
									<?php if($value != '0'){?><li class="<?=($page==$value)?'active':null?>"><a href="<?=base_url().$controller.'?session='.$token.q(1,$value)?>"><?=rplc_($value)?></a></li><?php } ?>
								<?php endforeach; ?>
							</ul>
						</li>
						<li class="<?=($page=='dealform')?'active':null?>"><a href="<?=base_url().'dealform?session='.$token?>"><i class="zmdi zmdi-view-dashboard"></i><span>Deal Form</span></a></li>
						<li class="<?=($page=='tagihan')?'active':null?>"><a href="<?=base_url().'tagihan?session='.$token.q(1,'draft');?>"><i class="zmdi zmdi-view-dashboard"></i><span>Form Tagihan</span></a></li>
						<?php $controller='masterdata';$side_menu=null; $side_menu=array('0','unit','tipe','lantai','bank','tenant','pengguna','level_pengguna');?>
						<li class="treeview <?=array_search($page, $side_menu)?'menu-open':null?>">
							<a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span><?=$controller?></span> <i class="fa fa-angle-right"></i></a>
							<ul class="treeview-menu" style="<?=array_search($page, $side_menu)?'display:block;':null?>">
								<?php foreach($side_menu as $key => $value):?>
									<?php if($value != '0'){?><li class="<?=($page==$value)?'active':null?>"><a href="<?=base_url().$controller.'?session='.$token.q(1,$value)?>"><?=rplc_($value)?></a></li><?php } ?>
								<?php endforeach; ?>
							</ul>
						</li>

						<?php $controller='cicilan'; $side_menu=null; $side_menu=array('0',$controller.'_sewa',$controller.'_dp',$controller.'_air',$controller.'_servis',$controller.'_listrik',$controller.'_pbb'); ?>
						<li class="treeview <?=array_search($page, $side_menu)?'menu-open':null?>">
							<a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span>Tagihan Bulanan</span> <i class="fa fa-angle-right"></i></a>
							<ul class="treeview-menu" style="<?=array_search($page, $side_menu)?'display:block;':null?>">
								<li class="<?=($page==$side_menu[1])?'active':null?>"><a href="<?=base_url().$controller.'?session='.$token.q(1,$side_menu[1])?>"><?=rplc_($side_menu[1])?></a></li>
								<li class="<?=($page==$side_menu[2])?'active':null?>"><a href="<?=base_url().$controller.'?session='.$token.q(1,$side_menu[2])?>"><?=rplc_($side_menu[2])?></a></li>
								<li class="<?=($page==$side_menu[3])?'active':null?>"><a href="<?=base_url().$controller.'?session='.$token.q(1,$side_menu[3])?>"><?=rplc_(str_replace('cicilan','tagihan',$side_menu[3]))?></a></li>
								<li class="<?=($page==$side_menu[4])?'active':null?>"><a href="<?=base_url().$controller.'?session='.$token.q(1,$side_menu[4])?>"><?=rplc_(str_replace('cicilan','tagihan',$side_menu[4]))?></a></li>
								<li class="<?=($page==$side_menu[5])?'active':null?>"><a href="<?=base_url().$controller.'?session='.$token.q(1,$side_menu[5])?>"><?=rplc_(str_replace('cicilan','tagihan',$side_menu[5]))?></a></li>
								<li class="<?=($page==$side_menu[6])?'active':null?>"><a href="<?=base_url().$controller.'?session='.$token.q(1,$side_menu[6])?>"><?=rplc_(str_replace('cicilan','tagihan',$side_menu[6]))?></a></li>
							</ul>
						</li>

<!--						--><?php //$controller='invoice'; $side_menu=null; $side_menu=array('0','kwitansi','listrik','air','charge','sewa_kontrak'); ?>
<!--						<li class="treeview --><?//=array_search($page, $side_menu)?'menu-open':null?><!--">-->
<!--							<a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span>--><?//=$controller?><!--</span> <i class="fa fa-angle-right"></i></a>-->
<!--							<ul class="treeview-menu" style="--><?//=array_search($page, $side_menu)?'display:block;':null?><!--">-->
<!--								--><?php //foreach($side_menu as $key => $value):?>
<!--									--><?php //if($value != '0'){?><!--<li class="--><?//=($page==$value)?'active':null?><!--"><a href="--><?//=base_url().$controller.'?session='.$token.q(1,$value)?><!--">--><?//=rplc_($value)?><!--</a></li>--><?php //} ?>
<!--								--><?php //endforeach; ?>
<!--							</ul>-->
<!--						</li>-->

						<?php $controller='laporan'; $side_menu=null; $side_menu=array('0','pembayaran_tenant','pendapatan','deal','outstanding_tagihan'); ?>
						<li class="treeview <?=array_search($page, $side_menu)?'menu-open':null?>">
							<a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span><?=$controller?></span> <i class="fa fa-angle-right"></i></a>
							<ul class="treeview-menu" style="<?=array_search($page, $side_menu)?'display:block;':null?>">
								<?php foreach($side_menu as $key => $value):?>
									<?php if($value != '0'){?><li class="<?=($page==$value)?'active':null?>"><a href="<?=base_url().$controller.'?session='.$token.q(1,$value)?>"><?=rplc_($value)?></a></li><?php } ?>
								<?php endforeach; ?>
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
					<a href="javascript:void(0)"><img src="<?=base_url().'assets/'?>img/core-img/small-logo.png" alt="Mobile Logo"></a>
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
					<li class="nav-item dropdown">
						<button type="button" class="btn dropdown-toggle font-15 text-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hallo, Admin<i class="arrow_carrot-down"></i></button>
						<div class="dropdown-menu language-dropdown dropdown-menu-right">
							<a href="<?=base_url().'auth/logout'?>" class="dropdown-item">Keluar</a>
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
