<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <title>Student Record Management System</title>
</head>
<body>
    <h1 align="center">Student Record</h1>
    <?php
        include('conn.php');

        //echo "Connected Succesfully";

        $sql = "SELECT * FROM tbl_student ORDER BY lname ASC";
        $result = $conn->query($sql);

        echo '<table class="table table-hover">
                <tr class="table-primary">
                    <th scope="row">SEQ</th>
                    <th>Student ID</th>
                    <th>LASTNAME</th>
                    <th>FIRSTNAME</th>
                    <th>MIDDLENAME</th>
                    <th>COURSE</th>
                    <th>YEARLEVEL</th>
                    <th>SEX</th>
                    <th>
                        <form class="d-flex" action="search.php" method="post">
                            <input class="form-control me-sm-2" type="search" placeholder="Search" name="search">
                            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </th>
                </tr>';
        $cnt = 1;
        while ($student = $result->fetch_object()){
            echo '<tr>';
            echo '<td>'.$cnt.'</td>';
            echo '<td>'.$student -> student_id.'</td>';
            echo '<td>'.$student -> lname.'</td>';
            echo '<td>'.$student -> fname.'</td>';
            echo '<td>'.$student -> mname.'</td>';
            echo '<td>'.$student -> course.'</td>';
            echo '<td>'.$student -> yearlevel.'</td>';
            echo '<td>'.$student -> sex.'</td>';
            echo '<td align="center">'.'<a href="edit.php?id='.$student -> student_id.' "class="btn btn-secondary" " style="margin-left: 5px;">EDIT</a>'.
            '<a href="delete.php?id='.$student -> student_id.'"class="btn btn-danger" onclick="return confirm(\'Are you sure you want to delete this data?\')" style="margin-left: 5px;">DELETE</a>'.'</td>';
            echo '</tr>';
            $cnt ++;
        }
            echo '<tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td align="center"><a href="Student_Record.php" class="btn btn-primary">ADD New Record</a></td>
                </tr>';
        echo '</table>';
    ?>
</body>
</html>