<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <title>PICCHAT</title>
    <link rel="shortcut icon" href="assets/img/anl41bnf3fqyetffnwvu.png">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Amatic SC|open sans|Covered By Your Grace|MV Boli">
    <link rel="stylesheet" media="screen and (min-width:1024px)" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="assets/css/medium.css">
    <link href='http://fonts.googleapis.com/css?family=Amatic+SC:700' rel='stylesheet' type='text/css' />
    <?php echo Asset::js('jquery-1.11.0.min.js'); ?>
</head>
<script type="text/javascript">
</script>
<body>
<body >
    <div id="container">
        <div id="top">
            <a href="http:\\picchat.co" title="picchat.co">
                <div class="logo">
                    <img src="assets/img/logo.png" class="img_logo" />
                </div>
            </a>
        <span class="text_logo" style="font-family: Covered By Your Grace">
            Chat with photo. Be closer
        </span>
        </div>
        <div id="content">
            <div id="content_left">
                <img src="<?php echo 'http://d3ha88olujhdnd.cloudfront.net/message_photo/'.$image ?>" class="hide_image" />
                <img src="assets/img/time'up.png" class="img_timeup" />
                <span class="text_timeup1" >Time's Up.</span>
                <span class="text_timeup2">Download the  PicChat app to view this photo and reply!</span>
            </div>
            <div id="content_right">
                <div class="text_right">
                    <br/>
                    <span class="text_white text_timeup3">Oh! Time Is Up! No  Sticker Sent</span>
                    <span class="text_white text_timeup4">Send A Reply!</span><br/>
                </div>
                <div class="mid_timeup">
                    <span class="text_white font_other" >You can send a photo message back by</span><br/>
                    <span class="text_white font_other">downloading our PicChat app.</span><br/>
                    <span class="text_white font_other" ><b>PicChat</b> gives you a new, exciting experience</span><br/>
                    <span class="text_white font_other" >to share your special moments with your </span><br/>
                    <span class="text_white font_other" >close friends and family.</span>
                </div>
                <div class="download_app" style="margin-top:-10px;">
                    <div id="text_down">
                        <span class="text_download"  >Download Our Free App</span>
                    </div>
                    <div id="app_store" style="margin-top:10%;">
                        <a href="https://itunes.apple.com/au/app/picchat-visual-chat/id796843586"><img id="app_store_img" src="assets/img/avaiableonappstore.png" /></a>
                        <a href="https://play.google.com/store/apps/details?id=is.cinnamon.picchat&hl=vi"><img id="play_store_img" src="assets/img/getitonggoleplay.png" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="medium">
        <div id="m_top">
            <div class="m_top_logo">
                <img src="assets/img/logo.png" class="m_top_logo_1" />
            </div>
            <div class="m_top_text">
                <span class="m_top_text_1 font_cover" > Chat with photo. Be closer </span>
            </div>
        </div>
        <div id="m_content">
            <div class="m_timeup_text">
                <span class="m_text1_1 text_white">Oh, Time is Up! No Sticker Sent :(</span><br/>
                <span class="m_text_1_2 text_white font_amatic">Send a Reply!</span>
            </div>
            <div class="m_text_timeup_2 font_open text_white">
                   <span class="m_text_timeup_2_1"> PicChat  gives you a new, exciting</span><br/>
                <span class="m_text_timeup_2_1">experience to share your special moments</span><br/>
                <span class="m_text_timeup_2_1">with your close friends and family.</span>
            </div>
            <a href="download" style="text-decoration: none;">
                <div class="m_time_bt">
                    <img src="assets/img/dowwnload-freeapp-A4.png" class="m_time_bt_1" />
                    <div class="m_time_bt_text font_open">
                        <span class="m_time_bt_text_1 text_white ">Download the</span><br/>
                        <span class="m_time_bt_text_2 text_white ">Free App</span>
                    </div>
                </div>
            </a>
            <div class="m_image_timeup">
                <div class="m_image_timeup1">
                    <span class="m_text_timeup_1">Time's Up.</span>
                    <img src="assets/img/time'up.png" alt="" class="m_image_timeup11" />
                    <img  class="m_image_timeup12" src="<?php echo 'http://d3ha88olujhdnd.cloudfront.net/message_photo/'.$image ?>" />
                    <span class="m_image_timeup_bottom">Download the PicChat app to View this photo & reply!</span>
                </div>
            </div>
        </div>
    </div>

</body>
</html>