<section id="content" class="s-content">

            <!--  masonry -->

            <div id="bricks" class="bricks">

                <div class="masonry">

                    <div class="bricks-wrapper" data-animate-block>

                        <div class="grid-sizer"></div>

                        @foreach($post as $post)

                        <article class="brick entry" data-animate-el>
        
                        <div class="entry__thumb">
                                <a href="{{ url('blog',$post->id) }}" class="thumb-link">
                                    <img src="post/{{ $post->image }}" 
                                        srcset="post/{{ $post->image }} 1x, post/{{ $post->image }} 2x" alt="">
                                </a>
                            </div> <!-- end entry__thumb -->
        

                            <div class="entry__text">
                                <div class="entry__header">
                                    <div class="entry__meta">


                                        <span class="cat-links">
                                            {{ $post->category }}
                                        </span>
  

                                        <span class="byline">
                                            By:
                                            {{ $post->user_name }}
                                        </span>
                                    </div>
                                    <h1 class="entry__title"><a href="single-standard.html">{{ $post->title }}</a></h1>
                                 </div>
                                <div class="entry__excerpt">
                                    <p>
                                    {{ $post->small_description }}
                                    </p>
                                </div>
                                <a class="entry__more-link" href="{{ url('blog',$post->id) }}">Read More</a>
                            </div> <!-- end entry__text -->
                        
                        </article> <!-- end article -->

                        @endforeach



                    </div> <!-- end bricks-wrapper -->

                </div> <!-- end masonry-->


                <!-- pagination -->
                <!-- end pagination -->

            </div> <!-- end bricks -->

        </section>