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
add_filter('acf/fields/relationship/query/name=RAE_0188', 'exclude_id', 10, 3);
add_filter('acf/fields/relationship/query/name=RAE_0189', 'exclude_id', 10, 3);
add_filter('acf/fields/relationship/query/name=RAE_0190', 'exclude_id', 10, 3);

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




// ***** Removes 'quick edit' from custom post type list *****
function remove_quick_edit( $actions ) {
	global $post;
    if( $post->post_type == 'cpt-01-01' ) {
		unset($actions['inline hide-if-no-js']);
	}
	if( $post->post_type == 'cpt-01-02' ) {
		unset($actions['inline hide-if-no-js']);
	}
	if( $post->post_type == 'cpt-01-03' ) {
		unset($actions['inline hide-if-no-js']);
	}
	if( $post->post_type == 'cpt-01-04' ) {
		unset($actions['inline hide-if-no-js']);
	}
	if( $post->post_type == 'cpt-01-05' ) {
		unset($actions['inline hide-if-no-js']);
	}
    return $actions;
}

if (is_admin()) {
	add_filter('post_row_actions','remove_quick_edit',10,2);
}




// ***** Remove Metabox 'Slug' *****
add_action( 'add_meta_boxes', 'my_add_meta_boxes' );
function my_add_meta_boxes() {
    remove_meta_box( 'slugdiv', 'cpt-01-01', 'normal' );
}



// ***** Login Backend CSS *****
function custom_login_css() {
echo '<style type="text/css">
/* Login Page */
			.login .message {
				background-color: #282828;
				color:#e0e0e0;
				border-left:none;
			}
			.login form {
				background-color: #e0e0e0;
				border-style: ridge;
				border-width: 2px;
				border-color: #e0e0e0;
				box-shadow: 10px 10px 5px #000000;
			}
</style>';
}
add_action('login_head', 'custom_login_css');




