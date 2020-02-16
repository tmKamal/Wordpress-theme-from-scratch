<?php get_header(); ?>

<!-- =======================
                BLOG Content
            ======================== -->
<div class="container mt-lg-5 mt-md-4 mt-sm-2 mt-2">
    <div class="row">
        <div class="pr-5 col-md-8 pr-3 pr-md-3 pr-lg-5">
            <div class="main_content ">
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <?php if (has_post_thumbnail()) {
                            ?>
                        <div class="blog-img-container">
                            <img class="blog-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="laravel">
                        </div>
                    <?php
                        }
                        ?>

                    <div class="blog-text">
                        <h1><?php the_title() ?></h1>
                        <?php the_content() ?>
                        <hr>
                        <div class="author-box">
                            <div class="row">
                                <div class="col-3 author-icon"><i class="material-icons">account_circle</i></div>
                                <div class="col-5 author-headings justify-content-end">
                                    <h5>Author</h5>
                                    <h6><?php the_author(); ?></h6>
                                </div>
                                <div class="col-4 author-headings">
                                    <h5>Published</h5>
                                    <h6><?php the_time('F j, Y') ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <!-- Blog Left Side -->
        <div class="pr-5 col-md-4 pr-2 pr-md-3 pr-lg-5">
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
                            <img class="trending-post-img" src="img/thumb.png" alt="thumbnail">
                        </div>
                        <div class="col-9 trending-post-title">
                            <h6>How to setup laravel Project from Scratch.</h6>
                        </div>
                    </div>

                    <!-- trending post row -->
                    <hr>
                    <div class="row trending-post">
                        <div class="col-3 trending-post-img-container">
                            <img class="trending-post-img" src="img/thumb2.jpg" alt="thumbnail">
                        </div>
                        <div class="col-9 trending-post-title">
                            <h6>How to setup laravel</h6>
                        </div>
                    </div>
                    <!-- trending post row -->
                    <hr>
                    <div class="row trending-post">
                        <div class="col-3 trending-post-img-container">
                            <img class="trending-post-img" src="img/blogMain.png" alt="thumbnail">
                        </div>
                        <div class="col-9 trending-post-title">
                            <h6>How to setup laravel Project from Scratch.</h6>
                        </div>
                    </div>
                    <!-- trending post row -->
                    <hr>
                    <div class="row trending-post">
                        <div class="col-3 trending-post-img-container">
                            <img class="trending-post-img" src="img/thumb.png" alt="thumbnail">
                        </div>
                        <div class="col-9 trending-post-title">
                            <h6>How to setup laravel Project from Scratch.</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- end of the first row -->
    <div class="row">
        <div class="pr-5 col-md-8 pr-3 pr-md-3 pr-lg-5">
            <div class="main_content ">
                <div class="blog-text">
                    <?php
                    $args = array(
                        'class_submit' => 'btn btn-success',
                        'class_comment-form' => 'form-group',
                        'class_comment-form-author' => 'form-control',
                        'fields' => apply_filters(
                            'comment_form_default_fields',
                            array(
                                'author' =>
                                '<p class="comment-form-author"><div class="form-group"><label for="author">' . __('Name', 'domainreference') . '</label> ' . ($req ? '<span class="required">*</span>' : '') .
                                    '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr($commenter['comment_author']) .
                                    '" ' . $aria_req . ' /></div></p>',

                                'email' =>
                                '<p class="comment-form-email"><div class="form-group"><label for="email">' . __('Email', 'domainreference') . '</label> ' . ($req ? '<span class="required">*</span>' : '') .
                                    '<input id="email" name="email" class="form-control" type="text" value="' . esc_attr($commenter['comment_author_email']) .
                                    '" ' . $aria_req . ' /></div></p>',

                                'url' =>
                                '<p class="comment-form-url"><div class="form-group"><label for="url">' . __('Website', 'domainreference') . '</label>' .
                                    '<input id="url" name="url" class="form-control" type="text" value="' . esc_attr($commenter['comment_author_url']) .
                                    '"   /></p>',
                            )
                        ),
                        'comment_field' =>  '<p class="comment-form-comment"><div class="form-group"><label for="comment">' . _x('Comment', 'noun') .
                            '</label><textarea id="comment" name="comment" class="form-control"  rows="8" aria-required="true">' .
                            '</textarea></div></p>',
                        'comment_notes_after' => '',
                        'title_reply' => '<div class="crunchify-text"> <h5>Please Post Your Comments & Reviews</h5></div>'
                    );
                    comment_form($args);
                    $comment_number = get_comments_number();
                    if ($comment_number != 0) {
                        ?>
                        <h2>What others says!</h2>
                        <ul class="all-comments">
                            <?php
                                $comments = get_comments(array(
                                    'post-ID' => $post->ID,
                                    'status' => 'approve'
                                ));

                                wp_list_comments(array(
                                    'per_page' => 5
                                ), $comments);
                                ?>
                        </ul>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Blog Left Side -->
        <div class="pr-5 col-md-4 pr-2 pr-md-3 pr-lg-5">

        </div>
    </div><!-- end of the first row -->


</div>
</div>

<?php get_footer(); ?>