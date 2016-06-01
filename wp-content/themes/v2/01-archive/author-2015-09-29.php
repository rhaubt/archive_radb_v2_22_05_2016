<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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

<style>
.site-content {
	background-image: url("http://rockartdatabase.com/v2/wp-content/themes/v2/wp-content/images/single-background.png");
}
body {
	margin-bottom: -48px;
}
.comments-area {
	background-color: #eeeeee;
}
.comments-title {
	display:none;
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
	float: left;
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
/* avatar for Author in Info Section */
img.avatar.avatar-50.gravatar {
	width:150px;
	height:150px;
	border-radius: 5px;
}
.comments-area .bypostauthor cite span {
	display:none;
}
div.single-content {
	margin-left: auto;
    margin-right: auto;
    width: 600px;
    height: auto;
}
td.custom-td-bg_blue {
    border: 0px solid #E0E0E0;
    background-color: rgba(161,161,161, 0.3);
    max-width: 100%;
    padding: 7px;
    line-height: 1.5;
    text-align: justify;
}

div.custom-media-image { 
	max-width:100%; 
	max-height:100%; 
	padding: 41px 10px 10px 10px;
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


iframe {
	width:280px;
	height:150px;
}

.custom-thumbnail {
	width:150px;
	height:150px;
    box-shadow: 5px 5px 2px #888888;
    overflow:hidden;
    float:right;
    padding: 0px 0px 0px 10px;
}

img.attachment-medium.wp-post-image {
	width:150px;
}

img.attachment-medium.default-featured-img {
	height:150px;
}

p.custom_small-font {
	font-size:10px;
}
p.custom_small-font-nopadding {
	font-size:10px;
	padding: 0px 0px 0px 0px !important;
}

h2.custom_headingalign {
	text-align:left;
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

.media-gallery_wrapper {width:290px; margin:auto;}
#media-gallery_screen {width: 290px; height: 250px; float: left;}
#media-gallery_videos {
    margin-bottom: 1em;
    padding-left : 0em;
    margin-left: 0em;
    list-style: none;
    display: block;
    float: left;
	width: 8050px;
    height: 200px;
}

#media-gallery_videolist {
	width: 300px;
	height: 250px;
    overflow: scroll;
}

#media-gallery_videos li {
    float: left;
    width: 130px;
    height: 240px;
    padding: 5px;
    margin-bottom: 1em;
    margin-right: 1.9em;
    cursor: pointer;
    line-height: 15px;
    box-shadow: 10px 10px 5px #888888;
}
#media-gallery_videos li span {
    font: 10px/11px arial, sans-serif;
    
}
#media-gallery_desc {
	font: 12px/11px arial, sans-serif;
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
.cb {
	clear:both;
}
</style>

<div id="primary" class="site-content">
	<div id="content" role="main">
			<div class="single-content" id="pushwrapper">
			<div style="width: 460px; height: 100vh; float: right; overflow-y: scroll; overflow-x:hidden; box-shadow: 10px 10px 10px rgb(0, 0, 0);">
			
			<div style="width: 460px; height: 36px; background-color: #191e23; padding: 0px 0px 0px 0px; color: #e0e0e0; position:fixed; z-index:10;">
				<h2 style="padding: 8px;"><a target="_top" href="http://www.rockartdatabase.com/v2"><small>back to</small></a> Rock Art Database</h2>
			</div>

<!-- (1) info  -->
<?php
    if(isset($_GET['author_name'])) :
    $curauth = get_userdatabylogin($author_name);
    else :
    $curauth = get_userdata(intval($author));
    endif;
?>
<!-- Author Avatar Image -->
			<div style="padding-top: 36px;">			
				<table class="custom-table-style">
					<td class="custom-td-bg_blue" width="150px" height="150px">				
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?>
					</td>
<!--     color label  -->
					<td class="custom-td-bg_blue">
<!--     category and ID  -->
						<p class="custom_small-font">Profile</p>
<!--     title name  -->						
						<h2 class="custom_headingalign"><?php echo $curauth->nickname; ?></h2></br><?php echo $curauth->department; ?>		
