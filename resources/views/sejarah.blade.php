<!DOCTYPE HTML>
<html>

<head>
    @include('head')
</head>

<body>
    <!-- header with inner content -->
    <div class="banner-inner">
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
                <img src="images/logo.png"  alt="logo"></a>
            </div>
            <h3 class="wow fadeIn">To me, the smell of fresh-made coffee is one of the greatest inventions.</h3>

            <!--news-->
            <div class="news margin-top">
                <div class="new-grids">
                    <div class="col-md-6 new-grid">
                        <a href="#" class="mask">
						<img src="images/news1.jpg" class="zoom-img" alt=""></a>
                    </div>
                    <div class="col-md-6 new-grid1">
                        <h4>15.03.2018 .... <i class="fa fa-coffee"></i> </h4>
                        <h5>News 1</h5>
                        <p>Chicago is constantly auditioning for the world, determined that one day, on the streets of Barcelona, in Berlin's cabarets, in the coffee shops of Istanbul, people will know and love us in our multidimensional glory, dream of
                            us the way they dream of San Francisco and New York.</p>
                    </div>
                    <div class="col-md-6 new-grid1">
                        <h4>09.09.2017 .... <i class="fa fa-coffee"></i> </h4>
                        <h5>News 2</h5>
                        <p>Chicago is constantly auditioning for the world, determined that one day, on the streets of Barcelona, in Berlin's cabarets, in the coffee shops of Istanbul, people will know and love us in our multidimensional glory, dream of
                            us the way they dream of San Francisco and New York.</p>
                    </div>
                    <div class="col-md-6 new-grid">
                        <a href="#" class="mask">
						<img src="images/news2.jpg" class="zoom-img" alt=""></a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 new-grid">
                        <a href="#" class="mask">
						<img src="images/news3.jpg" class="zoom-img" alt=""></a>
                    </div>
                    <div class="col-md-6 new-grid1">
                        <h4>25.07.2017 .... <i class="fa fa-coffee"></i> </h4>
                        <h5>News 3</h5>
                        <p>Chicago is constantly auditioning for the world, determined that one day, on the streets of Barcelona, in Berlin's cabarets, in the coffee shops of Istanbul, people will know and love us in our multidimensional glory, dream of
                            us the way they dream of San Francisco and New York.</p>
                    </div>
                    <div class="col-md-6 new-grid1">
                        <h4>01.05.2017 .... <i class="fa fa-coffee"></i> </h4>
                        <h5>News 4</h5>
                        <p>Chicago is constantly auditioning for the world, determined that one day, on the streets of Barcelona, in Berlin's cabarets, in the coffee shops of Istanbul, people will know and love us in our multidimensional glory, dream of
                            us the way they dream of San Francisco and New York.</p>
                    </div>
                    <div class="col-md-6 new-grid">
                        <a href="#" class="mask">
						<img src="images/news4.jpg" class="zoom-img" alt=""></a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 new-grid">
                        <a href="#" class="mask">
						<img src="images/news5.jpg" class="zoom-img" alt=""></a>
                    </div>
                    <div class="col-md-6 new-grid1">
                        <h4>5.07.2016 .... <i class="fa fa-coffee"></i> </h4>
                        <h5>News 5</h5>
                        <p>Chicago is constantly auditioning for the world, determined that one day, on the streets of Barcelona, in Berlin's cabarets, in the coffee shops of Istanbul, people will know and love us in our multidimensional glory, dream of
                            us the way they dream of San Francisco and New York.</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 new-grid1">
                        <h4>11.10.2016 .... <i class="fa fa-coffee"></i> </h4>
                        <h5>News 6</h5>
                        <p>Chicago is constantly auditioning for the world, determined that one day, on the streets of Barcelona, in Berlin's cabarets, in the coffee shops of Istanbul, people will know and love us in our multidimensional glory, dream of
                            us the way they dream of San Francisco and New York.</p>
                    </div>
                    <div class="col-md-6 new-grid">
                        <a href="#" class="mask">
						<img src="images/news6.jpg" class="zoom-img" alt=""></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- /news -->

        </div>
        <!-- /container -->
        <div class="sociallist-inner">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#" class="icon"><i class="fa fa-twitter"></i></a>
            <a href="#" class="icon"><i class="fa fa-instagram"></i></a>
            <small class="copyright">copyright 2018</small>
        </div>

    </div>
    <!-- /header with inner content-->

    <!-- Core Boostrap JS -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Wow JavaScript -->
    <script src="js/wow.js"></script>

    <script>
        new WOW().init();
    </script>


</body>

</html>