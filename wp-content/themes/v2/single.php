<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<script type="text/javascript" language="JavaScript"><!--
function HideContent(d) {
document.getElementById(d).style.display = "none";
}
function ShowContent(d) {
document.getElementById(d).style.display = "block";
}
function ReverseDisplay(d) {
if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
else { document.getElementById(d).style.display = "none"; }
}
//-->
</script>

<link rel="stylesheet" type="text/css" href="style-css/css-post-content.css">

<style>
/* ----- General ----- */
.site-content {
	background-image: url("http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/single-background.png");
}
body {
	margin-bottom: -48px;
}
#click-menu {
    display: none;
}
.site-info {
	display: none;
}
#colophon {
	display: none;
}

/* ----- Password Form ----- */
.post-password-form {
	color:white;
}

/* ----- Content ----- */
div.single-content {
	margin-left: auto;
    margin-right: auto;
    width: 600px;
    height: auto;
}
#custom-td-bg_color {
	background-color:
<?php
$type = get_post_type();
if ( 'cpt-00-01' == $type )
echo 'rgba(128,128,128, 0.3)';
elseif ( 'cpt-00-02' == $type )
echo 'rgba(128,128,128, 0.3)';
elseif ( 'cpt-00-03' == $type )
echo 'rgba(112,184,255, 0.3)';
elseif ( 'cpt-01-01' == $type )
echo 'rgba(112,184,255, 0.3)';
elseif ( 'cpt-01-02' == $type )
echo 'rgba(0,255,0, 0.3)';
elseif ( 'cpt-01-03' == $type )
echo 'rgba(160,0,0, 0.3)';
elseif ( 'cpt-01-04' == $type )
echo 'rgba(160,0,0, 0.3)';
elseif ( 'cpt-01-05' == $type )
echo 'rgba(160,0,0, 0.3)';
else {
echo 'rgba(128,128,128, 0.3)';
;}
?>;
}
td.custom-td-bg_size {
    border: 0px solid #E0E0E0;
    max-width: 100%;
    padding: 7px;
    line-height: 1.5;
    text-align: justify;
}
h2.custom_headingalign {
	text-align:left;
}
div.custom-media-image { 
	max-width:100%; 
	max-height:100%; 
	padding: 41px 10px 10px 10px;
}
p.custom_small-font-nopadding-2 {
	font-size:10px;
	width:100%;
	padding: 0px !important;
}
.cb {
	clear:both;
}

/* DIV collapse for toolbox */
.collapse{
  font-size: 14px;
  display:block;
}
.collapse + input{
  display:none;
}
.collapse + input + *{
  display:none;
}
.collapse+ input:checked + *{
  display:block;
}
.custom-thumbnail {
	width:150px;
	height:150px;
    box-shadow: 5px 5px 2px #888888;
    overflow:hidden;
    float:right;
    padding: 0px 0px 0px 10px;
}
p.custom_small-font {
	font-size:10px;
}
h3.custom_small-font {
	font-size:10px;
	font-weight:normal
}

/* DIV collection tiles */
#collection-gallery {
	width:450px;
	position:relative;
}
#collection-gallery-inner-projects {
	width:92px;
	padding:7px;
	position:relative;
	float:left;
	background-color: rgba(0,255,0, 0.3);
	margin:2px;
	border-radius:5px
}
#collection-gallery-inner {
	width:92px;
	padding:7px;
	position:relative;
	float:left;
	background-color: rgba(160,0,0, 0.3);
	margin:2px;
	border-radius:5px
}

/* ----- Comments ----- */
.comments-area {
	background-color: #eeeeee;
}
.comments-title {
	display:none;
}
#wpcomm .wc-comment-bar {
	display: none;
}
#wpcomm .wc-field-submit input[type="button"] {
	display: block;
}
#respond form p.form-allowed-tags {
	display:none;
}
#respond form label {
	font-size:10px;
}
p.comment-form-comment label {
	display:none !important;
}
#respond h3#reply-title {
	display:none;
}
#respond form p.logged-in-as {
	display:none;
}
#respond form textarea {
	height:80px;
}
#respond {
    margin-top: 0px;
}
.commentlist .odd {
	background-color:#e0e0e0;
	border-top: solid 1px black;
	border-bottom: solid 1px black;
}
.comments-area article header {
	margin:0px;
}
.comments-area article header cite, .comments-area article header time {
	margin-left:52px;
}
/* avatar for Comments Author */
img.avatar.avatar-44.gravatar {
	width:40px;
	height:40px;
}
.comments-area article header img {
	width:40px;
	height:40px;
}
/* avatar for WP U ILike Show People Who Like */
img.avatar.avatar-32.gravatar {
	width:30px;
	height:30px;
	position:relative;
	border-radius: 5px;
}
/* avatar for Author in Info Section */
img.avatar.avatar-30.gravatar {
	width:30px;
	height:30px;
	border-radius: 5px;
}
.comments-area .bypostauthor cite span {
	display:none;
}
img.attachment-medium.wp-post-image {
	width:150px;
}
img.attachment-medium.default-featured-img {
	height:150px;
}

/* ----- Media Gallery ----- */
p.custom_small-font-nopadding {
	font-size:10px;
	width:100px;
	padding: 0px 5px 5px 5px !important;
	margin-top:-20px;
	overflow:hidden;
	text-overflow:ellipsis;
}

div.custom-div-bg_1 {
	background-color:#eeeeee;
	border: 2px solid #282828;
    width: 110px;
    height: auto;
    padding: 0px;
    margin-bottom: 1em;
    margin-right: 1.9em;
    cursor: pointer;
    line-height: 15px;
    box-shadow: 3px 4px 5px 0px rgba(0,0,0,1);
    -webkit-box-shadow: 3px 4px 5px 0px rgba(0,0,0,1);
	-moz-box-shadow: 3px 4px 5px 0px rgba(0,0,0,1);
    float: left;
    border-radius: 5px;
    text-overflow: ellipsis;
}

div.custom-div-bg_2 {
	background-color:#eeeeee;
	border: 2px solid #282828;
    width: 410px;
    height: auto;
    padding: 5px 2px 5px 2px;
    margin-bottom: 1em;
    margin-right: 1.9em;
    cursor: pointer;
    line-height: 15px;
    box-shadow: 3px 4px 5px 0px rgba(0,0,0,1);
    -webkit-box-shadow: 3px 4px 5px 0px rgba(0,0,0,1);
	-moz-box-shadow: 3px 4px 5px 0px rgba(0,0,0,1);
    float: left;
}
img.media-gallery {
	max-width: 110px;
	max-height: 80px;
	text-align:center;
}
#media-gallery-background {
	width: 110px;
	height: 80px;
	background-color: #282828;
	vertical-align:middle;
	text-align: center;
}

/* ----- Media Gallery - Lightbox ----- */
#cboxTitle {
    position: absolute;
    bottom: 0px;
    left: 0px;
    font-size: 12px;
    text-align: justify;
    width: 470px;
    color: #949494;
}
</style>

