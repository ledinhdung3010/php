<?php
if(!defined("APP_PATH")){
    die("Can not access");
}
// day la noi tiep nhan cac request tu phia nguoi dung gui len
// chinh la cac duong link truy cap tren url truy cap cua nguoi dung
// index.php?c=home&m=index&id=10
// c: ten cua controller (ten cua file ,chinhla ten cua class)
// m; ten cua phuong thuc trong class
// nhung tham so con lai chi goi la du lieu gui len
$c=ucfirst($_GET['c']?? 'home');
$m=$_GET['m']?? 'index';
// quy uoc ten controller chu cai dau viet hoa va luon co hau to controller: homeController.php
$nameController="{$c}Controller";
$nameFileController="{$c}Controller.php";
$fullPathController=NAME_SPACE_CONTROLLER.$nameFileController;
$realFullPathFileController=str_replace("\\","/",$fullPathController);
if(file_exists($realFullPathFileController)){
    $controller=NAME_SPACE_CONTROLLER.$nameController;
    $abj=new $controller();// khoi tao phuong thuc
    $abj->$m();// goi phuong thuc


}else{
  
    exit("Not found Request");
}


