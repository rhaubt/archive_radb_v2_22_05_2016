<?php
/*
Plugin Name: Admin Menu Post/Page Counter
Plugin URI: http://www.faebusoft.ch/downloads/admin-menu-page-counter
Description: Shows the number of post or/and pages of a certain state in the menu (similar to the available plugin updates)
Author: Fabian von Allmen
Author URI: http://www.faebusoft.ch
Version: 1.0.1
License: GPL
Last Update: 2011-03-14
*/

class fsAdminMenuPostCounter {

	private static $plugin_name     = 'Admin Menu Post/Page Counter';
	private static $plugin_vers     = '1.0.1';
	private static $plugin_id       = 'fsAMPC'; // Unique ID
	private static $plugin_options  = '';
	private static $plugin_filename = '';
	private static $plugin_dir      = '';
	private static $plugin_url      = '';
	private static $plugin_css_url  = '';
	private static $plugin_img_url  = '';
	private static $plugin_lang_dir = '';
	private static $plugin_textdom  = '';
	private static $post_stati      = '';

	private $showAnnouncement = false;

	function fsAdminMenuPostCounter() {
		
		// Init Vars
		// Init Vars
		self::$plugin_options  = array(
			'fsampc_show_on_posts'      => 'draft',
			'fsampc_show_on_pages'      => 'draft'
		);
		self::$plugin_filename = plugin_basename( __FILE__ );
		self::$plugin_dir      = dirname(self::$plugin_filename);
		self::$plugin_url      = trailingslashit(WP_PLUGIN_URL).self::$plugin_dir.'/';
		self::$plugin_css_url  = self::$plugin_url.'css/';
		self::$plugin_img_url  = self::$plugin_url.'images/';
		self::$plugin_lang_dir = trailingslashit(self::$plugin_dir).'lang/';
		self::$plugin_textdom  = 'fsAdminMenuPostCounter';
		
		self::$post_stati  = array(
			'publish' => __('Published', self::$plugin_textdom),
			'future'  => __('Scheduled', self::$plugin_textdom),
			'pending' => __('Pending Review', self::$plugin_textdom),
			'draft'   => __('Draft', self::$plugin_textdom),
			'private' => __('Private', self::$plugin_textdom)
		);
		
		add_action('init',                 array(&$this, 'hookRegisterTextDomain'));
		add_action('admin_menu', array(&$this, 'hookAddAdminMenu'));
		add_action('admin_menu', array(&$this, 'menuAddDraftCounter'));
		add_action('admin_init', array(&$this, 'hookRegisterStylesAdmin'));
		add_filter('plugin_action_links',  array(&$this, 'hookAddPlugInSettingsLink'), 10, 2 );
		
		register_activation_hook(__FILE__, array(&$this, 'hookActivate'));
		register_uninstall_hook(__FILE__,  array('fsAdminMenuPostCounter', 'hookUninstall'));
	}

	/**
	 * Load text domain
	 * @return void
	 */
	function hookRegisterTextDomain() {
		load_plugin_textdomain(self::$plugin_textdom, false, self::$plugin_lang_dir);
	}
	
	/**
	 * Creates a menu entry in the settings menu
	 * @return void
	 */
	function hookAddAdminMenu() {
		$menutitle = __('Admin Menu Post/Page Counter', self::$plugin_textdom);
		add_options_page(__('Admin Menu Post/Page Counter', self::$plugin_textdom ), $menutitle, 8, self::$plugin_filename, array(&$this, 'createSettingsPage'));
	}
	
	/**
	 * Loads all necessary stylesheets for the admin interface
	 * @return void
	 */
	function hookRegisterStylesAdmin() {
		wp_enqueue_style('dashboard');
		wp_enqueue_style('fs-styles', self::$plugin_css_url.'default.css');
	}
	
