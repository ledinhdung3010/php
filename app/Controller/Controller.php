<?php
namespace app\controller;
class Controller
{
    public function __call($method, $args){
        exit("REQUEST {$method} khong ton tai");
    }
    protected function loadHeaderView($header=[]){
        $this->loadView("parties/header_view",$header);
    }
    protected function loadFooterView(){
        $this->loadView("parties/footer_view");
    }
    protected function loadView($path, $data = []){
        extract($data);
        require APP_PATH_VIEW.$path.".php";
    }
}