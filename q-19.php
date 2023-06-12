<html>
    <head>
         <title>
            Cookies
         </title>
    </head>
<body>
<?php
// Start the session
session_start();

// Check if the session counter exists
if (!isset($_SESSION['counter'])) 
{
    $_SESSION['counter'] = 1;
} 
else 
{
    // Increment the session counter
    $_SESSION['counter']++;
}

// Check if the cookie counter exists
if (!isset($_COOKIE['counter'])) 
{
    // Set the cookie counter to 1
    setcookie('counter', 1, time() + 3600); // Cookie expires in 1 hour
} 
else 
{
    // Increment the cookie counter
    setcookie('counter', $_COOKIE['counter'] + 1, time() + 3600); // Cookie expires in 1 hour
}

// Display the session counter
echo "Session Counter: " . $_SESSION['counter'] . "<br>";

// Display the cookie counter
echo "Cookie Counter: " . $_COOKIE['counter'];
?>
</body>
</html>

