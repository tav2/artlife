<!-- Page title -->
<div class="page-title">
	 <div class="container">
			<h2><img src="assets/img/icons/logo2.png"> Здоровое питание <small></small></h2>
			<hr />
	 </div>
</div>
<!-- Page title -->

<!-- Page content -->

<div class="shop-items">
	 <div class="container cwell">
			
			<div class="row">
				 
				<div style="background: url('assets/img/bg/b6.png') repeat   #fafafa;" class="col-md-9 col-md-push-3">
						<!-- Breadcrumb -->
						<ul class="breadcrumb">
							 <li><a href="index">Главная</a> <span class="divider"></span></li>
							 <li><a href="kat">Каталог</a> <span class="divider"></span></li>
							 <!-- <li><a href="subkat">Категории</a> <span class="divider"></span></li>
							 <li class="active">HEALTH&BODY CONTROL</li>
						</ul> -->
						<!-- Items List starts -->

							 <!-- <div class="row"> -->
								<?php echo $api_get_tovar;?>

						<!-- Items List ends -->
						
						
							<div class="row">
									<div class="col-md-12">
															<!-- Pagination -->
															<ul class="pagination">
																<li class="disabled"><a href="#">&laquo;</a></li>
																<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
																<li><a href="#">2</a></li>
																<li><a href="#">3</a></li>
																<li><a href="#">4</a></li>
																<li><a href="#">5</a></li>
																<li><a href="#">&raquo;</a></li>
															</ul> 
									</div>
							</div>
				</div>
				 
				<div class="col-md-3 col-md-pull-9">
				<a href="viewcart"><h3><i class="fa fa-cart-arrow-down color"></i>корзина</h3></a>
						<div class="sidey">
							 <ul class="nav">

								<?php echo $api_get_kat; ?>

							 </ul>
							<div class="sep-bor"></div>
								<form class="form-inline" role="form">
								  <div class="form-group">
									<input type="email" class="form-control" id="search" placeholder="Поиск товара...">
								  </div>
								  <button type="submit" class="btn btn-info">Поиск</button>
								</form>
							<div class="sep-bor"></div>
						</div>
						
						<!-- Sidebar items (featured items)-->

						<?php echo $api_get_popular_tovar; ?>

				</div>
			</div>
			
			<div class="sep-bor"></div>
	 </div>
</div>


<!-- Recent posts Starts -->

<?php echo $api_get_new_tovar; ?>

<!-- Recent posts Ends -->		