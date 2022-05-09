<div class="maxwidth">
    <div class="content-main w-clear">
        <div class="title-main"><h2><?=(@$title_cat!='')?$title_cat:@$title_crumb?></h2></div>
        <div class="row">
            <?php if(isset($video) && count($video) > 0) { for($i=0;$i<count($video);$i++) { ?>
                <div class="col-md-3 col-sm-6 col-6">
                    <a class="video text-decoration-none" data-fancybox="video" data-src="<?=$video[$i]['link_video']?>" title="<?=$video[$i]['ten'.$lang]?>">
                        <p class="pic-video scale-img"><img onerror="this.src='<?=THUMBS?>/480x360x2/assets/images/noimage.png';" src="https://img.youtube.com/vi/<?=$func->getYoutube($video[$i]['link_video'])?>/0.jpg" alt="<?=$video[$i]['ten'.$lang]?>"/></p>
                        <h3 class="name-video text-split"><?=$video[$i]['ten'.$lang]?></h3>
                    </a>
                </div>
            <?php } } else { ?>
                <div class="col-md-12">
                    <div class="alert alert-warning" role="alert">
                        <strong><?=khongtimthayketqua?></strong>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="clear"></div>
        <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
    </div>
</div>