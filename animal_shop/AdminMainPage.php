<?php
    session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="plugin/semantic/semantic.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <style type="text/css">
        .ui.placeholder.segment {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .h1 {
            display: block;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            font-size: 40px;
            background-image: url('image/jaguars-zoo.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            color: aliceblue;
        }
    </style>
    </head>
<body>
    <div class="center">

        <form action="backstage/index.html">
            <input type="submit" value="Backstage" />
        </form>
        <br />
        <form action="backstage/FinancialReport.html">
            <input type="submit" value="Financial Report" />
        </form>
        <br />
        <form action="backstage/AnimalReport.html">
            <input type="submit" value="Animal Report" />
        </form>
        <br />
        <form action="backstage/ShopReport.html">
            <input type="submit" value="Shop Sales Report" />
        </form>

        <br />
        <form action="backstage/EmployeeRegistration.html">
            <input type="submit" value="Employee Registration" />
        </form>
    </div>

</body>
</html>