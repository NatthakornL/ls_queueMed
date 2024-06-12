<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=
1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/
4.7.0/css/font-awesome.min.css">
</head>

<body>
    <input id=demoInput type=number min=001 max=999>
    <button onclick="increment()">+</button>
    <button onclick="decrement()">-</button>
    <script>
        function increment() {
            document.getElementById('demoInput').stepUp();
        }

        function decrement() {
            document.getElementById('demoInput').stepDown();
        }
    </script>
</body>

</html>