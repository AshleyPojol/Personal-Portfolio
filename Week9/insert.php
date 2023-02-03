<?php
$fullName = $_POST['fullName'];
$emailUsed = $_POST['emailUsed'];
$subjectUsed = $_POST['subjectUsed'];
$messageInput = $_POST['messageInput'];

if (!empty($fullName)|| !empty($emailUsed)||!empty($subjectUsed)|| !empty($messageInput)){

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "personal";
    


    // DATABASE CONNECTION HERE // 

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    if (mysqli_connect_error()){
    die("Connection Error (" . mysqli_connect_errno() . ")" . mysqli_connect_error());
        
    }else{
         $INSERT = "INSERT Into personal (fullName, emailUsed, subjectUsed, messageInput) values (?,?,?,?)";

         // PREPARE STATEMENT //
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssii", $fullName, $emailUsed, $subjectUsed, $messageInput);
            $stmt->execute();
            echo "Inquiry Sent";
        }
    }
?>







