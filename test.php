<!DOCTYPE html>
<html>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: center;
}
</style>
<body>

<?php
/*
จงเขียนโปรแกรมดังต่อไปนี้

- เขียนโปรแกรมเก็บข้อมูลนักเรียนให้อยู่ในรูปแบบของ Array โดยเก็บ ชื่อสกุล, เพศ(ชาย=M, หญิง=L), วันเดือนปีเกิด (dd/mm/YY), 
  สถานะการเรียน (มาเรียน=Y, ขาดเรียน=N)
- เขียนโปรแกรมแสดงข้อมูลนักเรียนให้อยู่ในรูปแบบตารางให้สวยงาม โดยใช้คำสั่ง Loop: while, for, foreach
- ในช่องเพศ ให้แสดงเป็นรูปภาพผู้ชาย หรือผู้หญิง
- ในตารางช่องสถานะการเรียน หากมาเรียน ให้ใส่เป็นรูปภาพเครื่องหมายถูก หากขาดเรียน ให้ใส่เป็นรูปภาพเครื่องหมายผิด

// คำสั่งที่ต้องใช้ทั้งหมดในโปรแกรมนี้: 
  HTML: table, th, tr, td, img
  PHP: if,else,count,array,while,for,foreach
*/

//while



/* $student = array (
  array("Volvo","M","(01/02/63)","N"),
  array("BMW","L","(02/06/62)","Y"),
  array("Saab","M","(03/07/62)","N"),
  array("Land Rover","L","(04/11/63)","N"),
  array("Land Rover","M","(05/12/62)","Y")
);
echo "<table align=center><tr><th>ชื่อสกุล</th><th>เพศ</th><th>วันเดือนปีเกิด</th><th>สถานะการเรียน</th></tr>";
for ($row = 0; $row < 4; $row++) {
  echo"<tr>";
  for ($col = 0; $col < 4; $col++) {
    echo"<td>".$student[$row][$col]."</td>";
  }
    
  echo "</tr>\n";
}
echo "</table>";
?>*/

//for
echo "<hr>";
$student = array (
  array("Volvo","M","(01/02/63)","N"),
  array("BMW","L","(02/06/62)","Y"),
  array("Saab","M","(03/07/62)","N"),
  array("Land","L","(04/11/63)","N"),
  array("Rover","M","(05/12/62)","Y")
);
$n = count($student);
echo "<table align=center><tr><th>ชื่อสกุล</th><th>เพศ</th><th>วันเดือนปีเกิด</th><th>สถานะการเรียน</th></tr>";
for($row = 0; $row < count($student); $row++) {// แสดงแถวแต่ละแถว 
  echo "<tr>";
  for($col = 0; $col < count($student[$col]); $col++){ //$col แสดงค่าแต่ละค่าที่อยู่ในแต่ละแถว
  //echo $student[$row][$col];
    echo "<td>";
    if($col == 1){
      if($student[$row][$col] == "M"){
        echo '<img src="images/man.png" alt="icon" />';
      }else{  
        echo '<img src="images/women.png" alt="icon" />';
      }
    }elseif($col == 3) {
      if($student[$row][$col] == "Y"){
        echo '<img src="images/true_1.png" alt="icon" />';
      }else{
        echo '<img src="images/flase.png" alt="icon" />';
      }
    }else{
      echo $student[$row][$col];
    }
    echo "</td>";
  }
  echo "</tr>\n";
}
echo "</table>";
?>

<?php
echo "<hr>";
echo "<table align=center><tr><th>ชื่อสกุล</th><th>เพศ</th><th>วันเดือนปีเกิด</th><th>สถานะการเรียน</th></tr>";
$row = 0;
while($row < count($student)){
  echo "<tr>";
  $col = 0;
  while($col < count($student[$row])){
    echo "<td>";
    if($col == 1){
      if($student[$row][$col] == "M"){
        echo '<img src="images/man.png" alt="icon" />';
      }else {
        echo '<img src="images/women.png" alt="icon" />';
      }
    }elseif($col == 3){
      if($student[$row][$col] == "Y"){
        echo '<img src="images/true_1.png" alt="icon" />';
      }else {
        echo '<img src="images/flase.png" alt="icon" />';
      }
    }else {
      echo $student[$row][$col];
    }
    echo "</td>";
    $col++;
  }
  echo "</tr>";
$row++;
}
echo "</table>";
?>

<?php
echo "<hr>";
echo "<table align=center><tr><th>ชื่อสกุล</th><th>เพศ</th><th>วันเดือนปีเกิด</th><th>สถานะการเรียน</th></tr>"; 
  foreach ($student as $key => $value){
      echo "<tr>";
      foreach ($value as $key2 => $value2){
          echo "<td>";
          if($key2 == 1){
            if($value2 == "M"){
              echo '<img src="images/man.png" alt="icon" />';
            }else{  
              echo '<img src="images/women.png" alt="icon" />';
            }

          }elseif($key2 == 3){
            if($value2 == "Y"){
              echo '<img src="images/true_1.png" alt="icon" />';
            }else{
              echo '<img src="images/flase.png" alt="icon" />';
            }
          }else{
            echo $value2;
          }
          echo "</td>";
      }
      echo "</tr>";
  }
  echo "</table>";  
?>
</body>
</html>



     
