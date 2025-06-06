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
                    <a href="<?php echo e(url('/')); ?>" rel="home">Spurgeon.</a>
                </p>
            </div>

            <div class="row s-header__navigation">

                <nav class="s-header__nav-wrap">
    
                    <h3 class="s-header__nav-heading">Navigate to</h3>
    
                    <ul class="s-header__nav">
                        <li><a href="<?php echo e(url('/')); ?>" title="">Home</a></li>
                        <li class="has-children">
                            <a href="#0" title="" class="">Categories</a>
                            <ul class="sub-menu">
                                <li><a href="category.html">Design</a></li>
                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(url('/category', $cat->id)); ?>"><?php echo e($cat->category_name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

                <div class="row entry-wrap">
                    <div class="column lg-12">

                        <article class="entry format-standard">

                            <header class="entry__header">
    
                                <h1 class="entry__title">
                                    <?php echo e($post->title); ?>

                                </h1>

                                <div class="entry__meta">
                                    <div class="entry__meta-author">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <circle cx="12" cy="8" r="3.25" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.8475 19.25H17.1525C18.2944 19.25 19.174 18.2681 18.6408 17.2584C17.8563 15.7731 16.068 14 12 14C7.93201 14 6.14367 15.7731 5.35924 17.2584C4.82597 18.2681 5.70558 19.25 6.8475 19.25Z"></path>
                                        </svg>
                                         <?php echo e($post->user_name); ?>

                                    </div>
                                    <div class="entry__meta-date">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-width="1.5"></circle>
                                            <path stroke="currentColor" stroke-width="1.5" d="M12 8V12L14 14"></path>
                                        </svg>
                                        
                                        <?php echo e(\Carbon\Carbon::parse($post->created_at)->format('F j, Y')); ?>

                                    </div>
                                    <div class="entry__meta-cat">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 17.25V9.75C19.25 8.64543 18.3546 7.75 17.25 7.75H4.75V17.25C4.75 18.3546 5.64543 19.25 6.75 19.25H17.25C18.3546 19.25 19.25 18.3546 19.25 17.25Z"></path>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 7.5L12.5685 5.7923C12.2181 5.14977 11.5446 4.75 10.8127 4.75H6.75C5.64543 4.75 4.75 5.64543 4.75 6.75V11"></path>
                                        </svg>
                                          
                                        <span class="cat-links">
                                            <a href="<?php echo e(url('/category', $category->id)); ?>"><?php echo e($post->category); ?></a>                                         
                                        </span>
                                    </div>
                                </div>
                            </header>

                            <div class="entry__media">
                                <figure class="featured-image">
                                    <img src="/post/<?php echo e($post->image); ?>" 
                                         srcset="/post/<?php echo e($post->image); ?> 2400w, 
                                                 /post/<?php echo e($post->image); ?> 1200w, 
                                                /post/<?php echo e($post->image); ?> 600w" sizes="(max-width: 2400px) 100vw, 2400px" alt="">
                                </figure>
                            </div>

                            <div class="content-primary">

                                <div class="entry__content">
                                    <p class="lead">
                                     </p> 

                                    <p class="drop-cap">
                                    <?php echo e($post->description); ?>

                                    Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae 
                                    qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi 
                                    repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est 
                                    praesentium impedit maiores incididunt adipisicing veniam velit .
                                    </p>
            
                                    <p>
                                    <?php echo e($post->description); ?>

                                    </p>
                
                                    <figure class="alignwide">
                                        <img src="images/sample-1200.jpg" 
                                          srcset="images/sample-2400.jpg 2400w, 
                                                  images/sample-1200.jpg 1200w, 
                                                  images/sample-600.jpg 600w" sizes="(max-width: 2400px) 100vw, 2400px" alt="">
                                    </figure>
            
            


                                    <p class="entry__tags">
                                        <strong>Tags:</strong>
                    
                                        <span class="entry__tag-list">
                                            <a href="#0">orci</a>
                                            <a href="#0">lectus</a>
                                            <a href="#0">varius</a>
                                            <a href="#0">turpis</a>
                                        </span>
                        
                                    </p>
    
                                    <div class="entry__author-box">
                                        <figure class="entry__author-avatar">
                                            <img alt="" src="images/avatars/user-06.jpg" class="avatar">
                                        </figure>
                                        <div class="entry__author-info">
                                            <h5 class="entry__author-name">
                                                <a href="#0">
                                                    Naruto Uzumaki
                                                    <?php echo e($post->user_name); ?>

                                                </a>
                                            </h5>
                                            <p>
                                            Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, 
                                            a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam 
                                            consequat occaecat.
                                            </p>
                                        </div>
                                    </div>

                                </div> <!-- end entry-content -->

                                <div class="post-nav">
                                    <div class="post-nav__prev">
                                        <a href="single-standard.html" rel="prev">
                                            <span>Prev</span>
                                            The Pomodoro Technique Really Works. 
                                        </a>
                                    </div>
                                    <div class="post-nav__next">
                                        <a href="single-standard.html" rel="next">
                                            <span>Next</span>
                                            How Imagery Drives User Experience.
                                        </a>
                                    </div>
                                </div>

                            </div> <!-- end content-primary -->

                        </article> <!-- end entry -->

                        <!-- comments -->
                        <div class="comments-wrap">

                            <div id="comments">
                                <div class="large-12">

                                    <h3>5 Comments</h3>

                                    <!-- START commentlist -->
                                    <ol class="commentlist">

                                        <li class="depth-1 comment">

                                            <div class="comment__avatar">
                                                <img class="avatar" src="images/avatars/user-01.jpg" alt="" width="50" height="50">
                                            </div>

                                            <div class="comment__content">

                                                <div class="comment__info">
                                                    <div class="comment__author">Itachi Uchiha</div>

                                                    <div class="comment__meta">
                                                        <div class="comment__time">Aug 15, 2021</div>
                                                        <div class="comment__reply">
                                                            <a class="comment-reply-link" href="#0">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="comment__text">
                                                <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
                                                facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
                                                </div>

                                            </div>

                                        </li> <!-- end comment level 1 -->

                                        <li class="thread-alt depth-1 comment">

                                            <div class="comment__avatar">
                                                <img class="avatar" src="images/avatars/user-04.jpg" alt="" width="50" height="50">
                                            </div>

                                            <div class="comment__content">

                                                <div class="comment__info">
                                                    <div class="comment__author">John Doe</div>

                                                    <div class="comment__meta">
                                                        <div class="comment__time">Aug 14, 2021</div>
                                                        <div class="comment__reply">
                                                            <a class="comment-reply-link" href="#0">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="comment__text">
                                                <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
                                                urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
                                                tantas semper delicatissimi.</p>
                                                </div>

                                            </div>

                                            <ul class="children">

                                                <li class="depth-2 comment">

                                                    <div class="comment__avatar">
                                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="" width="50" height="50">
                                                    </div>

                                                    <div class="comment__content">

                                                        <div class="comment__info">
                                                            <div class="comment__author">Kakashi Hatake</div>

                                                            <div class="comment__meta">
                                                                <div class="comment__time">Aug 14, 2021</div>
                                                                <div class="comment__reply">
                                                                    <a class="comment-reply-link" href="#0">Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="comment__text">
                                                            <p>Duis sed odio sit amet nibh vulputate
                                                            cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
                                                            cursus a sit amet mauris</p>
                                                        </div>

                                                    </div>

                                                    <ul class="children">

                                                        <li class="depth-3 comment">

                                                            <div class="comment__avatar">
                                                                <img class="avatar" src="images/avatars/user-04.jpg" alt="" width="50" height="50">
                                                            </div>

                                                            <div class="comment__content">

                                                                <div class="comment__info">
                                                                    <div class="comment__author">John Doe</div>

                                                                    <div class="comment__meta">
                                                                        <div class="comment__time">Aug 14, 2021</div>
                                                                        <div class="comment__reply">
                                                                            <a class="comment-reply-link" href="#0">Reply</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="comment__text">
                                                                <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                                                                etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                                                </div>

                                                            </div>

                                                        </li>

                                                    </ul>

                                                </li>

                                            </ul>

                                        </li> <!-- end comment level 1 -->

                                        <li class="depth-1 comment">

                                            <div class="comment__avatar">
                                                <img class="avatar" src="images/avatars/user-02.jpg" alt="" width="50" height="50">
                                            </div>

                                            <div class="comment__content">

                                                <div class="comment__info">
                                                    <div class="comment__author">Shikamaru Nara</div>

                                                    <div class="comment__meta">
                                                        <div class="comment__time">Aug 13, 2021</div>
                                                        <div class="comment__reply">
                                                            <a class="comment-reply-link" href="#0">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="comment__text">
                                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                                </div>

                                            </div>

                                        </li>  <!-- end comment level 1 -->

                                    </ol>
                                    <!-- END commentlist -->

                                </div> <!-- end col-full -->
                            </div> <!-- end comments -->


                            <div class="comment-respond">

                                <!-- START respond -->
                                <div id="respond">

                                    <h3>
                                    Add Comment 
                                    <span>Your email address will not be published.</span>
                                    </h3>

                                    <form name="contactForm" id="contactForm" method="post" action="" autocomplete="off">
                                        <fieldset class="row">

                                            <div class="column lg-6 tab-12 form-field">
                                                <input name="cName" id="cName" class="u-fullwidth h-remove-bottom" placeholder="Your Name" value="" type="text">
                                            </div>

                                            <div class="column lg-6 tab-12 form-field">
                                                <input name="cEmail" id="cEmail" class="u-fullwidth h-remove-bottom" placeholder="Your Email" value="" type="text">
                                            </div>

                                            <div class="column lg-12 form-field">
                                                <input name="cWebsite" id="cWebsite" class="u-fullwidth h-remove-bottom" placeholder="Website" value="" type="text">
                                            </div>

                                            <div class="column lg-12 message form-field">
                                                <textarea name="cMessage" id="cMessage" class="u-fullwidth" placeholder="Your Message"></textarea>
                                            </div>

                                            <div class="column lg-12">
                                                <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large u-fullwidth" value="Add Comment" type="submit">
                                            </div>

                                        </fieldset>
                                    </form> <!-- end form -->

                                </div>
                                <!-- END respond-->

                            </div> <!-- end comment-respond -->

                        </div> <!-- end comments-wrap -->

                    </div>
                </div> <!-- end entry-wrap -->
        </section> 
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
</html><?php /**PATH C:\Users\USER\OneDrive\Desktop\blog-app\resources\views/home/blog.blade.php ENDPATH**/ ?>