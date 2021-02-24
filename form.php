<html>  
<head></head>  
<title>เลือกผลไม้</title>  
<body > 
<form method="get" action="cal.php">

เลือกผลไม้ :  
<select name="fruit">   
  <option value="Select">เลือก </option>}
   
  <option value="apple">แอปเปิ้ล</option>  
  <option value="orange">ส้ม</option>  
  <option value="grape">องุุ่น</option>  

</select> 

ขนาด  <input type="number" name="size" min="100" max="500"/>
<br>
เลือกขนาด:  

<input type="radio"  name="kilo" value="1">
        1
        <br>
<input type="radio"  name="kilo" value="2">
        2
        <br>
<input type="radio"  name="kilo" value="3">
        3
        <br>

        <input type="submit" value="submit" />





</body>  
</html> 