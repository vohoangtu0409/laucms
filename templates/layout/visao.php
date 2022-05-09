<?php if(count($visao) > 0){ ?>
<section id="visao">
	<div class="maxwidth">
		<div class="title-main">
			<h2><?=visaochonchungtoi?></h2>
			<p><?=$slogan['ten'.$lang]?></p>
		</div>
		<div class="owl-carousel owl-theme owl-visao">
			<?php foreach($visao as $k => $v){ ?>
				<div class="why-item">
					<div class="why-item_img">
						<img onerror="this.src='<?=THUMBS?>/140x140x2/assets/images/noimage.png';" src="<?=THUMBS?>/140x140x2/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">
					</div>
					<div class="why-item_text">
						<h3><?=$v['ten'.$lang]?></h3>
						<p><?=$v['mota'.$lang]?></p>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<?php } ?>