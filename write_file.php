<?php
$fp = fopen('text.txt','w');

if(fwrite($fp,'hello how are you doing'))
{
    echo "file created successfully";
}
fclose($fp);

?>