<?php get_header(); ?>
<div class="content">
    <section id="main-content">
    	<?php 
    		if ( have_posts() ) {
    			while ( have_posts() ) {
    				the_post();
    				get_template_part( 'content', get_post_format() );
    			}
    			project_pagination();
    		} else {
    			get_template_part( 'content', 'none' );
    		}
    	?>
    </section>
    <section id="sidebar">
    	<?php get_sidebar(); ?>
    </section>
</div>
<?php get_footer(); ?>