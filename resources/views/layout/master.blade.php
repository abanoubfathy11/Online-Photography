<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                if($(window).scrollTop() > 300){
                    $('i').css({
                        "opacity":"1", "pointer-events":"auto"
                    });
                }else{
                    $('i').css({
                        "opacity":"0", "pointer-events":"none"
                    });
                }
            });
            $('i').click(function(){
                $('html').animate({scrollTop:0}, 1500);
            });
        });
    </script>
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/MasterStyle.css">
    <link href="images/8e2f16c2-0797-40f4-a134-e37a58691fe6.jpg" rel="shortcut icon" type="image/jpg">
</head>
<body>
<i class="fas fa-chevron-up"></i>
<div class="container-fluid">
    <div class="row" id="navBar">
        <div class="col col-logo" >
            <a href="/Home" class="itemLogo">ANDY </a>
            <a href="/Home" class="itemLogoph"><sub style="font-size: 20px">POTOGRAPHY</sub> </a>
        </div>
        <div class="col col-item">
            <a href="/Home" class="item itemhome">HOME</a>
        </div>
        <div class="col col-item">
            <a href="/Portfolios" class="item">PORTFOLIOS</a>
        </div>
        <div class="col col-item">
            <a href="/Information" class="item">INFORMATION</a>
        </div>



        <div class="col col-item">
            <a href="/Review" class="item">REVIEWS</a>
        </div>
        <div class="col col-item">
            <a href="/Contact" class="item">CONTACT</a>
        </div>


    </div>
</div>

@yield('content')


<div >
    <div class="footer1" >
        <p data-aos="fade-up">FOLLOW ANDY</p>
        <br>
        <div class="s-m" >
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <div class="footer2" >
        <p >Omarr Ali is an award-winning Wedding Photographer and Family Photographer based in Egypt.</p>
        <hr>
        <div  style="text-align: center ;width: 100%;height: auto;background-color: white;font-family: 'Apple Color Emoji';font-size: 14px;letter-spacing: 2px">
            &copy; 2019 Andy Photography
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="js/aos.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="parallax.js-1.5.0/parallax.js"></script>
<script>
    AOS.init({
        duration:1000
    });
</script>
</body>
</html>