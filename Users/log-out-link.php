<?php // With security confirmation ?>
<a href="<?php echo esc_url(home_url('/wp-login.php?action=logout')); ?>">
  <?php _e('Log out', 'text_domain'); ?>
</a>

<?php // Without security confirmation ?>
<a href="<?php echo wp_logout_url(); ?>">
  <?php _e('Log out', constant('THEME\TEXT_DOMAIN')); ?>
</a>