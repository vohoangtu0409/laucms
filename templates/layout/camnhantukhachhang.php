<section id="camnhantukhachhang">
	<div class="maxwidth">
		<div class="title-main">
			<h2><?=camnhantukhachhang?></h2>
			<p><?=$slogan['ten'.$lang]?></p>
		</div>
		<div class="row">
			<div class="col-lg-7 col-md-6">
				<div class="owl-carousel owl-theme owl-carousel_nhanxet">
					<?php foreach($nhanxet as $k => $v){ ?>
						<div class="feedback-items">
							<a>
								<div class="feedback-items_inline">
									<div class="feedback-items__circle">
										<div class="circle"></div>
										<div class="circle"></div>
										<div class="circle"></div>
										<div class="circle"></div>
										<div class="feedback-items-in">
											<div class="feedback-items__content">
												<div class="text-center"><img src="assets/images/ic-phay.png" alt="icon phẩy"></div>
												<?=$func->catchuoi($v['mota'.$lang],100)?>
											</div>
											<div class="feedback-items__name"><?=$v['ten'.$lang]?></div>
										</div>
									</div>
									<div class="feedback-items__img">
										<img onerror="this.src='<?=THUMBS?>/100x100x2/assets/images/noimage.png';" src="<?=THUMBS?>/100x100x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">
									</div>
								</div>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-5 col-md-6">
				<?=$addons->setAddons('video-fotorama', 'video-fotorama', 10); ?>
			</div>
		</div>
	</div>
</section>