<section id="khonggianquan">
	<div class="maxwidth">
		<div class="title-main text-white">
			<h2>Không Gian Quán</h2>
			<p><?=$slogan_pro['ten'.$lang]?></p>
		</div>
		<?php if(count($album_index) > 0){ ?>
		<div class="row">
			<div class="col-md-3 col-sm-3">
				<a class="album text-decoration-none" href="<?=$album_index[0]['tenkhongdauvi']?>" title="<?=$album_index[0]['ten'.$lang]?>">
		            <p class="pic-album scale-img"><img onerror="this.src='<?=THUMBS?>/275x190x1/assets/images/noimage.png';" src="<?=THUMBS?>/275x190x1/<?=UPLOAD_PRODUCT_L.$album_index[0]['photo']?>" alt="<?=$album_index[0]['ten'.$lang]?>"/></p>
		        </a>
			    <a class="album text-decoration-none" href="<?=$album_index[1]['tenkhongdauvi']?>" title="<?=$album_index[1]['ten'.$lang]?>">
		            <p class="pic-album scale-img"><img onerror="this.src='<?=THUMBS?>/275x190x1/assets/images/noimage.png';" src="<?=THUMBS?>/275x190x1/<?=UPLOAD_PRODUCT_L.$album_index[1]['photo']?>" alt="<?=$album_index[1]['ten'.$lang]?>"/></p>
		        </a>
			</div>
			<div class="col-md-6 col-sm-6">
			    <a class="album text-decoration-none" href="<?=$album_index[2]['tenkhongdauvi']?>" title="<?=$album_index[2]['ten'.$lang]?>">
		            <p class="pic-album scale-img"><img onerror="this.src='<?=THUMBS?>/570x403x1/assets/images/noimage.png';" src="<?=THUMBS?>/570x403x1/<?=UPLOAD_PRODUCT_L.$album_index[2]['photo']?>" alt="<?=$album_index[2]['ten'.$lang]?>"/></p>
		        </a>
			</div>
			<div class="col-md-3 col-sm-3">
			    <a class="album text-decoration-none" href="<?=$album_index[3]['tenkhongdauvi']?>" title="<?=$album_index[3]['ten'.$lang]?>">
		            <p class="pic-album scale-img"><img onerror="this.src='<?=THUMBS?>/275x190x1/assets/images/noimage.png';" src="<?=THUMBS?>/275x190x1/<?=UPLOAD_PRODUCT_L.$album_index[3]['photo']?>" alt="<?=$album_index[3]['ten'.$lang]?>"/></p>
		        </a>
			    <a class="album text-decoration-none" href="<?=$album_index[4]['tenkhongdauvi']?>" title="<?=$album_index[4]['ten'.$lang]?>">
		            <p class="pic-album scale-img"><img onerror="this.src='<?=THUMBS?>/275x190x1/assets/images/noimage.png';" src="<?=THUMBS?>/275x190x1/<?=UPLOAD_PRODUCT_L.$album_index[4]['photo']?>" alt="<?=$album_index[4]['ten'.$lang]?>"/></p>
		        </a>
			</div>
		</div>
		<?php } ?>
	</div>
</section>