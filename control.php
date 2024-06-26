<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?php
include "connect.php";
date_default_timezone_set("Asia/Bangkok");
$chkdate = date("Y-m-d"); // Corrected the date format to YYYY-MM-DD
?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <link rel="icon" type="image/x-icon" href="./pic/queue.ico">
    <meta http-equiv="refresh" content="3" />
    <title>QueueOPDMedControl</title>

    <style type="text/css" media="screen">
    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box;
        -o-box-sizing: border-box;
        box-sizing: border-box;
    }

    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }


    body {
        color: white;
        background-color: #F2FFE3;
        font-family: sans-serif;
        margin: 0px
    }

    #centered {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-grow: 1;
        overflow-y: auto;
    }

    .head {
        flex-wrap: wrap;
        width: 100%;
        top: 0;
        text-align: center;
        font-size: 1.5vw;
        font-weight: 600;
        color: blue;

    }

    .times {
        flex-wrap: wrap;
        width: 100%;
        top: 3%;
        text-align: center;
        font-size: 0.8vw;
        color: #555;
    }

    /* box btn queue */
    .btnpg1 {
        align-items: center;
        justify-content: center;
        background-color: red;
        border: 1px solid #000;
        border-radius: 18px;
        color: black;
        padding: 10px 10px;
        font-size: 1vw;
        margin-top: 1%;
        margin-right: 1%;
        width: 15vw;
        height: auto;
    }

    .btnpg2 {
        align-items: center;
        justify-content: center;
        background-color: #FF6600;
        border: 1px solid #000;
        border-radius: 18px;
        color: black;
        padding: 10px 10px;
        font-size: 1vw;
        margin-top: 1%;
        margin-right: 1%;
        width: 15vw;
        height: auto;
    }

    .btnpg3 {
        align-items: center;
        justify-content: center;
        background-color: #FFE400;
        border: 1px solid #000;
        border-radius: 18px;
        color: black;
        padding: 10px 10px;
        font-size: 1vw;
        margin-top: 1%;
        margin-right: 1%;
        width: 15vw;
        height: auto;
    }

    .btnpg4 {
        align-items: center;
        justify-content: center;
        background-color: #6EB800;
        border: 1px solid #000;
        border-radius: 18px;
        color: black;
        padding: 10px 10px;
        font-size: 1vw;
        margin-top: 1%;
        margin-right: 1%;
        width: 15vw;
        height: auto;
    }

    .btnpg5 {
        align-items: center;
        justify-content: center;
        background-color: #0059CA;
        border: 1px solid #000;
        border-radius: 18px;
        color: black;
        padding: 10px 10px;
        font-size: 1vw;
        margin-top: 1%;
        margin-right: 1%;
        width: 15vw;
        height: auto;
    }

    .btnpg6 {
        align-items: center;
        justify-content: center;
        background-color: #6A00CA;
        border: 1px solid #000;
        border-radius: 18px;
        color: black;
        padding: 10px 10px;
        font-size: 1vw;
        margin-top: 1%;
        margin-right: 1%;
        width: 15vw;
        height: auto;
    }

    .btnpg7 {
        align-items: center;
        justify-content: center;
        background-color: #8B5300;
        border: 1px solid #000;
        border-radius: 18px;
        color: black;
        padding: 10px 10px;
        font-size: 1vw;
        margin-top: 1%;
        margin-right: 1%;
        width: 15vw;
        height: auto;
    }

    .btnpg8 {
        align-items: center;
        justify-content: center;
        background-color: #B1B1B1;
        border: 1px solid #000;
        border-radius: 18px;
        color: black;
        padding: 10px 10px;
        font-size: 1vw;
        margin-top: 1%;
        margin-right: 1%;
        width: 15vw;
        height: auto;
    }

    .btnpg9 {
        align-items: center;
        justify-content: center;
        background-color: #FF00FF;
        border: 1px solid #000;
        border-radius: 18px;
        color: black;
        padding: 10px 10px;
        font-size: 1vw;
        margin-top: 1%;
        margin-right: 1%;
        width: 15vw;
        height: auto;
    }

    .btnpg10 {
        align-items: center;
        justify-content: center;
        background-image: linear-gradient(120deg, rgba(255, 0, 0, 1) 60%, rgba(255, 255, 255, 1) 50%);
        border: 1px solid #000;
        border-radius: 18px;
        color: black;
        padding: 10px 10px;
        font-size: 1vw;
        margin-top: 1%;
        margin-right: 1%;
        width: 15vw;
        height: auto;
    }

    .btnpg11 {
        align-items: center;
        justify-content: center;
        background-image: linear-gradient(120deg, rgba(255, 102, 0, 1) 60%, rgba(255, 255, 255, 1) 50%);
        border: 1px solid #000;
        border-radius: 18px;
        color: black;
        padding: 10px 10px;
        font-size: 1vw;
        margin-top: 1%;
        margin-right: 1%;
        width: 15vw;
        height: auto;
    }

    .btnpg12 {
        align-items: center;
        justify-content: center;
        background-image: linear-gradient(120deg, rgba(255, 228, 0, 1) 60%, rgba(255, 255, 255, 1) 50%);
        border: 1px solid #000;
        border-radius: 18px;
        color: black;
        padding: 10px 10px;
        font-size: 1vw;
        margin-top: 1%;
        margin-right: 1%;
        width: 15vw;
        height: auto;
    }

    .btnpg13 {
        align-items: center;
        justify-content: center;
        background-image: linear-gradient(150deg, rgba(110, 184, 0, 1) 55%, rgba(255, 255, 255, 1) 100%);
        border: 1px solid #000;
        border-radius: 18px;
        color: black;
        padding: 10px 10px;
        font-size: 1vw;
        margin-top: 4%;
        margin-right: 1%;
    }

    .btnpg14 {
        align-items: center;
        justify-content: center;
        background-image: linear-gradient(150deg, rgba(0, 89, 202, 1) 55%, rgba(255, 255, 255, 1) 100%);
        border: 1px solid #000;
        border-radius: 18px;
        color: black;
        padding: 10px 10px;
        font-size: 1vw;
        margin-top: 4%;
        margin-right: 1%;
    }

    .btnpg15 {
        align-items: center;
        justify-content: center;
        background-image: linear-gradient(150deg, rgba(106, 0, 202, 1) 55%, rgba(255, 255, 255, 1) 100%);
        border: 1px solid #000;
        border-radius: 18px;
        color: black;
        padding: 10px 10px;
        font-size: 1vw;
        margin-top: 4%;
        margin-right: 1%;
    }

    /*END box btn queue*/

    .ct {
        flex-wrap: wrap;
        width: 100%;
        text-align: center;
        justify-content: center;
        font-size: 1.5vw;
        color: #fff;
        margin-bottom: 5%;
        font-weight: 600;
        text-shadow: 0 0 10px #0080FF;

    }

    .ct1 {
        flex-wrap: wrap;
        width: 100%;
        text-align: center;
        justify-content: center;
        align-items: center;
        font-size: 3vw;
        font-weight: 700;
        color: #fff;
        margin-top: 30%;
        margin-bottom: 30%;
        text-shadow: 0 0 30px #000;

    }

    .ct2 {
        text-align: center;
        align-items: center;
        justify-content: center;
        width: 100%;
        display: inline-flexbox;
        flex-wrap: wrap;
    }



    /* Style buttons */
    .btn {
        background-color: DodgerBlue;
        /* Blue background */
        border: none;
        /* Remove borders */
        color: white;
        /* White text */
        padding: 1vh 1vw;
        /* Some padding */
        font-size: 1.5vw;
        /* Set a font size */
        cursor: pointer;
        /* Mouse pointer on hover */
        text-align: center;
        align-items: center;
        justify-content: center;
        margin-right: 2px;
        margin-left: 2px;
        border-radius: 10px;
        flex-wrap: wrap;
    }

    /* Darker background on mouse-over */
    .btn:hover {
        background-color: RoyalBlue;
    }

    a {
        text-align: center;
        font-size: 20vw;
        text-decoration: none;
    }

    .btninfo {
        width: 30vw;
        height: 6vh;
        padding: 0.8vh 0;
        background-color: dodgerblue;
        border: 1px solid #000;
        color: #fff;
        border-radius: 12px;
        cursor: pointer;
        text-align: center;
        justify-items: center;
        align-items: center;
    }

    .btninfo:hover {
        background-color: deepskyblue;
    }

    .counter2 {
        width: 14vw;
        align-items: center;
        text-align: center;
        justify-content: center;
        font-size: 1.5vw;
        color: white;
        margin-bottom: 5%;
        font-weight: 600;
        text-shadow: 0 0 20px black;
    }


    #bottom1 {
        position: fixed;
        bottom: 0;
        width: 100%;
        color: #555;
        flex-wrap: wrap;
        font-size: 1vw;
        text-align: center;
        justify-content: center;
        margin-top: 2%;
    }

    .divider {
        width: 100%;
        border: 1px solid #555;
        margin-top: 0.5%;
        margin-bottom: 0.5%;
        border: 2px 2px;
    }

    .txt1 {
        flex-wrap: wrap;
        width: 100%;
        top: 0;
        text-align: center;
        font-size: 1.5vw;
        font-weight: 600;
        color: blue;
        margin-top: 1%;
    }

    .txt2 {
        flex-wrap: wrap;
        width: 100%;
        top: 0;
        text-align: center;
        font-size: 1vw;
        color: #FF5757;
        margin-bottom: 1%;
    }

    .tbq {
        background-color: #F2FFE3;
        align-items: center;
        justify-content: center;
        width: 100%;
        text-align: center;

    }

    tr {
        width: 100%;
    }

    th {
        font-size: 1.1vw;
        background-color: #ff355e;
        color: #F2FFE3;
        padding: 0.2%;

    }

    td {
        font-size: 1.2vw;
        background-color: #FFA0A0;
    }
    </style>

