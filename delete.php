<?php
    include "connect.php";
    if(isset($_GET['ID'])){
        $ID = $_GET['ID'];
        $sql = "DELETE from `register` where ID=$ID";
        $conn->query($sql);
    }
    header('location: admin.php');
    exit;
?>