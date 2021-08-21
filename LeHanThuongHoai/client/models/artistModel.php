<?php  
class artistModel extends DB{
    public function getTop20Artist(){
        $sql = 'SELECT a.ArtistID, Name, SoLuong FROM artist as a join ( SELECT COUNT(*) as SoLuong, ArtistID FROM song GROUP BY ArtistID) AS SongNumber ON a.ArtistID=SongNumber.ArtistID ORDER BY SongNumber.SoLuong DESC LIMIT 20;';
        $arr = [];
        $rows = mysqli_query($this->conn, $sql);
        while($row = mysqli_fetch_assoc($rows)){
            $arr[] = $row;
        }
        return $arr;
    }
}


?>