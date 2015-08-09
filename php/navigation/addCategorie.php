<?php
    session_start();
    if (empty($_SESSION['myusername'])) {
        include '../init.php';
    } else {
        include '../config.php';    
        
        $categorieName = $_GET['newCategorie'];
        
        $sql = "INSERT INTO Categories (CategorieName) VALUES ('$categorieName')";
        
        $mysqli->query($sql);
        
        $last_id = $mysqli->insert_id;
        
        echo $last_id;
        
        $mysqli->close();
}
?>