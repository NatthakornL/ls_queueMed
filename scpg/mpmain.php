<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta http-equiv="refresh" content="5" />
    <title>QueueMedMoPhone</title>

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
            margin-top: 3%;
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
            font-size: 5vw;
            font-weight: 600;
            color: blue;
            margin-top: 2%;
        }

        .times {
            flex-wrap: wrap;
            width: 100%;
            top: 10%;
            text-align: center;
            font-size: 2.8vw;
            color: #588dff;
        }


        .btn-container {
            margin-top: 3%;
            margin-bottom: 3%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 5px;
            /* Adjust spacing between buttons */
        }

        /* box btn queue */

        .btnpg1 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ff355e;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 3px 80px;
            font-size: 2vw;
        }
        .btnpg2 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fd5b78;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 3px 80px;
            font-size: 2vw;
        }
        .btnpg3 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ff6037;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 3px 80px;
            font-size: 2vw;
        }
        .btnpg4 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ff9966;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 3px 80px;
            font-size: 2vw;
        }
        .btnpg5 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ff9933;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 3px 80px;
            font-size: 2vw;
        }
        .btnpg6 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffcc33;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 3px 80px;
            font-size: 2vw;
        }
        .btnpg7 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffff66;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 3px 80px;
            font-size: 2vw;
        }
        .btnpg8 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ccff00;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 3px 80px;
            font-size: 2vw;
        }
        .btnpg9 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #66ff66;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 3px 80px;
            font-size: 2vw;
        }
        .btnpg10 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #aaf0d1;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 3px 80px;
            font-size: 2vw;
        }
        .btnpg11 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #16d0cb;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 3px 80px;
            font-size: 2vw;
        }
        .btnpg12 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #50bfe6;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 3px 80px;
            font-size: 2vw;
        }
        .btnpg13 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #9c27b0;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 3px 80px;
            font-size: 2vw;
        }
        .btnpg14 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ee34d2;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 3px 80px;
            font-size: 2vw;
        }
        .btnpg15 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ff00cc;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 3px 80px;
            font-size: 2vw;
        }

        .counter {
            flex-wrap: wrap;
            width: 100%;
            text-align: center;
            justify-content: center;
            font-size: 4.5vw;
            color: #000;
        }

        /*END box btn queue*/

        #bottom1 {
            position: fixed;
            bottom: 0;
            width: 100%;
            color: #838383;
            flex-wrap: wrap;
            font-size: 2vw;
            text-align: center;
            justify-content: center;
            margin-top: 2%;
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
    <div id="centered">
        <div class="btn-container">
            <div class="btnpg1">
                <div class="counter" onclick="document.location='1.php'">ห้องตรวจ 1</div>
            </div>
            <div class="btnpg2">
                <div class="counter" onclick="document.location='2.php'">ห้องตรวจ 2</div>
            </div>
            <div class="btnpg3">
                <div class="counter" onclick="document.location='3.php'">ห้องตรวจ 3</div>
            </div>
            <div class="btnpg4">
                <div class="counter" onclick="document.location='4.php'">ห้องตรวจ 4</div>
            </div>
            <div class="btnpg5">
                <div class="counter" onclick="document.location='5.php'">ห้องตรวจ 5</div>
            </div>
            <div class="btnpg6">
                <div class="counter" onclick="document.location='6.php'">ห้องตรวจ 6</div>
            </div>
            <div class="btnpg7">
                <div class="counter" onclick="document.location='7.php'">ห้องตรวจ 7</div>
            </div>
            <div class="btnpg8">
                <div class="counter" onclick="document.location='8.php'">ห้องตรวจ 8</div>
            </div>
            <div class="btnpg9">
                <div class="counter" onclick="document.location='9.php'">ห้องตรวจ 9</div>
            </div>
            <div class="btnpg10">
                <div class="counter" onclick="document.location='10.php'">ห้องตรวจ 10</div>
            </div>
            <div class="btnpg11">
                <div class="counter" onclick="document.location='11.php'">ห้องตรวจ 11</div>
            </div>
            <div class="btnpg12">
                <div class="counter" onclick="document.location='12.php'">ห้องตรวจ 12</div>
            </div>
            <div class="btnpg13">
                <div class="counter" onclick="document.location='13.php'">ห้องตรวจ 13</div>
            </div>
            <div class="btnpg14">
                <div class="counter" onclick="document.location='14.php'">ห้องตรวจ 14</div>
            </div>
            <div class="btnpg15">
                <div class="counter" onclick="document.location='15.php'">ห้องตรวจ 15</div>
            </div>
        </div>
    </div>
    <div id="bottom1">© CopyRight 2024 | IT Center Lerdsin Hospital</div>
</body>

</html>