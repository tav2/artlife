
<?php foreach($category as $item): ?>
	
	<!-- welcome/kat/<?php //echo $item['tovar_category_id'] ?> -->
	<li><a href="welcome/subkat/<?php echo $item['tovar_category_id'] ?>"><i class="fa fa-chevron-circle-right "></i> &nbsp; <?php echo $item['tovar_category_name']; ?></a>
			 <!-- <ul>
					<?php //foreach($this->tovar_api->get_all_sub_category($item['tovar_category_id']) as $item2): ?>
						<li><a href="items"><?php //echo $item2['tovar_sub_category_name']; ?></a></li>
					<?php //endforeach ?>
			 </ul> -->
	</li>

<?php endforeach ?>