<article <?php post_class('iso-item' ); //grid item ?> >

<div  class="uk-panel">
	<div class="uk-overlay uk-overlay-hover">

		<?php 
			            if ( has_post_thumbnail() ) {
			                the_post_thumbnail();
			            } 
		?>
			
			<figcaption class="uk-overlay-panel uk-overlay-fade uk-overlay-background">
				<?php the_excerpt(); ?>
			</figcaption>
	</div>



	  <header>
	    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    <?php //get_template_part('templates/entry-meta'); ?>
	  </header>

	  <div class="entry-summary">
	  </div>


  </div>
</article>
