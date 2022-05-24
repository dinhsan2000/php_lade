<?php
$ten = $_POST['ten'];
$tuoi = $_POST['tuoi'];
$nam_sinh = $_POST['nam_sinh'];
$gioitinh = $_POST['gioitinh'];
$height = $_POST['height'];
$blood = $_POST['blood'];

include ('db.php');
$conn = mysqli_connect('localhost', 'root', '', 'sinhvien1');
//$sql = "SELECT * FROM sv";
$result = "INSERT INTO sv(name, age, brith_day, gender, height, blood) VALUES ('$ten', '$tuoi','$nam_sinh', '$gioitinh', '$height', '$blood')";
// echo ($result);
mysqli_query($conn, $result);
//header('Location: ./index.php');

