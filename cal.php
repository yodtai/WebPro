<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $fruit = $_GET['fruit'];
    $size = $_GET['size'];
    $kilo = $_GET['kilo'];
   
    
    if($fruit == 'apple'){
        echo "<img src='image/1.jpg' width='$size'>";
        echo "<h3> ราคาต่อกิโล : 100 บาท <br>";
        echo "จำนวนกิโล : $kilo กิโลกรัม <br>";
        $kilo *= 100;
        echo "ราคารวม : $kilo บาท<br> "; 
    }
    if($fruit == 'orange'){
        echo "<img src='image/2.jpg' width='$size'>";
        echo "<h3> ราคาต่อกิโล : 200 บาท<br> ";
        echo "จำนวนกิโล : $kilo กิโลกรัม<br>";
        $kilo *= 200;
        echo "ราคารวม : $kilo บาท<br> ";
    }
    if($fruit == 'grape'){
        echo "<img src='image/3.jpg' width='$size'>";
        echo "<h3> ราคาต่อกิโล : 300 บาท<br> ";
        echo "จำนวนกิโล : $kilo กิโลกรัม<br>";
        $kilo *= 300;
        echo "ราคารวม : $kilo บาท<br> ";
    }
    ?>
    
</body>
</html>