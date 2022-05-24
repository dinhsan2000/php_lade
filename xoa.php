<?php
include 'db.php';
$id=$_GET['student_id'];
$query=mysqli_query($conn,"SELECT * FROM `sv` WHERE student_id='$id'");
$row=mysqli_fetch_assoc($query);
$sql = "DELETE FROM `sv` WHERE `student_id` = '{$id}'";
mysqli_query($conn, $sql);
header('Location: ./index.php');
