<?php

// Written by Nicola Rainiero | rainnic.altervista.org
// Licensed under GNU GPLv3

// Function for basic field validation (present and neither empty nor only white space)
function IsNullOrEmptyString($str)
{
  return (!isset($str) || trim($str) === '');
}

function refreshCounter()
{
  $dom = new DOMDocument();
  $dom->loadHTML(file_get_contents('./index.php'));
  $dom->validateOnParse = true;

  $dom->preserveWhiteSpace = false;

  $counter = $dom->getElementById("centered")->textContent;
  if (IsNullOrEmptyString($counter)) {
    $counter = '1-5';
  }

  // Split the counter into an array
  $counterArray = explode('-', $counter);
  $start = (int)$counterArray[0];
  $end = (int)$counterArray[1];

  // Increment both start and end by 5
  $start += 5;
  $end += 5;

  $newCounter = $start . '-' . $end;

  echo $newCounter;
}

if (isset($_GET['refresh'])) {
  return refreshCounter();
}

function decreaseCounter()
{
  $counterIn = $_GET['decrease'];
  $counterArray = explode('-', $counterIn);
  $start = (int)$counterArray[0];
  $end = (int)$counterArray[1];

  // Decrease both start and end by 5
  $start -= 5;
  $end -= 5;

  $newCounter = $start . '-' . $end;

  writeFile($newCounter);
  echo $newCounter;
}

if (isset($_GET['decrease'])) {
  return decreaseCounter();
}

function increaseCounter()
{
  $counterIn = $_GET['increase'];
  $counterArray = explode('-', $counterIn);
  $start = (int)$counterArray[0];
  $end = (int)$counterArray[1];

  // Increment both start and end by 5
  $start += 5;
  $end += 5;

  $newCounter = $start . '-' . $end;

  writeFile($newCounter);
  echo $newCounter;
}

if (isset($_GET['increase'])) {
  return increaseCounter();
}

function writeFile($input)
{
  $fp = fopen('index.php', 'w');
  fwrite($fp, '
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>  
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta http-equiv="refresh" content="2" />
<title>Waiting list</title>

<style type="text/css" media="screen">

html, body, #centered {
    height: 100%;
}


body 
    {
    color: white;
    background-color: #588dff;
    font-family: sans-serif;
    margin: 0px
    }

#centered {
    /* position: fixed; */
    display: -webkit-flexbox;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    justify-content: center;
    font-size: 5vw;
}

.hour {
    position: fixed;
    width: 100%;
    top: 0;
text-align: center;
 font-size: 2.5vw;
}
.times {
    
  width: 100%;
  top: 10%;
text-align: center;
font-size: 1.8vw;
}

#bottom
    {
    position: fixed;
    bottom: 1;
    width: 100%;
    height: 10%;
    font-size: 2vw;
    text-align: center;
    }
    #bottom1
    {
    position: fixed;
    bottom: 0;
    width: 100%;
    font-size: 2vw;
    text-align: center;
    }

</style>
</head>
<body>
<div class="hour">คิวเรียกรอเข้าห้องตรวจอายุรกรรม<div>
    <div class="times"><?php
    date_default_timezone_set("Asia/Bangkok");
$currentDateTime = date("d-m-Y H:i:s");
echo "วัน-เดือน-ปี | เวลา : $currentDateTime";
?></div>
<div id="centered">' . $input . '</div>

<div id="bottom">กรุณาเข้าข้างในเพื่อรอเข้าห้องตรวจ</div>
<div id="bottom1">CopyRight | IT Center Lerdsin Hospital</div>
</body>
</html>
');
  fclose($fp);
}

?>

<!DOCTYPE html>
<html>
<title>Remote queue Controller</title>


