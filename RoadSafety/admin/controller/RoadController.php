<?php

class RoadController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function index()
    {
        $bookQuery = "SELECT * FROM roadstore";
        $result = $this->conn->query($bookQuery);
        if($result->num_rows){
            return $result;
        }else{
            return false;
        }
    }
    public function create($inputdata)
    {
        $data = "'" . implode ("','",$inputdata) . "'";
        

        $bookQuery = "INSERT INTO roadstore(mode,casualty,minor,major,dateof) VALUES ($data)";
        $result = $this->conn->query($bookQuery);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function edit($id)
    {
        $book_id = validateInput($this->conn, $id);
        $bookQuery = "SELECT * FROM roadstore WHERE id='$book_id' LIMIT 1";
        $result = $this->conn->query($bookQuery);
        if($result->num_rows == 1){
            $data = $result->fetch_assoc();
            return $data;
        }else{
            return false;
        }
    }

    public function update($inputdata, $id)
    {
        $book_id = validateInput($this->conn, $id);
        $mode = $inputdata['mode'];
        $casualty = $inputdata['casualty'];
        $minor = $inputdata['minor'];
        $major = $inputdata['major'];
        $dateof = $inputdata['dateof'];

        $bookUpdateQuery = "UPDATE roadstore SET mode='$mode', casualty='$casulty', minor='$minor', major='$major', dateof='$dateof' WHERE id='$book_id' LIMIT 1";
        $result = $this->conn->query($bookUpdateQuery);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id)
    {
        $book_id = validateInput($this->conn,$id);
        $bookdeleteQuery = "DELETE FROM roadstore WHERE id='$book_id' LIMIT 1";
        $result = $this->conn->query($bookdeleteQuery);

        if($result){
            return true;
        }else{
            return false;
        }
    }
}

?>