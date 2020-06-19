<?php get_header(); ?>

<section class="page-wrap">
  <section class="row ">
    <div class="col-lg-12">
      <h1 class="mt-4 display-4 text-center font-weight-bold mb-4 headingColor w-100"> <?php echo single_cat_title(); ?> </h1>
      <?php get_template_part('includes/section','archive'); ?>
      <!-- Pagination Method 1 -->
   <?php previous_posts_link();  ?>
   <?php next_posts_link();  ?>



   <!-- Pagination Method 2 -->
   <?php
      // global $wp_query;
      // $big = 99999999999;
      // echo paginate_links(array(
      //   'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
      //   'format'=>'?paged-%#%',
      //   'current' => max(1, get_query_var('paged')),
      //   'total' => $wp_query -> max_num_pages
      // ));

   ?>
 
</section>
</div>
</section>
<?php get_footer(); ?>
