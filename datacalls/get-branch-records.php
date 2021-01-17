<?php

include "../db.php";
include_once "../Common.php";
    $recordId = $_POST['recordId'];
    $tableName = $_POST['tableName'];

   
    $common = new Common();
    $records = $common->getRecordByIdBranch($conn, $tableName, $recordId);
 
    if ($records){ 
        //die('ddd');  
        $arr1 = mysqli_fetch_row($records);   
        $myJSON = json_encode($arr1);     
       echo $myJSON;
    }

?>