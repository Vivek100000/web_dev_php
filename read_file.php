<?php
$fp = fopen('text.txt','r');
$content = fread($fp,filesize('text.txt'));
echo $content;
?>