</head>

<body>
    <form method="post" action="" enctype="multipart/form-data">
        <div class="head">คิวเรียกรอเข้าห้องตรวจอายุรกรรม</div>
        <div class="times">
            <?php
            date_default_timezone_set("Asia/Bangkok");
            $currentDateTime = date("d-m-Y H:i:s");
            echo "วัน-เดือน-ปี | เวลา : $currentDateTime";
            ?>
        </div>

        <div id="centered">
            <!---------------------------------------------------------------->
            <?php
            // Check if a record for today's date exists
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) == 0) {
                // No record for today, insert a new one
                $ins = "INSERT INTO tb_queue (id, q_r1, q_r2, q_r3, q_r4, q_r5, q_r6, q_r7, q_r8, q_r9, q_r10, q_r11, q_r12, chk_date) VALUES ('$id', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$chkdate')";
                mysqli_query($connect, $ins) or die(mysqli_error($connect));
            }

            // Fetch the record
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

            if ($result->num_rows > 0) {
                // Fetch the row
                $row = $result->fetch_assoc();

                // Increment each value by 1
                $q_r1 = $row['q_r1'] + 1;
                $q_r2 = $row['q_r2'] + 0;
                $q_r3 = $row['q_r3'] + 0;
                $q_r1 = $row['q_r4'] + 0;
                $q_r2 = $row['q_r5'] + 0;
                $q_r3 = $row['q_r6'] + 0;
                $q_r1 = $row['q_r7'] + 0;
                $q_r2 = $row['q_r8'] + 0;
                $q_r3 = $row['q_r9'] + 0;
                $q_r1 = $row['q_r10'] + 0;
                $q_r2 = $row['q_r11'] + 0;
                $q_r3 = $row['q_r12'] + 0;


                if (isset($_POST['increment1'])) {
                    // Update the row with new values
                    $up = "UPDATE tb_queue SET q_r1 = q_r1 + 1 WHERE chk_date = '$chkdate'";
                    mysqli_query($connect, $up) or die(mysqli_error($connect));

                    // Refresh the result to fetch updated data
                    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                    $row = $result->fetch_assoc(); // Fetch the updated row
                }
                if (isset($_POST['increment01'])) {
                    // Update the row with new values
                    $up = "UPDATE tb_queue SET q_r1 = q_r1 + 5 WHERE chk_date = '$chkdate'";
                    mysqli_query($connect, $up) or die(mysqli_error($connect));

                    // Refresh the result to fetch updated data
                    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                    $row = $result->fetch_assoc(); // Fetch the updated row
                }
                if (isset($_POST['increment001'])) {
                    // Update the row with new values
                    $up = "UPDATE tb_queue SET q_r1 = q_r1 + 10 WHERE chk_date = '$chkdate'";
                    mysqli_query($connect, $up) or die(mysqli_error($connect));

                    // Refresh the result to fetch updated data
                    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                    $row = $result->fetch_assoc(); // Fetch the updated row
                }
            }
            ?>
            <div class="btnpg1">
                <div class="ct">ห้องตรวจ 1</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <?php echo '<div class="ct1" id="output-area">' . $row['q_r1'] . '</div>'; ?>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="increment1" class="btn">+1</button>
                    <button type="submit" name="increment01" class="btn">+5</button>
                    <button type="submit" name="increment001" class="btn">+10</button>
                    <!-- END Button -->
                </div>
            </div>
            <!---------------------------------------------------------------->
            <?php
            // Check if a record for today's date exists
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) == 0) {
                // No record for today, insert a new one
                $ins = "INSERT INTO tb_queue (id, q_r1, q_r2, q_r3, q_r4, q_r5, q_r6, q_r7, q_r8, q_r9, q_r10, q_r11, q_r12, chk_date) VALUES ('$id', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$chkdate')";
                mysqli_query($connect, $ins) or die(mysqli_error($connect));
            }

            // Fetch the record
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

            if ($result->num_rows > 0) {
                // Fetch the row
                $row = $result->fetch_assoc();

                // Increment each value by 1
                $q_r1 = $row['q_r1'] + 0;
                $q_r2 = $row['q_r2'] + 1;
                $q_r3 = $row['q_r3'] + 0;
                $q_r1 = $row['q_r4'] + 0;
                $q_r2 = $row['q_r5'] + 0;
                $q_r3 = $row['q_r6'] + 0;
                $q_r1 = $row['q_r7'] + 0;
                $q_r2 = $row['q_r8'] + 0;
                $q_r3 = $row['q_r9'] + 0;
                $q_r1 = $row['q_r10'] + 0;
                $q_r2 = $row['q_r11'] + 0;
                $q_r3 = $row['q_r12'] + 0;


                if (isset($_POST['increment2'])) {
                    // Update the row with new values
                    $up = "UPDATE tb_queue SET q_r2 = q_r2 + 1 WHERE chk_date = '$chkdate'";
                    mysqli_query($connect, $up) or die(mysqli_error($connect));

                    // Refresh the result to fetch updated data
                    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                    $row = $result->fetch_assoc(); // Fetch the updated row
                }
            }
            ?>
            <div class="btnpg2">
                <div class="ct">ห้องตรวจ 2</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <?php echo '<div class="ct1" id="output-area">' . $row['q_r2'] . '</div>'; ?>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="increment2" class="btn">+1</button>
                    <!-- END Button -->
                </div>
            </div>
            <!---------------------------------------------------------------->
            <?php
            // Check if a record for today's date exists
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) == 0) {
                // No record for today, insert a new one
                $ins = "INSERT INTO tb_queue (id, q_r1, q_r2, q_r3, q_r4, q_r5, q_r6, q_r7, q_r8, q_r9, q_r10, q_r11, q_r12, chk_date) VALUES ('$id', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$chkdate')";
                mysqli_query($connect, $ins) or die(mysqli_error($connect));
            }

            // Fetch the record
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

            if ($result->num_rows > 0) {
                // Fetch the row
                $row = $result->fetch_assoc();

                // Increment each value by 1
                $q_r1 = $row['q_r1'] + 0;
                $q_r2 = $row['q_r2'] + 0;
                $q_r3 = $row['q_r3'] + 1;
                $q_r1 = $row['q_r4'] + 0;
                $q_r2 = $row['q_r5'] + 0;
                $q_r3 = $row['q_r6'] + 0;
                $q_r1 = $row['q_r7'] + 0;
                $q_r2 = $row['q_r8'] + 0;
                $q_r3 = $row['q_r9'] + 0;
                $q_r1 = $row['q_r10'] + 0;
                $q_r2 = $row['q_r11'] + 0;
                $q_r3 = $row['q_r12'] + 0;

                if (isset($_POST['increment3'])) {
                    // Update the row with new values
                    $up = "UPDATE tb_queue SET q_r3 = q_r3 + 1 WHERE chk_date = '$chkdate'";
                    mysqli_query($connect, $up) or die(mysqli_error($connect));

                    // Refresh the result to fetch updated data
                    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                    $row = $result->fetch_assoc(); // Fetch the updated row
                }
            }
            ?>
            <div class="btnpg3">
                <div class="ct">ห้องตรวจ 3</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <?php echo '<div class="ct1" id="output-area">' . $row['q_r3'] . '</div>'; ?>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="increment3" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                </div>
            </div>
            <!---------------------------------------------------------------->
            <?php
            // Check if a record for today's date exists
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) == 0) {
                // No record for today, insert a new one
                $ins = "INSERT INTO tb_queue (id, q_r1, q_r2, q_r3, q_r4, q_r5, q_r6, q_r7, q_r8, q_r9, q_r10, q_r11, q_r12, chk_date) VALUES ('$id', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$chkdate')";
                mysqli_query($connect, $ins) or die(mysqli_error($connect));
            }

            // Fetch the record
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

            if ($result->num_rows > 0) {
                // Fetch the row
                $row = $result->fetch_assoc();

                // Increment each value by 1
                $q_r1 = $row['q_r1'] + 0;
                $q_r2 = $row['q_r2'] + 0;
                $q_r3 = $row['q_r3'] + 0;
                $q_r1 = $row['q_r4'] + 1;
                $q_r2 = $row['q_r5'] + 0;
                $q_r3 = $row['q_r6'] + 0;
                $q_r1 = $row['q_r7'] + 0;
                $q_r2 = $row['q_r8'] + 0;
                $q_r3 = $row['q_r9'] + 0;
                $q_r1 = $row['q_r10'] + 0;
                $q_r2 = $row['q_r11'] + 0;
                $q_r3 = $row['q_r12'] + 0;


                if (isset($_POST['increment4'])) {
                    // Update the row with new values
                    $up = "UPDATE tb_queue SET q_r4 = q_r4 + 1 WHERE chk_date = '$chkdate'";
                    mysqli_query($connect, $up) or die(mysqli_error($connect));

                    // Refresh the result to fetch updated data
                    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                    $row = $result->fetch_assoc(); // Fetch the updated row
                }
            }
            ?>
            <div class="btnpg4">
                <div class="ct">ห้องตรวจ 4</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <?php echo '<div class="ct1" id="output-area">' . $row['q_r4'] . '</div>'; ?>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="increment4" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                </div>
            </div>
            <!---------------------------------------------------------------->
            <?php
            // Check if a record for today's date exists
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) == 0) {
                // No record for today, insert a new one
                $ins = "INSERT INTO tb_queue (id, q_r1, q_r2, q_r3, q_r4, q_r5, q_r6, q_r7, q_r8, q_r9, q_r10, q_r11, q_r12, chk_date) VALUES ('$id', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$chkdate')";
                mysqli_query($connect, $ins) or die(mysqli_error($connect));
            }

            // Fetch the record
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

            if ($result->num_rows > 0) {
                // Fetch the row
                $row = $result->fetch_assoc();

                // Increment each value by 1
                $q_r1 = $row['q_r1'] + 0;
                $q_r2 = $row['q_r2'] + 0;
                $q_r3 = $row['q_r3'] + 0;
                $q_r1 = $row['q_r4'] + 0;
                $q_r2 = $row['q_r5'] + 1;
                $q_r3 = $row['q_r6'] + 0;
                $q_r1 = $row['q_r7'] + 0;
                $q_r2 = $row['q_r8'] + 0;
                $q_r3 = $row['q_r9'] + 0;
                $q_r1 = $row['q_r10'] + 0;
                $q_r2 = $row['q_r11'] + 0;
                $q_r3 = $row['q_r12'] + 0;


                if (isset($_POST['increment5'])) {
                    // Update the row with new values
                    $up = "UPDATE tb_queue SET q_r5 = q_r5 + 1 WHERE chk_date = '$chkdate'";
                    mysqli_query($connect, $up) or die(mysqli_error($connect));

                    // Refresh the result to fetch updated data
                    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                    $row = $result->fetch_assoc(); // Fetch the updated row
                }
            }
            ?>
            <div class="btnpg5">
                <div class="ct">ห้องตรวจ 5</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <?php echo '<div class="ct1" id="output-area">' . $row['q_r5'] . '</div>'; ?>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="increment5" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                </div>
            </div>
            <!---------------------------------------------------------------->
            <?php
            // Check if a record for today's date exists
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) == 0) {
                // No record for today, insert a new one
                $ins = "INSERT INTO tb_queue (id, q_r1, q_r2, q_r3, q_r4, q_r5, q_r6, q_r7, q_r8, q_r9, q_r10, q_r11, q_r12, chk_date) VALUES ('$id', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$chkdate')";
                mysqli_query($connect, $ins) or die(mysqli_error($connect));
            }

            // Fetch the record
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

            if ($result->num_rows > 0) {
                // Fetch the row
                $row = $result->fetch_assoc();

                // Increment each value by 1
                $q_r1 = $row['q_r1'] + 0;
                $q_r2 = $row['q_r2'] + 0;
                $q_r3 = $row['q_r3'] + 0;
                $q_r1 = $row['q_r4'] + 0;
                $q_r2 = $row['q_r5'] + 0;
                $q_r3 = $row['q_r6'] + 1;
                $q_r1 = $row['q_r7'] + 0;
                $q_r2 = $row['q_r8'] + 0;
                $q_r3 = $row['q_r9'] + 0;
                $q_r1 = $row['q_r10'] + 0;
                $q_r2 = $row['q_r11'] + 0;
                $q_r3 = $row['q_r12'] + 0;


                if (isset($_POST['increment6'])) {
                    // Update the row with new values
                    $up = "UPDATE tb_queue SET q_r6 = q_r6 + 1 WHERE chk_date = '$chkdate'";
                    mysqli_query($connect, $up) or die(mysqli_error($connect));

                    // Refresh the result to fetch updated data
                    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                    $row = $result->fetch_assoc(); // Fetch the updated row
                }
            }
            ?>
            <div class="btnpg6">
                <div class="ct">ห้องตรวจ 6</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <?php echo '<div class="ct1" id="output-area">' . $row['q_r6'] . '</div>'; ?>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="increment6" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                </div>
            </div>

        </div>
        <!--=========================================================-->
        <div id="centered">
            <?php
            // Check if a record for today's date exists
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) == 0) {
                // No record for today, insert a new one
                $ins = "INSERT INTO tb_queue (id, q_r1, q_r2, q_r3, q_r4, q_r5, q_r6, q_r7, q_r8, q_r9, q_r10, q_r11, q_r12, chk_date) VALUES ('$id', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$chkdate')";
                mysqli_query($connect, $ins) or die(mysqli_error($connect));
            }

            // Fetch the record
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

            if ($result->num_rows > 0) {
                // Fetch the row
                $row = $result->fetch_assoc();

                // Increment each value by 1
                $q_r1 = $row['q_r1'] + 0;
                $q_r2 = $row['q_r2'] + 0;
                $q_r3 = $row['q_r3'] + 0;
                $q_r1 = $row['q_r4'] + 0;
                $q_r2 = $row['q_r5'] + 0;
                $q_r3 = $row['q_r6'] + 0;
                $q_r1 = $row['q_r7'] + 1;
                $q_r2 = $row['q_r8'] + 0;
                $q_r3 = $row['q_r9'] + 0;
                $q_r1 = $row['q_r10'] + 0;
                $q_r2 = $row['q_r11'] + 0;
                $q_r3 = $row['q_r12'] + 0;


                if (isset($_POST['increment7'])) {
                    // Update the row with new values
                    $up = "UPDATE tb_queue SET q_r7 = q_r7 + 1 WHERE chk_date = '$chkdate'";
                    mysqli_query($connect, $up) or die(mysqli_error($connect));

                    // Refresh the result to fetch updated data
                    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                    $row = $result->fetch_assoc(); // Fetch the updated row
                }
            }
            ?>
            <div class="btnpg7">
                <div class="ct">ห้องตรวจ 7</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <?php echo '<div class="ct1" id="output-area">' . $row['q_r7'] . '</div>'; ?>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="increment7" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                </div>
            </div>
            <!---------------------------------------------------------------->
            <?php
            // Check if a record for today's date exists
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) == 0) {
                // No record for today, insert a new one
                $ins = "INSERT INTO tb_queue (id, q_r1, q_r2, q_r3, q_r4, q_r5, q_r6, q_r7, q_r8, q_r9, q_r10, q_r11, q_r12, chk_date) VALUES ('$id', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$chkdate')";
                mysqli_query($connect, $ins) or die(mysqli_error($connect));
            }

            // Fetch the record
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

            if ($result->num_rows > 0) {
                // Fetch the row
                $row = $result->fetch_assoc();

                // Increment each value by 1
                $q_r1 = $row['q_r1'] + 0;
                $q_r2 = $row['q_r2'] + 0;
                $q_r3 = $row['q_r3'] + 0;
                $q_r1 = $row['q_r4'] + 0;
                $q_r2 = $row['q_r5'] + 0;
                $q_r3 = $row['q_r6'] + 0;
                $q_r1 = $row['q_r7'] + 0;
                $q_r2 = $row['q_r8'] + 1;
                $q_r3 = $row['q_r9'] + 0;
                $q_r1 = $row['q_r10'] + 0;
                $q_r2 = $row['q_r11'] + 0;
                $q_r3 = $row['q_r12'] + 0;


                if (isset($_POST['increment8'])) {
                    // Update the row with new values
                    $up = "UPDATE tb_queue SET q_r8 = q_r8 + 1 WHERE chk_date = '$chkdate'";
                    mysqli_query($connect, $up) or die(mysqli_error($connect));

                    // Refresh the result to fetch updated data
                    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                    $row = $result->fetch_assoc(); // Fetch the updated row
                }
            }
            ?>
            <div class="btnpg8">
                <div class="ct">ห้องตรวจ 8</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <?php echo '<div class="ct1" id="output-area">' . $row['q_r8'] . '</div>'; ?>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="increment8" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                </div>
            </div>
            <!---------------------------------------------------------------->
            <?php
            // Check if a record for today's date exists
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) == 0) {
                // No record for today, insert a new one
                $ins = "INSERT INTO tb_queue (id, q_r1, q_r2, q_r3, q_r4, q_r5, q_r6, q_r7, q_r8, q_r9, q_r10, q_r11, q_r12, chk_date) VALUES ('$id', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$chkdate')";
                mysqli_query($connect, $ins) or die(mysqli_error($connect));
            }

            // Fetch the record
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

            if ($result->num_rows > 0) {
                // Fetch the row
                $row = $result->fetch_assoc();

                // Increment each value by 1
                $q_r1 = $row['q_r1'] + 0;
                $q_r2 = $row['q_r2'] + 0;
                $q_r3 = $row['q_r3'] + 0;
                $q_r1 = $row['q_r4'] + 0;
                $q_r2 = $row['q_r5'] + 0;
                $q_r3 = $row['q_r6'] + 0;
                $q_r1 = $row['q_r7'] + 0;
                $q_r2 = $row['q_r8'] + 0;
                $q_r3 = $row['q_r9'] + 1;
                $q_r1 = $row['q_r10'] + 0;
                $q_r2 = $row['q_r11'] + 0;
                $q_r3 = $row['q_r12'] + 0;


                if (isset($_POST['increment9'])) {
                    // Update the row with new values
                    $up = "UPDATE tb_queue SET q_r9 = q_r9 + 1 WHERE chk_date = '$chkdate'";
                    mysqli_query($connect, $up) or die(mysqli_error($connect));

                    // Refresh the result to fetch updated data
                    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                    $row = $result->fetch_assoc(); // Fetch the updated row
                }
            }
            ?>
            <div class="btnpg9">
                <div class="ct">ห้องตรวจ 9</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <?php echo '<div class="ct1" id="output-area">' . $row['q_r9'] . '</div>'; ?>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="increment9" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                </div>
            </div>
            <!---------------------------------------------------------------->
            <?php
            // Check if a record for today's date exists
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) == 0) {
                // No record for today, insert a new one
                $ins = "INSERT INTO tb_queue (id, q_r1, q_r2, q_r3, q_r4, q_r5, q_r6, q_r7, q_r8, q_r9, q_r10, q_r11, q_r12, chk_date) VALUES ('$id', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$chkdate')";
                mysqli_query($connect, $ins) or die(mysqli_error($connect));
            }

            // Fetch the record
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

            if ($result->num_rows > 0) {
                // Fetch the row
                $row = $result->fetch_assoc();

                // Increment each value by 1
                $q_r1 = $row['q_r1'] + 0;
                $q_r2 = $row['q_r2'] + 0;
                $q_r3 = $row['q_r3'] + 0;
                $q_r1 = $row['q_r4'] + 0;
                $q_r2 = $row['q_r5'] + 0;
                $q_r3 = $row['q_r6'] + 0;
                $q_r1 = $row['q_r7'] + 0;
                $q_r2 = $row['q_r8'] + 0;
                $q_r3 = $row['q_r9'] + 0;
                $q_r1 = $row['q_r10'] + 1;
                $q_r2 = $row['q_r11'] + 0;
                $q_r3 = $row['q_r12'] + 0;


                if (isset($_POST['increment10'])) {
                    // Update the row with new values
                    $up = "UPDATE tb_queue SET q_r10 = q_r10 + 1 WHERE chk_date = '$chkdate'";
                    mysqli_query($connect, $up) or die(mysqli_error($connect));

                    // Refresh the result to fetch updated data
                    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                    $row = $result->fetch_assoc(); // Fetch the updated row
                }
            }
            ?>
            <div class="btnpg10">
                <div class="ct">ห้องตรวจ 10</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <?php echo '<div class="ct1" id="output-area">' . $row['q_r10'] . '</div>'; ?>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="increment10" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                </div>
            </div>
            <!---------------------------------------------------------------->
            <?php
            // Check if a record for today's date exists
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) == 0) {
                // No record for today, insert a new one
                $ins = "INSERT INTO tb_queue (id, q_r1, q_r2, q_r3, q_r4, q_r5, q_r6, q_r7, q_r8, q_r9, q_r10, q_r11, q_r12, chk_date) VALUES ('$id', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$chkdate')";
                mysqli_query($connect, $ins) or die(mysqli_error($connect));
            }

            // Fetch the record
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

            if ($result->num_rows > 0) {
                // Fetch the row
                $row = $result->fetch_assoc();

                // Increment each value by 1
                $q_r1 = $row['q_r1'] + 0;
                $q_r2 = $row['q_r2'] + 0;
                $q_r3 = $row['q_r3'] + 0;
                $q_r1 = $row['q_r4'] + 0;
                $q_r2 = $row['q_r5'] + 0;
                $q_r3 = $row['q_r6'] + 0;
                $q_r1 = $row['q_r7'] + 0;
                $q_r2 = $row['q_r8'] + 0;
                $q_r3 = $row['q_r9'] + 0;
                $q_r1 = $row['q_r10'] + 0;
                $q_r2 = $row['q_r11'] + 1;
                $q_r3 = $row['q_r12'] + 0;


                if (isset($_POST['increment11'])) {
                    // Update the row with new values
                    $up = "UPDATE tb_queue SET q_r11 = q_r11 + 1 WHERE chk_date = '$chkdate'";
                    mysqli_query($connect, $up) or die(mysqli_error($connect));

                    // Refresh the result to fetch updated data
                    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                    $row = $result->fetch_assoc(); // Fetch the updated row
                }
            }
            ?>
            <div class="btnpg11">
                <div class="ct">ห้องตรวจ 11</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <?php echo '<div class="ct1" id="output-area">' . $row['q_r11'] . '</div>'; ?>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="increment11" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                </div>
            </div>
            <!---------------------------------------------------------------->
            <?php
            // Check if a record for today's date exists
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) == 0) {
                // No record for today, insert a new one
                $ins = "INSERT INTO tb_queue (id, q_r1, q_r2, q_r3, q_r4, q_r5, q_r6, q_r7, q_r8, q_r9, q_r10, q_r11, q_r12, chk_date) VALUES ('$id', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$chkdate')";
                mysqli_query($connect, $ins) or die(mysqli_error($connect));
            }

            // Fetch the record
            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate'";
            $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

            if ($result->num_rows > 0) {
                // Fetch the row
                $row = $result->fetch_assoc();

                // Increment each value by 1
                $q_r1 = $row['q_r1'] + 0;
                $q_r2 = $row['q_r2'] + 0;
                $q_r3 = $row['q_r3'] + 0;
                $q_r1 = $row['q_r4'] + 0;
                $q_r2 = $row['q_r5'] + 0;
                $q_r3 = $row['q_r6'] + 0;
                $q_r1 = $row['q_r7'] + 0;
                $q_r2 = $row['q_r8'] + 0;
                $q_r3 = $row['q_r9'] + 0;
                $q_r1 = $row['q_r10'] + 0;
                $q_r2 = $row['q_r11'] + 0;
                $q_r3 = $row['q_r12'] + 1;


                if (isset($_POST['increment12'])) {
                    // Update the row with new values
                    $up = "UPDATE tb_queue SET q_r12 = q_r12 + 1 WHERE chk_date = '$chkdate'";
                    mysqli_query($connect, $up) or die(mysqli_error($connect));

                    // Refresh the result to fetch updated data
                    $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                    $row = $result->fetch_assoc(); // Fetch the updated row
                }
            }
            ?>
            <div class="btnpg12">
                <div class="ct">ห้องตรวจ 12</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <?php echo '<div class="ct1" id="output-area">' . $row['q_r12'] . '</div>'; ?>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="increment12" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                </div>
            </div>
            <!---------------------------------------------------------------->

        </div>
        <div id="centered" style="margin-top: 1%;"><a class="btn btninfo" href="#" class="fas fa-hand-holding"><label
                    class="counter2">เเก้ไขหน้าจอเเสดงห้องตรวจ</label></a>

        </div>

        <div id="bottom1">© CopyRight 2024 | IT Center Lerdsin Hospital</div>
    </form>

</body>

</html>