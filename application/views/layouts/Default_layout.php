<?PHP 
if (!$this->session->has_userdata('username')) {
	$this->session->set_flashdata('mensagem', '<div class="alert alert-danger">Conecte-se primeiro.</div>');
	redirect('/login');
} else {
?>

<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?PHP echo $title; ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- favicon
			============================================ -->
		<!--link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"-->
		<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="<?PHP echo base_url();?>assets/css/bootstrap-select/bootstrap-select.css">
		<link rel="stylesheet" href="<?PHP echo base_url();?>assets/css/chosen/chosen.css">
		
		<!-- Google Fonts
			============================================ -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
		<!-- Bootstrap CSS
			============================================ -->
		<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/bootstrap.min.css">
		<!-- Bootstrap CSS
			============================================ -->
		<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/font-awesome.min.css">
		<!-- owl.carousel CSS
			============================================ -->
		<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/owl.carousel.css">
		<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/owl.theme.css">
		<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/owl.transitions.css">
		<!-- meanmenu CSS
			============================================ -->
		<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/meanmenu/meanmenu.min.css">
		<!-- animate CSS
			============================================ -->
		<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/animate.css">
		<!-- normalize CSS
			============================================ -->
		<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/normalize.css">
		<!-- mCustomScrollbar CSS
			============================================ -->
		<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
		<!-- notika icon CSS
			============================================ -->
		<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/notika-custom-icon.css">
		<!-- wave CSS
			============================================ -->
		<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/wave/waves.min.css">
		<!-- main CSS
			============================================ -->
		<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/main.css">
		
		<!-- style CSS
			============================================ -->
		<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/style.css">
		<!-- responsive CSS
			============================================ -->
		<link rel="stylesheet" href="<?PHP echo base_url(); ?>assets/css/responsive.css">
		<!-- modernizr JS
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
		<!-- Data Table JS
			============================================ -->
	</head>
	<body>
		<!--[if lt IE 8]>
				<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
			<![endif]-->
		<!-- Start Header Top Area -->
		<div class="header-top-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="logo-area"><span class="color-single">Bem-vindo ao</span>
							<div class="invoice-hs" style="padding:0;">
								<a href="<?PHP echo base_url();?>"><h2>PROJETO MINI-ERP</h2></a>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="header-top-menu">
							<ul class="nav navbar-nav notika-top-nav">
								<li class="nav-item ">
									<div class="color-single">
										<?PHP echo $this->session->username;?>
									</div>
								</li>
								<li class="nav-item ">
									<a href="<?PHP echo base_url();?>login/logout" class="nav-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Deslogar">
										<span><i class="fa fa-power-off"></i></span>
									</a>
								</li>
							   <!--<li class="nav-item dropdown">
									<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
									<div role="menu" class="dropdown-menu search-dd animated flipInX">
										<div class="search-input">
											<i class="notika-icon notika-left-arrow"></i>
											<input type="text" />
										</div>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-mail"></i></span></a>
									<div role="menu" class="dropdown-menu message-dd animated zoomIn">
										<div class="hd-mg-tt">
											<h2>Messages</h2>
										</div>
										<div class="hd-message-info">
											<a href="#">
												<div class="hd-message-sn">
													<div class="hd-message-img">
														<img src="img/post/1.jpg" alt="" />
													</div>
													<div class="hd-mg-ctn">
														<h3>David Belle</h3>
														<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
													</div>
												</div>
											</a>
											<a href="#">
												<div class="hd-message-sn">
													<div class="hd-message-img">
														<img src="img/post/2.jpg" alt="" />
													</div>
													<div class="hd-mg-ctn">
														<h3>Jonathan Morris</h3>
														<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
													</div>
												</div>
											</a>
											<a href="#">
												<div class="hd-message-sn">
													<div class="hd-message-img">
														<img src="img/post/4.jpg" alt="" />
													</div>
													<div class="hd-mg-ctn">
														<h3>Fredric Mitchell</h3>
														<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
													</div>
												</div>
											</a>
											<a href="#">
												<div class="hd-message-sn">
													<div class="hd-message-img">
														<img src="img/post/1.jpg" alt="" />
													</div>
													<div class="hd-mg-ctn">
														<h3>David Belle</h3>
														<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
													</div>
												</div>
											</a>
											<a href="#">
												<div class="hd-message-sn">
													<div class="hd-message-img">
														<img src="img/post/2.jpg" alt="" />
													</div>
													<div class="hd-mg-ctn">
														<h3>Glenn Jecobs</h3>
														<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
													</div>
												</div>
											</a>
										</div>
										<div class="hd-mg-va">
											<a href="#">View All</a>
										</div>
									</div>
								</li>
								<li class="nav-item nc-al"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-alarm"></i></span><div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span>3</span></div></a>
									<div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn">
										<div class="hd-mg-tt">
											<h2>Notification</h2>
										</div>
										<div class="hd-message-info">
											<a href="#">
												<div class="hd-message-sn">
													<div class="hd-message-img">
														<img src="img/post/1.jpg" alt="" />
													</div>
													<div class="hd-mg-ctn">
														<h3>David Belle</h3>
														<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
													</div>
												</div>
											</a>
											<a href="#">
												<div class="hd-message-sn">
													<div class="hd-message-img">
														<img src="img/post/2.jpg" alt="" />
													</div>
													<div class="hd-mg-ctn">
														<h3>Jonathan Morris</h3>
														<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
													</div>
												</div>
											</a>
											<a href="#">
												<div class="hd-message-sn">
													<div class="hd-message-img">
														<img src="img/post/4.jpg" alt="" />
													</div>
													<div class="hd-mg-ctn">
														<h3>Fredric Mitchell</h3>
														<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
													</div>
												</div>
											</a>
											<a href="#">
												<div class="hd-message-sn">
													<div class="hd-message-img">
														<img src="img/post/1.jpg" alt="" />
													</div>
													<div class="hd-mg-ctn">
														<h3>David Belle</h3>
														<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
													</div>
												</div>
											</a>
											<a href="#">
												<div class="hd-message-sn">
													<div class="hd-message-img">
														<img src="img/post/2.jpg" alt="" />
													</div>
													<div class="hd-mg-ctn">
														<h3>Glenn Jecobs</h3>
														<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
													</div>
												</div>
											</a>
										</div>
										<div class="hd-mg-va">
											<a href="#">View All</a>
										</div>
									</div>
								</li>
								<li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menus"></i></span><div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span>2</span></div></a>
									<div role="menu" class="dropdown-menu message-dd task-dd animated zoomIn">
										<div class="hd-mg-tt">
											<h2>Tasks</h2>
										</div>
										<div class="hd-message-info hd-task-info">
											<div class="skill">
												<div class="progress">
													<div class="lead-content">
														<p>HTML5 Validation Report</p>
													</div>
													<div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>95%</span>
													</div>
												</div>
												<div class="progress">
													<div class="lead-content">
														<p>Google Chrome Extension</p>
													</div>
													<div class="progress-bar wow fadeInLeft" data-progress="85%" style="width: 85%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>85%</span> </div>
												</div>
												<div class="progress">
													<div class="lead-content">
														<p>Social Internet Projects</p>
													</div>
													<div class="progress-bar wow fadeInLeft" data-progress="75%" style="width: 75%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>75%</span> </div>
												</div>
												<div class="progress">
													<div class="lead-content">
														<p>Bootstrap Admin</p>
													</div>
													<div class="progress-bar wow fadeInLeft" data-progress="93%" style="width: 65%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>65%</span> </div>
												</div>
												<div class="progress progress-bt">
													<div class="lead-content">
														<p>Youtube App</p>
													</div>
													<div class="progress-bar wow fadeInLeft" data-progress="55%" style="width: 55%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>55%</span> </div>
												</div>
											</div>
										</div>
										<div class="hd-mg-va">
											<a href="#">View All</a>
										</div>
									</div>
								</li>
								<li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-chat"></i></span></a>
									<div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
										<div class="hd-mg-tt">
											<h2>Chat</h2>
										</div>
										<div class="search-people">
											<i class="notika-icon notika-left-arrow"></i>
											<input type="text" placeholder="Search People" />
										</div>
										<div class="hd-message-info">
											<a href="#">
												<div class="hd-message-sn">
													<div class="hd-message-img chat-img">
														<img src="img/post/1.jpg" alt="" />
														<div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
													</div>
													<div class="hd-mg-ctn">
														<h3>David Belle</h3>
														<p>Available</p>
													</div>
												</div>
											</a>
											<a href="#">
												<div class="hd-message-sn">
													<div class="hd-message-img chat-img">
														<img src="img/post/2.jpg" alt="" />
													</div>
													<div class="hd-mg-ctn">
														<h3>Jonathan Morris</h3>
														<p>Last seen 3 hours ago</p>
													</div>
												</div>
											</a>
											<a href="#">
												<div class="hd-message-sn">
													<div class="hd-message-img chat-img">
														<img src="img/post/4.jpg" alt="" />
													</div>
													<div class="hd-mg-ctn">
														<h3>Fredric Mitchell</h3>
														<p>Last seen 2 minutes ago</p>
													</div>
												</div>
											</a>
											<a href="#">
												<div class="hd-message-sn">
													<div class="hd-message-img chat-img">
														<img src="img/post/1.jpg" alt="" />
														<div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
													</div>
													<div class="hd-mg-ctn">
														<h3>David Belle</h3>
														<p>Available</p>
													</div>
												</div>
											</a>
											<a href="#">
												<div class="hd-message-sn">
													<div class="hd-message-img chat-img">
														<img src="img/post/2.jpg" alt="" />
														<div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
													</div>
													<div class="hd-mg-ctn">
														<h3>Glenn Jecobs</h3>
														<p>Available</p>
													</div>
												</div>
											</a>
										</div>
										<div class="hd-mg-va">
											<a href="#">View All</a>
										</div>
									</div>
								</li>-->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Header Top Area -->
		<!-- Mobile Menu start -->
		<div class="mobile-menu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="mobile-menu">
							<nav id="dropdown">
								<ul class="mobile-menu-nav">
									<li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
										<ul class="collapse dropdown-header-top">
											<li><a href="index.html">Dashboard One</a></li>
											<li><a href="index-2.html">Dashboard Two</a></li>
											<li><a href="index-3.html">Dashboard Three</a></li>
											<li><a href="index-4.html">Dashboard Four</a></li>
											<li><a href="analytics.html">Analytics</a></li>
											<li><a href="widgets.html">Widgets</a></li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
										<ul id="demoevent" class="collapse dropdown-header-top">
											<li><a href="inbox.html">Inbox</a></li>
											<li><a href="view-email.html">View Email</a></li>
											<li><a href="compose-email.html">Compose Email</a></li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
										<ul id="democrou" class="collapse dropdown-header-top">
											<li><a href="animations.html">Animations</a></li>
											<li><a href="google-map.html">Google Map</a></li>
											<li><a href="data-map.html">Data Maps</a></li>
											<li><a href="code-editor.html">Code Editor</a></li>
											<li><a href="image-cropper.html">Images Cropper</a></li>
											<li><a href="wizard.html">Wizard</a></li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
										<ul id="demolibra" class="collapse dropdown-header-top">
											<li><a href="flot-charts.html">Flot Charts</a></li>
											<li><a href="bar-charts.html">Bar Charts</a></li>
											<li><a href="line-charts.html">Line Charts</a></li>
											<li><a href="area-charts.html">Area Charts</a></li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
										<ul id="demodepart" class="collapse dropdown-header-top">
											<li><a href="normal-table.html">Normal Table</a></li>
											<li><a href="data-table.html">Data Table</a></li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
										<ul id="demo" class="collapse dropdown-header-top">
											<li><a href="form-elements.html">Form Elements</a></li>
											<li><a href="form-components.html">Form Components</a></li>
											<li><a href="form-examples.html">Form Examples</a></li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
										<ul id="Miscellaneousmob" class="collapse dropdown-header-top">
											<li><a href="notification.html">Notifications</a>
											</li>
											<li><a href="alert.html">Alerts</a>
											</li>
											<li><a href="modals.html">Modals</a>
											</li>
											<li><a href="buttons.html">Buttons</a>
											</li>
											<li><a href="tabs.html">Tabs</a>
											</li>
											<li><a href="accordion.html">Accordion</a>
											</li>
											<li><a href="dialog.html">Dialogs</a>
											</li>
											<li><a href="popovers.html">Popovers</a>
											</li>
											<li><a href="tooltips.html">Tooltips</a>
											</li>
											<li><a href="dropdown.html">Dropdowns</a>
											</li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
										<ul id="Pagemob" class="collapse dropdown-header-top">
											<li><a href="contact.html">Contact</a>
											</li>
											<li><a href="invoice.html">Invoice</a>
											</li>
											<li><a href="typography.html">Typography</a>
											</li>
											<li><a href="color.html">Color</a>
											</li>
											<li><a href="login-register.html">Login Register</a>
											</li>
											<li><a href="404.html">404 Page</a>
											</li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Menu end -->
		<!-- Main Menu area start-->
		<div class="main-menu-area mg-tb-40">
			<div class="container">
				<div class="row"><?PHP echo $this->session->flashdata('avisoLogado'); ?>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
							<li class="<?PHP echo cmenu('home', $this->router->class);?>"><a href="<?PHP echo base_url(); ?>home"><i class="notika-icon notika-house"></i>Home</a>
							</li>
							<li class="<?PHP echo cmenu('fornecedores', $this->router->class);?>"><a href="<?PHP echo base_url(); ?>fornecedores"><i class="notika-icon notika-finance"></i>Fornecedores</a>
							</li>
							<li class="<?PHP echo cmenu('compras', $this->router->class);?>"><a href="<?PHP echo base_url(); ?>compras"><i class="fa fa-shopping-basket"></i>Compras</a>
							</li>
							<li class="<?PHP echo cmenu('financeiro', $this->router->class);?>"><a data-toggle="tab" href="#Financeiro"><i class="notika-icon notika-credit-card"></i> Financeiro</a>
							</li>
							 <li class="<?PHP echo cmenu('produtos', $this->router->class);?>"><a href="<?PHP echo base_url(); ?>produtos"><i class="notika-icon notika-star"></i>Produtos</a>
							</li>
							 

							</li>
						</ul>
						<div class="tab-content custom-menu-content">
							<div id="Financeiro" class="tab-pane notika-tab-menu-bg animated flipInX">
								<ul class="notika-main-menu-dropdown">
									<li><a href="financeiro/pagar">Pagar</a>
									</li>
									<li><a href="financeiro/receber">Receber</a>
									</li>
									<li><a href="financeiro/cheques">Cheques Emitidos</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Menu area End-->
		<?PHP echo $contents;?> 
		<!-- Start Footer area-->
		<div class="footer-copyright-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="footer-copy-right">
							<p>Copyright © 2018 <a href="#">Vassolutions</a>. All rights reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer area-->
		<!-- jquery
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap JS
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<!-- wow JS
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/wow.min.js"></script>
		<!-- price-slider JS
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/jquery-price-slider.js"></script>
		<!-- owl.carousel JS
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
		<!-- scrollUp JS
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/jquery.scrollUp.min.js"></script>
		<!-- meanmenu JS
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/meanmenu/jquery.meanmenu.js"></script>
		<!-- counterup JS
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/counterup/jquery.counterup.min.js"></script>
		<script src="<?PHP echo base_url(); ?>assets/js/counterup/waypoints.min.js"></script>
		<script src="<?PHP echo base_url(); ?>assets/js/counterup/counterup-active.js"></script>
		<!-- mCustomScrollbar JS
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
		<!-- sparkline JS
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/sparkline/jquery.sparkline.min.js"></script>
		<script src="<?PHP echo base_url(); ?>assets/js/sparkline/sparkline-active.js"></script>
		<!-- sparkline JS
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/flot/jquery.flot.js"></script>
		<script src="<?PHP echo base_url(); ?>assets/js/flot/jquery.flot.resize.js"></script>
		<script src="<?PHP echo base_url(); ?>assets/js/flot/curvedLines.js"></script>
		<script src="<?PHP echo base_url(); ?>assets/js/flot/flot-active.js"></script>
		<!-- knob JS
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/knob/jquery.knob.js"></script>
		<script src="<?PHP echo base_url(); ?>assets/js/knob/jquery.appear.js"></script>
		<script src="<?PHP echo base_url(); ?>assets/js/knob/knob-active.js"></script>
		<!--  wave JS
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/wave/waves.min.js"></script>
		<script src="<?PHP echo base_url(); ?>assets/js/wave/wave-active.js"></script>
		<!--  todo JS
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/todo/jquery.todo.js"></script>
		<!-- plugins JS
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/plugins.js"></script>
		<!--  Chat JS
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/chat/moment.min.js"></script>
		<script src="<?PHP echo base_url(); ?>assets/js/chat/jquery.chat.js"></script>
		<!-- Data Table JS
			============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/data-table/jquery.dataTables.min.js"></script>
		<script src="<?PHP echo base_url(); ?>assets/js/data-table/data-table-act.js"></script>
		<?PHP if (isset($load_js_ext)){ foreach($load_js_ext as $script){?>
			<script type="text/javascript" src="<?PHP echo $script;?>" defer="defer"></script>
		<?PHP }
		}  if (isset($load_js)){ foreach($load_js as $script){?>
			<script type="text/javascript" src="<?PHP echo base_url(); ?>assets/js/<?PHP echo $script;?>.js" defer="defer"></script>
		<?PHP }
		} ?>
		<!-- main JS
		============================================ -->
		<script src="<?PHP echo base_url(); ?>assets/js/main.js"></script>
		
	</body>
</html>
<?PHP } ?> 