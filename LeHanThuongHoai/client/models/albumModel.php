<?php  
class albumModel extends DB{
    public function getTop20Album(){
        $sql = 'SELECT AlbumID, Title FROM `album` ORDER BY ReleaseDate DESC LIMIT 20';
        $arr = [];
        $rows = mysqli_query($this->conn, $sql);
        while($row = mysqli_fetch_assoc($rows)){
            $arr[] = $row;
        }
        return $arr;
    }
}


?>