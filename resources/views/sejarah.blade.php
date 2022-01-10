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
            <h3 class="wow fadeIn">Sejarah kopi di jawa barat.</h3>
            <!-- 2 columns -->
            <div class="col-md-6">
                <img src="images/{{ $contents->gambar }}" class="our-story-pic" alt="" />                
            </div>
            <div class="col-md-6">
                <p>{{ $contents->content }}</p>            
            </div>
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