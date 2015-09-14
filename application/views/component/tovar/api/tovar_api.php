
<?php foreach($menu_sub_category as $id):?>
	<li><a href="welcome/subkat/<?php echo $id['tovar_category_id'] ?>"><?php echo $this->tovar_api->get_category_menu($id['tovar_category_id']) ?></a> <span class="divider"></span></li>
	 <li class="active"><?php echo $id['tovar_sub_category_name']; ?></li>
</ul>
<?php endforeach ?>

<?php 

$i=0;
foreach($category_tovar as $item): 

	 $i=$i+1;
	if ($i==1 ) 
	{
		echo "<div class='row'>";
	}
?>

<div class="col-md-4 col-sm-6 col-xs-12">
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
			<a href="welcome/sitem/<?php echo $item['tovar_id'] ?>"><img src="<?php echo $this->tovar_api->get_tovar_img($item['tovar_id']); ?>" alt=""  class="img-responsive"/></a>
		</div>
		<!-- <hr /> -->
		<!-- Item details -->
		<div class="item-details">
			<!-- Name -->
			<h5><a href="welcome/sitem/<?php echo $item['tovar_id'] ?>"><?php echo $item['tovar_name']; ?></a></h5>

			<!-- Para. Note more than 2 lines. -->
			<!-- <p>Описание.</p> -->
			
			<!-- Price -->
			<div class="item-price pull-left"><?php echo $item['tovar_prise']; ?></div>
			<!-- Add to cart -->
			<div class="pull-right"><a href="#" class="btn btn-danger btn-sm">Add to Cart</a></div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<?php 
	if ($i==4 ) 
	{
		$i=0;
		echo "</div>";
	}

endforeach ;

foreach($category_tovar as $id):
	if (isset($id['tovar_name'])) {
		echo "</div>";
		break;
	}
endforeach ;
?>

<!-- </div> -->