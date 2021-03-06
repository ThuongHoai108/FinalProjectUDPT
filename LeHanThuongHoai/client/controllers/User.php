<?php
class User extends Controller{
    protected $userModel;
    protected $postModel;
    public function __construct(){
        $this->userModel = $this->ModelClient("UserModel");
        $this->postModel = $this->ModelClient("PostModel");
    }
    // [GET] /user
    public function SayHi(){
        $data['page_title'] = 'Đăng nhập';
        $this->ViewClient('inc/header',$data);
        $this->ViewClient('pages/login');
        $this->ViewClient('inc/footer');
    }

    public function handleLogin(){ 
        if(isset($_POST['btn_login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $this->userModel->getUser($username, $password);
            if(!empty($user)){
                $userInfo = $this->userModel->getUserProfile($user[0]['User_id']);
                $_SESSION['fullname']=$userInfo[0]['Name'];
                $_SESSION['avatar']=$userInfo[0]['Avatar'];
                $_SESSION['userID'] = $user[0]['User_id'];
                $_SESSION['email'] = $user[0]['email'];
                $_SESSION['username'] = $username;
                $_SESSION['isLogin'] = true;
                $_SESSION['auth'] = 'user';
                echo 1;
                // $this->redirect('/');
            }else{
                echo 0;
                // $this->redirect('/user');
            }
        }else{
            echo 0;
        }
    }

    public function logout(){
        
        session_destroy();
        $this->redirect('/user');
    }


}

?>