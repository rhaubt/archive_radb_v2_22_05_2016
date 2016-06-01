<?
// ***** Hide News and Update Window in Backend *****
function hide_update_notice_to_all_but_admin_users() 
{
    if (!current_user_can('update_core')) {
        remove_action( 'admin_notices', 'update_nag', 3 );
    }
}
add_action( 'admin_head', 'hide_update_notice_to_all_but_admin_users', 1 );



// ***** Auto Add Category to Custom Post Type *****
function add_item_category_automatically($post_ID) {
    global $wpdb;
    if(!has_term('','category',$post_ID)){
        $category = get_term_by( 'slug', 'cat-01-05', 'category' );
        $cat = array($category->term_id);
        wp_set_object_terms($post_ID, $cat, 'category');
    }
}
add_action('publish_cpt-01-05', 'add_item_category_automatically');

function add_site_category_automatically($post_ID) {
    global $wpdb;
    if(!has_term('','category',$post_ID)){
        $category = get_term_by( 'slug', 'cat-01-04', 'category' );
        $cat = array($category->term_id);
        wp_set_object_terms($post_ID, $cat, 'category');
    }
}
add_action('publish_cpt-01-04', 'add_site_category_automatically');

function add_place_category_automatically($post_ID) {
    global $wpdb;
    if(!has_term('','category',$post_ID)){
        $category = get_term_by( 'slug', 'cat-01-03', 'category' );
        $cat = array($category->term_id);
        wp_set_object_terms($post_ID, $cat, 'category');
    }
}
add_action('publish_cpt-01-03', 'add_place_category_automatically');

function add_project_category_automatically($post_ID) {
    global $wpdb;
    if(!has_term('','category',$post_ID)){
        $category = get_term_by( 'slug', 'cat-01-02', 'category' );
        $cat = array($category->term_id);
        wp_set_object_terms($post_ID, $cat, 'category');
    }
}
add_action('publish_cpt-01-02', 'add_project_category_automatically');

function add_news_category_automatically($post_ID) {
    global $wpdb;
    if(!has_term('','category',$post_ID)){
        $category = get_term_by( 'slug', 'cat-01-01', 'category' );
        $cat = array($category->term_id);
        wp_set_object_terms($post_ID, $cat, 'category');
    }
}
add_action('publish_cpt-01-01', 'add_news_category_automatically');

function add_unesco_category_automatically($post_ID) {
    global $wpdb;
    if(!has_term('','category',$post_ID)){
        $category = get_term_by( 'slug', 'cat-00-03', 'category' );
        $cat = array($category->term_id);
        wp_set_object_terms($post_ID, $cat, 'category');
    }
}
add_action('publish_cpt-00-03', 'add_unesco_category_automatically');

function add_wikipedia_category_automatically($post_ID) {
    global $wpdb;
    if(!has_term('','category',$post_ID)){
        $category = get_term_by( 'slug', 'cat-00-02', 'category' );
        $cat = array($category->term_id);
        wp_set_object_terms($post_ID, $cat, 'category');
    }
}
add_action('publish_cpt-00-02', 'add_wikipedia_category_automatically');

function add_resources_category_automatically($post_ID) {
    global $wpdb;
    if(!has_term('','category',$post_ID)){
        $category = get_term_by( 'slug', 'cat-00-01', 'category' );
        $cat = array($category->term_id);
        wp_set_object_terms($post_ID, $cat, 'category');
    }
}
add_action('publish_cpt-00-01', 'add_resources_category_automatically');



// ***** Profile - Removes 'Personal Options' in User Profile Backend - removes the `profile.php` admin color scheme options *****
remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );

if ( ! function_exists( 'cor_remove_personal_options' ) ) {
  /**
   * Removes the leftover 'Visual Editor', 'Keyboard Shortcuts' and 'Toolbar' options.
   */
  function cor_remove_personal_options( $subject ) {
    $subject = preg_replace( '#<h3>Personal Options</h3>.+?/table>#s', '', $subject, 1 );
    return $subject;
  }

  function cor_profile_subject_start() {
    ob_start( 'cor_remove_personal_options' );
  }

  function cor_profile_subject_end() {
    ob_end_flush();
  }
}
add_action( 'admin_head', 'cor_profile_subject_start' );
add_action( 'admin_footer', 'cor_profile_subject_end' );



// ***** Auto Add Title to Custome Post Type *****
function add_resource_title( $data, $postarr ) {
  if($data['post_type'] == 'cpt-00-01') {
    if(empty($data['post_title'])) {
      $data['post_title'] = 'RS'.date_i18n( 'ymjgis' );
    }
  }
  return $data;
}
add_filter( 'wp_insert_post_data', 'add_resource_title', 10, 2 );

function add_wikipedia_title( $data, $postarr ) {
  if($data['post_type'] == 'cpt-00-02') {
    if(empty($data['post_title'])) {
      $data['post_title'] = 'WI'.date_i18n( 'ymjgis' );
    }
  }
  return $data;
}
add_filter( 'wp_insert_post_data', 'add_wikipedia_title', 10, 2 );

function add_unesco_title( $data, $postarr ) {
  if($data['post_type'] == 'cpt-00-03') {
    if(empty($data['post_title'])) {
      $data['post_title'] = 'UN'.date_i18n( 'ymjgis' );
    }
  }
  return $data;
}
add_filter( 'wp_insert_post_data', 'add_unesco_title', 10, 2 );

function add_news_title( $data, $postarr ) {
  if($data['post_type'] == 'cpt-01-01') {
    if(empty($data['post_title'])) {
      $data['post_title'] = 'NW'.date_i18n( 'ymjgis' );
    }
  }
  return $data;
}
add_filter( 'wp_insert_post_data', 'add_news_title', 10, 2 );