<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            overflow-y: auto;
        }

    a {
      text-align: center;
      font-size: 20vw;
    }

    #counter {
      /*position: fixed;*/
      bottom: 0;
      width: 100%;
      font-size: 3vw;
      text-align: center;
    }

    /* Style buttons */
    .btn {
      background-color: DodgerBlue;
      /* Blue background */
      border: none;
      /* Remove borders */
      color: white;
      /* White text */
      padding: 6px 8px;
      /* Some padding */
      font-size: 2vw;
      /* Set a font size */
      cursor: pointer;
      /* Mouse pointer on hover */
    }

    /* Darker background on mouse-over */
    .btn:hover {
      background-color: RoyalBlue;
    }
    /* box space queue */
    .space1 {
      align-items: center;
            justify-content: center;
            background-color: #ff355e;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 10px 8px;
            font-size: 1vw;
            margin-top: 1%;
            margin-right: 1%;
    }
    .space2 {
      align-items: center;
            justify-content: center;
            background-color: #ff355e;
            border: 1px solid #000;
            border-radius: 18px;
            color: black;
            padding: 10px 8px;
            font-size: 1vw;
            margin-top: 1%;
            margin-right: 1%;
    }
    .space3 {
      background-color: darksalmon;
      border: 1px solid #000;
      border-radius: 10%;
      color: chocolate;
      padding: 12px 16px;
      font-size: 2vw;
    }
    .space4 {
      background-color: darksalmon;
      border: 1px solid #000;
      border-radius: 10%;
      color: chocolate;
      padding: 12px 16px;
      font-size: 2vw;
    }
    .space5 {
      background-color: darksalmon;
      border: 1px solid #000;
      border-radius: 10%;
      color: chocolate;
      padding: 12px 16px;
      font-size: 2vw;
    }
    .space6 {
      background-color: darksalmon;
      border: 1px solid #000;
      border-radius: 10%;
      color: chocolate;
      padding: 12px 16px;
      font-size: 2vw;
    }
    .space7 {
      background-color: darksalmon;
      border: 1px solid #000;
      border-radius: 10%;
      color: chocolate;
      padding: 12px 16px;
      font-size: 2vw;
    }
    .space8 {
      background-color: darksalmon;
      border: 1px solid #000;
      border-radius: 10%;
      color: chocolate;
      padding: 12px 16px;
      font-size: 2vw;
    }
    .space9 {
      background-color: darksalmon;
      border: 1px solid #000;
      border-radius: 10%;
      color: chocolate;
      padding: 12px 16px;
      font-size: 2vw;
    }
    .space10 {
      background-color: darksalmon;
      border: 1px solid #000;
      border-radius: 10%;
      color: chocolate;
      padding: 12px 16px;
      font-size: 2vw;
    }
    .space11 {
      background-color: darksalmon;
      border: 1px solid #000;
      border-radius: 10%;
      color: chocolate;
      padding: 12px 16px;
      font-size: 2vw;
    }
    .space12 {
      background-color: darksalmon;
      border: 1px solid #000;
      border-radius: 10%;
      color: chocolate;
      padding: 12px 16px;
      font-size: 2vw;
    }
    .space13 {
      background-color: darksalmon;
      border: 1px solid #000;
      border-radius: 10%;
      color: chocolate;
      padding: 12px 16px;
      font-size: 2vw;
    }
    .space14 {
      background-color: darksalmon;
      border: 1px solid #000;
      border-radius: 10%;
      color: chocolate;
      padding: 12px 16px;
      font-size: 2vw;
    }
    .space15 {
      background-color: darksalmon;
      border: 1px solid #000;
      border-radius: 10%;
      color: chocolate;
      padding: 12px 16px;
      font-size: 2vw;
    }
    /********************/ 

    .space0 {
      background-color: #FF6728;
      border: 1px solid #000;
      color: #fff;
      padding: 36px 42px;
      font-size: 2vw;
      padding: 2%;
    }
    #bottom1
    {
    position: fixed;
    bottom: 0;
    width: 100%;
    font-size: 0.8vw;
    text-align: center;
    }
    .times {
    
    width: 100%;
    top: 10%;
  text-align: center;
  font-size: 1.2vw;
  }
  </style>
</head>
<script>
        function refreshDateTime() {
            // ส่งคำขอไปยังไฟล์ PHP เพื่อรับวันที่และเวลาปัจจุบันในประเทศไทย
            fetch('get_current_datetime.php')
                .then(response => response.text())
                .then(data => {
                    // แสดงข้อมูลวันที่และเวลาในส่วนของ HTML ที่มี id เป็น "currentDateTime"
                    document.getElementById('currentDateTime').innerText = data;
                });
        }

        // รีเฟรชข้อมูลทุก 1 วินาที
        setInterval(refreshDateTime, 1000);

        // หลังจากโหลดหน้าเว็บ ให้ทำการเรียกฟังก์ชั่น refreshDateTime() เพื่อแสดงข้อมูลในครั้งแรก
        window.onload = refreshDateTime;
    </script>
<body onload="refreshCounter(event);">
  <div id="title">ตารางเรียกคิวห้องตรวจอายุรกรรม</div>
  <div class="times"><?php
// ตั้งค่าโซนเวลาเป็น Asia/Bangkok (โซนเวลาของประเทศไทย)
date_default_timezone_set('Asia/Bangkok');

