<?php 
global $post;
get_header(); 
get_header('top');

$upload_dir = wp_upload_dir();


?>


</div>


<div id="secondMain" class="section">
    <div class="wrapper g_cols">
        <div class="cols d_34_cols t_34_cols m_1_cols">
            <div class="heading">
                <h1><?php the_title(); ?></h1>
                <!-- <div class="date">Đăng vào: <?php echo get_the_date() ; ?></div> -->
            </div>
            <div class="main-content">
                <?php 
                the_content(); 
                ?>

            </div>
        </div>
        <div class="cols d_14_cols t_14_cols m_1_cols">
            <h2>Bài viết liên quan</h2>
            <div class="blog-wrapper">
                <?php
                    $args = array(
                        'post_status' => 'publish',
                        'type' => 'post',
                        'tax_query'             => array(
                            array(
                                'taxonomy'      => 'category',
                                'field' => 'term_id', //This is optional, as it defaults to 'term_id'
                                'terms'         => $category_detail,// lấy id của các cat chưa sản phẩm này
                                'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                            ),
                        ),
                        'numberposts'      =>8 ,
                        'category'         => 0,
                        'orderby'          => 'rand',
                        'order' => 'DESC',
                    );
                    $blogs = get_posts($args);
                    // echo count($blogs);
                    // echo '<pre style="color: #fff">';
                    // print_r($blogs[0]);
                    // echo '</pre>';
                    if($blogs){
                        foreach($blogs as $blog){
                            setup_postdata( $blog );
                            $author_id = $blog->post_author;
                ?>
                <div class="items">

                    <a href="<?php echo get_permalink( $blog->ID); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url($blog->ID,'full'); ?>"
                            alt="<?php echo $blog->post_title; ?>">
                        <div class="blog-title"><?php echo $blog->post_title; ?></div>
                        <!-- <div class="date">Đăng vào: <?php //echo explode(' ', $blog->post_date)[0] ; ?></div>
                                    <div class="author">Bởi: <?php //the_author_meta( 'user_nicename' , $author_id ); ?> </div> -->
                        <p class="short">
                            <?php echo explode("\n", wordwrap(get_the_excerpt($blog->ID), 150))[0]; ?>...</p>
                    </a>

                </div>
                <?php
                        }
                        wp_reset_postdata();
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<?php setPostViews(get_the_ID());//đếm số lượt xem bài post ?>


<?php 

get_footer(); 
?>