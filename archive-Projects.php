<?php get_header(); ?>

<!-- =======================
             BLOG Content
    ======================== -->
<div class="container mt-lg-5 mt-md-4 mt-sm-2 mt-2">
    <div class="row">
        <div class="col-lg-8 col-md-6">
            <!-- Section Divider -->
            <header class="category__header">
                <h2 class="category__title"><a href="#">Projects</a></h2>
            </header>
            <!-- Section Divider END -->
            <!-- Section BLOG POSTS -->
            <div class="row">
                <?php
                
                /* quick reminder
                    #dont use custom query on blog page,
                    #if you use it, wp automatic pagination won't work,
                    #then you've to manually config it
                */
                while (have_posts()) {
                    the_post();

                    ?>
                    <div class="col-lg-6">
                        <div class="postThumbnail">
                            <div class="postImg-container">
                                <img class="postImg" src="<?php echo get_the_post_thumbnail_url( get_the_ID(  ) )?>" alt="thumb">
                            </div>
                            <div class="postTitle">
                                <a href="#"><h5>#<?php echo get_the_category_list( ', #' ) ?></h5></a>
                                <a href="<?php the_permalink( ) ?>"><h4><?php the_title( ) ?></h4></a>
                            </div>
                        </div>
                    </div>
                    <?php wp_reset_query(  ); ?>
                <?php
                }
                ?>
                <!-- Section BLOG POSTS |END-->
            </div>
            <!-- Pagination -->
            <div class="pagination-wp">
                <?php echo paginate_links(  ); ?>
            </div>
            <!-- Pagination END -->

            <!-- Section PROJECT -->
            
            <!-- Section PROJECT END-->


        </div>



        <!-- Blog Left Side -->
        <div class="pr-5 col-lg-4 col-md-6 pr-2 pr-md-3 pr-lg-5">
            <div class="main_content_left ">

                <div class="join-container">
                    <h5>Hey Stranger!!</h5>
                    <p>Feel Lonely? join with us and share your knowledge with the community. Let's grow together.</p>
                    <a class="btn btn-outline-primary" href="#">Join Community</a>
                </div>
                <div class="trending-container">
                    <h5>Trending Junks</h5>
                    <!-- trending post row -->
                    <hr>
                    <div class="row trending-post">
                        <div class="col-3 trending-post-img-container">
                            <img class="trending-post-img" src="<?php echo get_template_directory_uri() ?>/img/thumb.png" alt="thumbnail">
                        </div>
                        <div class="col-9 trending-post-title">
                            <h6>How to setup laravel Project from Scratch.</h6>
                        </div>
                    </div>

                    <!-- trending post row -->
                    <hr>
                    <div class="row trending-post">
                        <div class="col-3 trending-post-img-container">
                            <img class="trending-post-img" src="<?php echo get_template_directory_uri() ?>/img/thumb2.jpg" alt="thumbnail">
                        </div>
                        <div class="col-9 trending-post-title">
                            <h6>How to setup laravel</h6>
                        </div>
                    </div>
                    <!-- trending post row -->
                    <hr>
                    <div class="row trending-post">
                        <div class="col-3 trending-post-img-container">
                            <img class="trending-post-img" src="<?php echo get_template_directory_uri() ?>/img/blogMain.png" alt="thumbnail">
                        </div>
                        <div class="col-9 trending-post-title">
                            <h6>How to setup laravel Project from Scratch.</h6>
                        </div>
                    </div>
                    <!-- trending post row -->
                    <hr>
                    <div class="row trending-post">
                        <div class="col-3 trending-post-img-container">
                            <img class="trending-post-img" src="<?php echo get_template_directory_uri() ?>/img/thumb.png" alt="thumbnail">
                        </div>
                        <div class="col-9 trending-post-title">
                            <h6>How to setup laravel Project from Scratch.</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php get_footer( ); ?>