<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <!--<meta http-equiv="refresh" content="2" />-->
    <title>DrMed_Room3</title>

    <style type="text/css" media="screen">
        html,
        body {
            height: auto;
            width: auto;
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
            margin-top: 1%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            overflow-y: auto;
        }

        #centered1 {

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
            margin-top: 0.5%;
        }

        .times {
            flex-wrap: wrap;
            width: 100%;
            top: 10%;
            text-align: center;
            font-size: 1vw;
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
            background-color: #FFE400;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 10px 5px;
            font-size: 2vw;
        }

        .btnpg2 {
            align-items: center;
            justify-content: center;
            background-color: green;
            border: 1px solid #000;
            border-radius: 6px;
            color: black;
            padding: 10px 50px;
            margin-bottom: 1%;
        }

        .btnpg3 {
            align-items: center;
            justify-content: center;
            background-color: #00B4F7;
            border: 1px solid #000;
            border-radius: 6px;
            color: black;
            padding: 10px 50px;
        }


        /*END box btn queue*/

        #bottom1 {
            position: fixed;
            bottom: 0;
            width: 100%;
            color: #555;
            flex-wrap: wrap;
            font-size: 0.7vw;
            text-align: center;
            justify-content: center;

        }

        .counter {
            flex-wrap: wrap;
            width: 100%;
            text-align: center;
            justify-content: center;
            font-size: 1.5vw;
            color: #fff;
            margin-bottom: 7%;
            font-weight: 600;

        }

        .counter1 {
            flex-wrap: wrap;
            width: 100%;
            text-align: center;
            justify-content: center;
            align-items: center;
            font-size: 3vw;
            font-weight: 700;
            color: #fff;
            margin-top: 25%;
            margin-bottom: 25%;
        }

        .counter2 {

            flex-wrap: wrap;
            width: 100%;
            top: 0;
            text-align: center;
            font-size: 2vw;
            color: #444;
            margin-top: 30%;
        }

        .divider {
            width: 98%;
            border: 1px solid #555;
            margin: 2% auto 1%;
            text-align: center;
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
            color: #FF2727;
            
        }
        .txt3 {
            flex-wrap: wrap;
            width: 100%;
            top: 0;
            text-align: center;
            font-size: 1vw;
            color: #FF0000;
            margin-bottom: 1%;
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
            font-size: 3vw;
            background-color: #FFA0A0;
        }

        .ctn1 {
            flex-wrap: wrap;
            width: 100%;
            text-align: center;
            justify-content: center;
            font-size: 1.3vw;
            color: #fff;
            font-weight: 500;

        }

        .ctn2 {
            flex-wrap: wrap;
            width: 100%;
            text-align: center;
            justify-content: center;
            font-size: 1.3vw;
            color: #fff;
            font-weight: 500;

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
            <div class="counter">ห้องตรวจ 3</div>
            <div class="divider"></div>
            <div class="counter1">0000</div>
            <div class="btnpg2">
                <a class="ctn1">เรียกคิวถัดไป</a>
            </div>
            <div class="btnpg3">
                <a class="ctn1">คิวรอผลเเล็ป</a>
            </div>
        </div>
    </div>


    <div class="divider"></div>

    <div class="txt1">คิวรอผลเเล็ป</div>
    <!--<div class="txt2">**เมื่อผลเเล็ปออกเเล้ว เลขจะเเสดงคิวที่ผลออก**</div>-->
    <div class="txt3">**ถ้าคนไข้ตามคิวได้ผลเเล็ปเเล้ว กรุณากดเพื่อลบคิวออกด้วยครับ**</div>

    <div>
        <table border="1" align="center" class="tbq" style="width: 80%; height: 100px;">
            <tbody>
                <tr>
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
                </tr>
                <tr>
                    <td>0000</td>
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