<!DOCTYPE HTML>
<html>

<head>
    @include('head')
</head>

<body>
    <!-- header -->
    <div class="banner">
        <div class="container">

            @include('nav')
            <!-- script-for-nav -->
            <script>
                $("span.menu").click(function() {
                    $(".head-nav ul").slideToggle(300, function() {});
                });
            </script>
            <!-- logo -->
            <div class="logo wow fadeIn">
                <a href="#">
                <img src="{{ URL::asset('images/logo.png') }}" alt="logo"></a>
            </div>
            <!-- info -->
            <div class="banner-info wow fadeIn">
                <h1>Coffee, the finest organic suspension ever devised. </h1>
                <h2>HOURS:
                    <span>Mon-Fri: 7am - 9pm</span>
                    <span>Sat-Sun: 8am - 7pm</span>
                    <span>2444 10th. St, Chicago, IL 60612</span></h2>
                <a href="menu.html" class="btn main-btn">our menu</a>
                <div class="sociallist-home">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="icon"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="icon"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /header -->


    <!-- Core Boostrap JS -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    <!-- Wow JavaScript -->
    <script src="{{ URL::asset('js/wow.js') }}"></script>

    <script>
        new WOW().init();
    </script>


</body>

</html>