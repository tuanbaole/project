<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-thumbnail">
            <?php project_thumbnail('thumbnail'); ?>
        </div>
        <header class="entry-header">
            <?php project_entry_header(); ?>
            <?php project_entry_meta() ?>
        </header>
        <div class="entry-content">
            <?php project_entry_content(); ?>
            <?php ( is_single() ? project_entry_tag() : '' ); ?>
        </div>
</article>