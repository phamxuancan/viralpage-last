<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <title>PICCHAT</title>
    <link rel="shortcut icon" href="assets/img/anl41bnf3fqyetffnwvu.png">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Amatic SC|open sans|Covered By Your Grace|MV Boli">
    <link href='http://fonts.googleapis.com/css?family=Amatic+SC:700' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <?php echo Asset::js('jquery-1.11.0.min.js'); ?>
    <?php echo Asset::js('jquery.bpopup-0.9.4.min.js'); ?>
    <?php echo Asset::js('jquery.easing.1.3.js'); ?>
</head>
<script type="text/javascript">
    $(document).ready(function(){
        $("#bt_fb").click(function(){
            parent.document.location.href='facebook';
        });
        $("#m_content_bt_fb").click(function(){
            parent.document.location.href='m_facebook';
        });
        $('#dialog_permit').bPopup();
        $("#close_dialog").on("click",function(){
            $('#dialog_permit').bPopup().close();
        });
    });
</script>
<body>
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
            <img src="assets/img/lockphoto-bgr.png" style="width:101%;height:100%;top:0px;z-index:1;position: absolute;" />
            <span class="text_content1" > Oops!</span>
            <span class="text_content2"><span style="word-spacing: -20px;">It' s</span> Locked</span>
        </div>
        <div id="content_right">
            <div class="text_right">
                <br/>
                <span class="text_message1 text_font text_white">YOU'VE GOT A MESSAGE</span><br/>
                <span class="text_message2 text_font text_white">FROM <?php echo $username ."!" ; ?></span>
            </div>
            <div class="img_fb">
                <h3 top="" class="text_message3 text_white" >To see the photo message</h3>
                <a href="#" title="Login"><img id="bt_fb" src="assets/img/login-facebook.png" /></a><br>
                <span class="text_white text_message4"> OR </span>
            </div>
            <div class="download_app">
                <div id="text_down">
                    <span class="text_download" >Download Our Free App</span>
                </div>
                <div id="app_store">
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
        <div class="m_text_1">
            <span class="m_text1_1 text_white"> You have got a message from <?php echo $username ; ?></span>
        </div>
        <div class="m_content_image">

            <img  class="m_content_image_1" src="<?php echo 'http://d3ha88olujhdnd.cloudfront.net/message_photo/'.$image ?>" />
            <img class="m_content_image_2" src="assets/img/lockphoto-bgr.png"/>
            <div class="m_content_image_text">
                <span class="m_content_image_text_1 font_amatic">Oops!</span><br/>
                <span class="m_content_image_text_2 font_amatic">It's Locked</span>
            </div>
        </div>
        <div class="m_text_2">
            <span class="m_text_2_1 text_white font_open">To see the photo message, choose from below:</span>
        </div>
        <div class="m_content_bt">
            <div class="m_content_bt_fb">
                <img src="assets/img/facebook-button.png" alt="Login" class="m_content_bt_fb_1" />
                <div class="m_content_bt_fb_text">
                    <span class="m_content_bt_fb_text_1 text_white" > Login with</span><br/>
                    <span class="m_content_bt_fb_text_2 text_white">facebook</span>
                </div>
            </div>
            <a href="download" style="text-decoration: none;">
                <div class="m_content_bt_down">
                    <img src="assets/img/downloadappbutton.png" alt="Login" class="m_content_bt_down_1" />
                    <div class="m_content_bt_down_text">
                        <span class=" m_content_bt_down_text_1 text_white font_open" > Download the</span><br/>
                        <span class=" m_content_bt_down_text_2 text_white font_open">Free App</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<div id="dialog_permit">
    <div class="top_permit">
        <img src="assets/img/delete.png" id="close_dialog" style="position:absolute;height:30px;width:30px;right:-10px;top:-10px;">
        <div class="text_top_per">
            <span style="font-family: Amatic SC; font-size: 70pt;font-weight: bold;text-align: center;"> Ooops!</span><br/>
            <span style="font-family: Covered By Your Grace;font-size: 25pt" >You do not have permission to view this photo.</span>
        </div>
    </div>
    <div class="bottom_permit">
        <img src="assets/img/permit_img.png" alt="" width="500px" height="100%" />
        <div class="text_bottom_permit">
            <span   > <b>PicChat</b> gives you a new, exciting </span><br>
            <span  > experience to Share & Save daily moments with close friends in</span>
            <span >a quick, private way!</span>
        </div>
        <div class="download_permit">
            <a href="http:\\picchat.co" title="Home"> <h3 style="font-family:Amatic SC;font-size: 30pt;font-weight: bold;color: #ffffff;margin-top: 10px;">Download free app</h3>
        </div>
    </div>
</div>
</body>
</html>