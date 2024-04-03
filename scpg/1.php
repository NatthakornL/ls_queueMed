<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta http-equiv="refresh" content="2" />
    <title>QueueMedRoom1</title>

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
            margin-top: 10%;
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
            align-items: center;
            justify-content: center;
            background-color: red;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 10px 8px;
            font-size: 4vw;

        }

        /*END box btn queue*/

        #bottom1 {
            position: fixed;
            bottom: 0;
            width: 100%;
            color: #555;
            flex-wrap: wrap;
            font-size: 2vw;
            text-align: center;
            justify-content: center;
            margin-top: 2%;
        }

        .counter {
            flex-wrap: wrap;
            width: 100%;
            text-align: center;
            justify-content: center;
            font-size: 6vw;
            color: #fff;
            margin-bottom: 5%;
            font-weight: 600;

        }

        .counter1 {
            flex-wrap: wrap;
            width: 100%;
            text-align: center;
            justify-content: center;
            align-items: center;
            font-size: 10vw;
            font-weight: 700;
            color: #fff;
            margin-top: 30%;

        }

        .counter2 {

            flex-wrap: wrap;
            width: 100%;
            top: 0;
            text-align: center;
            font-size: 3.5vw;
            color: #444;
            margin-top: 30%;
        }

        .divider {
            width: 100%;
            border: 1px solid #555;
            margin-top: 10%;
            margin-bottom: 7%;
            border: 2px 2px;
        }

        .txt1 {
            flex-wrap: wrap;
            width: 100%;
            top: 0;
            text-align: center;
            font-size: 5vw;
            font-weight: 600;
            color: blue;
            margin-top: 1%;
        }

        .txt2 {
            flex-wrap: wrap;
            width: 100%;
            top: 0;
            text-align: center;
            font-size: 3vw;
            color: #FF5757;
            margin-bottom: 5%;
        }

        .tbq {
            background-color: #888;
            align-items: center;
            justify-content: center;
            width: 100%;
            text-align: center;
            border-radius: 10px;
            border: 1px solid #555;
        }

        tr {
            width: 100%;
        }

        td {
            font-size: 8vw;
            background-color: #FFA0A0;
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

        <div class="btnpg1">
            <div class="counter">ห้องตรวจ 1</div>
            <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
            <div class="counter1">0000</div>
            <div class="counter2">เชิญรอหน้าห้องตรวจ</div>
        </div>

    </div>
    <div class="divider"></div>

    <div class="txt1">คิวรอผลเเล็ป</div>
    <div class="txt2">**เมื่อผลเเล็ปออกเเล้ว เลขจะเเสดงคิวที่ผลออก**</div>

    <div>
    <table border="1" align="center" class="tbq" style="width: 350px; height: 100px;">
        <tbody>
            <tr>
                <td>0000</td>
                <td>0000</td>
                <td>0000</td>
            </tr>
            <tr>
                <td>0000</td>
                <td>0000</td>
                <td>0000</td>
            </tr>
            <tr>
                <td>0000</td>
                <td>0000</td>
                <td>0000</td>
            </tr>
            
        </tbody>
    </table>
</div>




    <div id="bottom1">© CopyRight 2024 | IT Center Lerdsin Hospital</div>
</body>

</html>