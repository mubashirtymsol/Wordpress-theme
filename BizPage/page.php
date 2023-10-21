<?php get_header(); the_post()?>

<div style="background-color: black; padding: 80px;">
  <div style="display: flex;">
    <h2 style="color: white;"><?php the_title() ?></h2>
    <h2 style="margin-left: auto;">
      <a href="<?php echo site_url() ?>">Home</a> / <?php the_title() ?>
    </h2>
  </div>
  <div>
  <?php the_post_thumbnail(array(200,400)); ?>
    <p style="font-size:24px"> <?php the_content(); ?> </p>
    <!-- Thumbnail  -->
    <?php $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
    // print_r($imagepath);
    ?>
    <img   src="<?php echo get_template_directory_uri(); ?>/<?php echo $imagepath[0] ?>" alt="" srcset="" width='400' height='100'>

  
  </div>
</div>

<?php get_footer(); ?>
