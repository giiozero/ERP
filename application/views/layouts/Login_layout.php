<?PHP $active='';if(!isset($acao)){$acao='';}?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Cadastro</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?PHP echo base_url();?>assets/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="<?PHP echo base_url();?>assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?PHP echo base_url();?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?PHP echo base_url();?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?PHP echo base_url();?>assets/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?PHP echo base_url();?>assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?PHP echo base_url();?>assets/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?PHP echo base_url();?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?PHP echo base_url();?>assets/css/wave/waves.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?PHP echo base_url();?>assets/css/notika-custom-icon.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?PHP echo base_url();?>assets/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?PHP echo base_url();?>assets/css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?PHP echo base_url();?>assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.</p>
        <![endif]-->
    <!-- Login Register area Start-->
    <div class="login-content">
        <!-- Login -->
		<?PHP if($acao=='logar' || $acao==''){$active ='toggled';}; ?>
        <div class="nk-block <?PHP echo $active;?>" id="l-login">
            <div class="nk-form">
				<form action="<?PHP echo base_url();?>login/logar" method="POST">
					<?PHP 
						if($active!='')
						{ 
							echo validation_errors('<div class="alert alert-danger">', '</div>');$active='1';
						}
						echo $this->session->flashdata('register_info');
						echo $this->session->flashdata('mensagem');

						if (isset($error))
						{
						echo "<div class='error'>$error</div>";
						}
					?>
					<p>Seja bem-vindo</p>
					<div class="input-group">
						<span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
						<div class="nk-int-st">
							<input type="text" name="username" class="form-control" placeholder="Usuário" value="<?php echo set_value('username'); ?>">
						</div>
					</div>
					<div class="input-group mg-t-15">
						<span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
						<div class="nk-int-st">
							<input type="password" name="password" class="form-control" placeholder="Senha">
						</div>
					</div>
					<button action="submit"  class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
				</form>
		   </div>
		

            <div class="nk-navigation nk-lg-ic">
				<a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Cadastro</span></a>
                <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Esqueceu a Senha</span></a>
            </div>
        </div>

        <!-- Register -->
		<?PHP if($acao=='cadastrar'){$active ='toggled';}; ?>
        <div class="nk-block <?PHP echo $active;?>" id="l-register">
			<form action="<?PHP echo base_url();?>login/cadastrar" method="POST">
				<div class="nk-form">
					<?PHP if($active!='1'){ echo validation_errors('<div class="alert alert-danger">', '</div>');} ?>
					<p>Cadastre-se</p>
					<div class="input-group">
						<span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
						<div class="nk-int-st">
							<input type="text" name="username" class="form-control" placeholder="Usuário" value="<?php echo set_value('username'); ?>">
						</div>
					</div>

					<div class="input-group mg-t-15">
						<span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
						<div class="nk-int-st">
							<input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email'); ?>">
						</div>
					</div>
					<div class="input-group mg-t-15">
						<span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
						<div class="nk-int-st">
							<input type="password" name="password" class="form-control" placeholder="Senha">
						</div>
					</div>
					<div class="input-group mg-t-15">
						<span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
						<div class="nk-int-st">
							<input type="password" name="confpassword" class="form-control" placeholder="Confirme a Senha">
						</div>
					</div>
					<button action="submit"  class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
				</div>
			</form>

            <div class="nk-navigation rg-ic-stl">
                <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Login</span></a>
                <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Esqueceu a Senha</span></a>
            </div>
        </div>

        <!-- Esqueceu a Senha -->
	    <div class="nk-block"		id="l-forget-password">
            <div class="nk-form">
                <p class="text-left">Informe seu e-mail de cadastro para podermos enviar os detalhes de como alterar sua senha.</p>
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                </div>

                <a href="#l-login" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></a>
            </div>

            <div class="nk-navigation nk-lg-ic rg-ic-stl">
                <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Entrar</span></a>
                <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Cadastro</span></a>
            </div>
        </div>
    </div>
    <!-- Login Register area End-->
    <!-- jquery
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?PHP echo base_url();?>assets/js/counterup/waypoints.min.js"></script>
    <script src="<?PHP echo base_url();?>assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?PHP echo base_url();?>assets/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/flot/jquery.flot.js"></script>
    <script src="<?PHP echo base_url();?>assets/js/flot/jquery.flot.resize.js"></script>
    <script src="<?PHP echo base_url();?>assets/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/knob/jquery.knob.js"></script>
    <script src="<?PHP echo base_url();?>assets/js/knob/jquery.appear.js"></script>
    <script src="<?PHP echo base_url();?>assets/js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/chat/jquery.chat.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/wave/waves.min.js"></script>
    <script src="<?PHP echo base_url();?>assets/js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/icheck/icheck.min.js"></script>
    <script src="<?PHP echo base_url();?>assets/js/icheck/icheck-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/todo/jquery.todo.js"></script>
    <!-- Login JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/login/login-action.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?PHP echo base_url();?>assets/js/main.js"></script>
</body>

</html>