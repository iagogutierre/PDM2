<?php
    header("Content-Type: application/json; charset=UTF-8");
    
    $conn = new mysqli("localhost", "id5784320_roletiadm", "senhasegura", "id5784320_roleti");
    $result = $conn->query("SELECT * FROM eventos");
    $outp = array();
    $outp = $result->fetch_all(MYSQLI_ASSOC);
    
    echo json_encode($outp);
?>