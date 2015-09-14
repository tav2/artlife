<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="assets/img/icons/logo2.png" type="image/x-icon">
		<link rel="icon" href="assets/img/icons/logo2.png" type="image/x-icon">
		<!-- Title here -->
		<title>ARTLife</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- нужно обязательно чтобы лайаут работал -->
		<base href="<?php echo base_url(); ?>">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" href="assets/css/settings.css" media="screen" />
		<!-- Animate css -->
		<link href="assets/css/animate.min.css" rel="stylesheet">
		<!-- Dropdown menu -->
		<link href="assets/css/ddlevelsmenu-base.css" rel="stylesheet">
		<link href="assets/css/ddlevelsmenu-topbar.css" rel="stylesheet">
		<!-- Countdown -->
		<link href="assets/css/jquery.countdown.css" rel="stylesheet">     
		<!-- Font awesome CSS -->
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="assets/css/style.css" rel="stylesheet">
		<!-- лайтбокс css-->
		<link href="assets/css/litebox/lightbox.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>

<body>
	<!-- Shopping cart Modal -->
	<div class="modal fade" id="shoppingcart" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">Shopping Cart</h4>
			</div>
			<div class="modal-body">
			
				<!-- Items table -->
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Name</th>
							<th>Quantity</th>
							<th>Price</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href="single-item.html">HTC One</a></td>
							<td>2</td>
							<td>$250</td>
						</tr>
						<tr>
							<td><a href="single-item.html">Apple iPhone</a></td>
							<td>1</td>
							<td>$502</td>
						</tr>
						<tr>
							<td><a href="single-item.html">Galaxy Note</a></td>
							<td>4</td>
							<td>$1303</td>
						</tr>
						<tr>
							<th></th>
							<th>Total</th>
							<th>$2405</th>
						</tr>
					</tbody>
				</table>
			
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Continue Shopping</button>
			<button type="button" class="btn btn-info">Checkout</button>
			</div>
		</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- Logo & Navigation starts -->
	<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-1 col-sm-2">
					  <!-- Logo -->
					  <div class="logo">
						 <a href="index"><img src="assets/img/icons/logo.png"></a>
						 <!-- <h1><a href="index">ARTLife  &nbsp; &nbsp; &nbsp; &nbsp;</a></h1> -->
					  </div>
					</div>
					<div class="col-md-8 col-sm-4">
						<!-- Navigation menu -->
						<div class="navi">
							<div id="ddtopmenubar" class="mattblackmenu">

								<ul>
									<li><a href="kat">Каталог</a></li>
									<li><a href="aboutus">О компании</a></li>
									<li><a href="sertifikaty">Сертификация</a></li>
									<li><a  rel="ddsubmenu1">Новости</a>
										<ul id="ddsubmenu1" class="ddsubmenustyle">
											<li><a href="pozdravl">Поздравления</a></li>
											<li><a href="diagnost">Диагностика</a></li>
										</ul>
									</li>
									<li><a  rel="ddsubmenu1">Статьи</a>
										<ul id="ddsubmenu1" class="ddsubmenustyle">
											<li><a href="experience">Полезный опыт</a></li>
											<li><a href="deti">Программы для детей</a></li>
											<li><a href="articles">Другие статьи</a></li>
										</ul>
									</li>
									<!-- <li><a href="articles" >Статьи</a></li> -->
									<li><a href="checkout" >Доставка/оплата</a></li>
									<li><a href="contactus" >Контакты</a></li>
								</ul>
							</div>
						</div>
						<!-- Dropdown NavBar -->
						<div class="navis"></div>                   
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="kart-links">
							<a href="login.html">Войти</a> 
							<a href="register.html">Регистрация</a>
							<a data-toggle="modal" href="#shoppingcart"><i class="fa fa-shopping-cart"></i></a>
						</div>
					</div>
				</div>
			</div>
	</div>
	  <!-- Logo & Navigation ends -->

