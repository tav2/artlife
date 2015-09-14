<?php 

$i=0;
foreach($category_tovar as $item): 
	 $i=$i+1;
	if ($i==1 ) {
		// $i=0;
		echo "<div class='row'>";
	}
?>

	<div class="col-md-4 col-sm-6 col-xs-12">
		<div class="item">
			<!-- Use the below link to put HOT icon -->
			<!-- <div class="item-icon"><span>HOT</span></div> -->
			<!-- Item image -->
			<div class="item-image">
				<a href="welcome/subkat/<?php echo $item['tovar_category_id'] ?>"><img src="<?php echo $item['tovar_img_adres'] ?>" alt="" class="img-responsive"/></a>
			</div>
			<!-- Item details -->
			<div class="item-details ">
				<!-- Name -->
				<hr />
				<h5><a href="welcome/subkat/<?php echo $item['tovar_category_id'] ?>"><?php echo $item['tovar_category_name'] ?></a></h5>
				
				<!-- <div class="clearfix"></div> -->
				<!-- Para. Note more than 2 lines. -->
				<!-- <p>небольшое описние</p><br> -->
				
				<!-- Price -->
				<!-- <div class="item-price pull-left">$360</div> -->
				<!-- Add to cart -->
				<!-- <div class="pull-right"><a href="#" class="btn btn-danger btn-sm">Добавить в корзину</a></div> -->
				<!-- <div class="clearfix"></div> -->
			</div>
		</div>
	</div>

<?php 
	if ($i==3 ) {
		$i=0;
		echo "</div>";
	}
endforeach ?>