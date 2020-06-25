<!DOCTYPE html>
<html lang="en">
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
echo "<hr>";
$student = array (
  array("Volvo","M","(01/02/63)","N"),
  array("BMW","L","(02/06/62)","Y"),
  array("Saab","M","(03/07/62)","N"),
  array("Land","L","(04/11/63)","N"),
  array("Rover","M","(05/12/62)","Y")
);
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
</body>
</html>
