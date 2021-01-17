<?php
    include "../db.php";
   
    if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
        $branch_name = $_POST['branch_name'];


    $table_name = "ss_branches";
      $uniqueBranchId = "ssB_".rand(1000,1000000);


    $sql = "INSERT INTO $table_name (uniqueId, name, status)
    VALUES ('$uniqueBranchId', '$branch_name', '1')";
    
    $result = mysqli_query($conn, $sql);

if ( $result >0) {
    header("location: http://localhost:8888/secso/branches.php");

   
}

header("location: http://localhost:8888/secso/branches.php");

}
else {

    echo "error";
}

?>

