<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "visadb";

$con = new mysqli($servername, $username, $password, $dbname);

if($con->connect_error){
    die("Connection failed: ".$con->connect_error);
}

$sql = "SELECT nin, surname, g_name, password FROM manager";
$result = $con->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "nin: ".$row["nin"]." surname: ".$row["surname"]." Given name: ".$row["g_name"]." Password: ".$row["password"]."<br>";
    }
}else {
    echo "0 results";
}
$con->close();
?>
