<?php
$fp = fopen('text.txt','a');
if(fwrite($fp,' im vivek'))
{
    echo "appended successfully!!";
}
fclose($fp);
?>