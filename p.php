<!DOCTYPE html>
<html>
<body>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "staff");
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $uname =  $_REQUEST['uname'];
        $passw = $_REQUEST['pswd'];
        $sql = "INSERT INTO details  VALUES ('$uname',
            '$passw')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$uname\n $passw\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
</body>
</html>