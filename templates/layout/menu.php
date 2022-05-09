<div class="menu hidden-lg hidden-md hidden-sm hidden-xs">
    <div class="maxwidth">
       <ul>
            <li><a class="transition text-menu <?php if($com=='' || $com=='index') echo 'active'; ?>" href="trang-chu" title="Trang chủ">Trang chủ</a></li>
            <li><a class="transition text-menu <?php if($com=='gioi-thieu') echo 'active'; ?>" href="gioi-thieu" title="<?=gioithieu?>"><?=gioithieu?></a></li>
            <li>
                <a class="transition text-menu <?php if($com=='san-pham') echo 'active'; ?>" href="san-pham" title="San phẩm">Sản phẩm</a>
                <?php if(count($splistmenu)) { ?>
                    <ul>
                        <?php for($i=0;$i<count($splistmenu); $i++) {
                            $spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_cat where id_list = ? and hienthi > 0 order by stt,id desc",array($splistmenu[$i]['id'])); ?>
                            <li>
                                <a class="transition" title="<?=$splistmenu[$i]['ten'.$lang]?>" href="<?=$splistmenu[$i][$sluglang]?>"><?=$splistmenu[$i]['ten'.$lang]?></a>
                                <?php if(count($spcatmenu)>0) { ?>
                                    <ul>
                                        <?php for($j=0;$j<count($spcatmenu);$j++) {
                                            $spitemmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_item where id_cat = ? and hienthi > 0 order by stt,id desc",array($spcatmenu[$j]['id'])); ?>
                                            <li>
                                                <a class="transition" title="<?=$spcatmenu[$j]['ten'.$lang]?>" href="<?=$spcatmenu[$j][$sluglang]?>"><?=$spcatmenu[$j]['ten'.$lang]?></a>
                                                <?php if(count($spitemmenu)) { ?>
                                                    <ul>
                                                        <?php for($u=0;$u<count($spitemmenu);$u++) {
                                                            $spsubmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_sub where id_item = ? and hienthi > 0 order by stt,id desc",array($spitemmenu[$u]['id'])); ?>
                                                            <li>
                                                                <a class="transition" title="<?=$spitemmenu[$u]['ten'.$lang]?>" href="<?=$spitemmenu[$u][$sluglang]?>"><?=$spitemmenu[$u]['ten'.$lang]?></a>
                                                                <?php if(count($spsubmenu)) { ?>
                                                                    <ul>
                                                                        <?php for($s=0;$s<count($spsubmenu);$s++) { ?>
                                                                            <li>
                                                                                <a class="transition" title="<?=$spsubmenu[$s]['ten'.$lang]?>" href="<?=$spsubmenu[$s][$sluglang]?>"><?=$spsubmenu[$s]['ten'.$lang]?></a>
                                                                            </li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                <?php } ?>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                <?php } ?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
            <li><a class="transition text-menu <?php if($com=='dich-vu') echo 'active'; ?>" href="dich-vu" title="Dịch vụ">Dịch vụ</a></li>
            <li>
                <a class="transition text-menu <?php if($com=='tin-tuc') echo 'active'; ?>" href="tin-tuc" title="Tin tức">Tin tức</a>
            </li>
            <li><a class="transition text-menu <?php if($com=='lien-he') echo 'active'; ?>" href="lien-he" title="<?=lienhe?>"><?=lienhe?></a></li>
            <li>
                <div class="search w-clear">
                    <input type="text" id="keyword" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword');"/>
                    <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
                </div>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
</div>