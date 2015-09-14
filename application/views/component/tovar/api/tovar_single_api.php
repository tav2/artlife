
<?php foreach($tovar_single as $item):?>

<div class="col-md-9 col-md-push-3">
		<!-- Breadcrumb -->
	 <ul class="breadcrumb">
		 <li><a href="index">Главная</a> <span class="divider ten2"></span></li>
		 <li><a href="kat">Каталог</a> <span class="divider ten2"></span></li>
		 <?php foreach($menu_sub_category as $id):?>
			<li><a href="welcome/subkat/<?php echo $id['tovar_category_id'] ?>"><?php echo $this->tovar_api->get_category_menu($id['tovar_category_id']) ?></a> <span class="divider"></span></li>
			<li><a href="welcome/items/<?php echo $id['tovar_sub_category_id'] ?>"><?php echo $id['tovar_sub_category_name']; ?></a><span class="divider"></span></li>
		<?php endforeach ?>
		 <!-- <li><a href="items">Категории</a> <span class="divider ten2"></span></li> -->
		 <!-- <li><a href="items.html">зрение</a> <span class="divider ten2"></span></li> -->
		 <li class="active"><?php echo $item['tovar_name']; ?></li>
	 </ul>
		<div class="single-item">
				<div class="row">
					<div class="col-md-4 col-xs-5">

						<div class="item-image">
								<img src="<?php echo $this->tovar_api->get_tovar_img($item['tovar_id']); ?>" alt="" />
						</div>
								

					</div>
					<div class="col-md-5 col-xs-7">
						<!-- Title -->
							<h4><?php echo $item['tovar_name']; ?></h4>
							<h5><strong>Цена : <?php echo $item['tovar_prise']; ?></strong></h5>
							<p><strong>Доставка</strong> : Да</p>
							<p><strong>ГОСТ</strong> : <?php echo $item['tovar_uther']; ?></p>
							<p><strong>Объем</strong> : <?php echo $item['tovar_razmer']; ?> </p>
							<p><strong>Доступность</strong> : <?php echo $item['tovar_dostupnost']; ?></p><br />
									 
											
											 <!-- Quantity and add to cart button -->
											
											<div class="input-group">
												 <input type="text" class="form-control" placeholder="2">
												 <span class="input-group-btn">
													 <button class="btn btn-info" type="button">Ок</button>
												 </span>
											 </div><!-- /input-group -->

											<!-- Add to wish list -->
											<a href="wishlist.html">+ Добавить в корзину</a>

											<!-- Share button -->
							
					</div>
				</div>
			</div>

					<br />
			
			<!-- Description, specs and review -->

			<ul id="myTab" class="nav nav-tabs">
				<!-- Use uniqe name for "href" in below anchor tags -->
				<li class="active"><a href="#tab1" data-toggle="tab">Описание</a></li>
				<li><a href="#tab2" data-toggle="tab">Сертификаты</a></li>
				<li><a href="#tab3" data-toggle="tab">Состав</a></li>
				<li><a href="#tab4" data-toggle="tab">Способ применения</a></li>
				<li><a href="#tab5" data-toggle="tab">Противопоказания</a></li>
			</ul>

			<!-- Tab Content -->
			<div id="myTabContent" class="tab-content">
				<!-- Description -->
				<div class="tab-pane fade in active" id="tab1">
					<!-- <h4><strong>Таблетка</strong></h4> -->
					<p>
						<!-- Наша иммунная система постоянно находит и уничтожает попавшие извне чужеродные бактерии и вирусы, именно поэтому очень важно обеспечивать ей постоянную поддержку. Биоактивный комплекс «Авирол» предназначен для специфической стимуляции и восстановления противовирусного иммунитета, обладает выраженным противовирусным действием, увеличивает безрецидивный период при хронических вирусных инфекциях.Рецептура комплекса сочетает данные последних научных разработок о противовирусном эффекте аминокислоты лизин с опытом использования иммуномодуляторов растительного происхождения. Лизин обладает мощным противовирусным действием, особенно в отношении вирусов, вызывающих герпес и острые респираторные инфекции.Компоненты растительного происхождения усиливают действие аминокислоты лизин и обеспечивают активацию всех систем защиты организма от вирусной инфекции. Эхинацея пурпурная и зеленый чай, а также полисахариды гриба шиитаке стимулируют клетки системы иммунитета к непосредственному уничтожению вируса. Биофлавоноиды рутин и кверцетин, витамины С и Е уменьшают проницаемость капиллярной сети, не только препятствуя попаданию новых вирусов, но и уменьшая отек тканей, что проявляется в снижении слезотечения и заложенности носа. Экстракт ивы содержит природные органические связанные салицилаты, которые с успехом борются с такими признаками поражения вирусом, как головная и мышечные боли, лихорадка. Витамины В1, В12, фолиевая кислота обладают обменно-регулирующим эффектом и положительно влияют на процесс кроветворения, а также предупреждают истощение клеточных ресурсов противовирусной защиты и предохраняют ткани организма от гипоксии, обеспечив поступление кислорода в каждую клетку организма. -->
						<?php echo $item['tovar_text']; ?>
					</p>
					<hr />
					<!-- <h6><strong>Features</strong></h6>
					<ul>
					<li>Etiam adipiscing posuere justo, nec iaculis justo dictum non</li>
					<li>Cras tincidunt mi non arcu hendrerit eleifend</li>
					<li>Aenean ullamcorper justo tincidunt justo aliquet et lobortis diam faucibus</li>
					<li>Maecenas hendrerit neque id ante dictum mattis</li>
					<li>Vivamus non neque lacus, et cursus tortor</li>
					</ul>
					<h3>ТУ 9197-308-12424308-11Свидетельство о государственной регистрации №RU.77.99.11.003.Е.040687.07.11 от 22.07.2011Изготовитель (организация, уполномоченная принимать претензии от потребителя): ООО «Артлайф», Россия, 634034, г.Томск, ул. Нахимова, 8/2, тел.(3822) 55-60-92, www.artlife.ruСистема менеджмента качества и безопасности ООО «Артлайф» сертифицирована в соответствии ISО 9001, ISО 22000 и GMP.
					</h3> -->
				</div>

				<!-- сертификаты -->
				<div class="tab-pane fade" id="tab2">
					<div class="row">
					<?php foreach($this->tovar_api->get_tovar_sert($item['tovar_id']) as $id):?>
						<div class=" col-md-1 onethree-left ">
							<!-- Image -->
							<a href="<?php echo $id['tovar_img_adres']; ?>" data-lightbox="roadtrip" data-title=""><img src="<?php echo $id['tovar_img_adres']; ?>" alt="" class="img-responsive"></a>
							<!-- <h6>Свидетельства о государственной регистрации продукции (СГР)</h6> -->
							<!-- <a href="single-item.html"><img src="assets/img/items/2.png" alt="" class="img-responsive"/></a> -->
						</div>
					<?php endforeach ?>
						<!-- <div class="col-md-1 onethree-left">
							
							<a href="assets/img/sert/s1.jpg" data-lightbox="roadtrip" data-title=""><img src="assets/img/sert/s1.jpg" alt="" class="img-responsive"></a>
							<h6>Сертификаты соответствия продукции (СС)</h6>
						</div> -->

					</div>
					<hr/>
					

				</div>

				<!-- противопаказания -->
				<div class="tab-pane fade" id="tab5">

					<!-- <hr /> -->
					<h4><strong>
								<!-- Индивидуальная непереносимость компонентов, беременность и кормление грудью. Перед применением рекомендуется проконсультироваться с врачом. -->
								<?php echo $item['tovar_protivopokaz']; ?>
					</strong></h4>
					<hr />

				</div>

				<!-- состав -->
				<div class="tab-pane fade" id="tab3">

					<h5><strong>Состав:</strong></h5>
					<?php echo $item['tovar_sostav']; ?>
