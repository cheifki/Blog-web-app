<section id="content" class="s-content">

            <!--  masonry -->

            <div id="bricks" class="bricks">

                <div class="masonry">

                    <div class="bricks-wrapper" data-animate-block>

                        <div class="grid-sizer"></div>

                        <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <article class="brick entry" data-animate-el>
        
                        <div class="entry__thumb">
                                <a href="<?php echo e(url('blog',$post->id)); ?>" class="thumb-link">
                                    <img src="post/<?php echo e($post->image); ?>" 
                                        srcset="post/<?php echo e($post->image); ?> 1x, post/<?php echo e($post->image); ?> 2x" alt="">
                                </a>
                            </div> <!-- end entry__thumb -->
        

                            <div class="entry__text">
                                <div class="entry__header">
                                    <div class="entry__meta">


                                        <span class="cat-links">
                                            <?php echo e($post->category); ?>

                                        </span>
  

                                        <span class="byline">
                                            By:
                                            <?php echo e($post->user_name); ?>

                                        </span>
                                    </div>
                                    <h1 class="entry__title"><a href="single-standard.html"><?php echo e($post->title); ?></a></h1>
                                 </div>
                                <div class="entry__excerpt">
                                    <p>
                                    <?php echo e($post->small_description); ?>

                                    </p>
                                </div>
                                <a class="entry__more-link" href="<?php echo e(url('blog',$post->id)); ?>">Read More</a>
                            </div> <!-- end entry__text -->
                        
                        </article> <!-- end article -->

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    </div> <!-- end bricks-wrapper -->

                </div> <!-- end masonry-->


                <!-- pagination -->
                <!-- end pagination -->

            </div> <!-- end bricks -->

        </section><?php /**PATH C:\Users\USER\OneDrive\Desktop\blog-app\resources\views/home/body.blade.php ENDPATH**/ ?>