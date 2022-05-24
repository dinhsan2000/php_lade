<?php
include 'db.php';
function read() {
    // Khai báo biến global
    global $name;
    global $age;
    global $gender;
print "Nhập tên sinh viên: ";
$name = scan_string();

print "Nhập tuổi sinh viên: ";
$age = scan_int();

print "Nhập giới tính 1 là Nam, 0 là Nữ: " ;
$gender = scan_bool();
}

function write()
{
    // Khai báo biến global
    global $name;
    global $age;
    global $gender;
//    print "|*---------------------------------|*\n";
//    print "| Tên Sinh Viên | Tuổi | Giới tính |\n";
//    print "|*--------------------------------*|\n";
//    printf ("| %-12s | %4s | %9s |\n", $name, $age, $gender ? "Nam" : "Nữ");
//    print "|*--------------------------------*|\n";
//}

    $sql = "
INSERT INTO `sv` SET `name` = '$name', `age` = '$age', `gender` = '$gender'";
    //die ($sql);
    db_q($sql);
}

function edit_data()
{
    global $name;
    global $age;
    global $gender;
    global $id;

    print "Nhập id sinh viên cần sửa: ";
    $id = scan_int();

    print "Nhập tên sinh viên: ";
    $name = scan_string();

    print "Nhập tuổi sinh viên: ";
    $age = scan_int();

    print "Nhập giới tính 1 là Nam, 0 là Nữ: " ;
    $gender = scan_bool();

    $sql = "
    UPDATE `sv` SET `name` = '$name', `age` = '$age', `gender` = '$gender' WHERE `student_id` = '{$id}'";
    //die ($sql);
    db_q($sql);
}
function delete_data()
{
    print "Nhập id sinh viên cần xoá: ";
    $id = scan_int();

    $sql = "
    DELETE  FROM `sv` WHERE `student_id` = '{$id}'";
    //die ($sql);
    db_q($sql);
}
function view()
{
$sql = "SELECT * FROM `sv`";
$ds = db_q($sql);

echo "\n +-------------------------------------+";
echo "\n | ID | Tên | Tuổi | Giới tính |";
echo "\n +-------------------------------------+";

foreach($ds as $dt)
{
    printf("\n | %2s | %-3s | %4s | %8s |",
        $dt["student_id"], $dt["name"], $dt["age"], $dt["gender"] == '1' ? "Nam" : "Nữ");
    echo "\n +-------------------------------------+";
}
}
?>