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
            <!-- info -->
            <div class="banner-info wow fadeIn">
                <h1>Kopi Jawa Barat</h1>                            
                <div class="sociallist-home">
                
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