<?php
class userModel extends DB{
    
    public function getUser($username = '', $password = ''){
        if(!empty($username) && !empty($password)){
            $sql = "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password' AND `Status`=1";
            $rows = mysqli_query($this->conn, $sql);
            $arr = [];
            while($row = mysqli_fetch_array($rows)){
                $arr[] = $row;
            }
            return $arr;
        }else{
            $sql = "SELECT * FROM `user`";
            $rows = mysqli_query($this->conn, $sql);
            $arr = [];
            while($row = mysqli_fetch_array($rows)){
                $arr[] = $row;
            }
            return $arr;
        }
    }

    // public function getUserByEmail($email){
    //     $sql = "SELECT * FROM `user` WHERE `email`='$email' AND `UType_id` = 2";
    //         $rows = mysqli_query($this->conn, $sql);
    //         $arr = [];
    //         while($row = mysqli_fetch_array($rows)){
    //             $arr[] = $row;
    //         }
    //         return $arr;
    // }

    // public function getUserByID($id){
    //     $sql = "SELECT * FROM `user` WHERE `User_id`=$id";
    //         $rows = mysqli_query($this->conn, $sql);
    //         $arr = [];
    //         while($row = mysqli_fetch_array($rows)){
    //             $arr[] = $row;
    //         }
    //         return $arr;
    // }

    public function getUserInfo($userID){
        
        $sql = "SELECT * from `user` WHERE `UserID` = $userID"; 

        $rows = mysqli_query($this->conn, $sql);
        $arr=[];
        while($row=mysqli_fetch_array($rows)){
            $arr[]=$row;
        }
        return $arr;
    }


}

?>