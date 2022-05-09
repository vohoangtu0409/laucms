<section id="video-news">
	<div class="maxwidth">
		<div class="row">
			<div class="col-md-7 col-sm-12 col-12">
				<p class="title-intro"><span>TIN TỨC & SỰ KIỆN</span></p>
				<div class="newshome-intro w-clear">
					<div class="row">
						<div class="col-md-6 col-12">
							<a class="newshome-best text-decoration-none" href="<?=$newsnb[0][$sluglang]?>" title="<?=$newsnb[0]['ten'.$lang]?>">
								<p class="pic-newshome-best scale-img"><img class="w-100" onerror="this.src='<?=THUMBS?>/370x200x2/assets/images/noimage.png';" src="<?=WATERMARK?>/news/370x200x1/<?=UPLOAD_NEWS_L.$newsnb[0]['photo']?>" alt="<?=$newsnb[0]['ten'.$lang]?>"></p>
								<h3 class="name-newshome text-split"><?=$newsnb[0]['ten'.$lang]?></h3>
								<p class="desc-newshome text-split"><?=$newsnb[0]['mota'.$lang]?></p>
								<span class="view-newshome transition">Xem chi tiết</span>
							</a>
						</div>
						<div class="col-md-6 col-12">
							<div class="newshome-scroll">
								<ul>
									<?php foreach($newsnb as $v) { ?>
										<li>
											<a class="news text-decoration-none w-clear" href="<?=$v['tenkhongdauvi']?>" title="<?=$v['ten'.$lang]?>">
									            <p class="pic-news scale-img"><img onerror="this.src='<?=THUMBS?>/125x110x1/assets/images/noimage.png';" src="<?=THUMBS?>/125x110x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"></p>
									            <div class="info-news">
									                <h3 class="name-news"><?=$v['ten'.$lang]?></h3>
									                <div class="desc-news text-split"><?=$func->catchuoi($v['mota'.$lang],70)?></div>
									            </div>
									        </a>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5 col-sm-12 col-12">
				<p class="title-intro"><span>Video clip</span></p>
				<div class="videohome-intro">
					<?=$addons->setAddons('video-fotorama', 'video-fotorama', 10);?>
				</div>
			</div>
		</div>
	</div>
</section>