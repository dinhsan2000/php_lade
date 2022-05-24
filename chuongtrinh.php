<?php
include 'thuvien.php';
include 'quanly.php';
print "|*--------------------------------------------------------*|\n";
print "|        |CHƯƠNG TRÌNH QUẢN LÝ DANH SÁCh SINH VIÊN|        |\n";
print "|   1.Nhập | 2.Lưu | 3.Sửa | 4.Xoá | 5. Xem  |  0.Thoát    |\n"; // menu
print "|           | COPYRIGHT 2022 BY ĐINH TRỌNG SAN|            |\n";
print "|*--------------------------------------------------------*|\n";

start :
// Menu nhập lựa chọn
print "Mời nhập lựa chọn menu [0-4]: ";
$menu = scan_int();
switch ($menu) {
    case 1:
        read();
        break;
    case 2:
        write();
        break;
    case 3:
        edit_data();
        break;
    case 4:
        delete_data();
        break;
    case 5:
        view();
        break;
    case 0:
        print "Cảm ơn bạn đã sử dụng chương trình, Tạm Biệt";
        exit;
        break;
    default :
        print "Mời bạn nhập đúng lựa chọn Menu";
        break;
}
goto start;