	/**
	 * Show the number of drafts in the menu
	 * @return void
	 */
	function menuAddDraftCounter() {
		global $wpdb;
		global $menu;
		global $submenu;
		
		$show_po = get_option('fsampc_show_on_posts');
		$show_pa = get_option('fsampc_show_on_pages');
		
		if (empty($show_po)&& empty($show_pa)) {
			return;
		}
		
		// Check for valid states
		if (!isset(self::$post_stati[$show_pa]))
			$show_pa = '';
			
		if (!isset(self::$post_stati[$show_po]))
			$show_po = '';
		
		
		
		if (empty($show_po)&& empty($show_pa)) {
			return;
		}
		
		$mods = array();
		
		$num_po = 0;
		if ($show_po) {
			$num_po = $wpdb->get_var("SELECT count(ID) FROM $wpdb->posts WHERE post_type='post' AND post_status = '$show_po'");
			if ($num_po > 0) {
				$mods[] = array('id'=>'edit_posts', 'num'=>$num_po, 'ntd'=>get_option('fsampc_post_nav_to_drafts'));
			}
		}
		$num_pa = 0;
		if ($show_pa == true) {
			$num_pa = $wpdb->get_var("SELECT count(ID) FROM $wpdb->posts WHERE post_type='page' AND post_status = '$show_pa'");
			if ($num_pa > 0) {
				$mods[] = array('id'=>'edit_pages', 'num'=>$num_pa, 'ntd'=>get_option('fsampc_page_nav_to_drafts'));
			}
		}
		
		if (count($mods) <= 0) { // Nothing to display
			return;
		}
		
		
		foreach($mods as $mod) {
			foreach($menu as $k => $m) {
				if ($m[1] == $mod['id']) {
					$m[0].= '<span class="update-plugins count-'.$mod['num'].'"><span class="plugin-count">'.$mod['num'].'</span></span>';
					$menu[$k] = $m;
					break;
				}
			}
		}
	}
	
	/**
	 * Adds a "Settings" link for this plug-in in the plug-in overview
	 * @return void
	 */
	function hookAddPlugInSettingsLink($links, $file) {
		if ($file == self::$plugin_filename) {
			array_unshift($links, '<a href="options-general.php?page='.$file.'">'.__('Settings', self::$plugin_textdom).'</a>');
		}
		return $links;
	}
	
	/**
	 * Creates the announcement settings page
	 * @return void
	 */
	function createSettingsPage() {

		if (!current_user_can('manage_options'))
			wp_die(__('Cheatin&#8217; uh?', self::$plugin_textdom));
		
			
		?>
		<?php echo $this->pageStart(__('Admin Menu Post/Page Counter Settings', self::$plugin_textdom), $message); ?>
			<?php echo $this->pagePostContainerStart(75); ?>
			
			<form name="tb_post" method="post" action="options.php">
			<?php wp_nonce_field('update-options'); ?>
		
			<?php echo $this->pagePostBoxStart('pb_global', __('Settings', self::$plugin_textdom)); ?>
				<table class="fs-table">
				
				<tr><th class="label"><?php _e('Posts', self::$plugin_textdom); ?></th>
				<td>
				<?php _e('Show the number of posts with the following state', self::$plugin_textdom); ?>: 
				<select name="fsampc_show_on_posts"><option value=""><?php _e("Don't show anything", self::$plugin_textdom); ?></option>
				<?php
				$show_pa = get_option('fsampc_show_on_posts');
				foreach(self::$post_stati as $s => $l) {
					echo '<option value="'.$s.'"'.($s == $show_pa ? ' selected="selected"': '').'>'.$l.'</option>';
				}
				?>
				</select></td></tr>
				
				<tr><th class="label"><?php _e('Pages', self::$plugin_textdom); ?></th>
				<td>
				<?php _e('Show the number of pages with the following state', self::$plugin_textdom); ?>: 
				<select name="fsampc_show_on_pages"><option value=""><?php _e("Don't show anything", self::$plugin_textdom); ?></option>
				<?php
				$show_pa = get_option('fsampc_show_on_pages');
				foreach(self::$post_stati as $s => $l) {
					echo '<option value="'.$s.'"'.($s == $show_pa ? ' selected="selected"': '').'>'.$l.'</option>';
				}
				?>
				</select></td></tr>
				</table>
			<?php echo $this->pagePostBoxEnd(); ?>
							
			<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save Changes', self::$plugin_textdom); ?>" /> 
			</p>
			<input type="hidden" name="action" value="update" />
			<input type="hidden" name="tb_action" value="tb_save_options" />
			<?php echo '<input type="hidden" name="page_options" value="';
			foreach(self::$plugin_options as $k => $v) {
				echo $k.',';
			}
			echo '" />'; ?>
			</form>
			<?php echo $this->pagePostContainerEnd(); ?>
			
			<?php echo $this->pagePostContainerStart(20); ?>				
				<?php echo $this->pagePostBoxStart('pb_about', __('About', self::$plugin_textdom)); ?>
					<p><?php _e('For further information please visit the', self::$plugin_textdom); ?> <a href="http://www.faebusoft.ch/webentwicklung/page-and-post-counter-for-admin-menu/"><?php _e('plugin homepage', self::$plugin_textdom);?></a>.<br /> 
				<?php echo $this->pagePostBoxEnd(); ?>
								
				<?php echo $this->pagePostBoxStart('pb_donate', __('Donation', self::$plugin_textdom)); ?>
					<p><?php _e('If you like my work please consider a small donation', self::$plugin_textdom); ?></p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
					<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypal.com/de_DE/i/scr/pixel.gif" width="1" height="1">
					</form>
				<?php echo $this->pagePostBoxEnd(); ?>
			<?php echo $this->pagePostContainerEnd(); ?>
		<?php echo $this->pageEnd(); ?>

		<?php
	}
	
