<div class="row">
	<!-- Item #1 -->
	<?php foreach($tovar_random as $item):?>

	<div class="col-md-3 col-sm-6 col-xs-12">
	  <div class="item">
	  	<?php if ($item['tovar_new']) {
	  	?>
		<!-- Use the below link to put HOT icon -->
		<div class="item-icon"><span>Новинка!</span></div>
		<?php 
	  	}
	  	?>
		<!-- Item image -->
		<div class="item-image">
		  <a href="welcome/sitem/<?php echo $item['tovar_id'] ?>"><img src="<?php echo $this->tovar_api->get_tovar_img($item['tovar_id']); ?>" alt="" class="img-responsive"/></a>
		</div>
		<!-- Item details -->
		<div class="item-details">
		  <!-- Name -->
		  <h5><a href="welcome/sitem/<?php echo $item['tovar_id'] ?>"><?php echo $item['tovar_name']; ?></a></h5>
		  <div class="clearfix"></div>
		  <!-- Para. Note more than 2 lines. -->
		  <p>Something about the product goes here. Not More than 2 lines.</p>
		  <hr />
		  <!-- Price -->
		  <div class="item-price pull-left"><?php echo $item['tovar_prise']; ?></div>
		  <!-- Add to cart -->
		  <div class="pull-right"><a href="#" class="btn btn-danger btn-sm">Add to Cart</a></div>
		  <div class="clearfix"></div>
		</div>
	  </div>
	</div>

	<?php endforeach ?>

 </div>