<?php get_header(); ?>

      <div class="row">
        <div class="col-sm-8">
          
          <h1 class="mt-4"><?php single_cat_title( '', true ); ?></h1>
 
					<?php 
					if ( have_posts() ) : 
					 
						// display posts in this category
						while ( have_posts() ) : the_post(); ?>
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<p><?php the_time('F jS, Y') ?></p> 
							<?php the_content(); ?>
						<?php endwhile; 
					 
					else: ?>
						<p>Sorry, no posts matched your criteria.</p>
					 
					<?php endif; ?>

 				</div>

				<?php get_sidebar(); ?>

      </div>
      <!-- /.row -->

<?php get_footer(); ?>