<!-- Entry Start -->
<!-- If Password Protected Entry Start -->
<?php global $post;
if ( ! post_password_required( $post ) ) {
    // protected content
?>


<div id="primary" class="site-content">
	<div id="content" role="main">
	
		<?php while ( have_posts() ) : the_post(); ?>
		
<!-- Pushwrapper -->	
			<div class="single-content" id="pushwrapper">
			<div style="width: 460px; height: 100vh; float: right; overflow-y: scroll; overflow-x:hidden; box-shadow: 0px 0px 50px rgb(0, 0, 0);">
			
<!-- Banner and Search - category and ID  and author and avatar -->			
			<div style="width: 460px; height: 36px; background-color: #191e23; padding: 0px 0px 0px 0px; color: #e0e0e0; position:fixed; z-index:10;">
				<h2 style="padding: 0px;">ID: <a target="_blank" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> | <small style="padding:0px 0px 0px 0px;" class="custom_small-font">Author: <?php the_author_posts_link(); ?> <?php echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?></small></h2>
				<meta name="author" content="<?php the_author(); ?>" />
				<link re="author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
				<meta name="DC.Creator" content="<?php the_author(); ?>">
			</div>

<!-- (TAB 1 INFO) -->		
			<div style="padding-top: 36px;">			
				<table class="custom-table-style">
					<tr>
					<td class="custom-td-bg_size" id="custom-td-bg_color" width="150px" height="150px">
<!-- (TAB 1 INFO) Feature Image If Has Thumbnail -->
					<?php if (get_field('RAE_0248')): ?>				
					<?php
 					$image = get_field('RAE_0248');
 					$url = $image['url'];
					$size_large = 'large';
					$size_small = 'thumbnail';
					$thumb = $image['sizes'][ $size_small ];
					$width = $image['sizes'][ $size_large . '-width' ];
					$height = $image['sizes'][ $size_large . '-height' ];
 					$width = $image['sizes'][ $size_large . '-width' ];
					$height = $image['sizes'][ $size_large . '-height' ];
					?>
					<a target="_blank" href="<?php the_permalink() ?>" title="open this entry in new window"><img style="border-radius: 5px;" src="<?php echo $thumb; ?>"></a>
<!-- (TAB 1 INFO) Feature Image else load no_image -->
					<?php else: echo '<a target="_blank" href="'.get_permalink().'" title="open this entry in new window"><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/no_img_available-150x150.jpg"></a>'; ?>				 					
					<?php endif?>
					</td>
<!-- (TAB 1 INFO) color label  -->
					<td class="custom-td-bg_size" id="custom-td-bg_color">
<!-- (TAB 1 INFO) title name  -->						
						<h1 class="custom_headingalign" style="font-size:14px; text-align:left;"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>: <?php the_field('RAE_0003') ?></h1></br>
<!-- (TAB 1 INFO) entry date  -->						
						<p class="custom_small-font">Entry Date <?php 
						$date = get_field('RAE_0004');
						$y = substr($date, 0, 4);
						$m = substr($date, 4, 2);
						$d = substr($date, 6, 2);
						$time = strtotime("{$d}-{$m}-{$y}");
						echo date('Y-m-d', $time);
						?> | Last Update <time datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time></p>			
<!-- (TAB 1 INFO) condition  -->						
						<h3 class="custom_small-font">Condition: <?php the_field('RAE_0082'); ?></h3></br>
<!-- (TAB 1 INFO) Social Media / Facebook / Twitter / Other  -->
						<p class="custom_small-font">	
							<span title="find us on social media eg facebook, twitter, instgram, flickr, picasa etc." class="dashicons dashicons-share" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span>
							<?php if (get_field('RAE_0231')): ?>
							<a style="text-decoration:none;" target="_blank" href="<?php the_field('RAE_0231'); ?>"><span class="dashicons dashicons-facebook" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span></a>
							<?php endif; ?>
							<?php if (get_field('RAE_0232')): ?>
							<a style="text-decoration:none;" target="_blank" href="<?php the_field('RAE_0232'); ?>"><span class="dashicons dashicons-twitter" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span></a>
							<?php endif; ?>
							<?php if (get_field('RAE_0233')): ?>
							<a style="text-decoration:none;" target="_blank" href="<?php the_field('RAE_0233'); ?>"><span class="dashicons dashicons dashicons-share-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span></a>
							<?php endif; ?></br>
<!-- (TAB 1 INFO) wti like / body content  -->
							<?php the_content(); ?>
						</p>																			
					</td>
					</tr>
				</table>
			</div>

<!-- (TAB 2 DESCRIPTION) -->
<?php if (get_field('RAE_0006')): ?>				
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_2"><h2><span title="contains a description about this entry" class="dashicons dashicons-admin-home" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Description<span style="float:right; padding-right:5px;">&#9660</span></h2></label>
  		<input id="_2" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">				
           				<table class="custom-table-style">
           					<tr>
								<td class="custom-td-bg_2">
									<p class="custom_small-font">												
										<?php the_field('RAE_0006'); ?>																			
									</p>
								</td>
							</tr>
						</table>
			</div>
<?php endif; ?>

<!-- (TAB 3 FLAG) -->
<?php if (get_field('RAE_0200_r')): ?>					
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_3"><h2><span title="if entry has flags it may indicate that this entry needs attention" class="dashicons dashicons-flag" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Flag<span style="float:right; padding-right:5px;">&#9660</span></h2></label>
  		<input id="_3" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
           						<table class="custom-table-style">
									<tr>
										<td colspan="3" class="custom-td-bg_2">
											<?php if (get_field('RAE_0200_r')): ?><?php $counter = 1; ?>
												<div>
												<?php while(has_sub_field('RAE_0200_r')): ?>
													<div>
													<p class="custom_small-font"><strong>[<?php echo $counter; ?>]</strong> <?php the_sub_field('RAE_0094')?>, <?php the_sub_field('RAE_0200')?></br><?php the_sub_field('RAE_0211')?></br></br></p>
													</div><?php $counter++; ?>
												</div>
												<?php endwhile; ?>
											<?php endif; ?>
										</td>
									</tr>	
           						</table>
			</div>
<?php endif; ?>

<!-- (TAB 4 CONSERVATION) -->
<?php if (get_field('RAE_0082') || get_field('RAE_0033') || get_field('RAE_0034') || get_field('RAE_0035_r')): ?>				
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_4"><h2><span class="dashicons dashicons-star-empty" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Conservation<span style="float:right; padding-right:5px;">&#9660</span></h2></label>
  		<input id="_4" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
  						<table class="custom-table-style">
           					<tr>
								<td class="custom-td-bg_2">
									<p class="custom_small-font">												
										<h3 class="custom_small-font">Condition: </h3><?php the_field('RAE_0082'); ?>																			
									</p>
								</td>
							</tr>
						</table>
						<table class="custom-table-style">
           					<tr>
								<td class="custom-td-bg_2">
									<p class="custom_small-font">												
										<h3 class="custom_small-font">Issues: </h3><?php the_field('RAE_0033'); ?></br>
										<h3 class="custom_small-font">Description: </h3><?php the_field('RAE_0034'); ?>																	
									</p>
								</td>
							</tr>
						</table>
           						<table class="custom-table-style">
									<tr>
										<td colspan="3" class="custom-td-bg_2">
											<?php if (get_field('RAE_0035_r')): ?><?php $counter = 1; ?>
												<div>
												<?php while(has_sub_field('RAE_0035_r')): ?>
													<div>
													<p class="custom_small-font"><strong>[<?php echo $counter; ?>] Physical Work: <?php the_sub_field('RAE_0035')?>, <?php the_sub_field('RAE_0249')?>, <?php the_sub_field('RAE_0250')?></strong></br><?php the_sub_field('RAE_0105')?></br><strong>Result <?php the_sub_field('RAE_0251')?>:</strong> <?php the_sub_field('RAE_0252')?></br></br></p>
													</div><?php $counter++; ?>
												</div>
												<?php endwhile; ?>
											<?php endif; ?>
										</td>
									</tr>	
           						</table>
			</div>
<?php endif; ?>

<!-- (TAB 5 LOCATION) -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_5"><h2><span title="the geolocation of this record including address and or location approach descriptions" class="dashicons dashicons-location-alt" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Location<span style="float:right; padding-right:5px;">&#9660</span></h2></label>
  		<input id="_5" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
<!-- (TAB 5 LOCATION) GPS -->
					<?php if (get_field('RAE_0254')): ?>
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">
           							<p class="custom_small-font"><span class="dashicons dashicons-admin-post" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> <h3 class="custom_small-font">GPS: <?php the_field('RAE_0254')?></h3></p>
           						</td>
           					</tr>
           					<tr>
           						<td class="custom-td-bg_1">
           							<div>
           							<?php echo GeoMashup::map('height=200&width=350&zoom=10&add_overview_control=false&add_map_type_control=false');?>
           							</div>
           						</td>
           					</tr>
           			</table>
           			<?php endif; ?>			
<!-- (TAB 5 LOCATION) Primary Address -->
					<?php if (get_field('RAE_0018') || get_field('RAE_0018') || get_field('RAE_0019') || get_field('RAE_0020') || get_field('RAE_0021')): ?>						
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">	
										<p class="custom_small-font"><h3 class="custom_small-font">Primary Address: </h3><?php the_field('RAE_0018'); ?></br></br>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><h3 class="custom_small-font">Local Gov. Area: </h3><?php the_field('RAE_0019'); ?></div>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><h3 class="custom_small-font">Local Region 1: </h3><?php the_field('RAE_0020'); ?></div>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><h3 class="custom_small-font">Local Region 2: </h3><?php the_field('RAE_0021'); ?></div>
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>	
<!-- (TAB 5 LOCATION) Boundaries -->
					<?php if (get_field('RAE_0022') || get_field('RAE_0023') || get_field('RAE_0024') || get_field('RAE_00125')): ?>
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">	
										</p>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-location-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Boundary North: <?php the_field('RAE_0022'); ?></div>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-location-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Boundary South: <?php the_field('RAE_0023'); ?></div>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-location-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Boundary East: <?php the_field('RAE_0024'); ?></div>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-location-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Boundary West: <?php the_field('RAE_0025'); ?></div>
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>	
<!-- (TAB 5 LOCATION) Location Description -->
					<?php if (get_field('RAE_0028')): ?>
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">	
										<p class="custom_small-font"><span class="dashicons dashicons-location-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Location Description: <?php the_field('RAE_0027'); ?>
										<div style="padding:0px 0px 0px 50px; color:#282828;">Location Description (other): <?php the_field('RAE_0028'); ?></div>
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>	
<!-- (TAB 5 LOCATION) Approach -->
					<?php if (get_field('RAE_0032')): ?>
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">	
										<p class="custom_small-font"><span class="dashicons dashicons-location-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Approach: <?php the_field('RAE_0032'); ?></br></br>
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>	
			</div>
			
<!-- (TAB 6 COLLECTION (IF PROJECT)) -->
		<?php $type = get_post_type(); if ('cpt-01-02' == $type): ?>				
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_6"><h2><span title="contains all projects, places, sites, items and news related to this record" class="dashicons dashicons-archive" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Collection<span style="float:right; padding-right:5px;">&#9660</span></h2></label>
  		<input id="_6" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">				
           				<table class="custom-table-style">
           					<tr>
								<td class="custom-td-bg_2">
									<p title="a project can contain heritage places, sites and items (hierarchy: PROJECT > place > site > item)">Other Related Projects</p>
<!-- (TAB 6 COLLECTION (IF PROJECT)) Show Reverse Query Relationship Field (In which posts is this post selected) -->									
										<?php 
										/*
										*  Query posts for a relationship value.
										*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
										*/

										$places = get_posts(array(
										'post_type' => 'cpt-01-02',
										'meta_query' => array(
											array(
												'key' => 'RAE_0189', // name of custom field
												'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
												'compare' => 'LIKE'
												)
											)
										));

										?>
										
										<?php if( $places ): ?>
										<div id="collection-gallery">
											<?php foreach( $places as $place ): ?>
											<?php 
 											$photo = get_field('RAE_0248', $place->ID);
 											$linktitle = get_field('RAE_0003', $place->ID);
 											$linkdescription = get_field('RAE_0006', $place->ID);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner">
												<a href="<?php echo get_permalink( $place->ID ); ?>" title="<?php echo $linktitle; ?>: <?php echo $linkdescription; ?>">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												<?php echo get_the_title( $place->ID ); ?>
												</a>
											</div>
											<?php endforeach; ?>
										</div>
										<?php endif; ?>
<!-- (TAB 6 COLLECTION (IF PROJECT)) Show Own Relationship Field Selections -->									
										<?php 
										$posts = get_field('RAE_0189');
										if( $posts ): ?>
    
    										<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        									<?php setup_postdata($post); ?>
            									<div id="collection-gallery">
											<?php 
											$post = get_the_ID();
											$linktitle = get_field('RAE_0003', $post);
											$linkdescription = get_field('RAE_0006', $post);
 											$photo = get_field('RAE_0248', $post);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner">
												<a href="<?php echo get_permalink(); ?>" title="<?php echo $linktitle; ?>: <?php echo $linkdescription; ?>">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												<?php echo get_the_title(); ?>
												</a>
											</div>
    										<?php endforeach; ?>
   										 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
										<?php endif; ?>
													
								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_1">
									<p style="text-align:center;"><strong>This Project</strong></br><?php the_field('RAE_0003') ?></p>
									<p style="text-align:center;">|</p>
									<p style="text-align:center; text-decoration:overline; word-spacing:350px">| |</p>

								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_1">
									<p style="text-align:center;" title="a heritage place can be part of a project and contains heritage sites and item (hierarchy: project > PLACE > site > item). A heritage place is eg Kakadu National Park">Heritage Places</p>
<!-- (TAB 6 COLLECTION (IF PROJECT)) Show Reverse Query Relationship Field (In which posts is this post selected) -->									
										<?php 
										/*
										*  Query posts for a relationship value.
										*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
										*/

										$places = get_posts(array(
										'post_type' => 'cpt-01-03',
										'meta_query' => array(
											array(
												'key' => 'RAE_0189', // name of custom field
												'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
												'compare' => 'LIKE'
												)
											)
										));

										?>
										
										<?php if( $places ): ?>
										<div id="collection-gallery">
											<?php foreach( $places as $place ): ?>
											<?php 
											$entrytitle = get_field('RAE_0003', $place->ID);
 											$photo = get_field('RAE_0248', $place->ID);
 											$linktitle = get_field('RAE_0003', $place->ID);
 											$linkdescription = get_field('RAE_0006', $place->ID);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner">
												<a style="text-decoration:none;" href="<?php echo get_permalink( $place->ID ); ?>" title="<?php echo $linktitle; ?>: <?php echo $linkdescription; ?>">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												<?php echo get_the_title( $place->ID ); ?></br>
												<?php echo $entrytitle; ?>
												</a>
											</div>
											<?php endforeach; ?>
										</div>
										<?php endif; ?>
										
								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_2">
									<p style="text-align:center;" title="a heritage site contains items (hierarchy: project > place > SITE > item)">Heritage Sites</p>
<!-- (TAB 6 COLLECTION (IF PROJECT)) Show Reverse Query Relationship Field (In which posts is this post selected) -->										
										<?php 
										/*
										*  Query posts for a relationship value.
										*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
										*/

										$places = get_posts(array(
										'post_type' => 'cpt-01-04',
										'meta_query' => array(
											array(
												'key' => 'RAE_0189', // name of custom field
												'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
												'compare' => 'LIKE'
												)
											)
										));

										?>
										
										<?php if( $places ): ?>
										<div id="collection-gallery">
											<?php foreach( $places as $place ): ?>
											<?php
											$entrytitle = get_field('RAE_0003', $place->ID);
 											$photo = get_field('RAE_0248', $place->ID);
 											$linktitle = get_field('RAE_0003', $place->ID);
 											$linkdescription = get_field('RAE_0006', $place->ID);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner">
												<a style="text-decoration:none;" href="<?php echo get_permalink( $place->ID ); ?>" title="<?php echo $linktitle; ?>: <?php echo $linkdescription; ?>">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												<?php echo get_the_title( $place->ID ); ?></br>
												<?php echo $entrytitle; ?>
												</a>
											</div>
											<?php endforeach; ?>
										</div>
										<?php endif; ?>
										
								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_1">
									<p style="text-align:center;" title="an item is contained within a project, place or site (hierarchy: project > place > site > ITEM). an item can be a particular object or a rock art motif">Items</p>
<!-- (TAB 6 COLLECTION (IF PROJECT)) Show Reverse Query Relationship Field (In which posts is this post selected) -->									
										<?php 
										/*
										*  Query posts for a relationship value.
										*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
										*/

										$places = get_posts(array(
										'post_type' => 'cpt-01-05',
										'meta_query' => array(
											array(
												'key' => 'RAE_0189', // name of custom field
												'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
												'compare' => 'LIKE'
												)
											)
										));

										?>
										
										<?php if( $places ): ?>
										<div id="collection-gallery">
											<?php foreach( $places as $place ): ?>
											<?php 
											$entrytitle = get_field('RAE_0003', $place->ID);
 											$photo = get_field('RAE_0248', $place->ID);
 											$linktitle = get_field('RAE_0003', $place->ID);
 											$linkdescription = get_field('RAE_0006', $place->ID);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner">
												<a style="text-decoration:none;" href="<?php echo get_permalink( $place->ID ); ?>" title="<?php echo $linktitle; ?>: <?php echo $linkdescription; ?>">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												<?php echo get_the_title( $place->ID ); ?></br>
												<?php echo $entrytitle; ?>
												</a>
											</div>
											<?php endforeach; ?>
										</div>
										<?php endif; ?>
										
								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_2">
									<p style="text-align:center;">News</p>
									
										<?php 
										/*
										*  Query posts for a relationship value.
										*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
										*/

										$places = get_posts(array(
										'post_type' => 'cpt-01-01',
										'meta_query' => array(
											array(
												'key' => 'RAE_0189', // name of custom field
												'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
												'compare' => 'LIKE'
												)
											)
										));

										?>
										
										<?php if( $places ): ?>
										<div id="collection-gallery">
											<?php foreach( $places as $place ): ?>
											<?php 
 											$photo = get_field('RAE_0248', $place->ID);
 											$linktitle = get_field('RAE_0003', $place->ID);
 											$linkdescription = get_field('RAE_0006', $place->ID);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner">
												<a href="<?php echo get_permalink( $place->ID ); ?>" title="<?php echo $linktitle; ?>: <?php echo $linkdescription; ?>">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												<?php echo get_the_title( $place->ID ); ?>
												</a>
											</div>
											<?php endforeach; ?>
										</div>
										<?php endif; ?>
										
								</td>
							</tr>
						</table>
			</div>
			<?php endif; ?>
				
<!-- (TAB 6 COLLECTION (IF PLACE)) -->
		<?php $type = get_post_type(); if ('cpt-01-03' == $type): ?>				
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_6"><span class="dashicons dashicons-archive" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Collection <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_6" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">				
           				<table class="custom-table-style">
           					<tr>
								<td class="custom-td-bg_2">
									<p style="text-align:center;" title="a project can contain heritage places, sites and items (hierarchy: PROJECT > place > site > item)">Projects</p>
<!-- (TAB 6 COLLECTION (IF PLACE)) Show Own Relationship Field Selections -->									
										<?php 
										$posts = get_field('RAE_0189');
										if( $posts ): ?>
    
    										<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        									<?php setup_postdata($post); ?>
            									<div id="collection-gallery">
											<?php
											$entrytitle = get_field('RAE_0003', $place->ID); 
											$post = get_the_ID();
											$linktitle = get_field('RAE_0003', $post);
											$linkdescription = get_field('RAE_0006', $post);
 											$photo = get_field('RAE_0248', $post);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner-projects">
												<a style="text-decoration:none;" href="<?php echo get_permalink(); ?>" title="<?php echo $linktitle; ?>: <?php echo $linkdescription; ?>">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												<?php echo get_the_title(); ?><br />
												<?php echo $entrytitle; ?>
												</a>
											</div>
    										<?php endforeach; ?>
   										 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
										<?php endif; ?>
													
								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_1">
									<p style="text-align:center; text-decoration:underline; word-spacing:350px">| |</p>
									<p style="text-align:center;">|</p>
									<p style="text-align:center;" title="a heritage place can be part of a project and contains heritage sites and item (hierarchy: project > PLACE > site > item). A heritage place is eg Kakadu National Park"><strong>This Place</strong><br /><?php the_field('RAE_0003') ?></p>
									<p style="text-align:center;">|</p>
									<p style="text-align:center; text-decoration:overline; word-spacing:350px">| |</p>

								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_2">
									<p style="text-align:center;" title="a heritage site contains items (hierarchy: project > place > SITE > item)">Sites</p>
<!-- (TAB 6 COLLECTION (IF PLACE)) Show Reverse Query Relationship Field (In which posts is this post selected) -->									
										<?php 
										/*
										*  Query posts for a relationship value.
										*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
										*/

										$places = get_posts(array(
										'post_type' => 'cpt-01-04',
										'meta_query' => array(
											array(
												'key' => 'RAE_0188', // name of custom field
												'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
												'compare' => 'LIKE'
												)
											)
										));

										?>
										
										<?php if( $places ): ?>
										<div id="collection-gallery">
											<?php foreach( $places as $place ): ?>
											<?php
											$entrytitle = get_field('RAE_0003', $place->ID);
 											$photo = get_field('RAE_0248', $place->ID);
 											$linktitle = get_field('RAE_0003', $place->ID);
 											$linkdescription = get_field('RAE_0006', $place->ID);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner">
												<a style="text-decoration:none;" href="<?php echo get_permalink( $place->ID ); ?>" title="<?php echo $linktitle; ?>: <?php echo $linkdescription; ?>">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												<?php echo get_the_title( $place->ID ); ?><br />
												<?php echo $entrytitle;?>
												</a>
											</div>
											<?php endforeach; ?>
										</div>
										<?php endif; ?>
										
								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_1">
									<p style="text-align:center;" title="an item is contained within a project, place or site (hierarchy: project > place > site > ITEM). an item can be a particular object or a rock art motif">Items</p>
<!-- (TAB 6 COLLECTION (IF PLACE)) Show Reverse Query Relationship Field (In which posts is this post selected) -->									
										<?php 
										/*
										*  Query posts for a relationship value.
										*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
										*/

										$places = get_posts(array(
										'post_type' => 'cpt-01-05',
										'meta_query' => array(
											array(
												'key' => 'RAE_0188', // name of custom field
												'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
												'compare' => 'LIKE'
												)
											)
										));

										?>
										
										<?php if( $places ): ?>
										<div id="collection-gallery">
											<?php foreach( $places as $place ): ?>
											<?php
											$entrytitle = get_field('RAE_0003', $place->ID); 
 											$photo = get_field('RAE_0248', $place->ID);
 											$linktitle = get_field('RAE_0003', $place->ID);
 											$linkdescription = get_field('RAE_0006', $place->ID);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner">
												<a style="text-decoration:none;" href="<?php echo get_permalink( $place->ID ); ?>" title="<?php echo $linktitle; ?>: <?php echo $linkdescription; ?>">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												<?php echo get_the_title( $place->ID ); ?>
												<?php echo $entrytitle; ?>
												</a>
											</div>
											<?php endforeach; ?>
										</div>
										<?php endif; ?>
										
								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_2">
									<p>News</p>
									
										<?php 
										/*
										*  Query posts for a relationship value.
										*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
										*/

										$places = get_posts(array(
										'post_type' => 'cpt-01-01',
										'meta_query' => array(
											array(
												'key' => 'RAE_0188', // name of custom field
												'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
												'compare' => 'LIKE'
												)
											)
										));

										?>
										
										<?php if( $places ): ?>
										<div id="collection-gallery">
											<?php foreach( $places as $place ): ?>
											<?php
											$entrytitle = get_field('RAE_0003', $place->ID); 
 											$photo = get_field('RAE_0248', $place->ID);
 											$linktitle = get_field('RAE_0003', $place->ID);
 											$linkdescription = get_field('RAE_0006', $place->ID);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner">
												<a style="text-decoration:none;" href="<?php echo get_permalink( $place->ID ); ?>" title="<?php echo $linktitle; ?>: <?php echo $linkdescription; ?>">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												<?php echo get_the_title( $place->ID ); ?>					
												<?php echo $entrytitle; ?>
												</a>
											</div>
											<?php endforeach; ?>
										</div>
										<?php endif; ?>
										
								</td>
							</tr>
						</table>
			</div>
			<?php endif; ?>	

<!-- (TAB 6 COLLECTION (IF SITE)) -->
		<?php $type = get_post_type(); if ('cpt-01-04' == $type): ?>				
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_15"><span class="dashicons dashicons-archive" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Collection <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_15" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">				
           				<table class="custom-table-style">
           					<tr>
								<td class="custom-td-bg_2">
									<p style="text-align:center;" title="a project can contain heritage places, sites and items (hierarchy: PROJECT > place > site > item)">Projects</p>
<!-- (TAB 6 COLLECTION (IF SITE)) Show Own Relationship Field Selections -->									
										<?php 
										$posts = get_field('RAE_0189');
										if( $posts ): ?>
    
    										<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        									<?php setup_postdata($post); ?>
            									<div id="collection-gallery">
											<?php
											$entrytitle = get_field('RAE_0003', $place->ID);
											$post = get_the_ID();
											$linktitle = get_field('RAE_0003', $post);
											$linkdescription = get_field('RAE_0006', $post);
 											$photo = get_field('RAE_0248', $post);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner">
												<a style="text-decoration:none;" href="<?php echo get_permalink(); ?>" title="<?php echo $linktitle; ?>: <?php echo $linkdescription; ?>">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												<?php echo get_the_title(); ?><br />
												<?php echo $entrytitle; ?>
												</a>
											</div>
    										<?php endforeach; ?>
   										 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
										<?php endif; ?>
													
								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_1">
									<p style="text-align:center;" title="a heritage place can be part of a project and contains heritage sites and item (hierarchy: project > PLACE > site > item). A heritage place is eg Kakadu National Park">Places</p>
<!-- (TAB 6 COLLECTION (IF SITE)) Show Own Relationship Field Selections -->									
										<?php 
										$posts = get_field('RAE_0188');
										if( $posts ): ?>
    
    										<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        									<?php setup_postdata($post); ?>
            									<div id="collection-gallery">
											<?php
											$entrytitle = get_field('RAE_0003', $place->ID);
											$post = get_the_ID();
											$linktitle = get_field('RAE_0003', $post);
											$linkdescription = get_field('RAE_0006', $post);
 											$photo = get_field('RAE_0248', $post);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner">
												<a style="text-decoration:none;" href="<?php echo get_permalink(); ?>" title="<?php echo $linktitle; ?>: <?php echo $linkdescription; ?>">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												<?php echo get_the_title(); ?><br />
												<?php echo $entrytitle; ?>
												</a>
											</div>
    										<?php endforeach; ?>
   										 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
										<?php endif; ?>
													
								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_2">
									<p style="text-align:center; text-decoration:underline; word-spacing:350px">| |</p>
									<p style="text-align:center;">|</p>
									<p style="text-align:center;" title="a heritage site contains items (hierarchy: project > place > SITE > item)"><strong>This Site</strong><br /><? the_field('RAE_0003') ?></p>
									<p style="text-align:center;">|</p>
									<p style="text-align:center; text-decoration:overline; word-spacing:350px">| |</p>

								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_1">
									<p style="text-align:center;" title="an item is contained within a project, place or site (hierarchy: project > place > site > ITEM). an item can be a particular object or a rock art motif">Items</p>
<!-- (TAB 6 COLLECTION (IF SITE)) Show Reverse Query Relationship Field (In which posts is this post selected) -->									
										<?php 
										/*
										*  Query posts for a relationship value.
										*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
										*/

										$places = get_posts(array(
										'post_type' => 'cpt-01-05',
										'meta_query' => array(
											array(
												'key' => 'RAE_0190', // name of custom field
												'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
												'compare' => 'LIKE'
												)
											)
										));

										?>
										
										<?php if( $places ): ?>
										<div id="collection-gallery">
											<?php foreach( $places as $place ): ?>
											<?php
											$entrytitle = get_field('RAE_0003', $place->ID); 
 											$photo = get_field('RAE_0248', $place->ID);
 											$linktitle = get_field('RAE_0003', $place->ID);
 											$linkdescription = get_field('RAE_0006', $place->ID);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner">
												<a style="text-decoration:none;" href="<?php echo get_permalink( $place->ID ); ?>" title="<?php echo $linktitle; ?>: <?php echo $linkdescription; ?>">
												<div style="border-radius: 5px; width:92px; height:92px; background-image: url(http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/no_picture_small.png);">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												</div>
												<?php echo get_the_title( $place->ID ); ?><br />
												<?php echo $entrytitle; ?>
												</a>
											</div>
											<?php endforeach; ?>
										</div>
										<?php endif; ?>
										
								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_2">
									<p>News</p>
									
										<?php 
										/*
										*  Query posts for a relationship value.
										*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
										*/

										$places = get_posts(array(
										'post_type' => 'cpt-01-01',
										'meta_query' => array(
											array(
												'key' => 'RAE_0190', // name of custom field
												'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
												'compare' => 'LIKE'
												)
											)
										));

										?>
										
										<?php if( $places ): ?>
										<div id="collection-gallery">
											<?php foreach( $places as $place ): ?>
											<?php
											$entrytitle = get_field('RAE_0003', $place->ID); 
 											$photo = get_field('RAE_0248', $place->ID);
 											$linktitle = get_field('RAE_0003', $place->ID);
 											$linkdescription = get_field('RAE_0006', $place->ID);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner">
												<a style="text-decoration:none;" href="<?php echo get_permalink( $place->ID ); ?>" title="<?php echo $linktitle; ?>: <?php echo $linkdescription; ?>">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												<?php echo get_the_title( $place->ID ); ?><br />
												<?php echo $entrytitle; ?>
												</a>
											</div>
											<?php endforeach; ?>
										</div>
										<?php endif; ?>
										
								</td>
							</tr>
						</table>
			</div>
			<?php endif; ?>	
			
<!-- (TAB 6 COLLECTION (IF ITEM)) -->
		<?php $type = get_post_type(); if ('cpt-01-05' == $type): ?>				
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_15"><span class="dashicons dashicons-archive" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Collection <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_15" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">				
           				<table class="custom-table-style">
           					<tr>
								<td class="custom-td-bg_2">
									<p>Projects</p>
<!-- (TAB 6 COLLECTION (IF ITEM)) Show Own Relationship Field Selections -->									
										<?php 
										$posts = get_field('RAE_0189');
										if( $posts ): ?>
    
    										<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        									<?php setup_postdata($post); ?>
            									<div id="collection-gallery">
											<?php 
											$post = get_the_ID();
											$linktitle = get_field('RAE_0003', $post);
											$linkdescription = get_field('RAE_0006', $post);
 											$photo = get_field('RAE_0248', $post);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner">
												<a href="<?php echo get_permalink(); ?>" title="<?php echo $linktitle; ?>: <?php echo $linkdescription; ?>">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												<?php echo get_the_title(); ?>
												</a>
											</div>
    										<?php endforeach; ?>
   										 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
										<?php endif; ?>
													
								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_1">
									<p>Places</p>
<!-- (TAB 6 COLLECTION (IF ITEM)) Show Own Relationship Field Selections -->									
										<?php 
										$posts = get_field('RAE_0188');
										if( $posts ): ?>
    
    										<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        									<?php setup_postdata($post); ?>
            									<div id="collection-gallery">
											<?php 
											$post = get_the_ID();
											$linktitle = get_field('RAE_0003', $post);
											$linkdescription = get_field('RAE_0006', $post);
 											$photo = get_field('RAE_0248', $post);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner">
												<a href="<?php echo get_permalink(); ?>" title="<?php echo $linktitle; ?>: <?php echo $linkdescription; ?>">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												<?php echo get_the_title(); ?>
												</a>
											</div>
    										<?php endforeach; ?>
   										 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
										<?php endif; ?>
													
								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_2">
									<p>Sites</p>
<!-- (TAB 6 COLLECTION (IF ITEM)) Show Own Relationship Field Selections -->									
										<?php 
										$posts = get_field('RAE_0190');
										if( $posts ): ?>
    
    										<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        									<?php setup_postdata($post); ?>
            									<div id="collection-gallery">
											<?php 
											$post = get_the_ID();
											$linktitle = get_field('RAE_0003', $post);
											$linkdescription = get_field('RAE_0006', $post);
 											$photo = get_field('RAE_0248', $post);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner">
												<a href="<?php echo get_permalink(); ?>" title="<?php echo $linktitle; ?>: <?php echo $linkdescription; ?>">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												<?php echo get_the_title(); ?>
												</a>
											</div>
    										<?php endforeach; ?>
   										 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
										<?php endif; ?>
													
								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_1">
									<p style="text-align:center; text-decoration:underline; word-spacing:350px">| |</p>
									<p style="text-align:center;">|</p>
									<p style="text-align:center;">This Item</p>
								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_2">
									<p>News</p>
									
										<?php 
										/*
										*  Query posts for a relationship value.
										*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
										*/

										$places = get_posts(array(
										'post_type' => 'cpt-01-01',
										'meta_query' => array(
											array(
												'key' => 'RAE_0190', // name of custom field
												'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
												'compare' => 'LIKE'
												)
											)
										));

										?>
										
										<?php if( $places ): ?>
										<div id="collection-gallery">
											<?php foreach( $places as $place ): ?>
											<?php 
 											$photo = get_field('RAE_0248', $place->ID);
 											$url = $photo['url'];
											$size_large = 'large';
											$size_small = 'thumbnail';
											$thumb = $photo['sizes'][ $size_small ];
											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											$width = $photo['sizes'][ $size_large . '-width' ];
											$height = $photo['sizes'][ $size_large . '-height' ];
 											?>
											
											<div id="collection-gallery-inner">
												<a href="<?php echo get_permalink( $place->ID ); ?>">
												<img style="border-radius: 5px; width:92px; height:92px;" src="<?php echo $thumb; ?>" alt="no image"></br>
												<?php echo get_the_title( $place->ID ); ?>
												</a>
											</div>
											<?php endforeach; ?>
										</div>
										<?php endif; ?>
										
								</td>
							</tr>
						</table>
			</div>
			<?php endif; ?>
			
<!-- (TAB 7 COLLECTION (LOCATIONS)) -->
<?php if (get_field('RAE_0118')): ?>
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_7"><h2><span title="all continents, countries, regions or language group areas contained within this entry (if the entry is a place, site or item the location usually only contains one continent, country or region)" class="dashicons dashicons-archive" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Collection Locations (<?php $count = (count(get_field('RAE_0118'))); ?><?php echo $count ?> continents)<span style="float:right; padding-right:5px;">&#9660</span></h2></label>
  		<input id="_7" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
<!-- (TAB 7 COLLECTION (LOCATIONS)) Continent -->
					<?php if (get_field('RAE_0118')): ?>
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">			
										<h3 class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Continent (<?php $count = count(get_field('RAE_0118')); ?><?php echo $count ?>)</h3>
										<p class="custom_small-font">
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0118')?></div><?php $counter++; ?>																				
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>       						
<!-- (TAB 7 COLLECTION (LOCATIONS)) Africa -->
					<?php if (get_field('RAE_0119')): ?>
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">			
										<h3 class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Africa (<?php $count = count(get_field('RAE_0119')); ?><?php echo $count ?>)</h3>
										<p class="custom_small-font">
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0119')?></div><?php $counter++; ?>
																				
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>
<!-- (TAB 7 COLLECTION (LOCATIONS)) Asia -->
					<?php if (get_field('RAE_0120')): ?>
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">				
										<h3 class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Asia (<?php $count = count(get_field('RAE_0120')); ?><?php echo $count ?>)</h3>
										<p class="custom_small-font">
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0120')?></div><?php $counter++; ?>																				
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>
<!-- (TAB 7 COLLECTION (LOCATIONS)) Europe -->
					<?php if (get_field('RAE_0121')): ?>
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">			
										<h3 class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Europe (<?php $count = count(get_field('RAE_0121')); ?><?php echo $count ?>)</h3>
										<p class="custom_small-font">
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0121')?></div><?php $counter++; ?>																				
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>
<!-- (TAB 7 COLLECTION (LOCATIONS)) North America -->
					<?php if (get_field('RAE_0122')): ?>
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">			
										<h3 class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> North America (<?php $count = count(get_field('RAE_0122')); ?><?php echo $count ?>)</h3>
										<p class="custom_small-font">
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0122')?></div><?php $counter++; ?>
											<div style="padding:0px 0px 0px 50px; color:#282828;">by State or Territory (USA):<?php the_field('RAE_0010')?></div>
											<div style="padding:0px 0px 0px 50px; color:#282828;">by State or Territory (CAN):<?php the_field('RAE_0011')?></div>								
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>
<!-- (TAB 7 COLLECTION (LOCATIONS)) Oceania -->
					<?php if (get_field('RAE_0123')): ?>
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">				
										<h3 class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Oceania (<?php $count = count(get_field('RAE_0123')); ?><?php echo $count ?>)</h3>
										<p class="custom_small-font">
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0123')?></div><?php $counter++; ?>
											<div style="padding:0px 0px 0px 50px; color:#282828;">by State or Territory (AUS): <?php the_field('RAE_0009')?></div>
											<div style="padding:0px 0px 0px 50px; color:#282828;">by Language Group (AUS): <?php the_field('RAE_0016')?></div>																			
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>	
<!-- (TAB 7 COLLECTION (LOCATIONS)) South America -->
					<?php if (get_field('RAE_0124')): ?>
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">				
										<h3 class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> South America (<?php $count = count(get_field('RAE_0124')); ?><?php echo $count ?>)</h3>
										<p class="custom_small-font">
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0124')?></div><?php $counter++; ?>																				
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>										
			</div>
			<?php endif; ?>
								
<!-- (TAB 8 CLASSIFICATION ARCHAEOLOGY) -->
		<?php if (get_field('RAE_0036') || get_field('RAE_0037') || get_field('RAE_0038') || get_field('RAE_0039') || get_field('RAE_0040') || get_field('RAE_0041')): ?>
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_8"><h2><span title="entry classifications by archaeological means in accordance with CIDOC CRM, MIDAS Heritage, SEWPAC, Rock Art Stability Index and PERAHU Rock Art recording forms" class="dashicons dashicons-clipboard" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Classification (Archaeology)<span style="float:right; padding-right:5px;">&#9660</span></h2></label>
  		<input id="_8" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
<!-- (TAB 8 CLASSIFICATION ARCHAEOLOGY) Site Types -->
					<?php if (get_field('RAE_0036') || get_field('RAE_0037')): ?>				
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">	
										<h3 class="custom_small-font"><span class="dashicons dashicons-clipboard" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Site Types: <?php the_field('RAE_0027'); ?></h3>
										<p class="custom_small-font">
										<div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0036'); ?> <?php the_field('RAE_0037'); ?></div>
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>	
<!-- (TAB 8 CLASSIFICATION ARCHAEOLOGY) Deposits -->
					<?php if (get_field('RAE_0038')): ?>					
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">	
										<h3 class="custom_small-font"><span class="dashicons dashicons-clipboard" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Deposits: <?php the_field('RAE_0027'); ?></h3>
										<p class="custom_small-font">
										<div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0038'); ?></div>
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>
<!-- (TAB 8 CLASSIFICATION ARCHAEOLOGY) Comments -->
					<?php if (get_field('RAE_0039')): ?>					
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">	
										<h3 class="custom_small-font"><span class="dashicons dashicons-clipboard" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Comments: <?php the_field('RAE_0027'); ?></h3>
										<p class="custom_small-font">
										<div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0039'); ?></div>
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>					
<!-- (TAB 8 CLASSIFICATION ARCHAEOLOGY) Surface -->
					<?php if (get_field('RAE_0040')): ?>					
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">	
										<h3 class="custom_small-font"><span class="dashicons dashicons-clipboard" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Surface: <?php the_field('RAE_0027'); ?></h3>
										<p class="custom_small-font">
										<div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0040'); ?></div>
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>
<!-- (TAB 8 CLASSIFICATION ARCHAEOLOGY) Camp Site -->
					<?php if (get_field('RAE_0041')): ?>					
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">	
										<h3 class="custom_small-font"><span class="dashicons dashicons-store" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Camp Site: <?php the_field('RAE_0027'); ?></h3>
										<p class="custom_small-font">
										<div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0041'); ?></div>
										</p>
								</td>
							</tr>
					</table>
					<?php endif; ?>						
			</div>
			<?php endif; ?>
									
<!-- (TAB 9 CLASSIFICATION Rock-Art) -->
		<?php if (get_field('RAE_0168_r')): ?>
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_9"><h2><span title="entry classifications by rock art research means in accordance with CIDOC CRM, MIDAS Heritage, SEWPAC, Rock Art Stability Index and PERAHU Rock Art recording forms" class="dashicons dashicons-universal-access-alt" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Classification (Rock Art)<span style="float:right; padding-right:5px;">&#9660</span></h2></label>
  		<input id="_9" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
           						<div class="custom-media-image">
           						<table class="custom-table-style">
           							<tr>
           								
									<?php if (get_field('RAE_0168_r')): ?><?php $counter = 1; ?>
										
										<?php while(has_sub_field('RAE_0168_r')): 
										// vars
										$image = get_sub_field('RAE_0247');
										$content = get_sub_field('RAE_0247');
										$link = get_sub_field('RAE_0247');
						
										$url = $image['url'];
										$size_large = 'large';
										$size_small = 'thumbnail';
										$thumb = $image['sizes'][ $size_small ];
										$width = $image['sizes'][ $size_large . '-width' ];
										$height = $image['sizes'][ $size_large . '-height' ];						
										?>
									
										<td class="custom-td-bg_2">
										<div class="custom-div-bg_2">
										
<!-- (TAB 9 CLASSIFICATION Rock-Art) Class Image -->	           						           																									
										<p class="custom_small-font-nopadding-2" style="background-color:#e0e0e0;"><strong>Class Image</strong></br><a class="lightbox" href="http://www.rockartdatabase.com/v2/wp-content/themes/v2/plugin_x3dom_images/index.html?img=<?php echo $image['sizes']['large']; ?>&w=<?php echo ($width / 100)."\n"; ?>&h=<?php echo ($height / 100)."\n"; ?>"><img src="<?php echo $thumb; ?>" alt="no sample picture"></a></br></br>
										</p>
<!-- (TAB 9 CLASSIFICATION Rock-Art) Number of Motifs -->
										<p class="custom_small-font-nopadding-2"><strong>Number of Motifs</strong></br>
											<?php the_sub_field('RAE_0169'); ?></br></br>
										</p>
<!-- (TAB 9 CLASSIFICATION Rock-Art) Type -->
										<?php if (get_sub_field('RAE_0170')): ?>
										<p class="custom_small-font-nopadding-2" style="background-color:#e0e0e0;"><strong>Type</strong></br>
											<?php the_sub_field('RAE_0170'); ?></br></br>
										</p>
										<?php endif; ?>	
<!-- (TAB 9 CLASSIFICATION Rock-Art) Style -->
										<?php if (get_sub_field('RAE_0180')): ?>
										<p class="custom_small-font-nopadding-2"><strong>Style</strong></br>
											<?php the_sub_field('RAE_0180'); ?></br></br>
										</p>
										<?php endif; ?>
<!-- (TAB 9 CLASSIFICATION Rock-Art) Color -->
										<?php if (get_sub_field('RAE_0171')): ?>
										<p class="custom_small-font-nopadding-2" style="background-color:#e0e0e0;"><strong>Color</strong></br>
										<small style="background-color:<?php the_sub_field('RAE_0253'); ?>;">href <?php the_sub_field('RAE_0253'); ?></small></br>
											<?php the_sub_field('RAE_0171'); ?></br>
											<?php the_sub_field('RAE_0172'); ?></br></br>		
										</p>
										<?php endif; ?>
<!-- (TAB 9 CLASSIFICATION Rock-Art) Subject Matter -->										
										<p class="custom_small-font-nopadding-2"><strong>Subject Matter</strong></br>
											<?php if (get_sub_field('RAE_0181')): ?>
											<div style="padding:0px 0px 0px 0px; color:#282828;"><strong>All</strong></br>
												<?php the_sub_field('RAE_0181'); ?>
											</div>
											<?php endif; ?></br>
											<?php if (get_sub_field('RAE_0175')): ?>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>People</strong></br>
												<?php the_sub_field('RAE_0175'); ?>
											</div>
											<?php endif; ?></br>
											<?php if (get_sub_field('RAE_0176')): ?>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Figures</strong></br>
												<?php the_sub_field('RAE_0176'); ?>
											</div>
											<?php endif; ?></br>
											<?php if (get_sub_field('RAE_0173')): ?>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Flora</strong></br>
												<?php the_sub_field('RAE_0173'); ?>
											</div>
											<?php endif; ?></br>
											<?php if (get_sub_field('RAE_0184')): ?>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Mammal</strong></br>
												<?php the_sub_field('RAE_0184'); ?>
											</div>
											<?php endif; ?></br>
											<?php if (get_sub_field('RAE_00183')): ?>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Reptile</strong></br>
												<?php the_sub_field('RAE_00183'); ?>
											</div>
											<?php endif; ?></br>
											<?php if (get_sub_field('RAE_0185')): ?>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Fish</strong></br>
												<?php the_sub_field('RAE_0185'); ?>
											</div>
											<?php endif; ?></br>
											<?php if (get_sub_field('RAE_0174')): ?>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Bird</strong></br>
												<?php the_sub_field('RAE_0174'); ?>
											</div>
											<?php endif; ?></br>
											<?php if (get_sub_field('RAE_0182')): ?>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Extinct</strong></br>
												<?php the_sub_field('RAE_0182'); ?>
											</div>
											<?php endif; ?></br>
											<?php if (get_sub_field('RAE_0177')): ?>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Material Culture</strong></br>
												<?php the_sub_field('RAE_0177'); ?>
											</div>
											<?php endif; ?></br>
											<?php if (get_sub_field('RAE_0178')): ?>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Contact Art</strong></br>
												<?php the_sub_field('RAE_0178'); ?>
											</div>
											<?php endif; ?></br>
											<?php if (get_sub_field('RAE_0179')): ?>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Scene</strong>
												</br><?php the_sub_field('RAE_0179'); ?>
											</div>
											<?php endif; ?></br>
										</p>
<!-- (TAB 9 CLASSIFICATION Rock-Art) Dating -->										
										<p class="custom_small-font-nopadding-2" style="background-color:#e0e0e0;"><strong>Dating</strong></br>
											<?php if (get_sub_field('RAE_0201')): ?>
											<strong>Dating Basic</strong></br>
												<?php the_sub_field('RAE_0201'); ?>
											<?php endif; ?></br>
											
											<?php if (get_sub_field('RAE_0202')): ?>
											<strong>Dating Periods</strong></br>
												<?php the_sub_field('RAE_0202'); ?>
											<?php endif; ?></br>
											
											<?php if (get_sub_field('RAE_0203')): ?>
											<strong>Dating Africa</strong></br>
												<?php the_sub_field('RAE_0203'); ?>
											<?php endif; ?></br>
											
											<?php if (get_sub_field('RAE_0204')): ?>
											<strong>Dating Asia</strong></br>
												<?php the_sub_field('RAE_0204'); ?>
											<?php endif; ?></br>
											
											<?php if (get_sub_field('RAE_0205')): ?>
											<strong>Dating Americas</strong></br>
												<?php the_sub_field('RAE_0205'); ?>
											<?php endif; ?></br>
											
											<?php if (get_sub_field('RAE_0206')): ?>
											<strong>Dating Australia</strong></br>
												<?php the_sub_field('RAE_0206'); ?>
											<?php endif; ?></br>
											
											<?php if (get_sub_field('RAE_0207')): ?>
											<strong>Dating Europe</strong></br>
												<?php the_sub_field('RAE_0207'); ?>
											<?php endif; ?></br>
										</p>

								
									</div>
									</td>
									</tr>		
									
								<?php endwhile; ?>
								<?php endif; ?>			
							</table>
							</div>
				</div>
				<?php endif; ?>
				
<!-- (TAB 10 MEASUREMENT) -->
		<?php if (get_field('RAE_0026') || get_field('RAE_0029') || get_field('RAE_0030') || get_field('RAE_0031')): ?>				
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_10"><h2><span class="dashicons dashicons-admin-home" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Measurement<span style="float:right; padding-right:5px;">&#9660</span></h2></label>
  		<input id="_10" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">				
           				<table class="custom-table-style">
           					<tr>
								<td class="custom-td-bg_2">
									<p class="custom_small-font">												
										Orientation: <?php the_field('RAE_0026'); ?></br>
										width (x): <?php the_field('RAE_0029'); ?></br>
										height (y): <?php the_field('RAE_0030'); ?></br>
										depth (z): <?php the_field('RAE_0031'); ?></br>																	
									</p>
								</td>
							</tr>
						</table>
			</div>
			<?php endif; ?>
			
<!-- (TAB 11 ACCESS) -->
		<?php if (get_field('RAE_0063')): ?>					
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_11"><h2><span title="list of access restrictions for information contained within this entry" class="dashicons dashicons-groups" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Access<span style="float:right; padding-right:5px;">&#9660</span></h2></label>
  		<input id="_11" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">				
           				<table class="custom-table-style">
           					<tr>
								<td class="custom-td-bg_2">
									<p class="custom_small-font">
										<?php if (get_field('RAE_0063')): ?>												
										Access: <?php the_field('RAE_0063'); ?></br>
										<?php endif; ?>
										<?php if (get_field('RAE_0064')): ?>
										Access (other): <?php the_field('RAE_0064'); ?></br>
										<?php endif; ?>
										<?php if (get_field('RAE_0065')): ?>
										Sacred Site: <?php the_field('RAE_0065'); ?></br>
										<?php endif; ?>																
									</p>
								</td>
							</tr>
						</table>
			</div>
			<?php endif; ?>

<!-- (TAB 12 LEGAL) -->	
		<?php if (get_field('RAE_0057') || get_field('RAE_0058') || get_field('RAE_0159_r') || get_field('RAE_0113_r') || get_field('RAE_0114_r') || get_field('RAE_0115_r')): ?>			
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_12"><h2><span title="Description of the significance of this entry in accordance with UNESCO, ICOMOS, CIDOC CRM, MIDAS Heritage and SEWPAC" class="dashicons dashicons-awards" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Legal<span style="float:right; padding-right:5px;">&#9660</span></h2></label>
  		<input id="_12" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">				
           				<table class="custom-table-style">
           					<tr>
								<td class="custom-td-bg_2">
									<p class="custom_small-font">												
										<strong>Statement of Significance</strong></br>
										<?php the_field('RAE_0057'); ?></br></br>																	
									</p>
								</td>
							</tr>
							<tr>
								<td class="custom-td-bg_2">
									<p class="custom_small-font">												
										<strong>Assessment of Significance</strong></br>
										<?php the_field('RAE_0058'); ?></br></br>																	
									</p>
								</td>
							</tr>
						</table>
						<table class="custom-table-style">
								<tr>
									<td colspan="3" class="custom-td-bg_2">
										<?php if (get_field('RAE_0159_r')): ?><?php $counter = 1; ?>
											<div>
											<?php while(has_sub_field('RAE_0159_r')): ?>
												<div>
												<p class="custom_small-font"><strong>[<?php echo $counter; ?>] Theme (<?php the_sub_field('RAE_0059')?>): </strong><?php the_sub_field('RAE_0060')?></br></p>
												</div><?php $counter++; ?>
											</div>												<?php endwhile; ?>
										<?php endif; ?>
									</td>
								</tr>	
           					</table>
           					<table class="custom-table-style">
								<tr>
									<td colspan="3" class="custom-td-bg_2">
										<?php if (get_field('RAE_0113_r')): ?><?php $counter = 1; ?>
											<div>
											<?php while(has_sub_field('RAE_0113_r')): ?>
												<div>
												<p class="custom_small-font"><strong>[<?php echo $counter; ?>] Procedures and Exemptions: </strong></br>Act: <?php the_sub_field('RAE_0071')?>, Title: <?php the_sub_field('RAE_0072')?>, Date: <?php the_sub_field('RAE_0075')?></br><?php the_sub_field('RAE_0073')?></br>Comment:<?php the_sub_field('RAE_0074')?></p>
												</div><?php $counter++; ?>
											</div>												<?php endwhile; ?>
										<?php endif; ?>
									</td>
								</tr>	
           					</table>
           					<table class="custom-table-style">
								<tr>
									<td colspan="3" class="custom-td-bg_2">
										<?php if (get_field('RAE_0114_r')): ?><?php $counter = 1; ?>
											<div>
											<?php while(has_sub_field('RAE_0114_r')): ?>
												<div>
												<p class="custom_small-font"><strong>[<?php echo $counter; ?>] Listings: </strong></br>Listing: <?php the_sub_field('RAE_0076')?>, No: <?php the_sub_field('RAE_0077')?>, Gazette No: <?php the_sub_field('RAE_0079')?>, Gazette Date: <?php the_sub_field('RAE_0080')?></br><?php the_sub_field('RAE_0073')?></br><?php the_sub_field('RAE_0078')?></p>
												</div><?php $counter++; ?>
											</div>												<?php endwhile; ?>
										<?php endif; ?>
									</td>
								</tr>	
           					</table>
           					<table class="custom-table-style">
								<tr>
									<td colspan="3" class="custom-td-bg_2">
										<?php if (get_field('RAE_0115_r')): ?><?php $counter = 1; ?>
											<div>
											<?php while(has_sub_field('RAE_0115_r')): ?>
												<div>
												<p class="custom_small-font"><strong>[<?php echo $counter; ?>] Owner: </strong></br>Name: <?php the_sub_field('RAE_0066')?>, Category: <?php the_sub_field('RAE_0067')?>, Date: <?php the_sub_field('RAE_0068')?></br><?php the_sub_field('RAE_0073')?></br>Transfer of Custody: <?php the_sub_field('RAE_0070')?>, Transfer of Custody: <?php the_sub_field('RAE_0069')?></p>
												</div><?php $counter++; ?>
											</div>												<?php endwhile; ?>
										<?php endif; ?>
									</td>
								</tr>	
           					</table>
			</div>
			<?php endif; ?>	
			
<!-- (TAB 13 AVAILABLE MEDIA COUNT) -->
		<?php if (get_field('RAE_0241')): ?>
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_13"><h2><span title="shows the number of available media formats - please also see gallery browser on the left of this window" class="dashicons dashicons-admin-media" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Available Media Formats<span style="float:right; padding-right:5px;">&#9660</span></h2></label>
  		<input id="_13" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
				
						<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">
           							<p><strong>Media Gallery</strong></br>
           								<span class="dashicons dashicons-format-image" style="position: relative; top: 7px; left: 0px; z-index: 5;"></span> <?php $count = count(get_field('RAE_0208_r')); ?><?php echo $count ?> | <img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-youtube.png" style="position: relative; top: 7px; left: 0px; z-index: 5;"/> <?php $count = count(get_field('RAE_0212_r')); ?><?php echo $count ?> | <img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-123dcatch.png" style="position: relative; top: 7px; left: 0px; z-index: 5;"/> <?php $count = count(get_field('RAE_0219_r')); ?><?php echo $count ?> | <img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-x3d.png" style="position: relative; top: 7px; left: 0px; z-index: 5;"/> <?php $count = count(get_field('RAE_0223_r')); ?><?php echo $count ?> | <img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-earth.png" style="position: relative; top: 7px; left: 0px; z-index: 5;"/> <?php $count = count(get_field('RAE_0227_r')); ?><?php echo $count ?> | <span class="dashicons dashicons-welcome-view-site" style="position: relative; top: 7px; left: 0px; z-index: 5;"></span> <?php $count = count(get_field('RAE_0242_r')); ?><?php echo $count ?>
           								</br>
           								</br>
           								<strong>All Available Formats</strong></br>
           								<?php the_field('RAE_0241'); ?>
           							</p>
           						</td>
           					</tr>
           				</table>

				</div>
				<?php endif; ?>
				
<!-- (TAB 14 CONTACT) -->
		<?php if (get_field('RAE_0090') || get_field('RAE_0091') || get_field('RAE_092')): ?>			
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_14"><h2><span title="address and contact person or company for this entry" class="dashicons dashicons-admin-users" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Contact<span style="float:right; padding-right:5px;">&#9660</span></h2></label>
  		<input id="_14" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
				
						<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">
           							<p><strong>Contact</strong></br>
           								<?php the_field('RAE_0090'); ?>
           								</br>
           								</br>
           								<strong>email</strong></br>
           								<?php the_field('RAE_0091'); ?>
           								</br>
           								</br>
           								<strong>Address</strong></br>
           								<?php the_field('RAE_0092'); ?>
           							</p>
           						</td>
           					</tr>
           				</table>

				</div>
				<?php endif; ?>

<!-- (TAB 15 REFERENCES) -->
		<?php if (get_field('RAE_0234_r') || get_field('RAE_0237_r') || get_field('RAE_0089_r')): ?>			
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_15"><h2><span title="list of newsletters, journal publications, conference and other references affiliated with this entry" class="dashicons dashicons-book-alt" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> References<span style="float:right; padding-right:5px;">&#9660</span></h2></label>
  		<input id="_15" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
<!-- (TAB 15 REFERENCES) Newsletters -->				
  					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">
										<?php if (get_field('RAE_0234_r')): ?><?php $counter = 1; ?>
										<p class="custom_small-font"><span class="dashicons dashicons-media-document" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Newsletters</br>

															<?php while(has_sub_field('RAE_0234_r')): ?>		
																<div style="padding:0px 0px 0px 50px; color:#282828;">[<?php echo $counter; ?>] <a href="<?php the_sub_field('RAE_0235')?>"><?php the_sub_field('RAE_0234')?></a>, <?php the_sub_field('RAE_0236')?></div>
															<?php $counter++; ?>										
										<?php endwhile; ?>
										<?php endif; ?>
										</p>
								</td>
							</tr>
					</table>
<!-- (TAB 15 REFERENCES) Conferences -->								
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">					
										<?php if (get_field('RAE_0237_r')): ?><?php $counter = 1; ?>
										<p class="custom_small-font"><span class="dashicons dashicons-groups" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Conferences</br>
										
															<?php while(has_sub_field('RAE_0237_r')): ?>
																<div style="padding:0px 0px 0px 50px; color:#282828;">[<?php echo $counter; ?>] <a href="<?php the_sub_field('RAE_0238')?>"><strong><?php the_sub_field('RAE_0237')?></a>, </strong><?php the_sub_field('RAE_0239')?></div>
															<?php $counter++; ?>									
										<?php endwhile; ?>
										<?php endif; ?>
										</p>
								</td>
							</tr>
					</table>
<!-- (TAB 15 REFERENCES) References -->				
  					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">
										<?php if (get_field('RAE_0089_r')): ?><?php $counter = 1; ?>
										<p class="custom_small-font"><span class="dashicons dashicons-media-document" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> References</br>

															<?php while(has_sub_field('RAE_0089_r')): ?>		
																<div style="padding:0px 0px 0px 50px; color:#282828;">[<?php echo $counter; ?>] <?php the_sub_field('RAE_0089')?>, <?php the_sub_field('RAE_0186')?></br><a class="lightbox" href="<?php the_sub_field('RAE_0187')?>"><?php the_sub_field('RAE_0187')?></a></div>
															<?php $counter++; ?>										
										<?php endwhile; ?>
										<?php endif; ?>
										</p>
								</td>
							</tr>
					</table>
			</div>
			<?php endif; ?>
						
<!-- (TAB 16 COMMENTS) -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_16"><h2><span class="dashicons dashicons-admin-comments" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Comments<span>(<?php comments_number( 'no responses', 'one response', '% responses' ); ?>) </span></h2></label>
  			<div style="background-color:#eeeeee; padding:2px;">
						<div>	
							<?php comments_template( '', true ); ?>
						</div>
			</div>							
	</div>


<!-- (TAB 17 MEDIA GALLERY) -->	
				<div style="width: 140px; height: 100vh; float: left; overflow: scroll;" id="custom-td-bg_color">
					<div style="width: 140px; height: 36px; z-index: 10; position: fixed; background-color: #191e23; padding: 0px 0px 0px 0px; color: #e0e0e0;">
						<h2 style="padding: 8px;"><span title="please click on the items in the media browser below to view media content" class="dashicons dashicons-admin-media" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Gallery (<?php $count = (count(get_field('RAE_0208_r'))+count(get_field('RAE_0212_r'))+count(get_field('RAE_0219_r'))+count(get_field('RAE_0223_r'))+count(get_field('RAE_0227_r'))+count(get_field('RAE_0242_r'))+count(get_field('RAE_0081'))); ?><?php echo $count ?>)</h2>
					</div>
<!-- (TAB 17 MEDIA GALLERY) Website -->			
								<?php if (get_field('RAE_0081')): ?>					
           						<div class="custom-media-image">	
           														
																<div class="custom-div-bg_1">
																	<?php
 																	$image = get_field('RAE_0248');
 																	$url = $image['url'];
																	$size_large = 'large';
																	$size_small = 'thumbnail';
																	$thumb = $image['sizes'][ $size_small ];
																	$width = $image['sizes'][ $size_large . '-width' ];
																	$height = $image['sizes'][ $size_large . '-height' ];
 																	$width = $image['sizes'][ $size_large . '-width' ];
																	$height = $image['sizes'][ $size_large . '-height' ];
 																	?>																		
																	<div id="media-gallery-background"><a class="lightbox" title="official website" rel="lightbox[vr]" href="<?php the_field('RAE_0081') ?>"><img class="media-gallery" src="<?php echo $thumb; ?>"></a>
																	</div>
																	<span class="dashicons dashicons-admin-links" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"></span>
																	<p class="custom_small-font-nopadding">[1] <strong>website</strong></p>
																</div>
																																	
								</div>
								<?php endif; ?>	
<!-- (TAB 17 MEDIA GALLERY) Newsletter & Journal -->								
           						<?php if (get_field('RAE_0234_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										

															<?php while(has_sub_field('RAE_0234_r')): ?>
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a class="lightbox" title="frequent newsletter or journal publication: <?php the_sub_field('RAE_0234')?>. <?php the_sub_field('RAE_0236')?>" rel="lightbox[vr]" href="<?php the_sub_field('RAE_0235')?>"><img class="media-gallery" src="http://www.rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/media-gallery_newsletter.png"></a>
																	</div>
																	<span class="dashicons dashicons-media-document" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"></span>
																	<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0234')?></strong></p>
																</div><?php $counter++; ?>								
										<?php endwhile; ?>
												
								</div>
								<?php endif; ?>	
<!-- (TAB 17 MEDIA GALLERY) Images - using object acf - send url= & h=echo ($height / 100)."\n" and w=echo ($width / 100)."\n" to href link - devide by 100 to adjust screen size and ratio -->
					<?php if( have_rows('RAE_0208_r') ): ?><?php $counter = 1; ?>
					<div class="custom-media-image">				
						
				
						<?php while( have_rows('RAE_0208_r') ): the_row(); 
						// vars
						$image = get_sub_field('RAE_0209');
						$content = get_sub_field('RAE_0209');
						$link = get_sub_field('RAE_0209');
						
						$url = $image['url'];
						$size_large = 'large';
						$size_small = 'thumbnail';
						$thumb = $image['sizes'][ $size_small ];
						$width = $image['sizes'][ $size_large . '-width' ];
						$height = $image['sizes'][ $size_large . '-height' ];						
						?>
						<div class="custom-div-bg_1">								
							<?php if( $link ): ?>													 				
								<div id="media-gallery-background"><a class="lightbox" title="Image: <?php the_sub_field('RAE_0211')?>" href="http://www.rockartdatabase.com/v2/wp-content/themes/v2/plugin_x3dom_images/index.html?img=<?php echo $image['sizes']['large']; ?>&w=<?php echo ($width / 100)."\n"; ?>&h=<?php echo ($height / 100)."\n"; ?>"><img class="media-gallery" src="<?php echo $thumb; ?>" /></a>
								</div>
								<span class="dashicons dashicons-format-image" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"></span>
								<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0210')?></strong></p>
						</div>
							<?php endif; ?>
		    				<?php $counter++; ?>
		    				<?php endwhile; ?>
							
					</div>
					<?php endif; ?>
<!-- (TAB 17 MEDIA GALLERY) Videos Youtube -->												
           						<?php if (get_field('RAE_0212_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										
										
															<?php while(has_sub_field('RAE_0212_r')): ?>
																<div class="custom-div-bg_1">
																	<div id="media-gallery-background"><a class="lightbox" title="Video: <?php the_sub_field('RAE_0213')?>" rel="lightbox[youtube]" href="http://www.youtube.com/embed/<?php the_sub_field('RAE_0214')?>"><img class="media-gallery" src="http://img.youtube.com/vi/<?php the_sub_field('RAE_0214')?>/sddefault.jpg"></a>
																	</div>
																	<span><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-youtube.png" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"/></span>
																	<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0212')?></strong></p>
																</div><?php $counter++; ?>								
										<?php endwhile; ?>
										
								</div>
								<?php endif; ?>
<!-- (TAB 17 MEDIA GALLERY) 3D Autodesk 123D Catch -->								
           						<?php if (get_field('RAE_0219_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										

															<?php while(has_sub_field('RAE_0219_r')): ?>
																<div class="custom-div-bg_1">
																	<div id="media-gallery-background"><a class="lightbox" title="3D Autodesk: <?php the_sub_field('RAE_0221')?>" rel="lightbox[autodesk]" href="http://apps.123dapp.com/embeddedview/index.html?contentid=<?php the_sub_field('RAE_0222')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0219')?>"></a>
																	</div>
																	<span><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-123dcatch.png" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"/></span>
																	<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0220')?></strong></p>
																</div><?php $counter++; ?>									
										<?php endwhile; ?>
												
								</div>
								<?php endif; ?>	
<!-- (TAB 17 MEDIA GALLERY) 3D .x3d -->								
           						<?php if (get_field('RAE_0223_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										

															<?php while(has_sub_field('RAE_0223_r')): ?>
																<div class="custom-div-bg_1">																
																	<div id="media-gallery-background"><a class="lightbox" title="3D as .x3d: <?php the_sub_field('RAE_0225')?>" rel="lightbox[x3d]" href="http://www.rockartdatabase.com/v2/wp-content/themes/v2/plugin_x3dom_3d/index.html?x3d=<?php the_sub_field('RAE_0226')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0223')?>"></a>
																	</div>
																	<span><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-x3d.png" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"/></span>
																	<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0224')?></strong></p>
																</div><?php $counter++; ?>								
										<?php endwhile; ?>
												
								</div>
								<?php endif; ?>	
<!-- (TAB 17 MEDIA GALLERY) 3D .kml -->								
           						<?php if (get_field('RAE_0227_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										

															<?php while(has_sub_field('RAE_0227_r')): ?>
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a class="lightbox" title="Google Earth .kml: <?php the_sub_field('RAE_0229')?>" rel="lightbox[earth]" href="http://www.rockartdatabase.com/v2/wp-content/themes/v2/plugin_google_earth/index.html?gps=<?php $location = get_field('RAE_0254'); if( !empty($location) ):?><?php echo $location['lat']; ?>,<?php echo $location['lng']; ?><?php endif; ?>&kml=<?php the_sub_field('RAE_0230')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0227')?>"></a>
																	</div>
																	<span><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-earth.png" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"/></span>
																	<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0228')?></strong></p>
																</div><?php $counter++; ?>									
										<?php endwhile; ?>
												
								</div>
								<?php endif; ?>	
								
<!-- (TAB 17 MEDIA GALLERY) Virtual Reality -->								
           						<?php if (get_field('RAE_0242_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										

															<?php while(has_sub_field('RAE_0242_r')): ?>
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a class="lightbox" title="Virtual or Interactive Tour: <?php the_sub_field('RAE_0244')?>" rel="lightbox[vr]" href="<?php the_sub_field('RAE_0245')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0242')?>"></a>
																	</div>
																	<span class="dashicons dashicons-welcome-view-site" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"></span>
																	<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0243')?></strong></p>
																</div><?php $counter++; ?>								
										<?php endwhile; ?>
												
								</div>
								<?php endif; ?>	
				</div>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->


<!-- If Password Protected Entry End -->
<?php
} else {
    echo get_the_password_form();
}
?>


</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>