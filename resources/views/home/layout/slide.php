<?php if(count($slider)) { ?>
    <div class="slideshow">
        <p class="control-slideshow prev-slideshow transition"><i class="fas fa-chevron-left"></i></p>
        <div class="owl-carousel owl-theme owl-slideshow">
            <?php foreach($slider as $v) { ?>
                <div>
                    <a href="<?=$v['link']?>" target="_blank" title="<?=$v['ten'.$lang]?>"><img class="w-100" onerror="this.src='<?=THUMBS?>/1366x485x2/assets/images/noimage.png';" src="<?=THUMBS?>/1366x485x1/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>" title="<?=$v['ten'.$lang]?>"/></a>
                </div>
            <?php } ?>
        </div>
        <p class="control-slideshow next-slideshow transition"><i class="fas fa-chevron-right"></i></p>
    </div>
<?php } ?>