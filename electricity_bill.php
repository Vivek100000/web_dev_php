<html>
    <head>
        <style>
            .main
             {
                position:absolute;
                top:0.5cm;
                left:10cm;
             }
             h1
             {
                  font-weight:bold;
                  font-family:'Courier New', Courier, monospace;
                  background-color: orange;
                  padding:10px;
                  border-radius: 10px;
                  width:15.2cm;
                  text-align: center;
             }
             .a
             {
                  background-color: yellow;
                  font-weight:bold;
                  font-family:'Courier New', Courier, monospace;
                  font-size: larger;
                  position:absolute;
                  top:2.5cm;
                  padding:5px;
                  width:15.4cm; text-align: center;
                  border-radius: 10px;
             }
             .b
             {
                   background-color: whitesmoke;
                   font-weight:bold;
                   font-family:'Courier New', Courier, monospace;
                   position: absolute;
                   top:4.5cm;
                   font-size: larger;
                   padding:5px;
                   width:15.4cm;    text-align: center; border-radius: 10px;
             }
             .c
             {
                background-color: yellow;
                font-weight:bold;
                font-family:'Courier New', Courier, monospace;
                position:absolute;
                top:6.5cm;
                font-size: larger;
                padding:5px;   width:15.4cm;    text-align: center; border-radius: 10px;
             }
             .d
             {
                background-color: whitesmoke;
                font-weight:bold;
                font-family:'Courier New', Courier, monospace;
                position:absolute;
                top:8.5cm;
                font-size: larger;
                padding:5px;   width:15.4cm;    text-align: center; border-radius: 10px;
             }
             .e
             {
                background-color: yellow;
                font-weight:bold;
                font-family:'Courier New', Courier, monospace;
                position:absolute;
                top:10.5cm;
                font-size: larger;   padding:5px;   width:15.4cm;    text-align: center; border-radius: 10px;
             }
             .f
             {
                background-color: whitesmoke;
                font-weight:bold;
                font-family:'Courier New', Courier, monospace;
                position:absolute;
                top:12.6cm;
                font-size:larger;
                padding:5px;   width:15.4cm;    text-align: center; border-radius: 10px;
             }
        </style>
    </head>
    <body>
    <?php
    $conn = new mysqli("localhost","root","","departmentinfo");
    if($conn->connect_error)
    {
        die("connection could not establish".$conn->connect_error);
    }
    $consumer_number = $_REQUEST['cust_num'];
    $consumer_name = $_REQUEST['cust_name'];
    $previous_reading = $_REQUEST['prev_read'];
    $present_reading = $_REQUEST['pres_read'];
    $sql = "insert into e_bill values(' $consumer_number',' $consumer_name','$previous_reading','$present_reading')";
    if($conn->query($sql))
    {
        $units_consumed = $present_reading-$previous_reading;
        echo "<div class='main'>";
        echo "<h1>ELECTRICITY BILL</h1>";
        echo "<span class='a'><pre>Consumer Number:                $consumer_number</pre></span><br>";
        echo "<span class='b'><pre>Consumer Name:                  $consumer_name</pre></span><br>";
        echo "<span class='c'><pre>previous Reading:               $previous_reading</pre></span><br>";
        echo "<span class='d'><pre>Present Reading:                $present_reading</pre></span><br>";
        echo "<span class='e'><pre>Units Consumed:                 $units_consumed</pre></span><br>";
        if($units_consumed<100)
        {
            echo "<span class='f'><pre>Amount:                         ".$units_consumed*3 ."</pre></span>";  
        }
        else if($units_consumed>=100 and $units_consumed<=200)
        {
            echo "<span class='f'><pre>Amount:                         ".$units_consumed*4 ."</pre></span>";  
        }
        else if($units_consumed>200 and $units_consumed<=300)
        {
            echo "<span class='f'><pre>Amount:                         ".$units_consumed*5 ."</pre></span>";  
        }
        else
        {
            echo "<span class='f'><pre>Amount:                         ".$units_consumed*6 ."</pre></span>";  
        }
        echo "</div>";
    }
    else
    {
        die("query failed!!".$conn->error);
    }
    $conn->close();
    ?>
    </body>
</html>
