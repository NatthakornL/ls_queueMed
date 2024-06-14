<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<?php
include "connect.php";
date_default_timezone_set("Asia/Bangkok");
$chkdate = date("Y-m-d"); // Corrected the date format to YYYY-MM-DD
?>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta http-equiv="refresh" content="3" />
    <link rel="icon" type="image/x-icon" href="./pic/queue.ico">
    <link rel="stylesheet" href="style.css" />
    <title>QueueOPD-Med</title>


</head>

<body>
    <div class="head">คิวเรียกรอเข้าห้องตรวจอายุรกรรม</div>
    <div class="times">
        <?php
        date_default_timezone_set("Asia/Bangkok");
        $currentDateTime = date("d-m-Y H:i:s");
        echo "วัน-เดือน-ปี | เวลา : $currentDateTime";
        ?>
    </div>
    <form method="get" action="" enctype="multipart/form-data">
        <div id="centered">
            <?php

            $sql = "SELECT * FROM tb_queue WHERE chk_date = '$chkdate' ";
            $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="btnpg1">
                    <div class="pu1"><label class="counter">ห้องตรวจ 1</label></div>
                    <div class="pu01"><label class="counter1"><?php echo $row['q_r1']; ?></label></div>
                    <div class="pu001"><label class="counter2">พญ.อินทรานันท์</label></div>
                </div>
                <div class="btnpg2">
                    <div class="pu2"><label class="counter">ห้องตรวจ 2</label></div>
                    <div class="pu02"><label class="counter1"><?php echo $row['q_r2']; ?></label></div>
                    <div class="pu002"><label class="counter2">พญ.อินทรานันท์</label></div>

                </div>
                <div class="btnpg3">
                    <div class="pu3"><label class="counter">ห้องตรวจ 3</label></div>
                    <div class="pu03"><label class="counter1"><?php echo $row['q_r3']; ?></label></div>
                    <div class="pu003"><label class="counter2">พญ.อินทรานันท์</label></div>
                </div>
                <div class="btnpg4">
                    <div class="pu4"><label class="counter">ห้องตรวจ 4</label></div>
                    <div class="pu04"><label class="counter1"><?php echo $row['q_r4']; ?></label></div>
                    <div class="pu004"><label class="counter2">พญ.อินทรานันท์</label></div>
                </div>
                <div class="btnpg5">
                    <div class="pu5"><label class="counter">ห้องตรวจ 5</label></div>
                    <div class="pu05"><label class="counter1"><?php echo $row['q_r5']; ?></label></div>
                    <div class="pu005"><label class="counter2">พญ.อินทรานันท์</label></div>
                </div>
                <div class="btnpg6">
                    <div class="pu6"><label class="counter">ห้องตรวจ 6</label></div>
                    <div class="pu06"><label class="counter1"><?php echo $row['q_r6']; ?></label></div>
                    <div class="pu006"><label class="counter2">พญ.อินทรานันท์</label></div>
                </div>

        </div><br><br>

        <div id="centered">
            <div class="btnpg7">
                <div class="pu7"><label class="counter">ห้องตรวจ 7</label></div>
                <div class="pu07"><label class="counter1"><?php echo $row['q_r7']; ?></label></div>
                <div class="pu007"><label class="counter2">พญ.อินทรานันท์</label></div>
            </div>
            <div class="btnpg8">
                <div class="pu8"><label class="counter">ห้องตรวจ 8</label></div>
                <div class="pu08"><label class="counter1"><?php echo $row['q_r8']; ?></label></div>
                <div class="pu008"><label class="counter2">พญ.อินทรานันท์</label></div>
            </div>
            <div class="btnpg9">
                <div class="pu9"><label class="counter">ห้องตรวจ 9</label></div>
                <div class="pu09"><label class="counter1"><?php echo $row['q_r9']; ?></label></div>
                <div class="pu009"><label class="counter2">พญ.อินทรานันท์</label></div>
            </div>
            <div class="btnpg10">
                <div class="pu10"><label class="counter">ห้องตรวจ 10</label></div>
                <div class="pu010"><label class="counter1"><?php echo $row['q_r10']; ?></label></div>
                <div class="pu0010"><label class="counter2">พญ.อินทรานันท์</label></div>
            </div>
            <div class="btnpg11">
                <div class="pu11"><label class="counter">ห้องตรวจ 11</label></div>
                <div class="pu011"><label class="counter1"><?php echo $row['q_r11']; ?></label></div>
                <div class="pu0011"><label class="counter2">พญ.อินทรานันท์</label></div>
            </div>
            <div class="btnpg12">
                <div class="pu12"><label class="counter">ห้องตรวจ 12</label></div>
                <div class="pu012"><label class="counter1"><?php echo $row['q_r12']; ?></label></div>
                <div class="pu0012"><label class="counter2">พญ.อินทรานันท์</label></div>
            </div>

        </div>
    <?php
                mysqli_close($connect);
            }
    ?>
    </form>
    <div id="centered1">
        <div class="btnpgqr">
            <div style="font-size: 1.5vw; color: #fff; font-weight: 600; text-align: center;">เเสกนดูคิว</div><br>
            <div class="pg1">
                <img class="imgqr" src="https://quickchart.io/qr?text=http%3A%2F%2Flocalhost%3A9999%2Fls_queueMed%2Fmpmain.php&size=300" />

            </div>
        </div>
    </div>

    <div id="bottom1">© CopyRight 2024 | IT Center Lerdsin Hospital</div>
</body>

</html>