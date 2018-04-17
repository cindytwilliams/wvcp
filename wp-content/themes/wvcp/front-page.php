<?php get_header(); ?>

      <div class="row">
        
        <div class="col-sm-8">
          <?php
            // query for the about page
            $your_query = new WP_Query( 'pagename=about' );
            // "loop" through query (even though it's just one page) 
            while ( $your_query->have_posts() ) : $your_query->the_post();
                the_content();
            endwhile;
            // reset post data (important!)
            wp_reset_postdata();
          ?>
        </div>

        <?php get_sidebar(); ?>

      </div>
      <!-- /.row -->

<?php get_footer(); ?>