<!-- 					<table class="table table-striped">
						<tbody>
							<tr>
								<td><strong>L-лизин гидрохлорид</strong></td>
								<td>250,00 мг</td>
							</tr>
							<tr>
								<td><strong>аскорбат натрия</strong></td>
								<td>39,34 мг</td>
							</tr>
							<tr>
								<td><strong>зеленого чая экстракт</strong></td>
								<td>25,00 мг</td>
							</tr>
							<tr>
								<td><strong>цинка цитрат трехводный</strong></td>
								<td>24,00 мг</td>
							</tr>
							<tr>
								<td><strong> токоферола ацетат (Е) </strong></td>
								<td>3,50 мг</td>
							</tr>
							<tr>
								<td><strong> витамин В9 (фолиевая кислота) </strong></td>
								<td>0,02 мг</td>
							</tr>
							<tr>
								<td><strong> эхинацеи экстракт пурпурной сухой </strong></td>
								<td>50,00 мг</td>
							</tr>
							<tr>
								<td><strong> шиитаке гриб </strong></td>
								<td>50,00 мг</td>
							</tr>                                                                                                
						</tbody>
					</table> -->
					<hr />

				</div>

				<!-- способ применения -->
				<div class="tab-pane fade" id="tab4">

					<?php echo $item['tovar_sposob']; ?>
					<!-- <hr /> -->
					<!-- <h3><strong>
								Авирол принимать взрослым по 1 капсуле 2 раза в день во время еды. Продолжительность приема – 14 дней.
					</strong></h3>
					<hr />
					<h6><strong>Показания к применению</strong></h6>
					<ul>
					<li>Профилактика герпетической и других вирусных инфекций</li>
					<li>Профилактика хронического вирусного мононуклеоза и папилломатоза</li>
					</ul>

					<hr />
					<h3><strong>Рекомендации</strong></h3>
					<h5><strong>
						Прием двух капсул (рекомендуемая суточная доза) обеспечивает поступление: цинка – 15 мг – 125%; витамина С – 70 мг – 77%; витамина Е – 7 мг – 46%; витамина В1 – 0,3 мг – 20%; витамина В9 – 0,04 мг – 10%; витамина В12 – 0,0009 мг – 30%; кверцетина – 15 мг – 50%; рутина – 15 мг – 50%; оксикоричных кислот – 3 мг – 30%; катехинов – 9 мг – 18%; лизина – 500 мг – 10%; кофеина – 3 мг – 10% от рекомендуемой суточной потребности.
					</strong></h5> -->
					<hr />

				</div>

			</div>
</div>

<?php endforeach ?>