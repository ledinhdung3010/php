<?php
namespace app\controller;
use app\controller\Controller;
use app\model\ProductModel;

class HomeController extends Controller
{
    private $productModel;
    public function index(){
        $dataProduct=$this->productModel->getallDataProduct();
        
        $this->loadHeaderView(
           [ "title"=>"Home page"]
        );
        $this->loadView("home/index_view",["product"=>$dataProduct]);
        $this->loadFooterView();
    }
    public function __construct(){
        $this->productModel=new ProductModel();
    }
   


    
}