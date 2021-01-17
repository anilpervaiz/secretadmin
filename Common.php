<?php
class Common
{
    public function getAllMembers($conn) {
        $query = "SELECT * FROM ss_users";
        $result = $conn->query($query) or die("Error in query1".$conn->error);
        return $result;
    }
    public function getRecordByIdBranch($conn, $tableName, $recordId ) {
        $query = "SELECT * FROM ss_branches WHERE uniqueId='$recordId'";
        $result = $conn->query($query) or die("Error in query1".$conn->error);
        return $result;
    }
 
}