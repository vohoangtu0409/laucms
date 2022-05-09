<?php if(count($pro_nb) || count($pro_km)) { ?>
<section id="pro-tab">	
	<div class="maxwidth">
		<ul class="ul-tabs-pro">
			<li data-tabs="pro-nb" class="item_tab_index active"><a>Sản Phẩm Mới</a></li>
			<li data-tabs="pro-km" class="item_tab_index"><a>Sản Phẩm Bán Chạy</a></li>
			<a class="see-more" href="san-pham">Xem tất cả <img src="assets/images/ic-more.png" alt="more"></a>
		</ul>
		<div class="content-tabs-pro pro-nb active">
			<?=$func->get_product_owl($pro_nb,'','owl-product','');?>
		</div>
		<div class="content-tabs-pro pro-km">
			<?=$func->get_product_owl($pro_km,'','owl-product','');?>
		</div>
	</div>
</section>
<?php } ?>
