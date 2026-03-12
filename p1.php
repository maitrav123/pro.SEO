<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #667eea, #764ba2);
            font-family: Arial, Helvetica, sans-serif;
        }

        .box {
            background: white;
            padding: 40px 60px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            font-size: 32px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="box">
        <?php
            echo "Hello World";
        ?>
    </div>

</body>
</html>
