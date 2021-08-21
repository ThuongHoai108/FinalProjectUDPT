<?php  
class genreModel extends DB{
    public function getAllGenre(){
        $sql = 'SELECT * FROM `genre`';
        $arr = [];
        $rows = mysqli_query($this->conn, $sql);
        while($row = mysqli_fetch_assoc($rows)){
            $arr[] = $row;
        }
        return $arr;
    }
}


?>