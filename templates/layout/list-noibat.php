<?php if(count($splistnb)) { ?>
<section id="list-product">
	<div class="maxwidth">
		<div class="title-main">
			<h2>SẢN PHẨM NỔI BẬT</h2>
		</div>
		<div class="content-tab">
			<ul class="ul-tabs-pro_list">
				<?php foreach($splistnb as $k => $v_list){ ?>
				<li data-tabs="listid<?=$k?>" class="item_tab_index <?=$k==0 ? 'active':''?>"><a><?=$v_list['ten'.$lang]?></a></li>
				<?php } ?>
			</ul>
			<?php foreach($splistnb as $k => $v_list){ 
				$pronb_inlist = $d->rawQuery("select ten$lang, tenkhongdauvi,gia,photo from #_product where type = ? and id_list= ? and noibat > 0 and hienthi > 0",array('san-pham',$v_list['id']));
			?>
			<div class="content-tabs-pro_list listid<?=$k?> <?=$k==0 ? 'active':''?>">
				<div class="paging-product-category paging-product-category-<?=$v_list['id']?>" data-list="<?=$v_list['id']?>"></div>
			</div>
			<?php } ?>
		</div>	
	</div>
</section>
<?php } ?>