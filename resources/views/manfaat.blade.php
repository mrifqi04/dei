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
            <h3 class="wow fadeIn" style="margin-bottom: 5%">Manfaat dan Olahan Biji Kopi.</h3>
            
            @foreach ($manfaat as $data)
                <div class="col-md-6">
                    <h4 style="color: #fff">{{ $data->title }}</h4>
                    <p style="margin-bottom: 10%">{{ $data->content }}</p>                    
                </div>                
            @endforeach
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