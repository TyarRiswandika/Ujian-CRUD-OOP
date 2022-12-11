<?php
class Majalah extends Dbh{

    protected function getAllNovel() {
        $sql = "SELECT * FROM list";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows) {
            while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }
    }
}
