<div class="recent-posts blocky">
	 <div class="container">
			<div class="row">
				 <div class="col-md-12">
						<!-- Section title -->
						<div class="section-title">
							 <h4><i class="fa fa-desktop color"></i> &nbsp;Что нового</h4>
						</div>    
						
						<div id="item-carousel" class="carousel slide" data-ride="carousel">
								
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<div class="row">

										<?php foreach($tovar_new_1 as $item):?>

										<div class="col-md-3 col-sm-6">
											<!-- single item -->
											<div class="s-item">
												<!-- Image link -->
												<a href="welcome/sitem/<?php echo $item['tovar_id'] ?>">
													<img src="<?php echo $this->tovar_api->get_tovar_img($item['tovar_id']); ?>" class="img-responsive" alt="" />
												</a>
												<!-- portfolio caption -->
												<div class="s-caption">
													<!-- heading and paragraph -->
													<h4><a href="welcome/sitem/<?php echo $item['tovar_id'] ?>"><?php echo $item['tovar_name']; ?></a></h4>
													<p>Clintock, a Lat Hampden-Sydney College in Virginia.</p>
												</div>
											</div>
										</div>

										<?php endforeach ?>

										
									</div>
								</div>
								<div class="item">
									<div class="row">

									<?php foreach($tovar_new_2 as $item):?>

										<div class="col-md-3 col-sm-6">
											<div class="s-item">
												<a href="welcome/sitem/<?php echo $item['tovar_id'] ?>">
													<img src="<?php echo $this->tovar_api->get_tovar_img($item['tovar_id']); ?>" class="img-responsive" alt="" />
												</a>
												<div class="s-caption">
													<h4><a href="welcome/sitem/<?php echo $item['tovar_id'] ?>"><?php echo $item['tovar_name']; ?></a></h4>
													<p>Clintock, a Lat Hampden-Sydney College in Virginia.</p>
												</div>
											</div>
										</div>

									<?php endforeach ?>

										
									</div>
								</div>
							</div>
						
							<!-- Controls -->
							<a class="left c-control" href="#item-carousel" data-slide="prev">
								<i class="fa fa-chevron-left"></i>
							</a>
							<a class="right c-control" href="#item-carousel" data-slide="next">
								<i class="fa fa-chevron-right"></i>
							</a>

						</div>
		
				 </div>
			</div>
	 </div>
</div>