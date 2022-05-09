<div class="phone_mobi">
    <ul>
        <li><a class="blink_me" href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>"><i class="fas fa-phone-alt"></i>Gọi điện</a></li>
        <li><a href="<?=$optsetting['toado']?>"><i class="fas fa-map-marker-alt"></i>Chỉ đường</a></li>
        <li><a href="<?=$optsetting['fanpage']?>"><i class="fab fa-facebook-messenger"></i>Facebook</a></li>
        <li><a href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['zalo']);?>"><i class="fas fa-comment-alt"></i>Zalo</a></li>
    </ul>
</div>