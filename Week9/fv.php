<!DOCTYPE html>
<html>
<body>
<head> 
    <title> Visitor's Log </title>
</head>
<body>
    <table>
        <tr>
            <th> ID </th>
            <th> Full Name </th>
            <th> Subject </th>
            <th> Message </th>
</tr>

<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test_db";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "SELECT id, fullName, emailUsed, subjectUsed, messageInput from inquiry";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</tr></td>" . $row["fullName"] . "</tr></td>" . $row;["emailUsed"] . "</tr></td>". $row["subjectUsed"] . "</tr></td>" . $row["messageInput"] . "</tr></td>"  ;


        }
    }
    ?>
    </table>
</body>
</html>