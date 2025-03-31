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

    <base href="/public">

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
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">


        <!-- # site header 
        ================================================== -->
        <header id="masthead" class="s-header">

            <div class="s-header__branding">
                <p class="site-title">
                    <a href="index.html" rel="home">Spurgeon.</a>
                </p>
            </div>

            <div class="row s-header__navigation">

                <nav class="s-header__nav-wrap">
    
                    <h3 class="s-header__nav-heading">Navigate to</h3>
    
                    <ul class="s-header__nav">
                        <li><a href="index.html" title="">Home</a></li>
                        <li class="has-children">
                            <a href="#0" title="" class="">Categories</a>
                            <ul class="sub-menu">
                                <li><a href="category.html">Design</a></li>
                                <li><a href="category.html">Lifestyle</a></li>
                                <li><a href="category.html">Inspiration</a></li>
                                <li><a href="category.html">Work</a></li>
                                <li><a href="category.html">Health</a></li>
                                <li><a href="category.html">Photography</a></li>
                            </ul>
                        </li>
                        <li class="current-menu-item has-children">
                            <a href="#0" title="" class="">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="single-standard.html">Standard Post</a></li>
                                <li><a href="single-video.html">Video Post</a></li>
                                <li><a href="single-audio.html">Audio Post</a></li>
                            </ul>
                        </li>
                        <li><a href="styles.html" title="">Styles</a></li>
                        <li><a href="about.html" title="">About</a></li>
                        <li><a href="contact.html" title="">Contact</a></li>
                    </ul> <!-- end s-header__nav -->

                </nav> <!-- end s-header__nav-wrap -->
    
            </div> <!-- end s-header__navigation -->

            <div class="s-header__search">

                <div class="s-header__search-inner">
                    <div class="row">
    
                        <form role="search" method="get" class="s-header__search-form" action="#">
                            <label>
                                <span class="u-screen-reader-text">Search for:</span>
                                <input type="search" class="s-header__search-field" placeholder="Search for..." value="" name="s" title="Search for:" autocomplete="off">
                            </label>
                            <input type="submit" class="s-header__search-submit" value="Search"> 
                        </form>
    
                        <a href="#0" title="Close Search" class="s-header__search-close">Close</a>
    
                    </div> <!-- end row -->
                </div> <!-- s-header__search-inner -->
    
            </div> <!-- end s-header__search -->

            <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
            <a class="s-header__search-trigger" href="#">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 19.25L15.5 15.5M4.75 11C4.75 7.54822 7.54822 4.75 11 4.75C14.4518 4.75 17.25 7.54822 17.25 11C17.25 14.4518 14.4518 17.25 11 17.25C7.54822 17.25 4.75 14.4518 4.75 11Z"></path>
                </svg>
            </a>

        </header> <!-- end s-header -->



        <!-- # site-content
        ================================================== -->
        <div id="content" class="s-content s-content--blog">

        <section id="content" class="s-content">
    <div id="bricks" class="bricks">
        <div class="masonry">
            <div class="bricks-wrapper" data-animate-block>
                <div class="grid-sizer"></div>

                

                
                    @foreach($post as $post)
                        <article class="brick entry" data-animate-el>
                            <div class="entry__thumb">
                                <a href="{{ url('blog', $post->id) }}" class="thumb-link">
                                    <img src="post/{{ $post->image }}" 
                                        srcset="post/{{ $post->image }} 1x, post/{{ $post->image }} 2x" alt="">
                                </a>
                            </div>

                            <div class="entry__text">
                                <div class="entry__header">
                                    <div class="entry__meta">
                                        <span class="cat-links">
                                            {{ $category->category_name }}
                                        </span>
                                        <span class="byline">
                                            By: {{ $post->user_name }}
                                        </span>
                                    </div>
                                    <h1 class="entry__title"><a href="{{ url('blog', $post->id) }}">{{ $post->title }}</a></h1>
                                </div>
                                <div class="entry__excerpt">
                                    <p>{{ $post->small_description }}</p>
                                </div>
                                <a class="entry__more-link" href="{{ url('blog', $post->id) }}">Read More</a>
                            </div>
                        </article>
                    @endforeach
                

            </div>
        </div>
    </div>
</section>

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