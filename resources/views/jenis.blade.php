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
            <h3 class="wow fadeIn">Jenis - jenis dan penjelasan kopi di jawa barat.</h3>            

            <!--news-->
            <div class="news margin-top">
                <div class="new-grids">
                    @foreach ($beans as $key => $bean)
                    @if ($key % 2 == 1)
                    <div class="col-md-6 new-grid1">
                        <h4>{{ $bean->nama_bean }}</h4>
                        <h5>-----</h5>
                        <p>{{ $bean->content_beans }}</p>
                    </div>
                    <div class="col-md-6 new-grid">
                        <a href="#" class="mask">
                            <img src="images/{{ $bean->gambar_bean }}" class="zoom-img" alt=""></a>
                    </div>
                    <div class="clearfix"></div>
                    @else
                    <div class="col-md-6 new-grid">
                        <a href="#" class="mask">
                            <img src="images/{{ $bean->gambar_bean }}" class="zoom-img" alt=""></a>
                    </div>
                    <div class="col-md-6 new-grid1">
                        <h4>{{ $bean->nama_bean }}</h4>
                        <h5>-----</h5>
                        <p>{{ $bean->content_beans }}</p>
                    </div>
                    @endif
                    @endforeach


                    {{-- <div class="col-md-6 new-grid">
                        <a href="#" class="mask">
                            <img src="images/news3.jpg" class="zoom-img" alt=""></a>
                    </div>
                    <div class="col-md-6 new-grid1">
                        <h4>25.07.2017 .... <i class="fa fa-coffee"></i> </h4>
                        <h5>News 3</h5>
                        <p>Chicago is constantly auditioning for the world, determined that one day, on the streets of
                            Barcelona, in Berlin's cabarets, in the coffee shops of Istanbul, people will know and love
                            us in our multidimensional glory, dream of
                            us the way they dream of San Francisco and New York.</p>
                    </div>
                    <div class="col-md-6 new-grid1">
                        <h4>01.05.2017 .... <i class="fa fa-coffee"></i> </h4>
                        <h5>News 4</h5>
                        <p>Chicago is constantly auditioning for the world, determined that one day, on the streets of
                            Barcelona, in Berlin's cabarets, in the coffee shops of Istanbul, people will know and love
                            us in our multidimensional glory, dream of
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
                        <p>Chicago is constantly auditioning for the world, determined that one day, on the streets of
                            Barcelona, in Berlin's cabarets, in the coffee shops of Istanbul, people will know and love
                            us in our multidimensional glory, dream of
                            us the way they dream of San Francisco and New York.</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 new-grid1">
                        <h4>11.10.2016 .... <i class="fa fa-coffee"></i> </h4>
                        <h5>News 6</h5>
                        <p>Chicago is constantly auditioning for the world, determined that one day, on the streets of
                            Barcelona, in Berlin's cabarets, in the coffee shops of Istanbul, people will know and love
                            us in our multidimensional glory, dream of
                            us the way they dream of San Francisco and New York.</p>
                    </div>
                    <div class="col-md-6 new-grid">
                        <a href="#" class="mask">
                            <img src="images/news6.jpg" class="zoom-img" alt=""></a>
                    </div>
                    <div class="clearfix"></div> --}}
                </div>
            </div>
            <!-- /news -->

        </div>
        <!-- /container -->
        <div class="sociallist-inner">
        
            <small class="copyright">Kopi Jawa Barat</small>
            
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