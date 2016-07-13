<?php get_template_part('templates/head'); ?>
<body data-spy="scroll"  data-target="#sidebar-nav-spy" <?php body_class(''); ?>>
  <?php
	if (locate_template('templates/pre-header.php') != '') {
		get_template_part('templates/pre-header');
	}
	do_action('get_header' , 'header');
    get_template_part('templates/header');
  ?>
  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main" role="main">
		<?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->
<?php
	get_template_part('templates/footer'); 
	wp_footer(); 
?>
</body>
</html>
