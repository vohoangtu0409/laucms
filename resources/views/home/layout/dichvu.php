<?php if(count($service_nb)){ ?>
<section id="service-main">	
	<div class="maxwidth">
		<div class="title-service text-center">
			<img src="assets/images/title-dichvu.png" alt="icon dịch vụ">
		</div>
		<div class="list-service">
			<?php foreach($service_nb as $k => $v) { ?>
				<a class="service_home-normal text-decoration-none w-clear" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>">
					<div class="box-in relative">
						<p class="pic-service_home-normal"><img onerror="this.src='<?=THUMBS?>/135x125x1/assets/images/noimage.png';" src="<?=THUMBS?>/135x125x2/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"></p>
						<div class="info-service_home-normal">
							<h3 class="name-service_home text-split">
								<?=($k<3) ? ' <span>'.($k+1).'.</span>' : '';?><?=$v['ten'.$lang]?><?=($k>2) ? '<span>.'.($k+1).'</span> ' : '';?>
							</h3>
							<p class="desc-service_home text-split"><?=$v['mota'.$lang]?></p>
						</div>
					</div>
				</a>
			<?php } ?>
			<div class="banner-dichvu">
				<img onerror="this.src='<?=THUMBS?>/218x218x2/assets/images/noimage.png';" src="<?=THUMBS?>/218x218x2/<?=UPLOAD_PHOTO_L.$bannerdv['photo']?>"/>
			</div>
		</div>
	</div>
</section>
<?php } ?>