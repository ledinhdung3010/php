<?php
namespace app\controller;
use app\controller\Controller;
use app\model\LoginModel;
class LoginController extends Controller
{
    private  $loginModel;
    public function __construct()
    {
        $this->loginModel=new LoginModel();
    }
    public function index()
    {
        $this->loadView("login/index_view",["title"=>"LOGIN"]);
    }
    public function handle(){
        if(isset($_POST['username'])){
            $username=$_POST['username'] ?? null;
            $username=strip_tags($username);
            $password=$_POST['password'] ?? null;
            $password=strip_tags($password);
            if(empty($username)||empty($password)){
                redirect_action("login","index",["state"=>"error"]);
            }else{
                $infoUser=$this->loginModel->checkLoginUser($username,$password);
                if(empty($infoUser)){
                    redirect_action("login",'index',["state"=>'fail']);
                }else{
                    $_SESSION['name']=$infoUser['name'];
                    redirect_action("home",'index',["state"=>'ok']);
                }
            }

        }

    }
    public function logout(){
        if(!empty(get_session_username())){
            unset($_SESSION['name']);
            
            redirect_action('home','index');
        }
        
    }
}