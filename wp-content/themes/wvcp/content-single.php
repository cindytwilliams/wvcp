<?php get_header(); ?>

      <div class="row">
        <div class="col-sm-8">
          
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>

         </div>

        	<?php get_sidebar(); ?>

      </div>
      <!-- /.row -->

<?php get_footer(); ?>