<html>
    <head>
         <title>
            File Upload
         </title>
    </head>
    <body>
        <form enctype="multipart/form-data" action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
        <h1> UPLOAD FILE <h1><br>
        <input type=file name="uploadfile"></input><br>
        <input type="submit" value="Upload"></input><br>
    <?php
    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
       $maxsize = 2*1024*1024;
       $filesize = $_FILES['uploadfile']['size'];
       $allowedFileTypes = array('jpg', 'jpeg', 'png', 'pdf');
       $filename = $_FILES['uploadfile']['name'];
       $target = 'D:/uploaded_files/';
       $target = $target.basename($filename);
       $filextension = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
       if(!in_array($filextension,$allowedFileTypes))
       {
            die("error: only ".implode(', ', $allowedFileTypes)." are allowed");  
       }
       if($filesize > $maxsize)
       {
            die("allowed file is size less than ". $maxsize/1024/1024 ."  MB");
       }
       if(move_uploaded_file($_FILES['uploadfile']['tmp_name'],$target))
       {
            echo "the file ".basename($filename)." has been sucessfully uploaded";
       }
       else
       {
            echo "there was an error uploading the file";
       }

    }
    ?>
    </body>
</html>