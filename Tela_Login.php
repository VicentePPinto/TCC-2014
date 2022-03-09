<?php
/**
 * Created by PhpStorm.
 * User: Vicente
 * Date: 13/11/13
 * Time: 01:16
 */
?>
<html lang="en-US">
<head>
    <title><< SG >></title>
    <link rel="icon" type="image/png" href=" image/SG%20Telecom%20ico.png">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>
<form class="form" method="GET" action="validarLogin.php">
    <body>
    <script src="bootstrap/js/jquery-1.10.2.min.js">
        <script src="bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            margin-left:350px;
            padding-top: 100px;
            left: 50px;
            padding-bottom: 200px;
            background-image: url('image/network_img2.jpg');
            background-repeat:no-repeat;
            background-size: 100% 100%;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
    </style>
    <div class="container">
        <style type="text/css">
            div{
                margin-left:210 ;
            }
            img{
                margin-left:150;
            }
        </style>
        <img src= "image/SG Telecom.jpg"  class="img-rounded" width="300">
        <div class="row">
            <div class="col-xs-4">
                <h2> <input id="login" type="text" name="login" placeholder="Login" ></h2>
                <h2><input id="password" type="password" name="password" placeholder="Password"  ></h2>
                <input type="submit" value="OK">
            </div>
            <div class="col-xs-6 col-md-8">
            </div>
        </div>
    </div>
    </div>
    </body>
</form>
</html>