<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);


function wpse8170_add_custom_table_class( $content ) {
    return str_replace( '<table>', '<table class="responsive">', $content );
}
add_filter( 'the_content', 'wpse8170_add_custom_table_class' );

/**
 * Recent_Posts widget class
 *
 * @since 2.8.0
 */
class AtlasWP_Widget_Recent_Posts extends WP_Widget {

	public function __construct() {
		$widget_ops = array('classname' => 'widget_recent_entries', 'description' => __( "Your site&#8217;s most recent Posts.") );
		parent::__construct('recent-posts', __('Recent Posts'), $widget_ops);
		$this->alt_option_name = 'widget_recent_entries';

		add_action( 'save_post', array($this, 'flush_widget_cache') );
		add_action( 'deleted_post', array($this, 'flush_widget_cache') );
		add_action( 'switch_theme', array($this, 'flush_widget_cache') );
	}

	public function widget($args, $instance) {
		$cache = array();
		if ( ! $this->is_preview() ) {
			$cache = wp_cache_get( 'widget_recent_posts', 'widget' );
		}

		if ( ! is_array( $cache ) ) {
			$cache = array();
		}

		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		if ( isset( $cache[ $args['widget_id'] ] ) ) {
			echo $cache[ $args['widget_id'] ];
			return;
		}

		ob_start();

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );

		/** This filter is documented in wp-includes/default-widgets.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

		$number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
		if ( ! $number )
			$number = 5;
		$show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

		/**
		 * Filter the arguments for the Recent Posts widget.
		 *
		 * @since 3.4.0
		 *
		 * @see WP_Query::get_posts()
		 *
		 * @param array $args An array of arguments used to retrieve the recent posts.
		 */
		$r = new WP_Query( apply_filters( 'widget_posts_args', array(
			'posts_per_page'      => $number,
			'no_found_rows'       => true,
			'post_status'         => 'publish',
			'ignore_sticky_posts' => true
		) ) );

		if ($r->have_posts()) :
?>
		<?php echo $args['before_widget']; ?>
		<?php if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		} ?>
		<ul>
		<?php while ( $r->have_posts() ) : $r->the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, array(250,9999) );?></a>
				<a href="<?php the_permalink(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a>
			<?php if ( $show_date ) : ?>
				<span class="post-date"><?php echo get_the_date(); ?></span>
			<?php endif; ?>
			</li>
		<?php endwhile; ?>
		</ul>
		<?php echo $args['after_widget']; ?>
<?php
		// Reset the global $the_post as this query will have stomped on it
		wp_reset_postdata();

		endif;

		if ( ! $this->is_preview() ) {
			$cache[ $args['widget_id'] ] = ob_get_flush();
			wp_cache_set( 'widget_recent_posts', $cache, 'widget' );
		} else {
			ob_end_flush();
		}
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = (int) $new_instance['number'];
		$instance['show_date'] = isset( $new_instance['show_date'] ) ? (bool) $new_instance['show_date'] : false;
		$this->flush_widget_cache();

		$alloptions = wp_cache_get( 'alloptions', 'options' );
		if ( isset($alloptions['widget_recent_entries']) )
			delete_option('widget_recent_entries');

		return $instance;
	}

	public function flush_widget_cache() {
		wp_cache_delete('widget_recent_posts', 'widget');
	}

	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
		$show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;
?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
		<input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>

		<p><input class="checkbox" type="checkbox" <?php checked( $show_date ); ?> id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" />
		<label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php _e( 'Display post date?' ); ?></label></p>
<?php
	}
}

function atlaswp_register_custom_widgets() {
    register_widget( 'Atlaswp_Widget_Recent_Posts' );
}
add_action( 'widgets_init', 'atlaswp_register_custom_widgets' );


/**
* Remove the links from Admin dashboard
**/

add_action( 'admin_menu', 'my_admin_menu' );
 
function my_admin_menu() {
     remove_menu_page('link-manager.php');
}

add_filter('simplemodal_registration_form', 'mytheme_registration_form');
function mytheme_registration_form($form) {
    $options = get_option('simplemodal_login_options');

    $output = sprintf('
<form name="registerform" id="registerform" action="%s" method="post">
    <div class="title">%s</div>
    <div class="simplemodal-login-fields">
    <p>
        <label>%s<br />
        <input type="text" name="user_login" class="user_login input" value="" size="20" tabindex="10" /></label>
    </p>
    <p>
        <label>%s<br />
        <input type="text" name="user_email" class="user_email input" value="" size="25" tabindex="20" /></label>
    </p>',
        site_url('wp-login.php?action=register', 'login_post'),
        __('Register', 'simplemodal-login'),
        __('Agent Name', 'simplemodal-login'),
        __('E-mail', 'simplemodal-login')
    );

    ob_start();
    do_action('register_form');
    $output .= ob_get_clean();

    $output .= sprintf('
    <p class="reg_passmail">%s</p>
    <p class="submit">
        <input type="submit" name="wp-submit" value="%s" tabindex="100" />
        <input type="button" class="simplemodal-close" value="%s" tabindex="101" />
    </p>
    <p class="nav">
        <a class="simplemodal-login" href="%s">%s</a>',
        __('A password will be e-mailed to you.', 'simplemodal-login'),
        __('Register', 'simplemodal-login'),
        __('Cancel', 'simplemodal-login'),
        site_url('wp-login.php', 'login'),
        __('Log in', 'simplemodal-login')
    );

    if ($options['reset']) {
        $output .= sprintf(' | <a class="simplemodal-forgotpw" href="%s" title="%s">%s</a>',
            site_url('wp-login.php?action=lostpassword', 'login'),
            __('Password Lost and Found', 'simplemodal-login'),
            __('Lost your password?', 'simplemodal-login')
        );
    }

    $output .= '
    </p>
    </div>
    <div class="simplemodal-login-activity" style="display:none;"></div>
</form>';

    return $output;
}


