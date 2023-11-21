<?php
// file chinh de chay ung dung
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
require_once __DIR__.'/vendor/autoload.php';
if(file_exists(__DIR__.'/router/web.php')){
    
    require __DIR__.'/router/web.php';
}else{
    echo " WEB DANG BAO TRI VUI LONG QUAY LAI SAU";
}