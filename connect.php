<?php
    $conn = new mysqli('localhost', 'root', '','reg');
    
    if ($conn) {
        echo "<script> alert('Холболт амжилттай!') </script>";
    }else{
        echo "<script> alert('Холболт амжилтгүй!') </script>";
    }
?>