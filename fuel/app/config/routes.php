<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	"viral_page"=>"viral/index",
	"select_emo"=>"viral/emo",
    "m_select_emo"=>"viral/memo",
	"facebook"=>"viral/facebook",
    "m_facebook"=>"viral/mfacebook",
	"starttime"=>"viral/starttime",
	"timeup"=>"viral/timeup",
	"choose_emo"=>"viral/chooseemo",
    "dont_permission"=>"viral/permission",
    "m_dont_permission"=>"viral/mpermission",
    "download"=>"viral/download",
);