<!--     Online Presence  -->						
						<p style="padding:5px 0px 0px 0px;"class="custom_small-font">Web</br><a class="lightbox" href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></p>
						<p style="padding:5px 0px 0px 0px;"class="custom_small-font">LinkedIn</br><a target="_blank" href="<?php echo $curauth->linkedin; ?>"><?php echo $curauth->linkedin; ?></a></p>
						<p style="padding:5px 0px 0px 0px;"class="custom_small-font">Academia</br><a target="_blank" href="<?php echo $curauth->academia; ?>"><?php echo $curauth->academia; ?></a></p>
						<p style="padding:5px 0px 0px 0px;"class="custom_small-font">Facebook</br><a target="_blank" href="<?php echo $curauth->facebook; ?>"><?php echo $curauth->facebook; ?></a></p>
						<p style="padding:5px 0px 0px 0px;"class="custom_small-font">Twitter</br><a target="_blank" href="<?php echo $curauth->twitter; ?>"><?php echo $curauth->twitter; ?></a></p>
						<p></p>
<!--     wti like / body content  -->						
						<div style="height: 21px; max-width: 437px; padding:0px 2px 5px 0px; font-size:14px; margin-left: -163px;">
							<?php if(function_exists('wp_ulike')) wp_ulike('get'); ?>					
						</div>
					</td>
				</table>
			</div>

<!-- (1) info description-->				
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_1"><span class="dashicons dashicons-admin-home" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span>Bio</label>
  			<div style="background-color:#eeeeee; padding:2px;">				
           				<table class="custom-table-style">
           					<tr>
								<td class="custom-td-bg_2">
									<p class="custom_small-font">												
										<?php echo $curauth->user_description; ?>																			
									</p>
								</td>
							</tr>
						</table>
			</div>
						
<!-- (2) Recent Comments  -->
		<label style="text-align:left; background-color:#282828; border: solid 1px #e0e0e0; padding: 10px 0px 2px 7px; color:#e0e0e0;" class="collapse" for="_9"><span class="dashicons dashicons-admin-comments" style="position: relative; top: -5px; left: 0px; z-index: 5;"></span>Feed</label>
  			<div style="background-color:#eeeeee; padding:2px;">
						<div>	
								<?php
								$author_email = get_the_author_meta( 'user_email' ); 

								$args = array(
									'author_email' => $author_email
									);
								$comments = get_comments($args);
								foreach($comments as $comment) :
									echo('<p style="background-color:#e0e0e0; padding: 7px; text-align:right; font-size:12px;"> Commented on <a href='. get_permalink($comment->comment_post_ID).'>' . get_the_title($comment->comment_post_ID) . '</a></p>' . '<div style="border-bottom: solid 1px black; padding: 2px 2px 20px 2px;">' . get_avatar( get_the_author_meta( 'ID' ), 44 ) . '<p style="font-size:14px; margin-left:50px;">' . $comment->comment_author . '</br>' . '<span style="font-size:12px;">' . $comment->comment_date . '</span>' . '</p><br />' . $comment->comment_content . '</div>');
								endforeach;
								?>
						</div>
			</div>							
	</div>


<!-- Authors Posts-->	
				<div style="width: 140px; height: 100vh; float: left; background-color: rgba(161,161,161, 0.3); overflow: scroll;">
					<div style="width: 140px; height: 36px; z-index: 10; position: fixed; background-color: #191e23; padding: 0px 0px 0px 0px; color: #e0e0e0;">
						<h2 style="padding: 8px;"><span class="dashicons dashicons-archive" style="position: relative; top:-5px; left: 0px; z-index: 5;"></span> Collection </h2>
					</div>
<!-- Author Posts-->
								<div class="custom-media-image">

    									<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    									$image = get_field('RAE_0248');
 										$url = $image['url'];
										$size_large = 'large';
										$size_small = 'thumbnail';
										$thumb = $image['sizes'][ $size_small ];
										$width = $image['sizes'][ $size_large . '-width' ];
										$height = $image['sizes'][ $size_large . '-height' ];
 										$width = $image['sizes'][ $size_large . '-width' ];
										$height = $image['sizes'][ $size_large . '-height' ]; ?>
    									
    										<div class="custom-div-bg_1">
    											<div id="media-gallery-background"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><img class="media-gallery" src="<?php echo $thumb; ?>"></a>
    											</div>
    											<p class="custom_small-font-nopadding"><?php the_category('&');?>: <?php the_title(); ?></p>
    											<div style="width:90px; height:30px; overflow:hidden;"><?php if(function_exists('wp_ulike')) wp_ulike('get'); ?></div>
    										</div>
    									<?php endwhile; else: ?>
    									<p class="custom_small-font-nopadding"><?php _e('No posts by this author.'); ?></p>
    									<?php endif; ?>
								</div>
													
				</div>
			</div>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>