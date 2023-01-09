<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <style> @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap'); </style>
    <style> @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap'); </style>

</head>
<body>
    <?php require_once ("header.php"); ?>
    <img id="carhomepage" src="./img/homepage.png">
    <img id="carshadowhomepage"src="./img/rec5.png">
    <div class="homepage_wew">
        <p><b>YOUR</b></p>
        <p><b>FUTURE</b></p>
        <p><b>CAR</b></p>
        <p><b>AWAITS!</b></p>
    </div>

    <div>
        
    </div>
    <div class="sec-2">
    <h2 id="ho">HOT DEALS</h2>
        <div class="sec-2-mid">
            <div class="sec-2-mid-left">
                <img id="left" src="./img/left.png">
                <img id="white"src="./img/whiteback.png">
                <img id="car"src="./img/redcar3.png">
            </div>
            <div>
                <p class="hio">RW123-WEAWAS99</p>
                <p class="white3"><s>Php. 1,000,000.00</s></p>
                <div class="ule">
                    <p class="orange3">ONLY</p>
                    <p class="white3"><b>Php. 500,000.00</b></p>
                </div>
                <div class="ule">
                    <ul>
                        <li>321231</li>
                        <li>321231</li>
                        <li>321231</li>
                    </ul>
                    <ul>
                        <li>321231</li>
                        <li>321231</li>
                        <li>321231</li>
                    </ul>
                </div>
                <img id="right" src="./img/right.png">
            </div>
        </div>
    </div>

    <div class="sec-3">
        <p>BRANDS</p>
        <img src="./img/logos.png">
    </div>

    <div class="sec-4">32</div>
    <script>
        window.addEventListener("scroll", function(){
            var header = document.querySelector("nav");
            header.classList.toggle("sticky",window.scrollY>0)
        })
    </script>
</body>
</html>