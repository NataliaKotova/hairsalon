
<?php get_header(); ?>

<section class="page-wrap">
<div class="container">

  <section class="row">


    <!-- Pagination Method 1 -->
    <div class="col-lg-9">

      <h1 class="mt-2 w-100 display-4 text-center mb-2 font-weight-bold"> <?php echo single_cat_title(); ?> </h1>
      <?php get_template_part('includes/section','stories'); ?>


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
   </div>
   <!-- sidebar -->
   <div class="col-lg-3 widget">

     <?php if(is_active_sidebar('blog-sidebar')) :?>
       <?php dynamic_sidebar('blog-sidebar'); ?>

     <?php endif; ?>
   </div>

</section>
</div>
</section>
<?php get_footer(); ?>
