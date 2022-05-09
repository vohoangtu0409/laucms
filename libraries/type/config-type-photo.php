<?php
    /* Background */
    // $nametype = "background";
    // $config['photo']['photo_static'][$nametype]['title_main'] = "Background";
    // $config['photo']['photo_static'][$nametype]['images'] = true;
    // $config['photo']['photo_static'][$nametype]['background'] = true;
    // $config['photo']['photo_static'][$nametype]['width'] = 900;
    // $config['photo']['photo_static'][$nametype]['height'] = 300;
    // $config['photo']['photo_static'][$nametype]['thumb'] = '900x300x1';
    // $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Logo */
    $nametype = "logo";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Logo";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 90;
    $config['photo']['photo_static'][$nametype]['height'] = 80;
    $config['photo']['photo_static'][$nametype]['thumb'] = '90x80x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Banner */
    $nametype = "banner";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 485;
    $config['photo']['photo_static'][$nametype]['height'] = 78;
    $config['photo']['photo_static'][$nametype]['thumb'] = '485x78x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Favicon */
    $nametype = "favicon";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Favicon";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 48;
    $config['photo']['photo_static'][$nametype]['height'] = 48;
    $config['photo']['photo_static'][$nametype]['thumb'] = '48x48x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Watermark */
    $nametype = "watermark";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Watermark";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['watermark'] = true;
    $config['photo']['photo_static'][$nametype]['watermark-advanced'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 50;
    $config['photo']['photo_static'][$nametype]['height'] = 50;
    $config['photo']['photo_static'][$nametype]['thumb'] = '50x50x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.png|.PNG|.Png';

    /* Watermark tin tức */
    // $nametype = "watermark-news";
    // $config['photo']['photo_static'][$nametype]['title_main'] = "Watermark tin tức";
    // $config['photo']['photo_static'][$nametype]['images'] = true;
    // $config['photo']['photo_static'][$nametype]['watermark'] = true;
    // $config['photo']['photo_static'][$nametype]['watermark-advanced'] = true;
    // $config['photo']['photo_static'][$nametype]['width'] = 50;
    // $config['photo']['photo_static'][$nametype]['height'] = 50;
    // $config['photo']['photo_static'][$nametype]['thumb'] = '50x50x1';
    // $config['photo']['photo_static'][$nametype]['img_type'] = '.png|.PNG|.Png';

    /* Video */
    // $nametype = "video";
    // $config['photo']['photo_static'][$nametype]['title_main'] = "Video";
    // $config['photo']['photo_static'][$nametype]['images'] = false;
    // $config['photo']['photo_static'][$nametype]['video'] = true;
    // $config['photo']['photo_static'][$nametype]['tieude'] = true;
    // $config['photo']['photo_static'][$nametype]['mota'] = false;
    // $config['photo']['photo_static'][$nametype]['noidung'] = false;
    // $config['photo']['photo_static'][$nametype]['width'] = 250;
    // $config['photo']['photo_static'][$nametype]['height'] = 150;
    // $config['photo']['photo_static'][$nametype]['thumb'] = '250x150x1';
    // $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Popup */
    $nametype = "popup";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Popup";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['tieude'] = true;
    $config['photo']['photo_static'][$nametype]['link'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 800;
    $config['photo']['photo_static'][$nametype]['height'] = 530;
    $config['photo']['photo_static'][$nametype]['thumb'] = '800x530x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    // Quảng cáo
    $nametype = "quang-cao";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Quảng cáo";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['link'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 1366;
    $config['photo']['photo_static'][$nametype]['height'] = 230;
    $config['photo']['photo_static'][$nametype]['thumb'] = '1366x230x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Slideshow */
    $nametype = "slide";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Slideshow";
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['tieude_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 1366;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 460;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '200x100x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Slideshow product */
    // $nametype = "slide-product";
    // $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Slideshow sản phẩm";
    // $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    // $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    // $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    // $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    // $config['photo']['man_photo'][$nametype]['tieude_photo'] = true;
    // $config['photo']['man_photo'][$nametype]['width_photo'] = 1366;
    // $config['photo']['man_photo'][$nametype]['height_photo'] = 600;
    // $config['photo']['man_photo'][$nametype]['thumb_photo'] = '200x100x1';
    // $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Mạng xã hội top*/
    $nametype = "mangxahoitop";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Mạng xã hội top";
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 25;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 22;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '25x22x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Mạng xã hội */
    $nametype = "mangxahoifooter";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Mạng xã hội footer";
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 40;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 40;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '40x40x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Video */ 
    $nametype = "video";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Video";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array();
    $config['photo']['man_photo'][$nametype]['number_photo'] = 1;
    $config['photo']['man_photo'][$nametype]['video_photo'] = true;
    $config['photo']['man_photo'][$nametype]['tieude_photo'] = true;
    $config['photo']['man_photo'][$nametype]['mota_photo'] = false;
    $config['photo']['man_photo'][$nametype]['images_photo'] = false;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = false;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 525;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 340;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '200x100x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';


    $nametype = "partner";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Đối tác";
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['tieude_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 180;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 90;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '180x90x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
?>