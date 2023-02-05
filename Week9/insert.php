<?php

if (isset($_POST['name']) && isset ($_POST['meesage'])){
    include 'db_conn.php';

    echo "Hello";
}else{
    header("Location: index.html");
}