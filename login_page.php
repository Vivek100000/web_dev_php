<html>
    <head>
        <style>
           .invalid
           {
                color: red;
                font-size: larger;
                font-weight: bold;
                font-family: 'Courier New', Courier, monospace;
                position:absolute;
                top:5cm;
                left:12.8cm;
           }
           .valid
           {
               color:Green;
               font-size: larger;
               font-weight: bold;
               font-family: 'Courier New', Courier, monospace;
               position: absolute;
               top:5cm;
               left:12.8cm;
           }
           #main
           {
                background-color:green;
                width:fit-content;
                position:absolute;
                
                left:11cm;
           }
           #main2
           {
                 background-color:orange;
                 padding:10px;
                 position:absolute;
                 top:3cm;
                 left:11cm;
           }
           .inp
           {
                 background-color:whitesmoke;
           }
           h1
           {
                  text-align: center;
           }
           .button {
               width:231px;
           }
        </style>
    </head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <div id = "main">
    <h1> LOGIN PAGE </h1>
    <span class="inp">username: </span><input type="text" name="username" >
    <span class="inp">password: </span><input type="password" name="password" >
    </div>
    <div id="main2">
        <button type="submit" class="button">SUBMIT</button><button type="reset" class="button">CLEAR</button>
    </div>
</form>
<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    // Retrieve the submitted form values
    $conn  = new mysqli("localhost","root","","login_details");
    if($conn->connect_error)
    {
       die("connection failed".$conn->connect_error);
    }
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM login WHERE username = '$username' and passwords = '$password'";
$result = $conn->query($sql);
if($result->num_rows>0)
{
      echo "<div class='valid'>SUCESSFULLY LOGGED IN!!!</div>";
}
else if($result->num_rows === 0)
{
      echo "<div class='invalid'> INVALID USERNAME OR PASSWORD!!!<div>";
}
    // Store the form values in the session
} 

?>
</body>
</html>