<section id="tieuchi">
	<div class="maxwidth">
		<div class="owl-carousel owl-theme owl-carousel_tieuchi">
			<?php foreach($tieuchi as $k => $v){ ?>
				<div class="tieuchi-items 
					<?php if($k==0) echo 'orange' ?>
					<?php if($k==1) echo 'red' ?>
					<?php if($k==2) echo 'blue' ?>
					"
				>
					<a>
						<div class="tieuchi-items__img">
							<img onerror="this.src='<?=THUMBS?>/60x60x2/assets/images/noimage.png';" src="<?=THUMBS?>/60x60x2/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">
						</div>
						<div class="tieuchi-items__content">
							<h3><?=$v['ten'.$lang]?></h3>
						</div>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</section>