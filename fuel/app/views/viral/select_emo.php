<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<title>PICCHAT</title>
    <link rel="shortcut icon" href="assets/img/anl41bnf3fqyetffnwvu.png">
    <link rel="stylesheet" media="screen and (min-width:1024px)" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="assets/css/medium.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Amatic SC|open sans|Covered By Your Grace|MV Boli">
    <link href='http://fonts.googleapis.com/css?family=Amatic+SC:700' rel='stylesheet' type='text/css' />
    <?php echo Asset::js('jquery-1.11.0.min.js'); ?>
    <?php echo Asset::js('jquery.bpopup-0.9.4.min.js'); ?>
    <?php echo Asset::js('jquery.easing.1.3.js'); ?>
</head>
<script type="text/javascript">
    $(function(){
        $('#dialog').bPopup();
        $("#bt_dialog").on("click",function(){
            parent.document.location.href='starttime';
        });
        $("#close_dialog").on("click",function(){
            $('#dialog').bPopup().close();
        });
    });
</script>
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
                <img src="assets/img/lockphoto-bgr.png" style="width:100%;height:100%;" />
                <span class="text_content1" > Oops!</span>
                <span class="text_content2">It's Locked</span>
            </div>
            <div id="content_right">
                <div class="time">
                    <div class="downclock">
                        <span id="time_num"></span>
                    </div>
                    <h1 style="color:white;" align="center">What do you think?</h1>
                </div>
                <div class="emotions">
                    <div class="head_emo text_white">
                        Select an Emotion
                    </div>
                    <div class="body_emo">
                        <div class="emo1">
                            <img class="e_img" src="assets/img/lovely.png" width="100%" height="80%" />
                            <a href="choose_emo">
                                <div class="bt_select">
                                    <span class="text_white">SELECT</span>
                                </div>
                            </a>
                        </div>
                        <div class="emo2">
                            <img class="e_img" src="assets/img/awesome.png" width="100%" height="80%" />
                            <a href="choose_emo">
                                <div class="bt_select">
                                    <span class="text_white">SELECT</span>
                                </div>
                            </a>
                        </div>
                        <div class="emo3">
                            <img class="e_img" src="assets/img/nocomment.png" width="100%" height="80%" />
                            <a href="choose_emo">
                                <div class="bt_select">
                                    <span class="text_white">SELECT</span>
                                </div>
                            </a>
                        </div>
                        <div class="emo4">
                            <img class="e_img" src="assets/img/nocomment.png" width="100%" height="80%" />
                            <a href="choose_emo">
                                <div class="bt_select">
                                    <span class="text_white">SELECT</span>
                                </div>
                            </a>
                        </div>
                        <div class="emo5">
                            <img class="e_img" src="assets/img/nocomment.png" width="100%" height="80%" />
                            <a href="choose_emo"><div class="bt_select">
                                    <span class="text_white">SELECT</span>
                                </div></a>
                        </div>
                    </div>

                </div>
                <div id="dialog" >
                    <img src="assets/img/delete.png" id="close_dialog" style="position:absolute;height:30px;width:30px;right:-10px;top:-10px;">
                    <div class="head_dialog">
                        <span class="text_white text_font" style="margin-left: 190px;font-size: 25px;font-weight: bold;" >How PicChat Works</span>
                    </div>
                    <div class="content_dialog">
                        <img src="assets/img/bgr-clock.png" height="100%" width="100%" style="position: absolute;" />
                        <div class="text_conten_dialog">
                            <br/>
                            <span  class=" font_text ">You will have <span style="font-size: 35px;">10</span> seconds to view</span><br/>
                            <span   class=" font_text ">the photo and listen to the</span><br/>
                            <span   class=" font_text ">voice message (If attached)</span><br/>
                            <span   class=" font_text ">Turn your sound <u>on</u> and get ready!</span></br/>
                        </div>
                       <input id="bt_dialog" class="text_font" type="button" value="OK, I'M READY" />
                        <span  class=" font_text"  style="margin-top:220px;margin-left: 50px; position: absolute;font-size: 14px; text-align: center;width: 390px;" >*When the  time  is up, you will not be able to send a sticker any more</span>
                    </div>
                    <div class="bottom_dialog">
                        <div class="logo_pic">
                            <img src="assets/img/logo.png" alt="picchat" class="img_pic_dialog">
                        </div>
                        <div class="text_dialog_bottom">
                            <span class="text_white text_font_open "><strong>PicChat</strong> gives you a new, exciting</span>
                            <span class="text_white text_font_open">experience to share your special </span>
                            <span class="text_white text_font_open">moments with your close friends.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>
</html>