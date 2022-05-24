<?php
// Nhập thêm thư viện đầu vào

// Khởi tạo hàm nhập xuất dữ liệu
print "Nhập tên: ";
$name = scan_string();

print "Nhập tuổi: ";
$age = scan_int();

print "Nhập cân nặng (kg): ";
$weight = scan_float();

print "Nhập nhóm máu: ";
$blood = scan_char();

print "Nhập giới tính";
$gender = scan_bool();

// Hiển thị ra dữ liệu đã nhập
print "*--------------------------------------------------------*\n";
print "| Tên thú nuôi | Tuổi | Cân Nặng | Nhóm máu | Giới tính |\n";
print "*--------------------------------------------------------*\n";
printf ("| %-12s | %4s | %5.1f KG | %8s | %9s |\n", $name, $age, $weight, $blood, $gender ? "đực" : "cái");
print "*--------------------------------------------------------*\n";

?>