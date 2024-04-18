<?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db_name = 'student_db';
    
        $conn = new mysqli($servername, $username, $password, $db_name);
        if ($conn->connect_errno){
            die ('Connection Failed'.$conn->error);
        }
?>