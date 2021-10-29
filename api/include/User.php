<?php

require 'DBclass.php';
date_default_timezone_set('Asia/Kolkata');

class User {

    protected $db;

    public function __construct() {
        $this->db = new DBcon();
        $this->db = $this->db->DBreturn();
    }

    public function escapeString($var) {
        $result = $this->db->real_escape_string($var);
        return $result;
    }

    public function insertQuery($query) {
        $result = $this->db->query($query);
        $last_id = $this->db->insert_id;
        return $last_id;
    }

    public function getResultById($table, $id) {
        $resultArray = array();
        $query = "SELECT * FROM " . $table . " WHERE id = '" . $id . "'";
        $result = $this->db->query($query);
        $rowCount = $result->num_rows;
        if ($rowCount > 0) {
            while ($arrayRow = $result->fetch_assoc()) {
                $resultArray[] = $arrayRow;
            }
        }
        return $resultArray;
    }

    public function getResult($query) {
        $resultArray = array();
        $result = $this->db->query($query);
        $rowCount = $result->num_rows;
        if ($rowCount > 0) {
            while ($arrayRow = $result->fetch_assoc()) {
                $resultArray[] = $arrayRow;
            }
        }
        return $resultArray;
    }

    public function gerResultWithImages($query,$tableName){
        $resultArray = array();
        $result = $this->db->query($query);
        $rowCount = $result->num_rows;
        if ($rowCount > 0) {
            while ($arrayRow = $result->fetch_assoc()) {
                $query2 = "SELECT * FROM images where entity_id =".$arrayRow['id']."  AND img_type = '".$tableName."'";
              
                $arrayRow['images'] = $this->getResult($query2);
                $resultArray[] = $arrayRow;
            }
        }
        return $resultArray;
    }

    public function getAllResultOrderBy($table, $orderBy) {
        $resultArray = array();
        $query = "SELECT * FROM " . $table . " ORDER BY " . $table . "_id " . $orderBy;
        $result = $this->db->query($query);
        $rowCount = $result->num_rows;
        if ($rowCount > 0) {
            while ($arrayRow = $result->fetch_assoc()) {
                $resultArray[] = $arrayRow;
            }
        }
        return $resultArray;
    }

    public function deleteData($table, $id) {
        $query = "DELETE FROM $table WHERE " . $table . "_id =" . $id;
        $this->db->query($query) or die($this->db->error);
    }

    public function update($table, $id, $colArray) {
        $update = array();
        foreach ($colArray as $key => $value) {
            $update[] = $key . " = '" . $value . "'";
        }
        $query = "UPDATE $table SET " . implode(',', $update) . " WHERE id = " . $id;
        $this->db->query($query) or die($this->db->error);
    }

    public function getColumns($tableName) {
        $columnList = array();
        $query = "SHOW COLUMNS FROM $tableName";
        $result = $this->db->query($query) or die($this->db->error);
        while ($row = $result->fetch_row()) {
            $columnList[] = $row[0];
        }
        return $columnList;
    }

}

?>