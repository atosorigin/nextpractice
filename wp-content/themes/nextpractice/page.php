<?php
get_header();
?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div id="page_contents">
    <div id="page_banner">
        <div id="logo" onclick="location.href='/'"></div>
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
        <ul>
          <?php wp_nav_menu( array('container' => '', 'depth' => 1) ) ?>
        </ul>
    </div>

    <div id="footer" class="page_footer">
        &nbsp;
    </div>

    <?php //comments_template( '', true ); ?>
</div>
<?php endwhile; ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
