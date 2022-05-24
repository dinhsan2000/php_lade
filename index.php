<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phần mềm thêm sửa xoá dữ liệu sinh viên</title>
    <style>
        table, tr, th {
            text-align: center;
        }
        a {
            font-size: 20px;
        }
    </style>
</head>
<body>
<h1>Phần mềm thêm sửa xoá dữ liệu sinh viên</h1>
<a href="form.php">Thêm mới</a>
<br>
<br>
<table border="1px" width="100%">
    <?php
require_once ('db.php');
$sql = "SELECT * FROM sv";
$ket_qua = mysqli_query($conn, $sql);
?>
    <tr>
    <th>Mã</th>
    <th>Tên</th>
    <th>Tuổi</th>
    <th>Năm sinh</th>
    <th>Giới tính</th>
    <th>Chiều cao</th>
    <th>Nhóm máu</th>
    <th>Thời gian</th>
     <th>Sửa</th>
     <th>Xoá</th>
    </tr>
    <tr>
        <?php foreach ($ket_qua as $row) {?>
        <td><?php echo $row['student_id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['age'] ?></td>
        <td><?php echo $row['brith_day'] ?></td>
        <td><?php echo $row['gender']== '1' ? "Nam" : "Nữ"?></td>
        <td><?php echo $row['height']?></td>
        <td><?php echo $row['blood']?></td>
        <td><?php echo date("d-m-Y H:i:s", strtotime($row['date_time'])) ?></td>
        <td><a href="sua.php?student_id=<?php echo $row['student_id'] ?>"</a>Sửa</td>
        <td><a href="xoa.php?student_id=<?php echo $row['student_id'] ?>" onclick="return confirm('Bạn có chắc muốn xoá bản ghi này không?');"</a>Xoá</td>
    </tr>
    <?php } ?>
</table>
<footer>
    <a>Copyright &copy <?php echo date("Y") ?> Đinh Trọng San</a>
</footer>
</body>
</html>
