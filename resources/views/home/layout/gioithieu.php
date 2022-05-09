<section id="gioithieu">
	<div class="maxwidth">
		<div class="row">
			<div class="col-md-7 col-sm-5">
				<div class="title-about">
					<span><?=(isset($about_index['ten'.$lang]) && $about_index['ten'.$lang] != '') ? $about_index['ten'.$lang] : ''?></span>
				</div>
				<div class="desc-about">
					<?=(isset($about_index['mota'.$lang]) && $about_index['mota'.$lang] != '') ? htmlspecialchars_decode($about_index['mota'.$lang]) : ''?>
				</div>
				<div class="link-about">
					<a href="gioi-thieu">Xem thêm</a>
				</div>
			</div>
			<div class="col-md-5 col-sm-7">
				<img class="transition w-100" alt="<?=$about_index['ten'.$lang]?>" src="<?=THUMBS?>/540x310x2/<?=UPLOAD_NEWS_L.$about_index['photo']?>">
			</div>
		</div>
	</div>
</section>