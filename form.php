<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
<h1>Form nhập thông tin</h1>
<br>
<a href="index.php">Trang chủ</a>
<form action="process.php" method="post">
    <input type="text" name="ten" placeholder="Nhập tên">
    <br>
    <input type="text" name="tuoi" placeholder="Nhập tuổi">
    <br>
    <input type="text" name="nam_sinh" placeholder="Năm sinh">
    <br>
    <input type="text" name="height" placeholder="Nhập chiều cao">
    <br>
    <input type="text" name="blood" placeholder="Nhập nhóm máu">
    <br>
    <input type="text" name="gioitinh" placeholder="Nhập giới tính 1 = Nam, 0 = Nữ">
    <br>
    <input type="submit">
</form>
<footer>
    <a>Copyright &copy <?php echo date("Y") ?> Đinh Trọng San</a>
</footer>
</body>
</html>