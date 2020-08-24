<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cyberize-app-dev
 */

?>
<!-- TEMP NAV FOR DEV ONLY. PLZ REMOVE. START -->
<div class="navbar fixed-bottom navbar-light bg-light d-none" style="margin-bottom: 50px">
  <nav id="site-navigation" class="main-navigation mx-auto d-block">

    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
        'menu_class'     => '',
        'container_class' => '',
      )
    );
  ?>

  </nav><!-- #site-navigation -->
</div>
<!-- TEMP NAV FOR DEV ONLY. PLZ REMOVE. END -->

<footer id="colophon" class="site-footer navbar fixed-bottom navbar-light bg-light">
  <div class="site-info">
    &copy; <?php echo date("Y"); ?> SelfLIST
  </div><!-- .site-info -->

  <!--==============================================================================
		=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
		===============================================================================-->

  <div style="color: dodgerblue"><strong>Current template:</strong>
    <?php echo get_current_template( true ); ?>
  </div>

  <!-- ====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ==== -->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</body>

</html>