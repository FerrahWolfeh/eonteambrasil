<?php
include("VPN/conexao.php");
include_once("VPN/functions.php");
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Eon Team Brasil</title>
	<meta charset="UTF-8">
	<meta name="description" content="VPNs Eon Team Brasil">
	<meta name="keywords" content="vpn, eon, team, Brasil">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="./SharedAssets/img/raposa png.png" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" id="theme" href="VPN/css/theme-dark.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>
	<style>
		/* width */
		::-webkit-scrollbar {
			width: 10px;
		}
		
		/* Track */
		::-webkit-scrollbar-track {
			background: #000048;
		}
		 
		/* Handle */
		::-webkit-scrollbar-thumb {
			background: #ff0000; 
		}
		
		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
			background: rgb(102, 0, 161); 
		}
		</style>


	
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
	        <a href="home.html" class="site-logo">
			<img src="./SharedAssets/img/banner.png"alt="" style="width: 199px;padding-bottom: 20px;margin-bottom: 0px;">
		    </a>
				<nav class="top-nav-area w-100">
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="#">Painel VPN</a>
						<ul class="sub-menu">
						<li><form id="FormLogin" name="FormLogin" class="form-horizontal" method="POST" action="javascript:FormLogin()">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="usuario" class="form-control" placeholder="Usuário"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="senha" class="form-control" placeholder="Senha"/>
                        </div>
                    </div>
                    <div class="form-group">
                   	    <div id="StatusLogin"></div>
                    	<div class="col-md-12">
                            <button class="btn btn-info btn-block">Entrar</button>
                        </div>
                    </div>
										</form>
	           </li>				
	         </ul>				
					  </li>
						<li><a href="./ProjectFirebase/index.php">Novo Painel VPN</a></li>
						<li><a href="#">Downloads VPN</a>
							<ul class="sub-menu">
								<li><a href="./SharedAssets/EonTeamBrasil.apk">APK Próprio</a></li>
								<li><a href="./SharedAssets/codes.zip">OpenVPN PC</a></li>
								<li><a href="./SharedAssets/Ki4a.apk">APK Ki4a</a></li>
							</ul>
						</li>						
						<li><a href="#">Configuração Ki4a</a>
							<ul class="sub-menu">
								<li><a href="#">Address: 192.95.13.200</a></li>
								<li><a href="#">Port: 22</a></li>
							</ul>
						</li>
						<li><a href="#">Downloads IPTV</a>
							<ul class="sub-menu">
								<li><a href="https://drive.google.com/file/d/19ROO_awiwlsQw66J9I5twiWsiMNPnaa_/view?usp=drivesdk">APK Player TV</a></li>
								<li><a href="https://play.google.com/store/apps/details?id=com.topcine">APK TopCine</a></li>
							</ul>
						</li>
						<li class="nonclick">
							<a href="http://www.cutercounter.com/" target="_blank"><img src="http://www.cutercounter.com/hit.php?id=gmeokfxq&nd=6&style=115" border="0" alt="free counter"></a>	
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section overflow-hidden">
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="./img/slider-bg-2.jpg">
			<div class="container" style="margin-bottom: 200px;">
					<img src="./SharedAssets/img/projectfirebaselogosmolwht.png">
					<p>Bem vindo ao Projeto Firebase, o projeto de VPNs e IPTV sempre evoluindo e inovando.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end-->

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="copyright"><a href="./ProjectFirebase/admin/index.php">2019 © Eon Team Brasil</a></div>
		</div>
	</footer>
	<!-- Footer section end -->
	
	<script type="text/javascript" src="VPN/js/plugins/jquery/jquery.min.js"></script>
<script>
$(function(){

	$("#FormLogin").submit(function() {
		
		var formData = new FormData($(this)[0]);

		$.ajax({
			
			type: "POST",
			data: formData,
			async: true,
			url: "VPN/validar-login.php",
			success: function(result){
				$("#StatusLogin").html('');
				$("#StatusGeral").html('');
				$("#StatusGeral").append(result);
			},
			beforeSend: function(){
		  	  	$('#StatusLogin').html("<center><img src=\"VPN/img/owl/AjaxLoader.gif\"><br><br></center>");
		  	},
			cache: false,
        	contentType: false,
        	processData: false
	 	});
	});
});
</script>

<div id="StatusGeral"></div>

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky-sidebar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
