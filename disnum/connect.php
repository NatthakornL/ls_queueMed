<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

date_default_timezone_set("Asia/Bangkok");
$connect = mysqli_connect("localhost", "root", "", "ls_queue");
mysqli_set_charset($connect, "utf8");
// Check connection
if ($connect->connect_errno) {
    echo "Failed to connect to MySQL: " . $connect->connect_error;
    exit();
}
