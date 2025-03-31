<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spurgeon</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="home/css/vendor.css">
    <link rel="stylesheet" href="home/css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="home/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="home/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="home/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>


<body id="top">

<!-- preloader
    ================================================== -->
    <!-- <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap"></div>



        <!-- # site header 
        ================================================== -->

       @include('home.header')
         <!-- end s-header -->


        <!-- # site-content
        ================================================== -->
        @include('home.body')
        <!-- end s-content -->


        <!-- # site-footer
        ================================================== -->
        @include('home.footer')
        <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="home/js/plugins.js"></script>
    <script src="home/js/main.js"></script>

</body>
</html>