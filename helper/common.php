<?php
if(!function_exists("redirect_action")){
    function redirect_action($c,$m,$params=[]){
        // $c ; name Controller
        // $m: name method
        // $params : tham so data 
        $strParams="";
        foreach($params as $k=>$v){
            $strParams.=empty($strParams) ? "{$k}={$v}":"&{$k}={$v}";
        }
        $linkRedirect=empty($strParams) ? APP_PATH ."?c={$c}&m={$m}":APP_PATH."?c={$c}&m={$m}&{$strParams}";
        header("Location:{$linkRedirect}");

    }
    if(!function_exists("get_session_username")){
        function get_session_username(){
            $username=$_SESSION['name'] ?? null;
            return $username;
        }
    }
    if(!function_exists('checkSession')){
        function checkSession(){
            if(!empty($_SESSION['name'])){
                $_SESSION['count_product']=(!empty($_SESSION[$_SESSION['name']]))  ? count($_SESSION[$_SESSION['name']]) : 0;
            }
            else{
                $_SESSION['count_product']=0;
            }
            return $_SESSION['count_product'];
        }
    }
}