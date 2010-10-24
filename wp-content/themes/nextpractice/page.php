<?php
get_header();
?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div id="page_contents">
    <div id="page_banner">
        <div id="logo"></div>
        <div id="title">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </div>
    </div>

    <div id="left_column">&nbsp;
    </div>
    <div id="middle_column">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="entry-content">
                <?php the_content(); ?>
                <?php //wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                <?php //edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
            </div>
        </div>
    </div>
    <div id="right_column">
          <?php wp_list_pages('child_of='.get_the_ID().'&title_li=<h5>'.__('Pages').'</h5>'); ?>
    </div>

    <div id="footer">
        <?php wp_nav_menu( array('container' => '', 'depth' => 1) ) ?>
    </div>

    <?php //comments_template( '', true ); ?>
<?php endwhile; ?>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
