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
                  We are a strategy and change consultancy, specialising in working with clients
                  to address complex situations, where the answers are unknown, unclear or finely
                  balanced. By strategy, we mean making sense of and solving complex problems
                  and defining how to address major opportunities. By change, we mean realising the
                  answers.
              </p>
          </div>

          <div class="cell"></div>
          <div class="cell clickable" onclick="location.href='/business-strategy/'"></div>
          <div class="cell"></div>
          <div class="cell text">
              <p>
                We tend to work with executives and their teams who have found, like us, that the
                best practices and knowledge typically used for management, strategy and change
                to be insufficient for their challenges and aspirations. In a straightforward sense, our
                clients report they experience poor outcomes with major initiatives despite all the best
                practices deployed into the situation. Working together, we achieve better results.
              </p>
          </div>

          <div id="footer">
                Next Practice Consulting is the Strategy & Change unit of Atos Consulting Ltd, formerly KPMG Consulting  &copy;2010.
          </div>

      </div>

<?php get_footer(); ?>