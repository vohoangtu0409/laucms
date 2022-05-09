<?php if(count($pronb_banchay)) { ?>
<section id="sanpham-moi">
	<div class="maxwidth">
		<div class="title-main">
			<h2>SẢN PHẨM MỚI</h2>
			<p><?=$slogan['ten'.$lang]?></p>
		</div>
		<div class="relative">
			<p class="control-product prev-product transition"><img src="assets/images/ic-left.png" alt="icon left"></p>
			<?=$func->get_product_owl($pronb_banchay,'','owl-product','');?>
			<p class="control-product next-product transition"><img src="assets/images/ic-right.png" alt="icon right"></p>
		</div>	
	</div>	
</section>
<?php } ?>