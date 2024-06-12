<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?php
session_start();

?>


<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta http-equiv="refresh" content="3" />
    <script type="text/javascript">
        window.hasMobileFirstExtension = true;
    </script>
    <title>QueueMedMoPhone</title>

    <style type="text/css" media="screen">
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            -o-box-sizing: border-box;
            box-sizing: border-box;
        }

        html {
            width: 100%;
            height: 100%;
            overflow: hidden;
            margin: 2%;
            padding: 0;

        }

        body {
            width: 100%;
            height: 100%;
            color: white;
            background-color: #F2FFE3;
            font-family: sans-serif;
            margin: 0px;
            overflow-x: hidden;
        }

        #centered {
            /* 
            margin-top: 3%;
            display: flex;
            align-items: center;
            justify-content: center;
            
            flex-grow: 1;
            overflow-y: auto;
            */
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 2;
            overflow-y: auto;
            flex-wrap: wrap;
            justify-content: center;
            gap: 3px;
            width: auto;
            height: 90%;
            margin-top: 5px;
        }

        .head {
            flex-wrap: wrap;
            width: auto;
            top: 0;
            text-align: center;
            font-size: 5.5vw;
            font-weight: 600;
            color: blue;
            margin-top: 2%;
        }

        .times {
            flex-wrap: wrap;
            width: auto;
            top: 10%;
            text-align: center;
            font-size: 4vw;
            color: #588dff;
        }

        /* box btn queue */

        .btnpg1 {
            display: flexbox;
            align-items: center;
            justify-content: center;
            background-color: red;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 4vh 8vw;
            font-size: 1vw;
            margin-top: 2%;
            margin-right: 2%;
        }

        .btnpg2 {
            display: flexbox;
            align-items: center;
            justify-content: center;
            background-color: #FF6600;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 4vh 8vw;
            font-size: 1vw;
            margin-top: 2%;
            margin-right: 2%;
        }

        .btnpg3 {
            display: flexbox;
            align-items: center;
            justify-content: center;
            background-color: #FFE400;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 4vh 8vw;
            font-size: 1vw;
            margin-top: 1%;
            margin-right: 2%;
        }

        .btnpg4 {
            display: flexbox;
            align-items: center;
            justify-content: center;
            background-color: #6EB800;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 4vh 8vw;
            font-size: 1vw;
            margin-top: 1%;
            margin-right: 2%;
        }

        .btnpg5 {
            display: flexbox;
            align-items: center;
            justify-content: center;
            background-color: #0059CA;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 4vh 8vw;
            font-size: 1vw;
            margin-top: 1%;
            margin-right: 2%;
        }

        .btnpg6 {
            display: flexbox;
            align-items: center;
            justify-content: center;
            background-color: #6A00CA;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 4vh 8vw;
            font-size: 1vw;
            margin-top: 1%;
            margin-right: 2%;
        }

        .btnpg7 {
            display: flexbox;
            align-items: center;
            justify-content: center;
            background-color: #8B5300;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 4vh 8vw;
            font-size: 1vw;
            margin-top: 1%;
            margin-right: 2%;
        }

        .btnpg8 {
            display: flexbox;
            align-items: center;
            justify-content: center;
            background-color: #B1B1B1;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 4vh 8vw;
            font-size: 1vw;
            margin-top: 1%;
            margin-right: 2%;
        }

        .btnpg9 {
            display: flexbox;
            align-items: center;
            justify-content: center;
            background-color: #FF00FF;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 4vh 8vw;
            font-size: 1vw;
            margin-top: 1%;
            margin-right: 2%;
        }

        .btnpg10 {
            display: flexbox;
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(150deg, rgba(255, 0, 0, 1) 60%, #F7F7F7 50%);
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 4vh 8vw;
            font-size: 1vw;
            margin-top: 1%;
            margin-right: 2%;
        }

        .btnpg11 {
            display: flexbox;
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(150deg, rgba(255, 102, 0, 1) 60%, #F7F7F7 50%);
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 4vh 8vw;
            font-size: 1vw;
            margin-top: 1%;
            margin-right: 2%;
        }

        .btnpg12 {
            display: flexbox;
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(150deg, rgba(255, 228, 0, 1) 60%, #F7F7F7 50%);
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 4vh 8vw;
            font-size: 1vw;
            margin-top: 1%;
            margin-right: 2%;
        }

        .btnpg13 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(150deg, rgba(110, 184, 0, 1) 55%, rgba(255, 255, 255, 1) 100%);
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
            background-image: linear-gradient(150deg, rgba(0, 89, 202, 1) 55%, rgba(255, 255, 255, 1) 100%);
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
            background-image: linear-gradient(150deg, rgba(106, 0, 202, 1) 55%, rgba(255, 255, 255, 1) 100%);
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
            font-size: 5vw;
            font-weight: 600;
            text-shadow: 0 0 10px #0080FF;
            color: #fff;
        }

        .counter1 {
            flex-wrap: wrap;
            width: 100%;
            text-align: center;
            justify-content: center;
            align-items: center;
            font-size: 8vw;
            font-weight: 700;
            color: #fff;
            margin-top: 10%;
            text-shadow: 0 0 10px #0080FF;

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

<>
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
            <!--<div class="btn-container">-->
            <div class="btnpg1">
                <div class="counter">ห้องตรวจ 1</div>
                <div class="counter1"><?php echo $_SESSION['counter']; ?></div>
            </div>
            <div class="btnpg2">
                <div class="counter">ห้องตรวจ 2</div>
                <div class="counter1"><?php echo $_SESSION['counter1']; ?></div>
            </div>
            <div class="btnpg3">
                <div class="counter">ห้องตรวจ 3</div>
                <div class="counter1"><?php echo $_SESSION['counter2']; ?></div>
            </div>
            <div class="btnpg4">
                <div class="counter">ห้องตรวจ 4</div>
                <div class="counter1"><?php echo $_SESSION['counter3']; ?></div>
            </div>
            <div class="btnpg5">
                <div class="counter">ห้องตรวจ 5</div>
                <div class="counter1"><?php echo $_SESSION['counter4']; ?></div>
            </div>
            <div class="btnpg6">
                <div class="counter">ห้องตรวจ 6</div>
                <div class="counter1"><?php echo $_SESSION['counter5']; ?></div>
            </div>
            <div class="btnpg7">
                <div class="counter">ห้องตรวจ 7</div>
                <div class="counter1"><?php echo $_SESSION['counter6']; ?></div>
            </div>
            <div class="btnpg8">
                <div class="counter">ห้องตรวจ 8</div>
                <div class="counter1"><?php echo $_SESSION['counter7']; ?></div>
            </div>
            <div class="btnpg9">
                <div class="counter">ห้องตรวจ 9</div>
                <div class="counter1"><?php echo $_SESSION['counter8']; ?></div>
            </div>
            <div class="btnpg10">
                <div class="counter">ห้องตรวจ 10</div>
                <div class="counter1"><?php echo $_SESSION['counter9']; ?></div>
            </div>
            <div class="btnpg11">
                <div class="counter">ห้องตรวจ 11</div>
                <div class="counter1"><?php echo $_SESSION['counter10']; ?></div>
            </div>
            <div class="btnpg12">
                <div class="counter">ห้องตรวจ 12</div>
                <div class="counter1"><?php echo $_SESSION['counter11']; ?></div>
            </div>
        </div>
        <!--</div>-->
        <div id="bottom1">© CopyRight 2024 | IT Center Lerdsin Hospital</div>
    </form>
    </body>

</html>