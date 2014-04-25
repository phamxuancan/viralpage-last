<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<title>PICCHAT</title>
<link rel="shortcut icon" href="assets/img/anl41bnf3fqyetffnwvu.png">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Amatic SC|open sans|Covered By Your Grace|MV Boli">
<link href='http://fonts.googleapis.com/css?family=Amatic+SC:700' rel='stylesheet' type='text/css' />
<?php echo Asset::css('style.css'); ?>
<?php echo Asset::js('jquery-1.11.0.min.js'); ?>
</head>
<script type="text/javascript">
	$(document).ready(function(){
		var num=10;
		var display=$("#time_num");
		
		 setInterval(function () {
             if(num==10){
                display.html("<span style='margin-left:5px;top:5px;font-family: open sans;font-size:60px;font-weight:boil;color:white; text-align: center; position: absolute;'>"+num+"</span>");
             }
             else{
             display.html("<span style='margin-left:22px;font-size:60px;top:7px;font-family: open sans;font-weight:boil;color:white; text-align: center;position: absolute;'>"+num+"</span>");
             }
             if(num<=3){
                 $(".red_clock").show();
                 $(".blue_clock").hide();
             }
			num=num-1;
			if(num == 0){
				parent.document.location.href='timeup';
                //alert("timeup");
			}
			else{
			
			}
        }, 1000);
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
            <div id="content_time">

                    <img src="<?php echo 'http://d3ha88olujhdnd.cloudfront.net/message_photo/'.$image ?>" style="width:100%;height:500px;" />

            </div>
            <div id="content_right">
                <div class="time">

                    <div class="downclock">
                        <img src="assets/img/clock3-1.png" class="red_clock" />
                        <img src="assets/img/clock10-3.png" class="blue_clock" />
                        <span id="time_num"></span>
                    </div><br/>
                    <span  style="font-family: Amatic SC; margin-left: 45px; color: #ffffff;font-size: 34pt;width:330px;">What Do You Think ?</span>
                </div>
                <div class="emotions">
                    <div class="head_emo text_white">
                        Select an Emotion
                    </div>
                    <div class="body_emo">
                        <div class="emo1" >
                            <img class="e_img" src="assets/img/lovely.png" width="125%" height="80%" />
                            <a href="choose_emo?select=lovely">
                                <div class="bt_select">
                                    <span class="text_white" style="width: 72px;">LOVELY</span>
                                </div>
                            </a>
                        </div>
                        <div class="emo2">
                            <img class="e_img" src="assets/img/awesome.png" width="125%" height="80%" />
                            <a href="choose_emo?select=awesome">
                                <div class="bt_select">
                                    <span class="text_white" style="width: 72px;">AWESOME</span>
                                </div>
                            </a>
                        </div>
                        <div class="emo3">
                            <img class="e_img" src="assets/img/nocomment.png" width="125%" height="80%" />
                            <a href="choose_emo?select=nocomment">
                                <div class="bt_select">
                                    <span class="text_white" style="width: 72px;">NO COMMENT</span>
                                </div>
                            </a>
                        </div>
                        <div class="emo4">
                            <img class="e_img" src="assets/img/sorry.png" width="125%" height="80%" />
                            <a href="choose_emo?select=sorrry">
                                <div class="bt_select">
                                    <span class="text_white" style="width: 72px;">SORRY</span>
                                </div>
                            </a>
                        </div>
                        <div class="emo5">
                            <img class="e_img" src="assets/img/angry.png" width="125%" height="80%" />
                            <a href="choose_emo?select=angry"><div class="bt_select">
                                    <span class="text_white" style="width: 72px;">ANGRY</span>
                                </div></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>