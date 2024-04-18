<?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db_name = 'student_db';

        $con = new mysqli($servername, $username, $password, $db_name);

        $stud_id = $_POST['stud_id'];
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $course = $_POST['course'];
        $yearlevel = $_POST['yearlevel'];
        $sex = $_POST['sex'];

        $sql = "INSERT INTO tbl_student VALUES('$stud_id', '$lname', '$fname', '$mname', '$course', '$yearlevel', '$sex')";
        $con->query($sql);
        
        header('location:srms.php');
?>