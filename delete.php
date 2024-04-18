<?php
    $stud_id = $_GET["id"];

    $conn = new mysqli($servername, $username, $password, $db_name);
    if ($conn->connect_errno){
        die ('Connection Failed'.$conn->error);
    }

    $sql = "DELETE FROM tbl_student where stud_id='".$stud_id."'";
    $conn ->query($sql);

    header('location:srms.php');
?>