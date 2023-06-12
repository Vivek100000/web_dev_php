<?php
$variable = 10;

// Using gettype() to get the variable type
echo "Variable type before settype(): " . gettype($variable) . "\n";

// Using settype() to change the variable type
settype($variable, "string");

// Using gettype() again to check the new variable type
echo "Variable type after settype(): " . gettype($variable);
?>