// รับวันที่และเวลาปัจจุบัน
$currentDateTime = date('d-m-Y H:i:s');

// ส่งข้อมูลวันที่และเวลาปัจจุบันในรูปแบบข้อความกลับไปยัง JavaScript
echo $currentDateTime;
?></div>

  <div id="centered1">
    <!------------------------------------------->
    <div class="space9">
      <p id="counter">1-5</p>

      <button onclick="decreaseCounter(event)" class="btn"><i class="fa fa-minus-circle"></i></button>
      <button onclick="refreshCounter(event)" class="btn"><i class="fa fa-refresh"></i></button>
      <button onclick="increaseCounter(event)" class="btn"><i class="fa fa-plus-circle"></i></button>
    </div>
    <!------------------------------------------->
    <div style="width: 1%;"></div>
    <!------------------------------------------->
    <div class="space10">
      <p id="counter">6-10</p>

      <button onclick="decreaseCounter(event)" class="btn"><i class="fa fa-minus-circle"></i></button>
      <button onclick="refreshCounter(event)" class="btn"><i class="fa fa-refresh"></i></button>
      <button onclick="increaseCounter(event)" class="btn"><i class="fa fa-plus-circle"></i></button>
    </div>
    <!------------------------------------------->
    <div style="width: 1%;"></div>
    <!------------------------------------------->
    <div class="space11">
      <p id="counter">11-15</p>

      <button onclick="decreaseCounter(event)" class="btn"><i class="fa fa-minus-circle"></i></button>
      <button onclick="refreshCounter(event)" class="btn"><i class="fa fa-refresh"></i></button>
      <button onclick="increaseCounter(event)" class="btn"><i class="fa fa-plus-circle"></i></button>
    </div>
    <!------------------------------------------->
    <div style="width: 1%;"></div>
    <!------------------------------------------->
    <div class="space12">
      <p id="counter">6-10</p>

      <button onclick="decreaseCounter(event)" class="btn"><i class="fa fa-minus-circle"></i></button>
      <button onclick="refreshCounter(event)" class="btn"><i class="fa fa-refresh"></i></button>
      <button onclick="increaseCounter(event)" class="btn"><i class="fa fa-plus-circle"></i></button>
    </div>
    <!------------------------------------------->
    <div style="width: 1%;"></div>
    <!------------------------------------------->
    <div class="space13">
      <p id="counter">6-10</p>

      <button onclick="decreaseCounter(event)" class="btn"><i class="fa fa-minus-circle"></i></button>
      <button onclick="refreshCounter(event)" class="btn"><i class="fa fa-refresh"></i></button>
      <button onclick="increaseCounter(event)" class="btn"><i class="fa fa-plus-circle"></i></button>
    </div>
    <!------------------------------------------->
    <div style="width: 1%;"></div>
    <!------------------------------------------->
    <div class="space14">
      <p id="counter">6-10</p>

      <button onclick="decreaseCounter(event)" class="btn"><i class="fa fa-minus-circle"></i></button>
      <button onclick="refreshCounter(event)" class="btn"><i class="fa fa-refresh"></i></button>
      <button onclick="increaseCounter(event)" class="btn"><i class="fa fa-plus-circle"></i></button>
    </div>
    <!------------------------------------------->
    <div style="width: 1%;"></div>
    <!------------------------------------------->
    <div class="space15">
      <p id="counter">6-10</p>

      <button onclick="decreaseCounter(event)" class="btn"><i class="fa fa-minus-circle"></i></button>
      <button onclick="refreshCounter(event)" class="btn"><i class="fa fa-refresh"></i></button>
      <button onclick="increaseCounter(event)" class="btn"><i class="fa fa-plus-circle"></i></button>
    </div>
    <!------------------------------------------->
    
    
    <!-- Add more divs for additional counters if needed -->
  </div>
  <div id="bottom1">CopyRight | IT Center Lerdsin Hospital</div>
  
  <script>
    async function decreaseCounter(e) {
      e.preventDefault();
      counter = document.getElementById("counter").innerHTML;
      document.getElementById("counter").innerHTML = await (await fetch('?decrease=' + counter)).text();
    }

    async function refreshCounter(e) {
      e.preventDefault();
      document.getElementById("counter").innerHTML = await (await fetch('?refresh=1')).text();
    }

    async function increaseCounter(e) {
      e.preventDefault();
      counter = document.getElementById("counter").innerHTML;
      document.getElementById("counter").innerHTML = await (await fetch('?increase=' + counter)).text();
    }
  </script>

</body>

</html>
