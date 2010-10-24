<?php
/**
 * Template Name: shop front
 *
 * A custom shop front page 
 *
 */
get_header(); ?>
<div id="contents">
          <div class="cell"></div>
          <div class="cell clickable" onclick="location.href='/analysis-and-design/'"></div>
          <div class="cell"></div>
          <div class="cell">
              <?php wp_nav_menu( array('container' => '', 'depth' => 1) ) ?>
          </div>

          <div class="cell clickable" onclick="location.href='/strategy-and-architecture/'"></div>
          <div class="cell"></div>
          <div class="cell clickable" onclick="location.href='/human-factors/'"></div>
          <div class="cell text">
              <p>
                  <?php bloginfo('description'); ?>
              </p>
              <!--p>
            decisions and actions that are successful come through addressing
            real-world complexity. take multiple perspectives to tackle the
            biggest problems. we share a common outlook with our cleints and
            they, like us, have found that best practice used for management is
            insufficient for their challenge and aspirations. We serve our
            clients by addressing a specific issue or opportunity, leverageing
            one or more of our famous five practices.
              </p-->
          </div>

          <div class="cell"></div>
          <div class="cell clickable" onclick="location.href='/operations/'"></div>
          <div class="cell"></div>
          <div class="cell clickable" onclick="location.href='/business-strategy/'"></div>

          <div id="footer">
                Next Practice Advisory is the Strategy & Change practice of Atos Consulting Ltd, formerly KPMG Consulting  &copy;2010.
          </div>

      </div>

<?php get_footer(); ?>