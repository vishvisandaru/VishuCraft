<?php

// Create connection
$conn = mysqli_connect("localhost","root","","shopping_store");

i(!$conn){
    echo"Failed to connect";
} else{
    echo"you hav sucessfully connect your database";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title> Connect your database</title>
</head>
<body>
    
</body>
</html>
