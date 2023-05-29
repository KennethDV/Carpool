<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div id="box">
        <h1>Buy Tickets</h1>
        <form action="cashinfunction.php" method="post">
            <div style="font-size: 20px;margin: 10px;">Cash In</div>
            <div class="container-sm">
                <div class="mb-3">
                    <input type="text" class="form-control" id="phonenum" name="phonenum" placeholder="GCash Phone Number">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="refnum" name="refnum" placeholder="GCash Reference Number">
                </div>
                <select class="form-select form-select" aria-label=".form-select example" name="load">
                    <option selected value="50.00">50.00</option>
                    <option value="100.00">100.00</option>
                    <option value="250.00">250.00</option>
                    <option value="500.00">500.00</option>
                </select>
                <br>
                <input class="btn btn-dark" name="pay" type="submit" value="Pay Now" style="float: right;">

            </div>
        </form>
    </div>

    <style>
        body {
            font-family: 'Cabin', sans-serif;
            background-color: #45b6fe;
        }

        #box {
            border: 2px;
            border-radius: 7px;
            background-color: white;
            position: absolute;
            top: 45%;
            left: 35%;
            transform: translate(0, -50%);
            width: 500px;
            padding: 20px;
        }
    </style>
</body>

</html>