// ***** Backend CSS *****
function custom_colors() {
	global $user_level;
	if ($user_level != '10' ) {
	   echo '<style type="text/css">
/* Post List Table */
	   		table.widefat {
	   			background-color: #282828;
	   		}
	   		.striped>tbody>:nth-child(odd) {
	   			background-color: #3d3d3d;
	   		}
	   		.striped>tbody>:nth-child(even) {
	   			background-color: #282828;
	   		}
/* Backend Table Text Color */
	   		.widefat * {
	   			color: #e0e0e0;
	   		}
	   		#the-list tr:last-child td {
	   		color: #e0e0e0;
	   		}
	   		.widefat thead tr th {
	   			color: #e0e0e0;
	   		}
/* ACF Postbox Prepend Field Text Color */
	   		.widefat * .acf-input-prepend {
	   			color: #282828;
	   		}
/* ACF Postbox Select Field Text Color */
	   		.acf_postbox .field select {
	   			color: #282828;
	   		}
/* ACF Postbox */
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
/* Flag State of Records Dashicon ACF Accordion Tab */
		   .dashicons-arrow-stateofrecords:before {
		   		content: "\f154";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Flag Flag Dashicon ACF Accordion Tab */
		   .dashicons-arrow-flag:before {
		   		content: "\f227";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Media Available Media Dashicon ACF Accordion Tab */
		   .dashicons-arrow-availablemedia:before {
		   		content: "\f104";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   } 
/* Media Available Media Dashicon ACF Accordion Tab */
		   .dashicons-arrow-availablemedia:before {
		   		content: "\f104";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   } 
/* Media Images Dashicon ACF Accordion Tab */
		   .dashicons-arrow-images:before {
		   		content: "\f161";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   } 
/* Media Video Upload Dashicon ACF Accordion Tab */
		   .dashicons-arrow-videos:before {
		   		content: "\f234";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Media YouTube Dashicon ACF Accordion Tab */
		   .dashicons-arrow-youtube:before {
		   		content:url(http://www.rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-youtube.png);
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Media 3D Autodesk Dashicon ACF Accordion Tab */
		   .dashicons-arrow-3dautodesk:before {
		   		content:url(http://www.rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-123dcatch.png);
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Media 3D x3d Dashicon ACF Accordion Tab */
		   .dashicons-arrow-x3d:before {
		   		content:url(http://www.rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-x3d.png);
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Media 3D Google Earth (kml) Dashicon ACF Accordion Tab */
		   .dashicons-arrow-earth:before {
		   		content:url(http://www.rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-earth.png);
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Media Virtual Reality Dashicon ACF Accordion Tab */
		   .dashicons-arrow-virtualreality:before {
				content: "\f115";		   		
				padding: 5px 5px 5px 0px;
				float: left;
		   }
/* Media Virtual Reality Dashicon ACF Accordion Tab */
		   .dashicons-arrow-onlinepresence:before {
				content: "\f103";		   		
				padding: 5px 5px 5px 0px;
				float: left;
		   }
/* Social Media / Newsletters / Conferences Social Media Dashicon ACF Accordion Tab */
		   .dashicons-arrow-socialmedia:before {
		   		content: "\f237";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Social Media - Newsletters - Conferences Newsletter Dashicon ACF Accordion Tab */
		   .dashicons-arrow-newsletters:before {
		   		content: "\f497";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Social Media - Newsletters - Conferences Conferences Dashicon ACF Accordion Tab */
		   .dashicons-arrow-conferences:before {
		   		content: "\f307";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Location GPS Marker Location Dashicon ACF Accordion Tab */
		   .dashicons-arrow-gps:before {
		   		content: "\f109";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Location Africa Dashicon ACF Accordion Tab */
		   .dashicons-arrow-africa:before {
		   		content: "\f319";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Location Asia Dashicon ACF Accordion Tab */
		   .dashicons-arrow-asia:before {
		   		content: "\f319";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Location Europe Dashicon ACF Accordion Tab */
		   .dashicons-arrow-europe:before {
		   		content: "\f319";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Location North America Dashicon ACF Accordion Tab */
		   .dashicons-arrow-namerica:before {
		   		content: "\f319";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Location Oceania Dashicon ACF Accordion Tab */
		   .dashicons-arrow-oceania:before {
		   		content: "\f319";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Location South America Dashicon ACF Accordion Tab */
		   .dashicons-arrow-samerica:before {
		   		content: "\f319";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Location States and Territories Dashicon ACF Accordion Tab */
		   .dashicons-arrow-statesandterritories:before {
		   		content: "\f231";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Location Labguage Groups Dashicon ACF Accordion Tab */
		   .dashicons-arrow-languagegroup:before {
		   		content: "\f307";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Location Boundary Dashicon ACF Accordion Tab */
		   .dashicons-arrow-boundaries:before {
		   		content: "\f231";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Location Description Dashicon ACF Accordion Tab */
		   .dashicons-arrow-locationdescription:before {
		   		content: "\f231";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Location Boundary Dashicon ACF Accordion Tab */
		   .dashicons-arrow-approach:before {
		   		content: "\f231";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Class Site Type Dashicon ACF Accordion Tab */
		   .dashicons-arrow-sitetype:before {
		   		content: "\f481";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Class Site Comments Dashicon ACF Accordion Tab */
		   .dashicons-arrow-sitecomments:before {
		   		content: "\f481";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Class Ground SurfaceDashicon ACF Accordion Tab */
		   .dashicons-arrow-groundsurface:before {
		   		content: "\f481";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Class Camp Site Dashicon ACF Accordion Tab */
		   .dashicons-arrow-campsite:before {
		   		content: "\f513";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Conservation Condition Dashicon ACF Accordion Tab */
		   .dashicons-arrow-condition:before {
		   		content: "\f154";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Conservation Issues Dashicon ACF Accordion Tab */
		   .dashicons-arrow-issues:before {
		   		content: "\f177";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Conservation Physical Work Dashicon ACF Accordion Tab */
		   .dashicons-arrow-physicalwork:before {
		   		content: "\f308";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Conservation RASI Dashicon ACF Accordion Tab */
		   .dashicons-arrow-rasi:before {
		   		content: "\f483";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Measurement Orientation Dashicon ACF Accordion Tab */
		   .dashicons-arrow-orientation:before {
		   		content: "\f211";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Measurement Measurement Dashicon ACF Accordion Tab */
		   .dashicons-arrow-measurement:before {
		   		content: "\f119";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Access Access Restrictions Dashicon ACF Accordion Tab */
		   .dashicons-arrow-access:before {
		   		content: "\f307";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Legal Statement of Significance  Dashicon ACF Accordion Tab */
		   .dashicons-arrow-significance:before {
		   		content: "\f313";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Legal Assessment of Significance  Dashicon ACF Accordion Tab */
		   .dashicons-arrow-assessment:before {
		   		content: "\f313";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Legal Theme  Dashicon ACF Accordion Tab */
		   .dashicons-arrow-theme:before {
		   		content: "\f319";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Legal Procedures Dashicon ACF Accordion Tab */
		   .dashicons-arrow-procedures:before {
		   		content: "\f331";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Legal Listings Dashicon ACF Accordion Tab */
		   .dashicons-arrow-listings:before {
		   		content: "\f331";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* Legal Owner Dashicon ACF Accordion Tab */
		   .dashicons-arrow-owner:before {
		   		content: "\f110";
		   		padding: 5px 5px 5px 0px;
		   		float: left;
		   }
/* References References Dashicon ACF Accordion Tab */
		   .dashicons-arrow-references:before {
		   		content: "\f331";
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


/* Author Media Files Library Browser - Hide Media Library */
function remove_medialibrary_tab($tabs) {
unset($tabs['type_url']);
unset($tabs['library']);
return $tabs;
}
add_filter('media_upload_tabs','remove_medialibrary_tab');

/* Author Media Files Library Browser - Only Shows Authors Media Files - need to be tested with permissions plugin
 // Show only posts and media related to logged in author
   add_action('pre_get_posts', 'query_set_only_author' );
   function query_set_only_author( $wp_query ) {
     global $current_user;
     if( is_admin() && !current_user_can('edit_others_posts') ) {
        $wp_query->set( 'author', $current_user->ID );
        add_filter('views_edit-post', 'fix_post_counts');
        add_filter('views_upload', 'fix_media_counts');
     }
   }
*/


// ***** Backend Profile - change and add fields *****
function new_contactmethods( $contactmethods ) {
$contactmethods['department'] = 'Department or University';
$contactmethods['linkedin'] = 'LinkedIn';
$contactmethods['academia'] = 'Academia.edu';
$contactmethods['researchgate'] = 'ResearchGate';
$contactmethods['facebook'] = 'Facebook';
$contactmethods['twitter'] = 'Twitter';
unset($contactmethods['aim']);
unset($contactmethods['yim']);
unset($contactmethods['jabber']);

return $contactmethods;

}

add_filter('user_contactmethods','new_contactmethods',10,1);



// ***** Enqueue the Dashicons script *****
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
wp_enqueue_style( 'dashicons' );
}




// ***** Hide Admin Bar on Front End *****
add_filter('show_admin_bar', '__return_false');




// ***** ACF Location Field Geo Mashup integration http://support.advancedcustomfields.com/forums/topic/acf-and-geo-mashup-integration/ or http://wpquestions.com/question/show/id/10778*****
add_action('save_post', 'wpq_acf_gmap');

function wpq_acf_gmap($post_id) {

   if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;

   if( !isset($_POST['acf_nonce'], $_POST['fields']) || !wp_verify_nonce($_POST['acf_nonce'], 'input') ) return $post_id;

   

   if(get_post_status( $post_id ) <> 'publish' )  return $post_id;

      

   $location   = (array) ( maybe_unserialize(get_post_meta($post_id, 'RAE_0254', true)) ); //change location as your acf field name

   if( count($location) >= 3 ) {

      $geo_address = $location['address'];

      $geo_latitude = $location['lat'];

      $geo_longitude = $location['lng'];

      $geo_location = ''.$geo_latitude.','.$geo_longitude.'';

      update_post_meta( $post_id, 'geo_address', $geo_address );

      update_post_meta( $post_id, 'geo_latitude', $geo_latitude );

      update_post_meta( $post_id, 'geo_longitude', $geo_longitude );

      update_post_meta( $post_id, 'geo_location', $geo_location );

   }

}

// ***** Add Author query to author.php *****
function wpse107459_add_cpt_author( $query ) {
    if ( !is_admin() && $query->is_author() && $query->is_main_query() ) {
        $query->set( 'post_type', array('post', 'cpt-00-01', 'cpt-00-02', 'cpt-00-03', 'cpt-01-01', 'cpt-01-02', 'cpt-01-03', 'cpt-01-04', 'cpt-01-05' ) );
    }
}
add_action( 'pre_get_posts', 'wpse107459_add_cpt_author' );
?>
