<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?php
include "connect.php";
?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <link rel="icon" type="image/x-icon" href="./pic/queue.ico">
    <meta http-equiv="refresh" content="3" />
    <title>QueueOPDMed ช่อง 1</title>

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
            display: grid;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            overflow-y: auto;
            margin-top: 7%;
        }

        #centered1 {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            overflow-y: auto;
            margin-top: 5%;
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
            padding: 10px 10px;
            font-size: 1vw;
            margin-top: 4%;
            margin-right: 1%;
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
            margin-top: 4%;
            margin-right: 1%;
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
            margin-top: 4%;
            margin-right: 1%;
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
            margin-top: 4%;
            margin-right: 1%;
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
            margin-top: 4%;
            margin-right: 1%;
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
            margin-top: 4%;
            margin-right: 1%;
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
            margin-top: 2%;
            margin-right: 1%;
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
            margin-top: 2%;
            margin-right: 1%;
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
            margin-top: 2%;
            margin-right: 1%;
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
            margin-top: 2%;
            margin-right: 1%;
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
            margin-top: 2%;
            margin-right: 1%;
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
            margin-top: 2%;
            margin-right: 1%;
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
            font-size: 7vw;
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
            margin-top: 5%;
        }



        /* Style buttons */
        .btn {
            background-color: DodgerBlue;
            /* Blue background */
            border: none;
            /* Remove borders */
            color: white;
            /* White text */
            padding: 2vh 4vw;
            /* Some padding */
            font-size: 2vw;
            /* Set a font size */
            cursor: pointer;
            /* Mouse pointer on hover */
            text-align: center;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            margin-left: 10px;
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

        <div class="times">
            <?php
            date_default_timezone_set("Asia/Bangkok");
            $currentDateTime = date("d-m-Y H:i:s");
            echo "วัน-เดือน-ปี | เวลา : $currentDateTime";
            ?>
        </div>

        <div id="centered">
            <?php
            $sql = "SELECT * FROM tb_numq WHERE id = '2' ";
            $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
            while ($row = mysqli_fetch_array($result)) { ?>
                <div class="ct1" id="output-area"><?php echo $row['q_chn1']; ?></div>
            <?php } ?>
        </div>
        <div id="centered1">
            <div class="btnpg1">
                <div class="ct">ช่องบริการที่ 1</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>

                <div class="ct2">
                    <!-- Button -->

                    <button type="submit" name="increment1" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                    <?php
                    if (isset($_POST['increment1'])) {
                        $up = "UPDATE tb_numq SET q_chn1 = q_chn1 + 1 WHERE id = '2' ";
                        $up  = mysqli_query($connect, $up) or die(mysqli_error($connect));
                    }

                    ?>
                </div>
            </div>

        </div>


        </div><br>


        </div>

        <div id="bottom1">© CopyRight 2024 | IT Center Lerdsin Hospital</div>
    </form>

</body>

</html>