	/**
	 * Returns the page start html code
	 * @param $title Postbox Title
	 * @return String Page start html
	 */
	function pageStart($title, $message = '') {
		$ret =  '<div class="wrap">
				<div id="icon-options-general" class="icon32"><br /></div>
				<div id="otc"><h2>'.$title.'</h2>';
		if (!empty($message)) 
			$ret .= '<div id="message" class="updated fade"><p><strong>'.$message.'</strong></p></div>';
		$ret .= '</div>';
		return $ret;
	}
	
	/**
	 * Returns the page end html code
	 * @return String Page end html
	 */
	function pageEnd() {
		return '</div>';
	}
	
	/**
	 * Returns the code for a widget container
	 * @param $width Width of Container (percent)
	 * @return String Container start html
	 */
	function pagePostContainerStart($width) {
		return '<div class="postbox-container" style="width:'.$width.'%;">
					<div class="metabox-holder">	
						<div class="meta-box-sortables">';
	}
	
	/**
	 * Returns the code for the end of a widget container
	 * @return String Container end html
	 */
	function pagePostContainerEnd() {
		return '</div></div></div>';
	}
	
	/**
	 * Returns the code for the start of a postbox
	 * @param $id Unique Id
	 * @param $title Title of pagebox
	 * @return String Postbox start html
	 */
	function pagePostBoxStart($id, $title) {
		return '<div id="'.$id.'" class="postbox">
			<h3 class="hndle"><span>'.$title.'</span></h3>
			<div class="inside">';
	}
	
	/**
	 * Returns the code for the end of a postbox
	 * @return String Postbox end html
	 */
	function pagePostBoxEnd() {
		return '</div></div>';
	}
	
	/**
	 * Adds all necessary options when activating the plugin
	 */
	function hookActivate() {
		// Add all options
		foreach(self::$plugin_options as $k => $v) {
			if ($k <> 'tb_postid' && get_option($k) === false) {
				add_option($k, $v);
			}
		}
	}

	
	/**
	 * Deletes all options
	 */
	static function hookUninstall()  {
		// Remove all options
		foreach(self::$plugin_options as $k => $v) {
			remove_option($k);
		}
	}
}

if (class_exists('fsAdminMenuPostCounter')) {
	$fsAdminMenuPostCounter = new fsAdminMenuPostCounter();
}
?>