add_filter('simplemodal_login_form', 'mytheme_login_form');
function mytheme_login_form($form) {
    $users_can_register = get_option('users_can_register') ? true : false;
    $options = get_option('simplemodal_login_options');

    $output = sprintf('
<form name="loginform" id="loginform" action="%s" method="post">
    <div class="title">%s</div>
    <div class="simplemodal-login-fields">
    <p>
        <label>%s<br />
        <input type="text" name="log" class="user_login input" value="" size="20" tabindex="10" /></label>
    </p>
    <p>
        <label>%s<br />
        <input type="password" name="pwd" class="user_pass input" value="" size="20" tabindex="20" /></label>
    </p>',
        site_url('wp-login.php', 'login_post'),
        __('Login', 'simplemodal-login'),
        __('Agent Name', 'simplemodal-login'),
        __('Password', 'simplemodal-login')
    );

    ob_start();
    do_action('login_form');
    $output .= ob_get_clean();

    $output .= sprintf('
    <p class="forgetmenot"><label><input name="rememberme" type="checkbox" id="rememberme" class="rememberme" value="forever" tabindex="90" />%s</label></p>
    <p class="submit">
        <input type="submit" name="wp-submit" value="%s" tabindex="100" />
        <input type="button" class="simplemodal-close" value="%s" tabindex="101" />
        <input type="hidden" name="testcookie" value="1" />
    </p>
    <p class="nav">',
        __('Remember Me', 'simplemodal-login'),
        __('Log In', 'simplemodal-login'),
        __('Cancel', 'simplemodal-login')
    );

    if ($users_can_register && $options['registration']) {
        $output .= sprintf('<a class="simplemodal-register" href="%s">%s</a>',
            site_url('wp-login.php?action=register', 'login'),
            __('Register', 'simplemodal-login')
        );
    }

    if (($users_can_register && $options['registration']) && $options['reset']) {
        $output .= ' | ';
    }

    if ($options['reset']) {
        $output .= sprintf('<a class="simplemodal-forgotpw" href="%s" title="%s">%s</a>',
            site_url('wp-login.php?action=lostpassword', 'login'),
            __('Password Lost and Found', 'simplemodal-login'),
            __('Lost your password?', 'simplemodal-login')
        );
    }

    $output .= '
    </p>
    </div>
    <div class="simplemodal-login-activity" style="display:none;"></div>
</form>';

    return $output;
}

function languages_list_fixed(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        echo '<ul class="sub-menu">';
        foreach($languages as $l){
            echo '<li>';
            if($l['country_flag_url']){
                if(!$l['active']) echo '<a href="'.$l['url'].'">';
                echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
                if(!$l['active']) echo '</a>';
            }
            echo '</li>';
        }
        echo '</ul>';
    }
}

function language_selector_flags(){
 
global $sitepress; 
 
    $languages = icl_get_languages('skip_missing=0&orderby=code');
     
    if(!empty($languages)){
     
        $default_lang   = $sitepress->get_current_language();
        $str1           = NULL;
        $str2           = NULL;
                   
        foreach($languages as $l){      
            //echo "<pre>";print_r($l);echo "</pre>";
             
            if($l['language_code'] == $default_lang){
                $str1 .= '<a href="'.$l['url'].'">';
                $str1 .= '<img src="'.$l['country_flag_url'].'" height="18" alt="'.$l['language_code'].'" width="24" />';
                $str1 .= '</a>';
            }
            else {
                $str2 .= '<li><a href="'.$l['url'].'">';
                $str2 .= '<img src="'.$l['country_flag_url'].'" height="18" alt="'.$l['language_code'].'" width="24" />';
                $str2 .= '</a></li>';          
            }
            
        }
        echo '<ul class="fixed-flags"><li>' . $str1 .'<ul class="sub-menu">';
        echo $str2;
        echo '</ul></li></ul>';
    }
}

Function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/assets/css/custom-login-styles.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

function admin_google_analytics_script()
    
{
echo "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4796258-1', 'auto');
  ga('send', 'pageview');

</script> 
";
}

add_action( 'admin_enqueue_scripts', 'admin_google_analytics_script' );


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );