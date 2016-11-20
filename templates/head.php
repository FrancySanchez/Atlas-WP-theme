<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta name="google-site-verification" content="rTgCx8xZ4nPq0ZSVBECaQM1nsbzMfu8bj4g8i4Vu_hg" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="twitter:widgets:csp" content="on">
  <?php wp_head(); ?>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
  <link href="https://fonts.googleapis.com/css?family=Anton|Open+Sans" rel="stylesheet">
  <script>
 	var nav = $('#nav');
	var selection = $('.select');
	var select = selection.find('li');

	nav.click(function(event) {
    if (nav.hasClass('active')) {
        nav.removeClass('active');
        selection.stop().slideUp(200);
    } else {
        nav.addClass('active');
        selection.stop().slideDown(200);
    }
    event.preventDefault();
	});

	select.click(function(event) {
    // updated code to select the current language
    select.removeClass('active');
    $(this).addClass('active');

    alert ("location.href = 'index.php?lang=" + $(this).attr('data-value'));
	});
	</script>
  
 
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4796258-1', 'auto');
  ga('send', 'pageview');

  </script>
</head>