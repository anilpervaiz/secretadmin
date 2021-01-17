<?php
       include "../db.php";
 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
         $rowId = $_POST['update_id'];
        $branch_name = $_POST['update_name'];
        $status = $_POST['update_status'];

  $table_name = "ss_branches";

        $sql = "UPDATE $table_name SET name='$branch_name', status='$status'  WHERE id=$rowId";

     
    
    $result = mysqli_query($conn, $sql);

if ( $result >0) {
    header("location: http://localhost:8888/secso/branches.php");

   
}
else {

    echo "error";
}
//header("location: http://localhost:8888/admin-admin/pages/menus.php");

}
else {

    echo "error";
}

?>