function add_project_title( $data, $postarr ) {
  if($data['post_type'] == 'cpt-01-02') {
    if(empty($data['post_title'])) {
      $data['post_title'] = 'PC'.date_i18n( 'ymjgis' );
    }
  }
  return $data;
}
add_filter( 'wp_insert_post_data', 'add_project_title', 10, 2 );

function add_place_title( $data, $postarr ) {
  if($data['post_type'] == 'cpt-01-03') {
    if(empty($data['post_title'])) {
      $data['post_title'] = 'HP'.date_i18n( 'ymjgis' );
    }
  }
  return $data;
}
add_filter( 'wp_insert_post_data', 'add_place_title', 10, 2 );

function add_site_title( $data, $postarr ) {
  if($data['post_type'] == 'cpt-01-04') {
    if(empty($data['post_title'])) {
      $data['post_title'] = 'HS'.date_i18n( 'ymjgis' );
    }
  }
  return $data;
}
add_filter( 'wp_insert_post_data', 'add_site_title', 10, 2 );

function add_item_title( $data, $postarr ) {
  if($data['post_type'] == 'cpt-01-05') {
    if(empty($data['post_title'])) {
      $data['post_title'] = 'HI'.date_i18n( 'ymjgis' );
    }
  }
  return $data;
}
add_filter( 'wp_insert_post_data', 'add_item_title', 10, 2 );



// ***** ACF Only Show Own Relationship Fields - add name=acf field name *****
add_filter('acf/fields/relationship/query/name=test10', 'exclude_id', 10, 3);

function exclude_id ( $args, $post ) { //$field input vriable wasn't neccessary in this function

   	$current_user = wp_get_current_user();
	$user_id = $current_user->ID;
	$args['author']=$user_id;
	$args['authors']=$user_id;

   return $args;
}



// ***** Only Show Own Comments *****
function wps_get_comment_list_by_user($clauses) {
        if (is_admin()) {
                global $user_ID, $wpdb;
                $clauses['join'] = ", ".$wpdb->base_prefix."posts";
                $clauses['where'] .= " AND ".$wpdb->base_prefix."posts.post_author = ".$user_ID." AND ".$wpdb->base_prefix."comments.comment_post_ID = ".$wpdb->base_prefix."posts.ID";
        };
        return $clauses;
};
if(!current_user_can('edit_others_posts')) {
add_filter('comments_clauses', 'wps_get_comment_list_by_user');
}


// ***** Count Only Own Posts *****
function jquery_remove_counts()
{
	?>
	<script type="text/javascript">
	jQuery(function(){
		jQuery("li.all").remove();
		jQuery("li.publish").find("span.count").remove();
		jQuery("li.trash").find("span.count").remove();
	});
	</script>
	<?php
}
add_action('admin_footer', 'jquery_remove_counts');



// ***** Backend CSS *****
function custom_colors() {
	global $user_level;
	if ($user_level != '10' ) {
	   echo '<style type="text/css">
	   		.postbox {
	   			margin-bottom: 1px;
	   			border: 0px;
	   			background-color:#282828
	   		}
	   		#poststuff h3 {
	   			color: #e0e0e0;
	   		}
			#poststuff .inside {
		   		background-color:#c9c9c9;
		   		color: #282828;
		   }
		   .acf_postbox {
		   		background-color: #282828;
		   		padding-left: 0px;
		   		padding-right: 0px;
		   }
		   .acf_postbox p.label {
		   		display: none;
		   }
/* General Pencil Dashicon ACF Accordion Tab */
		   .dashicons-arrow-right:before {
		   		content: "\f464";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* General Calendar Dashicon ACF Accordion Tab */
		   .dashicons-arrow-calendar:before {
		   		content: "\f508";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* General Media Dashicon ACF Accordion Tab */
		   .dashicons-arrow-media:before {
		   		content: "\f104";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* General Social Media Dashicon ACF Accordion Tab */
		   .dashicons-arrow-socialmedia:before {
		   		content: "\f237";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Video Video Upload Dashicon ACF Accordion Tab */
		   .dashicons-arrow-videos:before {
		   		content: "\f234";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Video YouTube Dashicon ACF Accordion Tab */
		   .dashicons-arrow-youtube:before {
		   		content:url(http://www.rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-youtube.png);
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* 3D Autodesk Dashicon ACF Accordion Tab */
		   .dashicons-arrow-3dautodesk:before {
		   		content:url(http://www.rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-123dcatch.png);
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* 3D x3d Dashicon ACF Accordion Tab */
		   .dashicons-arrow-x3d:before {
		   		content:url(http://www.rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-x3d.png);
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* 3D Google Earth Dashicon ACF Accordion Tab */
		   .dashicons-arrow-earth:before {
		   		content:url(http://www.rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-earth.png);
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Example End */
		   .acf_postbox > .inside > .field {
  				padding: 7px 7px;
  		   }
		   #poststuff h2 {
		   		color: #282828;
		   		font-size:14px !important;
		   		font-weight: normal;
 				margin-top: 5px;
 				padding: 3px 0px 3px 14px !important;
  				font-size: 1.5em;
  				margin-bottom: 0px;
  				clear: left;
  				background-color: #efefef;
  				box-shadow: 
		0px 0px 0px 1px rgba(155,155,155,0.3), 
		0px 0px 0px 0px rgba(255,255,255,0.9) inset, 
		0px 2px 2px rgba(0,0,0,0.1);
}
		 </style>';
   }
}

add_action('admin_head', 'custom_colors');
?>
