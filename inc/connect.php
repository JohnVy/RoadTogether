<?php
$servername = "localhost"; 
$dbname = "u529341015_roadtogether";
$username = "u529341015_SpiritVy"; 
$password = "20/08/92Spirit.vy";

// $dbname = "roadtriptogether";
// $username = "root"; 
// $password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>