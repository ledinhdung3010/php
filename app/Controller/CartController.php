<?php
namespace app\controller;
use app\controller\Controller;
use app\model\ProductModel;


class CartController extends Controller
{
    private $new,$data;
    public function number(){
        if(isset($_POST['reduce'])){
            $quantity=$_POST['quantity']-1;
            $id=$_GET['key'] ?? null;
           $_SESSION[$_SESSION['name']][$id]['quantity']=$quantity;
           if($quantity==0){
            unset($_SESSION[$_SESSION['name']][$id]);
           }
           
        }
        if(isset($_POST['increase'])){
            $quantity=$_POST['quantity']+1;
            $id=$_GET['key'] ?? null;
           $_SESSION[$_SESSION['name']][$id]['quantity']=$quantity;
        }
        redirect_action('cart','addCart');
    }
    
    public function product($product){
        $id=$_POST['product_id'] ?? 'aa';
        return $product['id'] == $id;
      
    
    }
    
    public function addCart(){
        if(!empty($_SESSION['name'])){
            $selectedProduct = array_filter($this->data,array($this,"product"));
        
        if (!empty($selectedProduct)) { 
            foreach ($selectedProduct as $key => $value) {
                if(!empty($_SESSION[$_SESSION['name']][$key])){
                    $_SESSION[$_SESSION['name']][$key]['quantity']+=1;

                }else{
                    $_SESSION[$_SESSION['name']][$key]=$value;  
                    $_SESSION[$_SESSION['name']][$key]['quantity']=1;
                }
                         
            }
        }
        
        $this->loadHeaderView(['title'=>'cart']);
        $this->loadView('cart/index_view',['cart'=>$_SESSION[$_SESSION['name']]]);
        $this->loadFooterView();
        }else{
            redirect_action('login','index');
        }
        
        

    }
    public function __construct(){
        $this->new=new ProductModel();
        $this->data=$this->new->getallDataProduct();
    }
    public function delete(){
        $id=$_GET['key']?? null;
       
        unset( $_SESSION[$_SESSION['name']][$id]);
        redirect_action('cart','addCart');

    }

}