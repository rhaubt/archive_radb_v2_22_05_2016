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

/* ----- Content ----- */
div.single-content {
	margin-left: auto;
    margin-right: auto;
    width: 600px;
    height: auto;
}
td.custom-td-bg_blue {
    border: 0px solid #E0E0E0;
    background-color: rgba(128,128,128, 0.3);
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

<div id="primary" class="site-content">
	<div id="content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="single-content" id="pushwrapper">
			<div style="width: 460px; height: 100vh; float: right; overflow-y: scroll; overflow-x:hidden; box-shadow: 10px 10px 10px rgb(0, 0, 0);">
			
			<div style="width: 460px; height: 36px; background-color: #191e23; padding: 0px 0px 0px 0px; color: #e0e0e0; position:fixed; z-index:10;">
				<h2 style="padding: 8px;"><a target="_top" href="http://www.rockartdatabase.com/v2"><small>back to</small></a> Rock Art Database</h2>
			</div>

<!-- (1) info  -->			
			<div style="padding-top: 36px;">			
				<table class="custom-table-style">
					<td class="custom-td-bg_blue" width="150px" height="150px">
<!-- Feature Image Thumbnail and Lightbox -->				
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
					<a target="_blank" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img style="border-radius: 5px;" src="<?php echo $thumb; ?>" alt="no image"></a>
					</td>
<!--     color label  -->
					<td class="custom-td-bg_blue">
<!--     category and ID  -->
						<p class="custom_small-font"><strong><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></strong> | ID: <a target="_blank" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
<!--     title name  -->						
						<h2 class="custom_headingalign"><?php the_field('RAE_0003') ?></h2></br></br>
<!--     entry date  -->						
						<p class="custom_small-font">Entry Date <?php the_field('RAE_0004'); ?> | Last Update <?php echo get_the_date(); ?></p>			
<!--     condition  -->						
						<p class="custom_small-font">Condition: <?php the_field('RAE_0082'); ?></br><a class="lightbox" href="<?php the_field('RAE_0081') ?>">visit official website</a></p>
<!--     author  -->						
						<p style="padding:5px 0px 0px 0px;"class="custom_small-font"><?php echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?> Author: <?php the_author_posts_link(); ?></p>
<!--     wti like / body content  -->						
						<div class="storycontent" style="height: 21px; max-width: 437px; padding:0px 2px 5px 0px; font-size:14px; margin-left: -163px;">
							<?php the_content(); ?>						
						</div>
					</td>
				</table>
			</div>

<!-- (1) info description -->				
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_1"><span class="dashicons dashicons-admin-home" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Info <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_1" type="checkbox">
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
<!-- (2) Flag -->				
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_2"><span class="dashicons dashicons-flag" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Flag <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_2" type="checkbox">
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

<!-- (4) Connect -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_4"><span class="dashicons dashicons-share" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Connect <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_4" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
<!--     Total -->					
					<table class="custom-table-style">
						<tr>
							<td class="custom-td-bg_2">
								<p><strong>All Newsletters and Conferences</strong></br>
								<span class="dashicons dashicons-media-document" style="position: relative; top: 7px; left: 0px; z-index: 5;"></span> <?php $count = count(get_field('RAE_0234_r')); ?><?php echo $count ?> | <span class="dashicons dashicons-groups" style="position: relative; top: 7px; left: 0px; z-index: 5;"></span> <?php $count = count(get_field('RAE_0237_r')); ?><?php echo $count ?>
								</p>
							</td>
						</tr>
					</table>
<!--     Social Media -->					
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">
           							<p><span class="dashicons dashicons-share" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Social Media</br>
           								<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-facebook" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Facebook: <a href="<?php the_field('RAE_0231'); ?>"><?php the_field('RAE_0231'); ?></a></div>
           								<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-twitter" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Twitter: <a href="<?php the_field('RAE_0232'); ?>"><?php the_field('RAE_0232'); ?></a></div>
           								<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-share-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Instagram: <a href="<?php the_field('RAE_0233'); ?>"><?php the_field('RAE_0233'); ?></a></div>
           							</p>
           						</td>
           					</tr>
           			</table>
           						
<!--     Newsletters -->				
  					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">
										<?php if (get_field('RAE_0234_r')): ?><?php $counter = 1; ?>
										<p class="custom_small-font"><span class="dashicons dashicons-media-document" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Newsletters</br>

															<?php while(has_sub_field('RAE_0234_r')): ?>		
																<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-media-document" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> [<?php echo $counter; ?>] <a href="<?php the_sub_field('RAE_0235')?>"><?php the_sub_field('RAE_0234')?></a>, <?php the_sub_field('RAE_0236')?></div>
															<?php $counter++; ?>										
										<?php endwhile; ?>
										<?php endif; ?>
										</p>
								</td>
							</tr>
					</table>
<!--     Conferences -->								
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">					
										<?php if (get_field('RAE_0237_r')): ?><?php $counter = 1; ?>
										<p class="custom_small-font"><span class="dashicons dashicons-groups" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Conferences</br>
										
															<?php while(has_sub_field('RAE_0237_r')): ?>
																<div style="padding:0px 0px 0px 50px; color:#282828;"><span class="dashicons dashicons-groups" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> [<?php echo $counter; ?>] <a href="<?php the_sub_field('RAE_0238')?>"><strong><?php the_sub_field('RAE_0237')?></a>, </strong><?php the_sub_field('RAE_0239')?></div>
															<?php $counter++; ?>									
										<?php endwhile; ?>
										<?php endif; ?>
										</p>
								</td>
							</tr>
					</table>
			</div>

<!-- (5) Location -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_5"><span class="dashicons dashicons-location-alt" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Location <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_5" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
<!--     GPS -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">
           							<p class="custom_small-font"><span class="dashicons dashicons-admin-post" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> GPS: <?php the_field('RAE_0254')?></p>
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
<!--     Primary Address -->						
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">	
										<p class="custom_small-font">Primary Address: <?php the_field('RAE_0018'); ?></br></br>
										<div style="padding:0px 0px 0px 50px; color:#282828;">Local Gov. Area: <?php the_field('RAE_0019'); ?></div>
										<div style="padding:0px 0px 0px 50px; color:#282828;">Local Region 1: <?php the_field('RAE_0020'); ?></div>
										<div style="padding:0px 0px 0px 50px; color:#282828;">Local Region 2: <?php the_field('RAE_0021'); ?></div>
										</p>
								</td>
							</tr>
					</table>
<!--     Boundaries -->
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
<!--     Location Description -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">	
										<p class="custom_small-font"><span class="dashicons dashicons-location-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Location Description: <?php the_field('RAE_0027'); ?>
										<div style="padding:0px 0px 0px 50px; color:#282828;">Location Description (other): <?php the_field('RAE_0028'); ?></div>
										</p>
								</td>
							</tr>
					</table>
<!--     Approach -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">	
										<p class="custom_small-font"><span class="dashicons dashicons-location-alt" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Approach: <?php the_field('RAE_0032'); ?></br></br>
										</p>
								</td>
							</tr>
					</table>
			</div>

<!-- (6) Collection Location (other collections within this archives) -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_6"><span class="dashicons dashicons-archive" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Collection Locations (<?php $count = (count(get_field('RAE_0118'))); ?><?php echo $count ?> continents) <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_6" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
<!--     Continent -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">			
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Continent (<?php $count = count(get_field('RAE_0118')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0118')?></div><?php $counter++; ?>
																				
										</p>
								</td>
							</tr>
					</table>          						
<!--     Africa -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">			
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Africa (<?php $count = count(get_field('RAE_0119')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0119')?></div><?php $counter++; ?>
																				
										</p>
								</td>
							</tr>
					</table>
<!--     Asia -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">				
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Asia (<?php $count = count(get_field('RAE_0120')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0120')?></div><?php $counter++; ?>
																				
										</p>
								</td>
							</tr>
					</table>
<!--     Europe -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">			
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Europe (<?php $count = count(get_field('RAE_0121')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0121')?></div><?php $counter++; ?>
																				
										</p>
								</td>
							</tr>
					</table>
<!--     North America -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">			
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> North America (<?php $count = count(get_field('RAE_0122')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0122')?></div><?php $counter++; ?>
											<div style="padding:0px 0px 0px 50px; color:#282828;">by State or Territory (USA):<?php the_field('RAE_0010')?></div>
											<div style="padding:0px 0px 0px 50px; color:#282828;">by State or Territory (CAN):<?php the_field('RAE_0011')?></div>								
										</p>
								</td>
							</tr>
					</table>
<!--     Oceania -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">				
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Oceania (<?php $count = count(get_field('RAE_0123')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0123')?></div><?php $counter++; ?>
											<div style="padding:0px 0px 0px 50px; color:#282828;">by State or Territory (AUS): <?php the_field('RAE_0009')?></div>
											<div style="padding:0px 0px 0px 50px; color:#282828;">by Language Group (AUS): <?php the_field('RAE_0016')?></div>																			
										</p>
								</td>
							</tr>
					</table>	
<!--     South America -->
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">				
										<p class="custom_small-font"><span class="dashicons dashicons-admin-site" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> South America (<?php $count = count(get_field('RAE_0124')); ?><?php echo $count ?>)</br>
											<?php $counter = 1; ?><div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0124')?></div><?php $counter++; ?>																				
										</p>
								</td>
							</tr>
					</table>									
			</div>
								
<!-- (7) classification archaeology -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_7"><span class="dashicons dashicons-clipboard" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Classification (Archaeology) <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_7" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
<!--     Site Types -->					
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">	
										<p class="custom_small-font"><span class="dashicons dashicons-clipboard" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Site Types: <?php the_field('RAE_0027'); ?>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0036'); ?> <?php the_field('RAE_0037'); ?></div>
										</p>
								</td>
							</tr>
					</table>
<!--     Deposits -->					
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">	
										<p class="custom_small-font"><span class="dashicons dashicons-clipboard" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Deposits: <?php the_field('RAE_0027'); ?>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0038'); ?></div>
										</p>
								</td>
							</tr>
					</table>
<!--     Comments -->					
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">	
										<p class="custom_small-font"><span class="dashicons dashicons-clipboard" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Comments: <?php the_field('RAE_0027'); ?>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0039'); ?></div>
										</p>
								</td>
							</tr>
					</table>					
<!--     Surface -->					
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_2">	
										<p class="custom_small-font"><span class="dashicons dashicons-clipboard" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Surface: <?php the_field('RAE_0027'); ?>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0040'); ?></div>
										</p>
								</td>
							</tr>
					</table>
<!--     Camp Site -->					
					<table class="custom-table-style">
							<tr>
								<td class="custom-td-bg_1">	
										<p class="custom_small-font"><span class="dashicons dashicons-store" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Camp Site: <?php the_field('RAE_0027'); ?>
										<div style="padding:0px 0px 0px 50px; color:#282828;"><?php the_field('RAE_0041'); ?></div>
										</p>
								</td>
							</tr>
					</table>						
			</div>
									
<!-- (8) classification rock art -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_8"><span class="dashicons dashicons-universal-access-alt" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Classification (Rock Art) <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_8" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
           						<div class="custom-media-image">
           						<table class="custom-table-style">
           							<tr>
           								
									<?php if (get_field('RAE_0168_r')): ?><?php $counter = 1; ?>
										
									<?php while(has_sub_field('RAE_0168_r')): ?>
										<td class="custom-td-bg_2">
										<div class="custom-div-bg_2">
										
<!--     Class Image -->	           						           															
										<p class="custom_small-font-nopadding-2" style="background-color:#e0e0e0;"><strong>Class Sample Image</strong></br><img style="width: 210px;" scr="<?php the_field('RAE_0247'); ?>" alt="no sample picture"></br></br></p>
<!--     Number of Motifs -->
										<p class="custom_small-font-nopadding-2"><strong>Number of Motifs</strong></br>
											<?php the_sub_field('RAE_0169'); ?></br></br></p>
<!--     Type -->
										<p class="custom_small-font-nopadding-2" style="background-color:#e0e0e0;"><strong>Type</strong></br>
											<?php the_sub_field('RAE_0170'); ?></br></br></p>
<!--     Style -->
										<p class="custom_small-font-nopadding-2"><strong>Style</strong></br>
											<?php the_sub_field('RAE_0180'); ?></br></br></p>
<!--     Color -->
										<p class="custom_small-font-nopadding-2" style="background-color:#e0e0e0;"><strong>Color</strong></br>
										<small style="background-color:<?php the_sub_field('RAE_0253'); ?>;">href <?php the_sub_field('RAE_0253'); ?></small></br>
											<?php the_sub_field('RAE_0171'); ?></br>
											<?php the_sub_field('RAE_0172'); ?></br></br>		
										</p>
<!--     Subject Matter -->										
										<p class="custom_small-font-nopadding-2"><strong>Subject Matter</strong></br>
											<div style="padding:0px 0px 0px 0px; color:#282828;"><strong>All</strong></br>
												<?php the_sub_field('RAE_0181'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>People</strong></br>
												<?php the_sub_field('RAE_0175'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Figures</strong></br>
												<?php the_sub_field('RAE_0176'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Flora</strong></br>
												<?php the_sub_field('RAE_0173'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Mammal</strong></br>
												<?php the_sub_field('RAE_0184'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Reptile</strong></br>
												<?php the_sub_field('RAE_00183'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Fish</strong></br>
												<?php the_sub_field('RAE_0185'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Bird</strong></br>
												<?php the_sub_field('RAE_0174'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Extinct</strong></br>
												<?php the_sub_field('RAE_0182'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Material Culture</strong></br>
												<?php the_sub_field('RAE_0177'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Contact Art</strong></br>
												<?php the_sub_field('RAE_0178'); ?></div></br>
											<div style="padding:0px 0px 0px 20px; color:#282828;"><strong>Scene</strong>
												</br><?php the_sub_field('RAE_0179'); ?></div></br>
										</p>
<!--     Dating -->										
										<p class="custom_small-font-nopadding-2" style="background-color:#e0e0e0;"><strong>Dating</strong></br>
											<strong>Dating Basic</strong></br>
												<?php the_sub_field('RAE_0201'); ?></br>
											<strong>Dating Periods</strong></br>
												<?php the_sub_field('RAE_0202'); ?></br>
											<strong>Dating Africa</strong></br>
												<?php the_sub_field('RAE_0203'); ?></br>
											<strong>Dating Asia</strong></br>
												<?php the_sub_field('RAE_0204'); ?></br>
											<strong>Dating Americas</strong></br>
												<?php the_sub_field('RAE_0205'); ?></br>
											<strong>Dating Australia</strong></br>
												<?php the_sub_field('RAE_0206'); ?></br>
											<strong>Dating Europe</strong></br>
												<?php the_sub_field('RAE_0207'); ?></br>
										</p>

								
									</div>
									</td>
									</tr>		
									
								<?php endwhile; ?>
								<?php endif; ?>			
							</table>
							</div>
				</div>
			
<!-- (10) Access -->				
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_10"><span class="dashicons dashicons-groups" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Access <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_10" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">				
           				<table class="custom-table-style">
           					<tr>
								<td class="custom-td-bg_2">
									<p class="custom_small-font">												
										Access Restrictions: <?php the_field('RAE_0063'); ?></br>
										Access (other): <?php the_field('RAE_0064'); ?></br>
										Sacred Site: <?php the_field('RAE_0065'); ?></br>																	
									</p>
								</td>
							</tr>
						</table>
			</div>

<!-- (11) Legal -->				
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_11"><span class="dashicons dashicons-awards" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Legal <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_11" type="checkbox">
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
			
<!-- (12) Available Media -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_12"><span class="dashicons dashicons-admin-media" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Available Media Formats <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_12" type="checkbox">
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
<!-- (13) Contact -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_13"><span class="dashicons dashicons-admin-users" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Contact <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_13" type="checkbox">
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

<!-- (14) References -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_14"><span class="dashicons dashicons-book-alt" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> References <span style="float:right; padding-right:5px;">&#9660</span></label>
  		<input id="_14" type="checkbox">
  			<div style="background-color:#eeeeee; padding:2px;">
           						<table class="custom-table-style">
									<tr>
										<td colspan="3" class="custom-td-bg_2">
											<?php if (get_field('RAE_0089_r')): ?><?php $counter = 1; ?>
												<div>
												<?php while(has_sub_field('RAE_0089_r')): ?>
													<div>
													<p class="custom_small-font"><strong>[<?php echo $counter; ?>]</strong> <?php the_sub_field('RAE_0089')?>, <?php the_sub_field('RAE_0186')?></br><a class="lightbox" href="<?php the_sub_field('RAE_0187')?>"><?php the_sub_field('RAE_0187')?></a></br></br></p>
													</div><?php $counter++; ?>
												</div>
												<?php endwhile; ?>
											<?php endif; ?>
										</td>
									</tr>	
           						</table>
			</div>
						
<!-- (15) Comments  -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_15"><span class="dashicons dashicons-admin-comments" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span> Comments <span>(<?php comments_number( 'no responses', 'one response', '% responses' ); ?>) </span></label>
  			<div style="background-color:#eeeeee; padding:2px;">
						<div>	
							<?php comments_template( '', true ); ?>
						</div>
			</div>							
	</div>


<!-- Media Gallery -->	
				<div style="width: 140px; height: 100vh; float: left; background-color:rgba(128,128,128, 0.3); overflow: scroll;">
					<div style="width: 140px; height: 36px; z-index: 10; position: fixed; background-color: #191e23; padding: 0px 0px 0px 0px; color: #e0e0e0;">
						<h2 style="padding: 8px;"><span class="dashicons dashicons-admin-media" style="position: relative; top: 0px; left: 0px; z-index: 5;"></span> Gallery (<?php $count = (count(get_field('RAE_0208_r'))+count(get_field('RAE_0212_r'))+count(get_field('RAE_0219_r'))+count(get_field('RAE_0223_r'))+count(get_field('RAE_0227_r'))+count(get_field('RAE_0242_r'))+count(get_field('RAE_0081'))); ?><?php echo $count ?>)</h2>
					</div>
<!--     Website -->			
								<?php if (get_field('RAE_0081')): ?>					
           						<div class="custom-media-image">	
           														
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a class="lightbox" title="official website" rel="lightbox[vr]" href="<?php the_field('RAE_0081') ?>"><img class="media-gallery" src="<?php echo $thumb; ?>"></a>
																	</div>
																	<span class="dashicons dashicons-admin-links" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"></span>
																	<p class="custom_small-font-nopadding">[1] <strong>website</strong></p>
																</div>
																																	
								</div>
								<?php endif; ?>	
<!--     Facebook -->			
								<?php if (get_field('RAE_0231')): ?>					
           						<div class="custom-media-image">	
           														
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a target="_blank" title="facebook" href="<?php the_field('RAE_0231') ?>"><img class="media-gallery" src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/media-gallery_facebook.png"></a>
																	</div>
																	<span class="dashicons dashicons-share" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"></span>
																	<p class="custom_small-font-nopadding">[1] <strong>Facebook</strong></p>
																</div>
																																	
								</div>
								<?php endif; ?>	
<!--     Twitter -->								
           						<?php if (get_field('RAE_0232')): ?>
           						<div class="custom-media-image">	
           														
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a target="_blank" title="twitter" href="<?php the_field('RAE_0232') ?>"><img class="media-gallery" src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/media-gallery_twitter.png"></a>
																	</div>
																	<span class="dashicons dashicons-share" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"></span>
																	<p class="custom_small-font-nopadding">[1] <strong>Twitter</strong></p>
																</div>
																																		
								</div>
								<?php endif; ?>
<!--     other social media -->	
								<?php if (get_field('RAE_0233')): ?>							
           						<div class="custom-media-image">	
           														
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a target="_blank" title="other social media eg instagram, flickr, picasa ..." href="<?php the_field('RAE_0233') ?>"><img class="media-gallery" src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/media-gallery_instagram.png"></a>
																	</div>
																	<span class="dashicons dashicons-share" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"></span>
																	<p class="custom_small-font-nopadding">[1] <strong>other Social Media</strong></p>
																</div>
																																	
								</div>
								<?php endif; ?>	
<!--     Newsletter & Journal -->								
           						<?php if (get_field('RAE_0234_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										

															<?php while(has_sub_field('RAE_0234_r')): ?>
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a class="lightbox" title="frequent newsletter or journal publication: <?php the_sub_field('RAE_0234')?>. <?php the_sub_field('RAE_0236')?>" rel="lightbox[vr]" href="<?php the_sub_field('RAE_0235')?>"><img class="media-gallery" src="http://www.rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/media-gallery_newsletter.png"></a>
																	</div>
																	<span class="dashicons dashicons-media-document" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"></span>
																	<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong>Newsletter / Journal: <?php the_sub_field('RAE_0234')?></strong></p>
																</div><?php $counter++; ?>								
										<?php endwhile; ?>
												
								</div>
								<?php endif; ?>	
<!-- images - using object acf - send url= & h=echo ($height / 100)."\n" and w=echo ($width / 100)."\n" to href link - devide by 100 to adjust screen size and ratio -->
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
								<div id="media-gallery-background"><a class="lightbox" title="<strong><?php the_sub_field('RAE_0210')?>:</strong> <?php the_sub_field('RAE_0211')?>" href="http://www.rockartdatabase.com/v2/wp-content/themes/v2/plugin_x3dom_images/index.html?img=<?php echo $url; ?>&w=<?php echo ($width / 100)."\n"; ?>&h=<?php echo ($height / 100)."\n"; ?>"><img class="media-gallery" src="<?php echo $thumb; ?>" /></a>
								</div>
								<span class="dashicons dashicons-format-image" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"></span>
								<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0210')?></strong></p>
						</div>
							<?php endif; ?>
		    				<?php $counter++; ?>
		    				<?php endwhile; ?>
							
					</div>
					<?php endif; ?>
<!--     videos youtube -->												
           						<?php if (get_field('RAE_0212_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										
										
															<?php while(has_sub_field('RAE_0212_r')): ?>
																<div class="custom-div-bg_1">
																	<div id="media-gallery-background"><a class="lightbox" title="<strong><?php the_sub_field('RAE_0212')?>:</strong> <?php the_sub_field('RAE_0213')?>" rel="lightbox[youtube]" href="http://www.youtube.com/embed/<?php the_sub_field('RAE_0214')?>"><img class="media-gallery" src="http://img.youtube.com/vi/<?php the_sub_field('RAE_0214')?>/sddefault.jpg"></a>
																	</div>
																	<span><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-youtube.png" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"/></span>
																	<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0212')?></strong></p>
																</div><?php $counter++; ?>								
										<?php endwhile; ?>
										
								</div>
								<?php endif; ?>
<!--     3D Autodesk 123D Catch -->								
           						<?php if (get_field('RAE_0219_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										

															<?php while(has_sub_field('RAE_0219_r')): ?>
																<div class="custom-div-bg_1">
																	<div id="media-gallery-background"><a class="lightbox" title="<strong><?php the_sub_field('RAE_0220')?>:</strong> <?php the_sub_field('RAE_0221')?>" rel="lightbox[autodesk]" href="http://apps.123dapp.com/embeddedview/index.html?contentid=<?php the_sub_field('RAE_0222')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0219')?>"></a>
																	</div>
																	<span><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-123dcatch.png" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"/></span>
																	<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0220')?></strong></p>
																</div><?php $counter++; ?>									
										<?php endwhile; ?>
												
								</div>
								<?php endif; ?>	
<!--     3D .x3d -->								
           						<?php if (get_field('RAE_0223_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										

															<?php while(has_sub_field('RAE_0223_r')): ?>
																<div class="custom-div-bg_1">																
																	<div id="media-gallery-background"><a class="lightbox" title="<strong><?php the_sub_field('RAE_0224')?>:</strong> <?php the_sub_field('RAE_0225')?>" rel="lightbox[x3d]" href="http://www.rockartdatabase.com/v2/wp-content/themes/v2/plugin_x3dom_3d/index.html?x3d=<?php the_sub_field('RAE_0226')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0223')?>"></a>
																	</div>
																	<span><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-x3d.png" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"/></span>
																	<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0224')?></strong></p>
																</div><?php $counter++; ?>								
										<?php endwhile; ?>
												
								</div>
								<?php endif; ?>	
<!--     3D .kml -->								
           						<?php if (get_field('RAE_0227_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										

															<?php while(has_sub_field('RAE_0227_r')): ?>
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a class="lightbox" title="<strong><?php the_sub_field('RAE_0228')?>:</strong> <?php the_sub_field('RAE_0229')?>" rel="lightbox[earth]" href="http://www.rockartdatabase.com/v2/wp-content/themes/v2/plugin_google_earth/index.html?gps=<?php $location = get_field('RAE_0254'); if( !empty($location) ):?><?php echo $location['lat']; ?>,<?php echo $location['lng']; ?><?php endif; ?>&kml=<?php the_sub_field('RAE_0230')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0227')?>"></a>
																	</div>
																	<span><img src="http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/menu-icon-earth.png" style="position: relative; top: -80px; left: 0px; z-index: 5; background-color: #e0e0e0; border: 1px solid black; border-radius: 5px;"/></span>
																	<p class="custom_small-font-nopadding">[<?php echo $counter; ?>] <strong><?php the_sub_field('RAE_0228')?></strong></p>
																</div><?php $counter++; ?>									
										<?php endwhile; ?>
												
								</div>
								<?php endif; ?>	
								
<!--     Virtual Reality -->								
           						<?php if (get_field('RAE_0242_r')): ?><?php $counter = 1; ?>
           						<div class="custom-media-image">
										

															<?php while(has_sub_field('RAE_0242_r')): ?>
																<div class="custom-div-bg_1">																	
																	<div id="media-gallery-background"><a class="lightbox" title="<strong><?php the_sub_field('RAE_0243')?>:</strong> <?php the_sub_field('RAE_0244')?>" rel="lightbox[vr]" href="<?php the_sub_field('RAE_0245')?>"><img class="media-gallery" src="<?php the_sub_field('RAE_0242')?>"></a>
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
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>