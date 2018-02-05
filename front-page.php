<?php 
/* Front Page Template 
* See template-parts folder to make changes to each section
*/

get_header(); ?>


<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
  <?php get_template_part( 'template-parts/content', 'about' ); ?>

</section>


<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
  <?php get_template_part('template-parts/content', 'experience'); ?>

</section>


<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
  <?php get_template_part('template-parts/content', 'education'); ?>

</section>


<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
  <?php get_template_part('template-parts/content', 'skills'); ?>

</section>


<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
  <?php get_template_part('template-parts/content', 'interests'); ?>

</section>


<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
  <?php get_template_part('template-parts/content', 'awards'); ?>

</section>


<?php get_footer(); ?>
