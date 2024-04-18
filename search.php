<?php

$search = $_POST['search'];

include('conn.php');

$sql = "SELECT * from tbl_student where name like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["stud_id"]."  ".$row["lname"]."  ".$row["fname"]."<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>