<?php
class Home extends Controller{
    protected $genreModel;
    protected $artistModel;
    protected $albumModel;
    protected $userModel;
    public function __construct(){
        $this->genreModel = $this->ModelClient('genreModel');
        $this->artistModel = $this->ModelClient('artistModel');
        $this->albumModel = $this->ModelClient('albumModel');
        $this->userModel = $this->ModelClient('userModel');
    }

    public function SayHi(){
    
        $data['genreList'] = $this->genreModel->getAllGenre();
        $data['artistList'] = $this->artistModel->getTop20Artist();
        $data['albumList'] = $this->albumModel->getTop20Album();
        //$data['user'] = $this->albumModel->getTop20Album();
        // $data['page_title'] = 'Trang chủ';
        // $data['post_view'] = $this->postModel->getPostSortView('DESC');
        // $data['post_new'] = $this->postModel->getPostSortID('DESC');
        // $data['category'] = $this->categoryModel->getAllCategory();
        // if(!empty($_SESSION) && $_SESSION['isLogin'] == true){
        //     $data['liked'] = $this->postModel->getLiked($_SESSION['userID']);
        // }
        $this->ViewClient('inc/header', $data);
        $this->ViewClient('pages/home_page', $data);
        $this->ViewClient('inc/footer');
    }

    public function trangchu(){
        $data['slider'] = $this->postModel->getSlider();
        $data['page_title'] = 'Trang chủ';
        $data['post_view'] = $this->postModel->getPostSortView('DESC');
        $data['post_new'] = $this->postModel->getPostSortID('DESC');
        $data['category'] = $this->categoryModel->getAllCategory();
        $data['islogin'] = $this -> handleLogin();
        if(!empty($_SESSION) && $_SESSION['isLogin'] == true){
            $data['liked'] = $this->postModel->getLiked($_SESSION['userID']);
        }

        $this->ViewClient('inc/header', $data);
        $this->ViewClient('pages/home_page', $data);
        $this->ViewClient('inc/footer');
    }

    public function handleLogin(){ 
        if(isset($_POST['btn-login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $this->userModel->getUser($username, $password);
            if(isset($user)){
                $userInfo = $this->userModel->getUserInfo($user[0]['UserID']);
                $_SESSION['avatar']=$userInfo[0]['AvatarPath'];
                $_SESSION['userID'] = $user[0]['UserID'];
                $_SESSION['username'] = $username;
                $_SESSION['isLogin'] = true;
                $_SESSION['auth'] = 'user';
                echo 1;
                $this->redirect('/');
            }        
            else{
                echo 0;
                // $this->redirect('/user');
            }
        }else{
            echo 0;
        }
    }

    public function logout(){
        session_destroy();
        $this->redirect('/home');
    }
}

?>