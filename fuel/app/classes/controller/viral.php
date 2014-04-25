<?php
include("detect.php");
class Controller_Viral extends Controller{
    public function action_index(){
        $link=Input::get("link");
		$link = str_replace(' ','+', $link);
       // $link="eWNlD9Ml8mnOD4J22Y7Aay40lDDZ1W4f+n6pUEc/V/8SiJSYu7uR7YH7Emg8Af6w98W9tEB+e2x/Ly5Wr8TkY4gDwjOJwDCp1kN6/fK5qaapHDp4F5teYy3S6Kr7kEDR";
		//echo $link;
	   $name=$this::decode($link);
        $data=explode("_",$name);
        $num=count($data);
        $result=array("username"=>$data[0],"image"=>$data[1]);
        for($i=2;$i<$num;$i++){
            $facebookids[]=$data[$i];
        }
        Session::set('username', $data[0]);
        Session::set('image', $data[1]);
        Session::set('facebookids',$facebookids);
        return Response::forge(View::forge('viral/index',$result));

    }
    //action for mobile
    public function action_memo(){
        $data=array("image"=>Session::get("image"),"username"=>Session::get("username"));
        return Response::forge(View::forge('viral/m_select_emo',$data));
    }
    public function action_mfacebook(){
        $facebook = new Facebook(array(
            'appId'  => '198416923615856',
            'secret' => 'c7097753b1b57b6db02c7b1f815ba628',
        ));
        /* $facebook = new Facebook(array(
             'appId'  => '482298895204429',
             'secret' => 'c7097753b1b57b6db02c7b1f815ba628',
         ));*/
        $user = $facebook->getUser();
        $loginUrl = $facebook->getLoginUrl();
        $facebookid=Session::get('facebookids');
        $num=count($facebookid);
        $count=0;
        for($i=0;$i<$num;$i++){
            //if($user=='100000375939701'){
              if($user == $facebookid[$i]){
                $count=1;
            }
        }
        if($user){
            if($count!=0)
            {
                Response::redirect('m_select_emo');
            }
            else if($count==0){
                Response::redirect('m_dont_permission');
            }
        }
        else{
            Response::redirect($loginUrl);
        }
    }

    public function action_mpermission(){
        $data=array("username"=>Session::get('username'),"image"=>Session::get('image'));
        return Response::forge(View::forge('viral/mdont_permission',$data));
    }
    //action for pc
    public function action_emo(){

        return Response::forge(View::forge('viral/select_emo'));
    }
    public function action_facebook(){
      $facebook = new Facebook(array(
            'appId'  => '198416923615856',
            'secret' => 'c7097753b1b57b6db02c7b1f815ba628',
        ));
        /*
        $facebook = new Facebook(array(
            'appId'  => '169900956553868',
            'secret' => '36ab30eb5cebdf87951a95e0dd1eed6e',
        ));*/
        $loginUrl = $facebook->getLoginUrl();
        $user = $facebook->getUser();
        $facebookid=Session::get('facebookids');
        $num=count($facebookid);
        $count=0;
        for($i=0;$i<$num;$i++){
          // if($user=='100000375939701'){
            if($user == $facebookid[$i]){
                $count=1;
            }
        }
        if($user){
            if($count!=0)
            {
                Response::redirect('select_emo');
            }
            else if($count==0){

                Response::redirect('dont_permission');
            }
        }
        else{
            Response::redirect($loginUrl);
        }
    }

    public function action_starttime(){
        $data=Session::get('image');
        $result=array("image"=>$data);
        return Response::forge(View::forge('viral/starttime',$result));
    }
    public function action_timeup(){
        $data=Session::get('image');
        $result=array("image"=>$data);
        return Response::forge(View::forge('viral/timeup',$result));
    }
    public function action_chooseemo(){
        $select=$_GET["select"];
        $data=Session::get('image');
        $result=array("image"=>$data,"select"=>$select);
        return Response::forge(View::forge('viral/choose_emo',$result));
    }
    public function action_permission(){
        $data=array("username"=>Session::get('username'),"image"=>Session::get('image'));
        return Response::forge(View::forge('viral/dont_permission',$data));
    }
    public static function decode($str){
		
	
        $data = base64_decode($str);
        $key="testing";
        $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC));

        $decrypted = rtrim(
            mcrypt_decrypt(
                MCRYPT_RIJNDAEL_256,
                hash('sha256', $key, true),
                substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC)),
                MCRYPT_MODE_CBC,
                $iv
            ),
            "\0"
        );
        return $decrypted;
    }
    public function action_download(){
        $data=new Detect();
        return $data;
    }

}
?>