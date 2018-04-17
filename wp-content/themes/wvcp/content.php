<?php get_header(); ?>

      <div class="row">
        <div class="col-sm-8">
          
          <h1 class="mt-4"><?php the_title(); ?></h1>
          <?php the_content(); ?>

         </div>

        	<?php get_sidebar(); ?>

      </div>
      <!-- /.row -->

<?php get_footer(); ?>