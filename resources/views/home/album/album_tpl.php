<div class="maxwidth">
    <div class="content-main w-clear">
    <div class="title-main"><h2><?=$title_crumb?></h2></div>

        <?php if(count($product)>0) { ?> 
        <div class="row">
        <?php for($i=0;$i<count($product);$i++) { ?>
            <div class="col-md-3 col-sm-6 col-6">
                <a class="album text-decoration-none" href="<?=$product[$i][$sluglang]?>" title="<?=$product[$i]['ten'.$lang]?>">
                    <p class="pic-album scale-img"><img onerror="this.src='<?=THUMBS?>/480x360x2/assets/images/noimage.png';" src="<?=THUMBS?>/480x360x1/<?=UPLOAD_PRODUCT_L.$product[$i]['photo']?>" alt="<?=$product[$i]['ten'.$lang]?>"/></p>
                    <h3 class="name-album text-split"><?=$product[$i]['ten'.$lang]?></h3>
                </a>
            </div>
        <?php } ?> 
        </div>
        <?php } else { ?>
            <div class="alert alert-warning" role="alert">
                <strong><?=khongtimthayketqua?></strong>
            </div>
        <?php } ?>
        <div class="clear"></div>
        <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
    </div>
</div>