<!DOCTYPE html>
<?php
    include('conn.php');
    $student_id = $_GET['id'];
    $sql = "SELECT * FROM tbl_student WHERE student_id='$student_id'";
    $result = $conn->query($sql);
    $result = $result->fetch_object();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <title>Student Record</title>
</head>
<body>
    <h1 align="center">Edit Student Record</h1>
    <form action="update.php" method="post">
        <table border="0" align="center" style="border-collapse: collapse;" cellpadding="5" >
            <tr>
                <td>Student ID</td><td>:</td><td><input type="text" name="student_id" value="<?php echo $result->student_id; ?>" style="width: 100%;" required readonly></td>
            </tr>
            <tr>
                <td>First Name</td><td>:</td><td><input type="text" name="fname" value="<?php echo $result->fname; ?>" style="width: 100%;" required></td>
            </tr>
            <tr>
                <td>Middle Name</td><td>:</td><td><input type="text" name="mname" value="<?php echo $result->mname; ?>" style="width: 100%;" required></td>
            </tr>
            <tr>
                <td>Last Name</td><td>:</td><td><input type="text" name="lname" value="<?php echo $result->lname; ?>" style="width: 100%;" required></td>
            </tr>
            <tr>
                <td>Course</td><td>:</td>
                <td>
                    <select name="course" required>
                        <option value="" hidden>--Course--</option>
                            <?php
                                include('conn.php');
                                $sql = "SELECT * FROM tbl_course ORDER BY course_name ASC";
                                $results = $conn->query($sql);
                                while ($course = $results->fetch_object()){
                                    if ($course->course_name == $result->course){
                                        echo '<option selected="selected">'.$course->course_name.'</option>';
                                    }
                                    else{
                                        echo '<option>'.$course->course_name.'</option>';
                                 }
                                }
                             ?>
                    </select>
                </td>    
            </tr>
            <tr>
                <td>Year Level</td><td>:</td>
                    <td>
                        <select name="yearlevel" required>
                            <option hidden>--Select Year--</option>
                            <?php
                                for ($i = 1; $i <=5; $i++){
                                    if ($result->yearlevel == $i){
                                        echo '<option selected="selected">'.$i.'</option>';
                                    }
                                    else{
                                        echo '<option>'.$i.'</option>'; 
                                    }
                                }
                            ?>
                         </select>
                    </td>
            </tr>
            <tr>
                <td>Sex</td><td></td>
                <td>
                    <?php
                        if (strtoupper($result->sex)=='MALE'){
                            echo '<input type="radio" name="sex" value="Male" required checked> Male &nbsp; &nbsp;
                                <input type="radio" name="sex" value="Female" required> Female &nbsp; &nbsp;';
                        }else{
                            echo '<input type="radio" name="sex" value="Male" required> Male &nbsp; &nbsp;
                            <input type="radio" name="sex" value="Female" required checked> Female &nbsp; &nbsp;';
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td></td><td></td>
                <td align='right'>
                    <button type="submit" class="btn btn-success">Update Record</button>
                    <button type="reset" class="btn btn-success">Clear</button>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td align="right">
                    <a href="srms.php" class="btn btn-outline-primary">Records</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>