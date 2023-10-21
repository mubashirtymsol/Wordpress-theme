<?php get_header() ?>




<div class="blog-post-container" style="margin-top:180px; padding: 0px 8%;">

<?php while( have_posts()){ 
    the_post()  ?>
        <div class="blog-post">
            <div class="blog-image">
                <?php $img= wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                
                 ?>
                <img src="<?php echo $img[0]; ?>" alt="Blog Post 1 Image">
            </div>
            <h2 class="blog-title"><?php the_title() ?></h2>
            <p class="blog-date">Published on:  <?php echo get_the_date() ?> </p>
            <!-- <p class="blog-description"><?php the_excerpt() ?></p> -->
            <a href="<?php the_permalink()  ?>" class="read-more-button">Read More</a>
        </div>
<?php } ?>
    </div>

    <?php the_posts_pagination();
 ?>