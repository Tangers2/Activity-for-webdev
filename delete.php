<?php
    $student_id = $_GET['id'];
    include('conn.php');

    $sql = "DELETE FROM tbl_student where 
             student_id='".$student_id."'";
    $conn ->query($sql);

    header('location:srms.php');
?>