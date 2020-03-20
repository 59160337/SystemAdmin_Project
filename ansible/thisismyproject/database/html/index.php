<html>
 <head>
<title>myProject-DatabaseTest</title>
</head>
 </html>    
<?php
 $conn = new mysqli("192.168.100.12", "myuser", "123456", "project");
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

 $sql = "SELECT * FROM students";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
    echo "<table>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Faculty</th>
              <th>Major</th>
            </tr>";
            
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['student_id']."</td>";
        echo "<td>".$row["first_name"]. " " . $row["last_name"]."</td>";
        echo "<td>".$row['faculty'] ,"</td>";
        echo "<td>".$row['major'] ,"</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>