<?php echo $content; ?>

		<!-- Footer starts -->
		<footer>
			 <div class="container">
			 
				   <div class="row">

							<div class="col-md-4 col-sm-4">
							   <div class="fwidget">
							   
								  <h4>Мы в социальных сетях</h4>
								  <hr />
								  <p>Социальные сети давно стали неотъемлемой частью нашей жизни. Мы узнаем из них новости, общаемся с друзьями, участвуем в интерактивных клубах по интересам.</p>
								  
								  <div class="social">
									 <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
									 <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
									 <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
									 <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
									 <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
								  </div>
							   </div>
						   </div>

						   <div class="col-md-4 col-sm-4">
							 <div class="fwidget">
							   <h4>Категории</h4>
							   <hr />
							   <ul>
								 <li><a href="#">Биологически активные комплексы</a></li>
								 <li><a href="#">Функциональное питание</a></li>
								 <li><a href="#">Спортивное питание</a></li>
								 <li><a href="#">Космецевтика</a></li>
								 <li><a href="#">Детям</a></li>
							   </ul>
							 </div>
						   </div>        

						   

						   <div class="col-md-4 col-sm-4">
							 <div class="fwidget">
							   
							   <h4>Контакты</h4>
							   <hr />
							   <div class="address">
								  <p><i class="fa fa-home color contact-icon"></i> улица Куйши Дина, дом 12, офис 2  </p>
							  <!--     <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; дом 12 офис 2 </p> -->
								  <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Астана - 010000, Республика Казахстан.</p>
								  <p><i class="fa fa-phone color contact-icon"></i> +77077700376</p>
								  <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  +77015280767</p>
								  <p><i class="fa fa-envelope color contact-icon"></i> <a href="mailto:info@artlife.com.kz">info@artlife.com.kz</a></p>
							   </div>
							   
							 </div>
						   </div>

						 </div>
				<hr />
				
				<div class="copy text-center">
				   <p class="pull-left">© 2015 <a href="http://web.com.kz" target="_blank">Создание сайтов в Казахстане</a> mr@web.com.kz </p>
				</div>
			 </div>
		</footer>
		<!-- Footer ends -->

	<!-- Scroll to top -->
	<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
	
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="assets/js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
		<script src="assets/js/jquery.themepunch.plugins.min.js"></script>
		<script src="assets/js/jquery.themepunch.revolution.min.js"></script>
		<!-- Dropdown menu -->
		<script src="assets/js/ddlevelsmenu.js"></script> 
		<!-- Countdown -->
		<script src="assets/js/jquery.plugin.min.js"></script> 
		<script src="assets/js/jquery.countdown.min.js"></script>    
		<!-- jQuery Navco -->
		<script src="assets/js/jquery.navgoco.min.js"></script>
		<!-- Filter for support page -->
		<script src="assets/js/filter.js"></script>         
		<!-- Respond JS for IE8 -->
		<script src="assets/js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="assets/js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/custom.js"></script>
		<script>
			/* JS for SLIDER REVOLUTION */
			jQuery(document).ready(function() {
			   jQuery('.tp-banner').revolution(
				{
					delay: 9000,
					startheight: 450,
					
					hideThumbs: 10,
					
					navigationType:"none",	
					
					
					hideArrowsOnMobile:"on",
					
					touchenabled:"on",
					onHoverStop:"on",
					
					navOffsetHorizontal:0,
					navOffsetVertical:20,
					
					stopAtSlide:-1,
					stopAfterLoops:-1,

					shadow:0,
					
					fullWidth:"on",
					fullScreen:"off"
				});
			});
		</script>
		<!-- лайтбокс скрипт -->
		<script src="assets/js/litebox/lightbox.js"></script>
			<script>
				lightbox.option({
				  'maxHeight': 900
				})
			</script>

</body>
</html>
<!-- шаблон olsonkart/theme -->