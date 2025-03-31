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

       <?php echo $__env->make('home.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
         <!-- end s-header -->


        <!-- # site-content
        ================================================== -->
        <?php echo $__env->make('home.body', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <!-- end s-content -->


        <!-- # site-footer
        ================================================== -->
        <?php echo $__env->make('home.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="home/js/plugins.js"></script>
    <script src="home/js/main.js"></script>

</body>
</html><?php /**PATH C:\Users\USER\OneDrive\Desktop\blog-app\resources\views/home/userpage.blade.php ENDPATH**/ ?>