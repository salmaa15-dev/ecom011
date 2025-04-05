<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/45807/style.css"/>

    <title>Document</title>
    <style>
            body{
                width: 90%;
                padding: 0;
                margin: 0 auto;
                background: #eee;
            }
            .wrap{
                width: 300px;
                height: 300px;
                margin: 50px auto;
                background: url("Canvas_sun.png");
            }
            .content{
                width: 150px;
                height: 150px;
                margin: 75px;
                position: relative;
                float: left;
                display: inline;
                border-radius: 75px;
            }
            .earth{
                width: 135px;
                height: 135px;
                margin: -219px 81px;
                position: relative;
                float: left;
                display: inline;
                border-radius: 80px;
                -webkit-animation: time 60s infinite linear;
            }
            .earth:before{
                content: url("Canvas_earth.png");            
            }
            .moon{
                width: 175px;
                height: 175px;
                margin: -237px auto 0 62px;
                float: left;
                border-radius: 100px;
                -webkit-animation: time 60s infinite linear;
            }
            .moonrev{
                width: 60px;
                height: 60px;
                float: left;
                margin: 3px 3px;
                border-radius: 55px;
                -webkit-animation: time 10s infinite linear;
            }
            .moonrev:before{
                content:url("Canvas_moon.png");
            }
            @-webkit-keyframes time {
                to {
                    transform: rotate(360deg);
                }
            }
    </style>
</head>
<body>
    
</body>
</html>

<div class="wrap">
	<div class="content"></div>
	<div class="earth"></div>
	<div class="moon">
		<div class="moonrev"></div>
	</div>
</div><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\front-end\ard.blade.php ENDPATH**/ ?>