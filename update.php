<?php
    include('conn.php');

    $student_id = $_POST['student_id'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $course = $_POST['course'];
    $yearlevel = $_POST['yearlevel'];
    $sex = $_POST['sex'];

    $sql = "UPDATE tbl_student SET lname='$lname', fname='$fname', mname='$mname', course='$course', yearlevel='$yearlevel', sex='$sex' WHERE student_id='$student_id'";
    $conn ->query($sql);

    header('location:srms.php');
?>