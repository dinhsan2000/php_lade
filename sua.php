<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa thông tin sinh viên</title>
    <style>
        a {
            font-size: 20px;
        }
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<a href="index.php"> Quay về Trang chủ</a>
<?php
// Kết nối Database
include 'db.php';
$id=$_GET['student_id'];
$query=mysqli_query($conn,"select * from `sv` where student_id='$id'");
$row=mysqli_fetch_assoc($query);
?>
<form method="POST" class="form">
<label>Tên: <input type="text" value="<?php echo $row['name']; ?>" name="name"></label><br/>
<label>Tuổi: <input type="text" value="<?php echo $row['age']; ?>" name="age"></label><br/>
<label>Năm sinh: <input type="text" value="<?php echo $row['brith_day']; ?>" name="brith_day"></label><br/>
<label>Giới tính: <input type="text" value="<?php echo $row['gender']; ?>" name="gender"></label><br/>
<label>Chiều cao <input type="text" value="<?php echo $row['height']; ?>" name="height"></label><br/>
<label>Nhóm máu: <input type="text" value="<?php echo $row['blood']; ?>" name="blood"></label><br/>
<input type="submit" value="Update" name="update_baiviet">
<?php
if (isset($_POST['update_baiviet'])){
    $id=$_GET['student_id'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $brith_day= $_POST['brith_day'];
    $gender=$_POST['gender'];
    $height = $_POST['height'];
    $blood = $_POST['blood'];

// Tạo kết nối DB
    $conn = new mysqli("localhost", "root", "", "sinhvien1");

// Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE `sv` SET name='$name', age='$age', brith_day='$brith_day' , gender='$gender', height='$height', blood='$blood' WHERE student_id='$id'";
    echo ($sql);

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    header('Location: ./index.php');

    $conn->close();
}
?>
</form>
<br>
<footer>
    <a>Copyright &copy <?php echo date("Y") ?> Đinh Trọng San</a>
</footer>
</body>
</html>
