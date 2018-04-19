<?php get_header(); ?>

      <div class="row">
        <div class="col-sm-8">
          
          <?php
          $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
          ?>
      
          <h2>Posts by <?php echo $curauth->nickname; ?></h2>
      
          <ul>
      <!-- The Loop -->
      
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <li>
                  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                  <?php the_title(); ?></a>,
                  <?php the_time('d M Y'); ?> in <?php the_category('&');?>
              </li>
      
          <?php endwhile; else: ?>
              <p><?php _e('No posts by this author.'); ?></p>
      
          <?php endif; ?>
      

         </div>

        	<?php get_sidebar(); ?>

      </div>
      <!-- /.row -->

<?php get_footer(); ?>