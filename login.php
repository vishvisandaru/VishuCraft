<!DOCTYPE html>
<html lang="en">
<head>

    <title>online shopping store</title>
</head>
<body>
<?php
   
       if($conn=== false){
       }
        $username=$_REQUEST['Username'];
        $password=$_REQUEST['password'];

        $sql="INSERT INTO users values ('$username','$password')";
        if(mysqli_query($conn,$sql)){
                        echo"<h3> data store in a database succesfully</h3>"

                        echo n12br("\n $username\n $password\n"."");

        }
        else{
            echo"ERROR:HUSH! Sorry &sql"
            .mysqli_error($conn);
                }
       
 
    ?>
</body>
</html>
