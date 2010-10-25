<?php
get_header();
?>
<div id="page_contents">
    <div id="page_banner">
        <div id="logo" onclick="location.href='/'"></div>
        <div id="title">
            <h1 class="entry-title">Publications</h1>
        </div>
    </div>

    <div id="left_column">&nbsp;
    </div>
    <div id="middle_column">
        <?php
        /* Run the loop to output the posts.
         * If you want to overload this in a child theme then include a file
         * called loop-index.php and that will be used instead.
         */
         get_template_part( 'loop', 'index' );
        ?>
    </div>
    <div id="right_column">
        <ul>
          <?php wp_list_pages('child_of=7&title_li='); ?>
        </ul>
    </div>

    <div id="footer" class="page_footer">
        <?php wp_nav_menu( array('depth' => 1, 'menu_class' => 'footer_menu') ) ?>
    </div>

    <?php //comments_template( '', true ); ?>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
