<?php 
get_header(); 
get_header('top');
$upload_dir = wp_upload_dir();

// echo '<pre style="color: #fff">';
// print_r($upload_dir['url']);
// echo '</pre>';
?>


</div>
<div id="main">
    <div id="page">
        <div class="wrapper">
            <h1><?php the_title(); ?></h1>
            <?php
            // đoạn code này là cần thiết để hiển thị các trang mặc định như cart của woocommerce
            while (have_posts()) : the_post();

            the_content();

            endwhile;

            ?>
        </div>
    </div>


</div>

<?php 

get_footer(); 
?>