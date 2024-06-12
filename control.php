<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?php
include "connect.php";
$sql = "SELECT * FROM tb_queue ";
$result = mysqli_query($connect, $sql);
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
        padding: 8px 12px;
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
        <div class="head">คิวเรียกรอเข้าห้องตรวจอายุรกรรม</div>
        <div class="times">
            <?php
            date_default_timezone_set("Asia/Bangkok");
            $currentDateTime = date("d-m-Y H:i:s");
            echo "วัน-เดือน-ปี | เวลา : $currentDateTime";
            ?>
        </div>

        <div id="centered">
            <?php
            $sql = "SELECT * FROM tb_queue ";
            $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="btnpg1">
                <div class="ct">ห้องตรวจ 1</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="ct1" id="output-area"><?php echo $row["q_num"] ?></div>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="decrement" class="btn"><i class="fa fa-minus-circle"></i></button>
                    <button type="submit" name="increment" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                    <?php
                        if (!isset($_SESSION['counter'])) {
                            $_SESSION['counter'] = 0;
                        }
                        if (isset($_POST['increment'])) {
                            $_SESSION['counter']++;
                        }

                        if (isset($_POST['decrement'])) {
                            $_SESSION['counter']--;
                        }

                        ?>
                </div>
            </div>
            <div class="btnpg2">
                <div class="ct">ห้องตรวจ 2</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="ct1" id="output-area"><?php echo $_SESSION['counter1']; ?></div>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="decrement1" class="btn"><i class="fa fa-minus-circle"></i></button>
                    <button type="submit" name="increment1" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                    <?php
                        if (!isset($_SESSION['counter1'])) {
                            $_SESSION['counter1'] = 0;
                        }
                        if (isset($_POST['increment1'])) {
                            $_SESSION['counter1']++;
                        }

                        if (isset($_POST['decrement1'])) {
                            $_SESSION['counter1']--;
                        }

                        ?>
                </div>
            </div>
            <div class="btnpg3">
                <div class="ct">ห้องตรวจ 3</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="ct1" id="output-area"><?php echo $_SESSION['counter2']; ?></div>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="decrement2" class="btn"><i class="fa fa-minus-circle"></i></button>
                    <button type="submit" name="increment2" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                    <?php
                        if (!isset($_SESSION['counter2'])) {
                            $_SESSION['counter2'] = 0;
                        }
                        if (isset($_POST['increment2'])) {
                            $_SESSION['counter2']++;
                        }

                        if (isset($_POST['decrement2'])) {
                            $_SESSION['counter2']--;
                        }

                        ?>
                </div>
            </div>
            <div class="btnpg4">
                <div class="ct">ห้องตรวจ 4</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="ct1" id="output-area"><?php echo $_SESSION['counter3']; ?></div>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="decrement3" class="btn"><i class="fa fa-minus-circle"></i></button>
                    <button type="submit" name="increment3" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                    <?php
                        if (!isset($_SESSION['counter3'])) {
                            $_SESSION['counter3'] = 0;
                        }
                        if (isset($_POST['increment3'])) {
                            $_SESSION['counter3']++;
                        }

                        if (isset($_POST['decrement3'])) {
                            $_SESSION['counter3']--;
                        }

                        ?>
                </div>
            </div>
            <div class="btnpg5">
                <div class="ct">ห้องตรวจ 5</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="ct1" id="output-area"><?php echo $_SESSION['counter4']; ?></div>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="decrement4" class="btn"><i class="fa fa-minus-circle"></i></button>
                    <button type="submit" name="increment4" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                    <?php
                        if (!isset($_SESSION['counter4'])) {
                            $_SESSION['counter4'] = 0;
                        }
                        if (isset($_POST['increment4'])) {
                            $_SESSION['counter4']++;
                        }

                        if (isset($_POST['decrement4'])) {
                            $_SESSION['counter4']--;
                        }

                        ?>
                </div>
            </div>
            <div class="btnpg6">
                <div class="ct">ห้องตรวจ 6</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="ct1" id="output-area"><?php echo $_SESSION['counter5']; ?></div>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="decrement5" class="btn"><i class="fa fa-minus-circle"></i></button>
                    <button type="submit" name="increment5" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                    <?php
                        if (!isset($_SESSION['counter5'])) {
                            $_SESSION['counter5'] = 0;
                        }
                        if (isset($_POST['increment5'])) {
                            $_SESSION['counter5']++;
                        }

                        if (isset($_POST['decrement5'])) {
                            $_SESSION['counter5']--;
                        }

                        ?>
                </div>
            </div>
            <!--
        <div class="btnpg7">
            <div class="counter">ห้องตรวจ 7</div>
            <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
            <div class="counter1">0000</div>
            <div class="counter2">
            <!-Button -
            <button onclick="decreaseCounter(event)" class="btn"><i class="fa fa-minus-circle"></i></button>
            <button onclick="refreshCounter(event)" class="btn"><i class="fa fa-refresh"></i></button>
            <button onclick="increaseCounter(event)" class="btn"><i class="fa fa-plus-circle"></i></button>
            <!- END Button --
            </div>
        </div>
        <div class="btnpg8">
            <div class="counter">ห้องตรวจ 8</div>
            <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
            <div class="counter1">0000</div>
            <div class="counter2">
            <!- Button --
            <button onclick="decreaseCounter(event)" class="btn"><i class="fa fa-minus-circle"></i></button>
            <button onclick="refreshCounter(event)" class="btn"><i class="fa fa-refresh"></i></button>
            <button onclick="increaseCounter(event)" class="btn"><i class="fa fa-plus-circle"></i></button>
            <!- END Button --
            </div>
        </div>
    -->

        </div>

        <div id="centered">
            <div class="btnpg7">
                <div class="ct">ห้องตรวจ 7</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="ct1" id="output-area"><?php echo $_SESSION['counter6']; ?></div>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="decrement6" class="btn"><i class="fa fa-minus-circle"></i></button>
                    <button type="submit" name="increment6" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                    <?php
                    if (!isset($_SESSION['counter6'])) {
                        $_SESSION['counter6'] = 0;
                    }
                    if (isset($_POST['increment6'])) {
                        $_SESSION['counter6']++;
                    }

                    if (isset($_POST['decrement6'])) {
                        $_SESSION['counter6']--;
                    }

                    ?>
                </div>
            </div>
            <div class="btnpg8">
                <div class="ct">ห้องตรวจ 8</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="ct1" id="output-area"><?php echo $_SESSION['counter7']; ?></div>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="decrement7" class="btn"><i class="fa fa-minus-circle"></i></button>
                    <button type="submit" name="increment7" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                    <?php
                    if (!isset($_SESSION['counter7'])) {
                        $_SESSION['counter7'] = 0;
                    }
                    if (isset($_POST['increment7'])) {
                        $_SESSION['counter7']++;
                    }

                    if (isset($_POST['decrement7'])) {
                        $_SESSION['counter7']--;
                    }

                    ?>
                </div>
            </div>
            <div class="btnpg9">
                <div class="ct">ห้องตรวจ 9</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="ct1" id="output-area"><?php echo $_SESSION['counter8']; ?></div>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="decrement8" class="btn"><i class="fa fa-minus-circle"></i></button>
                    <button type="submit" name="increment8" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                    <?php
                    if (!isset($_SESSION['counter8'])) {
                        $_SESSION['counter8'] = 0;
                    }
                    if (isset($_POST['increment8'])) {
                        $_SESSION['counter8']++;
                    }

                    if (isset($_POST['decrement8'])) {
                        $_SESSION['counter8']--;
                    }

                    ?>
                </div>
            </div>
            <div class="btnpg10">
                <div class="ct">ห้องตรวจ 10</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="ct1" id="output-area"><?php echo $_SESSION['counter9']; ?></div>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="decrement9" class="btn"><i class="fa fa-minus-circle"></i></button>
                    <button type="submit" name="increment9" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                    <?php
                    if (!isset($_SESSION['counter9'])) {
                        $_SESSION['counter9'] = 0;
                    }
                    if (isset($_POST['increment9'])) {
                        $_SESSION['counter9']++;
                    }

                    if (isset($_POST['decrement9'])) {
                        $_SESSION['counter9']--;
                    }

                    ?>
                </div>
            </div>
            <div class="btnpg11">
                <div class="ct">ห้องตรวจ 11</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="ct1" id="output-area"><?php echo $_SESSION['counter10']; ?></div>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="decrement10" class="btn"><i class="fa fa-minus-circle"></i></button>
                    <button type="submit" name="increment10" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                    <?php
                    if (!isset($_SESSION['counter10'])) {
                        $_SESSION['counter10'] = 0;
                    }
                    if (isset($_POST['increment10'])) {
                        $_SESSION['counter10']++;
                    }

                    if (isset($_POST['decrement10'])) {
                        $_SESSION['counter10']--;
                    }

                    ?>
                </div>
            </div>
            <div class="btnpg12">
                <div class="ct">ห้องตรวจ 12</div>
                <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
                <div class="ct1" id="output-area"><?php echo $_SESSION['counter11']; ?></div>
                <div class="ct2">
                    <!-- Button -->
                    <button type="submit" name="decrement11" class="btn"><i class="fa fa-minus-circle"></i></button>
                    <button type="submit" name="increment11" class="btn"><i class="fa fa-plus-circle"></i></button>
                    <!-- END Button -->
                    <?php
                    if (!isset($_SESSION['counter11'])) {
                        $_SESSION['counter11'] = 0;
                    }
                    if (isset($_POST['increment11'])) {
                        $_SESSION['counter11']++;
                    }

                    if (isset($_POST['decrement11'])) {
                        $_SESSION['counter11']--;
                    }

                    ?>
                </div>
            </div>
            <!--
        <div class="btnpg13">
            <div class="counter">ห้องตรวจ 13</div>
            <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
            <div class="counter1">0000</div>
            <div class="counter2">
            <!- Button ->
            <button onclick="decreaseCounter(event)" class="btn"><i class="fa fa-minus-circle"></i></button>
            <button onclick="refreshCounter(event)" class="btn"><i class="fa fa-refresh"></i></button>
            <button onclick="increaseCounter(event)" class="btn"><i class="fa fa-plus-circle"></i></button>
            <!- END Button ->
            </div>
        </div>
        <div class="btnpg14">
            <div class="counter">ห้องตรวจ 14</div>
            <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
            <div class="counter1">0000</div>
            <div class="counter2">
            <!- Button ->
            <button onclick="decreaseCounter(event)" class="btn"><i class="fa fa-minus-circle"></i></button>
            <button onclick="refreshCounter(event)" class="btn"><i class="fa fa-refresh"></i></button>
            <button onclick="increaseCounter(event)" class="btn"><i class="fa fa-plus-circle"></i></button>
            <!- END Button ->
            </div>
        </div>
        <div class="btnpg15">
            <div class="counter">ห้องตรวจ 15</div>
            <div style="border: 1px solid #000; width: 100%; align-items: center;"></div>
            <div class="counter1">0000</div>
            <div class="counter2">
            <!- Button ->
            <button onclick="decreaseCounter(event)" class="btn"><i class="fa fa-minus-circle"></i></button>
            <button onclick="refreshCounter(event)" class="btn"><i class="fa fa-refresh"></i></button>
            <button onclick="increaseCounter(event)" class="btn"><i class="fa fa-plus-circle"></i></button>
            <!- END Button ->
            </div>
        </div>
    -->
        </div>
        <?php } ?>
        <div id="bottom1">© CopyRight 2024 | IT Center Lerdsin Hospital</div>
    </form>

</body>

</html>