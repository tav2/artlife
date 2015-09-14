 <div class="sidebar-items">

	 <h5>Популярные товары !</h5>

	 <!-- Item #1 -->

	 <?php foreach($tovar_random as $item):?>

	 <div class="sitem">
		 <div class="onethree-left">
			 <!-- Image -->
			 <a href="welcome/sitem/<?php echo $item['tovar_id'] ?>"><img src="<?php echo $this->tovar_api->get_tovar_img($item['tovar_id']); ?>" alt="" class="img-responsive"/></a>
		 </div>
		 <div class="onethree-right">
			 <!-- Title -->
			 <a href="welcome/sitem/<?php echo $item['tovar_id'] ?>"><?php echo $item['tovar_name']; ?></a>
			 <!-- Para -->
			 <p>Aenean ullamcorper justo tincidunt justo aliquet.</p>
			 <!-- Price -->
			 <p class="bold"><?php echo $item['tovar_prise']; ?>тг.</p>
		 </div>
		 <div class="clearfix"></div>
	 </div>

	 <?php endforeach ?>

	 

 </div>