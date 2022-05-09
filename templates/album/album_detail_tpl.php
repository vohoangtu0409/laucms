<div class="maxwidth">
	<div class="content-main album-gallery w-clear">
	<div class="title-main"><h2><?=$row_detail['ten'.$lang]?></h2></div>
	    <?php if(count($hinhanhsp)>0) { ?> 
	    <div class="row">
	    <?php for($i=0;$i<count($hinhanhsp);$i++) { ?>
	    	<div class="col-md-3 col-sm-6 col-6">
		        <a class="album text-decoration-none" rel="album-<?=$row_detail['id']?>" href="<?=UPLOAD_PRODUCT_L.$hinhanhsp[$i]['photo']?>" title="<?=$row_detail['ten'.$lang]?>">
		            <p class="pic-album scale-img"><img onerror="this.src='<?=THUMBS?>/480x360x2/assets/images/noimage.png';" src="<?=THUMBS?>/480x360x1/<?=UPLOAD_PRODUCT_L.$hinhanhsp[$i]['photo']?>" alt="<?=$row_detail['ten'.$lang]?>"/></p>
		        </a>
		    </div>
	    <?php } ?> 
		</div>
		<?php } else { ?>
	        <div class="alert alert-warning" role="alert">
	            <strong><?=khongtimthayketqua?></strong>
	        </div>
	    <?php } ?>
	</div>
</div>