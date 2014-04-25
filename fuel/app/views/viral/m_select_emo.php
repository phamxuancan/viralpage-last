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
    $(document).ready(function(){
        $(".m_nocoment_big").hide();
        $(".m_awe_big").hide();
        $(".m_angry_big").hide();
        $(".m_love_big").hide();
        $(".m_sorry_big").hide();
        $(".content_emotion").hide();
        $('#dialog').bPopup();
        $("#close_dialog").on("click",function(){
            $('#dialog').bPopup().close();
        });
        $("#bt_dialog").on("click",function(){
            $('#dialog').bPopup().close();
            var num=9;
            var display=$(".time_num");
            setInterval(function () {
                display.html("<span style='position:absolute;float:right;right:35px; '>"+num+"<span>");
                if(num<=3){
                    $(".m_content_select_time_11").hide();
                    $(".m_content_select_time_12").show();
                }
                num=num-1;
                if(num == -1){
                    parent.document.location.href='timeup';
                }
                else{

                }
            }, 1000);
        });

        $(".m_click").on("click",function(){
            $(".content_emotion").show();
        });
        $(".m_nocoment").on("click",function(){
            $(".m_nocoment").hide();
            $(".m_nocoment_big").show();
            parent.document.location.href='choose_emo?select=nocomment';
        });
        $(".m_awe").on("click",function(){
            $(".m_awe").hide();
            $(".m_awe_big").show();
            parent.document.location.href='choose_emo?select=awesome';
        });
        $(".m_angry").on("click",function(){
            $(".m_angry").hide();
            $(".m_angry_big").show();
            parent.document.location.href='choose_emo?select=angry';
        });
        $(".m_love").on("click",function(){
            $(".m_love").hide();
            $(".m_love_big").show();
            parent.document.location.href='choose_emo?select=lovely';
        });
        $(".m_sorry").on("click",function(){
            $(".m_sorry").hide();
            $(".m_sorry_big").show();
            parent.document.location.href='choose_emo?select=sorry';
        });

    });

</script>
<body>
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
        </div>
        <div class="m_content_select">
            <div class="m_content_select_text">
                <span class="m_content_select_text_1 font_cover text_white">What do you think?</span>
                <div class="m_click">
                    <img src="assets/img/addemotion.png" class="m_content_select_image " />
                    <span class="m_content_select_text_2 text_white font_open">Add Emotion</span>
                </div>
            </div>
            <div class="m_content_select_time">
                <div class="m_content_select_time_1">
                    <img src="assets/img/mclock10-3.png" class="m_content_select_time_11"/>
                    <img src="assets/img/mclock3-1.png" class="m_content_select_time_12"/>
                    <span class="time_num font_open">10</span>
                </div>
            </div>
        </div>
        <div class="content_emotion">
            <img style="width: 100%;height: 100%;" src="assets/img/choose-emotion-bgr.png">
            <table class="m_table_emo" >
                <tr>
                    <td >
                        <span style="color:#ffffff;font-family:Open Sans;width: 120px;float: left;position: absolute;left:30px;margin-top: 10px;font-size: 20px;font-weight:bold;">Select one emotion</span>
                        <img src="assets/img/select-emotion.png" alt="" style="float: left;width: 80%;">
                    </td>
                    <td>
                        <img class="m_nocoment" src="assets/img/nocomment.png" />
                        <img class="m_nocoment_big" style="width: 100%;height: 100%;" src="assets/img/nocomment-big.png" />
                    </td>
                </tr>
                <tr>
                    <td >
                        <img class="m_awe" src="assets/img/awesome.png" />
                        <img class="m_awe_big" style="width: 100%;height: 100%;" src="assets/img/awesome-big.png" />
                    </td>
                    <td>
                        <img class="m_angry" src="assets/img/angry.png" />
                        <img class="m_angry_big" style="width: 100%;height: 100%;" src="assets/img/angry-big.png" />
                    </td>
                </tr>
                <tr>
                    <td >
                        <img class="m_love" src="assets/img/lovely.png" />
                        <img class="m_love_big" style="width: 100%;height: 100%;" src="assets/img/lovely-big.png" />
                    </td>
                    <td>
                        <img class="m_sorry" src="assets/img/sorry.png" />
                        <img class="m_sorry_big" style="width: 100%;height: 100%;" src="assets/img/sorry-big.png" />
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div id="dialog" >
        <img src="assets/img/delete.png" id="close_dialog" style="position:absolute;height:80px;width:80px;right:-30px;top:-30px;">
        <div class="head_dialog">
            <span class="text_white font_amatic" style="font-size: 60px;font-weight: bold;" >How PicChat Works</span>
        </div>
        <div class="content_dialog">
            <img src="assets/img/bgr-clock-2.png" height="100%" width="100%" style="position: absolute;" />
            <div class="text_conten_dialog1 font_cover">
                <span  class=" font_text ">You will have <span style="font-size: 85px;">10</span> seconds to view</span><br/>
                <span   class=" font_text ">the photo and listen to the</span><br/>
                <span   class=" font_text ">voice message (If attached)</span><br/>
                <span   class=" font_text ">Turn your sound <u>on</u> and get ready!</span></br/>
            </div>
            <input id="bt_dialog" class="font_amatic" type="button" value="OK, I'M READY" />
            <span  class="font_cover"  style="margin-top:650px;margin-left: 120px; position: absolute;font-size: 40px; text-align: center;width: 550px;" >*When the  time  is up, you will not be able to send a sticker any more</span>
        </div>
    </div>
</div>
</body>