<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<?php
session_start();


?>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta http-equiv="refresh" content="3" />
    <link rel="icon" type="image/x-icon" href="./pic/queue.ico">
    <title>QueueOPD-Med</title>

    <style type="text/css" media="screen">
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
            text-align: center;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            overflow-y: auto;
        }

        #centered1 {
            display: flex;
            align-items: right;
            justify-content: right;
            flex-grow: 1;
            overflow-y: auto;
        }

        .pg1 {
            flex-wrap: wrap;
            width: 300px;
            height: 300px;
            text-align: center;
            justify-content: center;
            align-items: center;
            font-weight: 700;
            color: white;
            background-color: #555;

        }

        .head {
            flex-wrap: wrap;
            width: 100%;
            top: 0;
            text-align: center;
            font-size: 2vw;
            font-weight: 600;
            color: blue;

        }

        .times {
            flex-wrap: wrap;
            width: 100%;
            top: 3%;
            text-align: center;
            font-size: 1vw;
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
            padding: 22px 32px;
            font-size: 1vw;
            margin-right: 1%;
        }

        .btnpg2 {
            text-align: center;
            align-items: center;
            justify-content: center;
            background-color: #FF6600;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            font-size: 1vw;
            margin-right: 1%;
            width: 14vw;
            height: 30vh;
            padding: 22px 32px;
        }

        .bg2 {
            align-items: center;
            justify-content: center;
            background-color: #B1B1B1;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            font-size: 1vw;
            margin-top: 5%;
            width: 14vw;
            height: 6vh;
        }

        .btnpg3 {
            align-items: center;
            justify-content: center;
            background-color: #FFE400;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 22px 32px;
            font-size: 1vw;
            margin-top: 5%;
            margin-right: 2%;
        }

        .btnpg4 {
            align-items: center;
            justify-content: center;
            background-color: #6EB800;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 22px 32px;
            font-size: 1vw;
            margin-top: 5%;
            margin-right: 2%;
        }

        .btnpg5 {
            align-items: center;
            justify-content: center;
            background-color: #0059CA;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 22px 32px;
            font-size: 1vw;
            margin-top: 5%;
            margin-right: 2%;
        }

        .btnpg6 {
            align-items: center;
            justify-content: center;
            background-color: #6A00CA;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 22px 32px;
            font-size: 1vw;
            margin-top: 5%;
            margin-right: 2%;
        }

        .btnpg7 {
            align-items: center;
            justify-content: center;
            background-color: #8B5300;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 22px 32px;
            font-size: 1vw;
            margin-top: 2%;
            margin-right: 2%;
        }

        .btnpg8 {
            align-items: center;
            justify-content: center;
            background-color: #B1B1B1;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 22px 32px;
            font-size: 1vw;
            margin-top: 2%;
            margin-right: 2%;
        }

        .btnpg9 {
            align-items: center;
            justify-content: center;
            background-color: #FF00FF;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 22px 32px;
            font-size: 1vw;
            margin-top: 2%;
            margin-right: 2%;
        }

        .btnpg10 {
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(120deg, rgba(255, 0, 0, 1) 60%, rgba(255, 255, 255, 1) 50%);
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 22px 32px;
            font-size: 1vw;
            margin-top: 2%;
            margin-right: 2%;
        }

        .btnpg11 {
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(120deg, rgba(255, 102, 0, 1) 60%, rgba(255, 255, 255, 1) 50%);
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 22px 32px;
            font-size: 1vw;
            margin-top: 2%;
            margin-right: 2%;
        }

        .btnpg12 {
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(120deg, rgba(255, 228, 0, 1) 60%, rgba(255, 255, 255, 1) 50%);
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 22px 32px;
            font-size: 1vw;
            margin-top: 2%;
            margin-right: 2%;
        }

        .btnpg13 {
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(150deg, rgba(110, 184, 0, 1) 55%, rgba(255, 255, 255, 1) 100%);
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 10px 8px;
            font-size: 1vw;
            margin-top: 1%;
            margin-right: 1%;
        }

        .btnpg14 {
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(150deg, rgba(0, 89, 202, 1) 55%, rgba(255, 255, 255, 1) 100%);
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 10px 8px;
            font-size: 1vw;
            margin-top: 1%;
            margin-right: 1%;
        }

        .btnpg15 {
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(150deg, rgba(106, 0, 202, 1) 55%, rgba(255, 255, 255, 1) 100%);
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 10px 8px;
            font-size: 1vw;
            margin-top: 1%;
            margin-right: 1%;
        }

        .btnpgqr {
            align-items: center;
            justify-content: center;
            display: grid;
            background-color: #FF00FF;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 30px 30px;
            font-size: 1vw;
            margin-top: 3%;
            margin-right: 2%;
        }

        /*END box btn queue*/

        .counter {

            width: 13vw;
            align-items: center;
            text-align: center;
            justify-content: center;
            font-size: 1.7vw;
            color: white;
            margin-bottom: 5%;
            font-weight: 600;
            text-shadow: 0 0 10px #0080FF;
            background-color: #0080FF;
        }

        .counter1 {
            flex-wrap: wrap;
            width: 100%;
            text-align: center;
            justify-content: center;
            align-items: center;
            font-size: 3vw;
            font-weight: 700;
            color: white;
            margin-top: 30%;
            text-shadow: 0 0 30px #000;

        }

        .counter2 {
            text-align: center;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
            top: 0;
            text-align: center;
            font-size: 1vw;
            color: #222;
            margin-top: 30%;
            border: 1px solid #0059CA;
        }

        #bottom1 {
            position: fixed;
            bottom: 0;
            width: 100%;
            color: #555;
            flex-wrap: wrap;
            font-size: 0.5vw;
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

        .imgqr {
            width: 300px;
            height: 300px;
            text-align: center;
            padding: 1px;
        }
    </style>
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
        <div id="centered" style="background-color: #555;">
            <div class="btnpg1">
                <div class="counter">ห้องตรวจ 1</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="counter1"><?php echo $_SESSION['counter']; ?></div>
                <div class="bg2">เชิญรอหน้าห้องตรวจ</div>
            </div>
            <div class="btnpg2">
                <div class="counter">ห้องตรวจ 2</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="counter1"><?php echo $_SESSION['counter1']; ?></div>
                <div class="bg2">เชิญรอหน้าห้องตรวจ</div>
            </div>
            <div class="btnpg3">
                <div class="counter">ห้องตรวจ 3</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="counter1"><?php echo $_SESSION['counter2']; ?></div>
                <div class="counter2">เชิญรอหน้าห้องตรวจ</div>
            </div>
            <div class="btnpg4">
                <div class="counter">ห้องตรวจ 4</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="counter1"><?php echo $_SESSION['counter3']; ?></div>
                <div class="counter2">เชิญรอหน้าห้องตรวจ</div>
            </div>
            <div class="btnpg5">
                <div class="counter">ห้องตรวจ 5</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="counter1"><?php echo $_SESSION['counter4']; ?></div>
                <div class="counter2">เชิญรอหน้าห้องตรวจ</div>
            </div>
            <div class="btnpg6">
                <div class="counter">ห้องตรวจ 6</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="counter1"><?php echo $_SESSION['counter5']; ?></div>
                <div class="counter2">เชิญรอหน้าห้องตรวจ</div>
            </div>

        </div>

        <div id="centered">
            <div class="btnpg7">
                <div class="counter">ห้องตรวจ 7</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="counter1"><?php echo $_SESSION['counter6']; ?></div>
                <div class="counter2">เชิญรอหน้าห้องตรวจ</div>
            </div>
            <div class="btnpg8">
                <div class="counter">ห้องตรวจ 8</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="counter1"><?php echo $_SESSION['counter7']; ?></div>
                <div class="counter2">เชิญรอหน้าห้องตรวจ</div>
            </div>
            <div class="btnpg9">
                <div class="counter">ห้องตรวจ 9</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="counter1"><?php echo $_SESSION['counter8']; ?></div>
                <div class="counter2">เชิญรอหน้าห้องตรวจ</div>
            </div>
            <div class="btnpg10">
                <div class="counter">ห้องตรวจ 10</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="counter1"><?php echo $_SESSION['counter9']; ?></div>
                <div class="counter2">เชิญรอหน้าห้องตรวจ</div>
            </div>
            <div class="btnpg11">
                <div class="counter">ห้องตรวจ 11</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="counter1"><?php echo $_SESSION['counter10']; ?></div>
                <div class="counter2">เชิญรอหน้าห้องตรวจ</div>
            </div>
            <div class="btnpg12">
                <div class="counter">ห้องตรวจ 12</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="counter1"><?php echo $_SESSION['counter11']; ?></div>
                <div class="counter2">เชิญรอหน้าห้องตรวจ</div>
            </div>

        </div>
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
<!--<div class="divider"></div>-->
<!--
    <div class="txt1">คิวรอผลเเล็ป</div>
    <div class="txt2">**เมื่อผลเเล็ปออกเเล้ว เลขจะเเสดงคิวที่ผลออก**</div>

    <div>
        <table border="1" align="center" class="tbq" style="padding-left: 0.5%; padding-right: 0.5%;">
            <tbody>
                <thead>
                    <th>ห้องตรวจ 1</th>
                    <th>ห้องตรวจ 2</th>
                    <th>ห้องตรวจ 3</th>
                    <th>ห้องตรวจ 4</th>
                    <th>ห้องตรวจ 5</th>
                    <th>ห้องตรวจ 6</th>
                    <th>ห้องตรวจ 7</th>
                    <th>ห้องตรวจ 8</th>
                    <th>ห้องตรวจ 9</th>
                    <th>ห้องตรวจ 10</th>
                    <th>ห้องตรวจ 11</th>
                    <th>ห้องตรวจ 12</th>
                    <th>ห้องตรวจ 13</th>
                    <th>ห้องตรวจ 14</th>
                    <th>ห้องตรวจ 15</th>
                </thead>
                <tr>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                </tr>
                <tr>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                </tr>
                <tr>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                </tr>
                <tr>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                </tr>
                <tr>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                </tr>
                <tr>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                </tr>
                <tr>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                </tr>
                <tr>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                </tr>
                <tr>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                </tr>
                <tr>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                </tr>


            </tbody>
        </table>
    </div>
    -->