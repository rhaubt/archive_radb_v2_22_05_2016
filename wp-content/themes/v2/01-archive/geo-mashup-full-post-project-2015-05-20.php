<?php
/**
 * This is the default template for full post display of a clicked marker
 * in a Geo Mashup map. 
 *
 * Don't modify this file! It will be overwritten by upgrades.
 *
 * Instead, copy this file to "full-post.php" in your geo-mashup-custom directory,
 * or "geo-mashup-full-post.php" in your theme directory. Those files will
 * take precedence over this one.
 *
 * @package GeoMashup
 */
?>

<head>
<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Info Window</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="plugin_geomashup-full-post/plugin_geomashup-full-post.css" />

<style>
.geomashup_full_post {
	width: 400px;
	left: 0px;
	top: 0px;
	padding: 0px 0px 0px 0px;
	margin: 0px 0px 0px 0px;

}
.geomashup-iframe {
	width: 100%;
	height: 300px;
	background-color: #e0e0e0;
	border: 0px;
}

td.custom-td-bg_green {
    border: 0px solid #E0E0E0;
    background-color: #47B56C;
    max-width: 100%;
    padding: 7px;
    line-height: 1.5;
    text-align: justify;
}

.ac-container{
	width: 100%;
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	text-align: left;
}
.ac-container label{
	font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
	font-style: normal;
	padding: 5px 20px;
	position: relative;
	z-index: 20;
	display: block;
	height: 30px;
	cursor: pointer;
	color: #e0e0e0;
	line-height: 33px;
	font-size: 18px;
	background: #282828;
	box-shadow: 
		0px 0px 0px 1px rgba(155,155,155,0.3), 
		0px 0px 0px 0px rgba(255,255,255,0.9) inset, 
		0px 2px 2px rgba(0,0,0,0.1);
}
.ac-container label:hover{
	background: #e0e0e0;
	color: #282828;
}
.ac-container input:checked + label,
.ac-container input:checked + label:hover{
	background: #282828;
	color: #e0e0e0;
	box-shadow: 
		0px 0px 0px 1px rgba(155,155,155,0.3), 
		0px 2px 2px rgba(0,0,0,0.1);
}
.ac-container label:hover:after,
.ac-container input:checked + label:hover:after{
	content: '';
	position: absolute;
	width: 24px;
	height: 24px;
	right: 13px;
	top: 7px;
	background: transparent url(../plugin_geomashup-full-post/images/arrow_down.png) no-repeat center center;	
}
.ac-container input:checked + label:hover:after{
	background-image: url(../images/arrow_up.png);
}
.ac-container input{
	display: none;
}
.ac-container article{
	font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
	background: #e0e0e0;
	margin-top: -1px;
	overflow: hidden;
	height: 0px;
	position: relative;
	z-index: 10;
	-webkit-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
	-moz-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
	-o-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
	-ms-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
	transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
}
.ac-container article p{
	color: #000000;
	line-height: 20px;
	font-size: 12px;
	padding: 10px 20px 10px 20px;
	text-align: justify;
}
.ac-container input:checked ~ article{
	-webkit-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	-moz-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	-o-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	-ms-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3);
}
.ac-container input:checked ~ article.ac-small{
	height: 100%;
}
.ac-container input:checked ~ article.ac-medium{
	height: 100%;
}
.ac-container input:checked ~ article.ac-large{
	height: 100%;
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

h2.custom_headingalign {
	text-align:left;
}

div.custom-div-bg_1 {
	background-color:#eeeeee;
	box-shadow: 5px 5px 2px #888888;
    width: 130px;
    height: 240px;
    padding: 5px;
    margin-bottom: 1em;
    margin-right: 1.9em;
    cursor: pointer;
    line-height: 15px;
    box-shadow: 10px 10px 5px #888888;
}

div.custom-div-bg_2 {
	background-color: #e0e0e0;
	width:280px;
}
</style>

<style>
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
	max-width: 130px;
	max-height: 80px;
	text-align:center;
}
#media-gallery-background {
	width: 130px;
	height: 80px;
	background-color: black;
	vertical-align:middle;
	text-align: center;
}
.cb {clear:both;}
</style>

</head>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

<!-- content -->		
		 <div class="geomashup_full_post">
			<section class="ac-container">

<!-- search -->
				<div>
					<input id="ac-1" name="accordion-1" type="checkbox" />
					<label for="ac-1">Search &#128269;</label>
					<article class="ac-small">
						<div class="custom-search-content">
							<?php if(function_exists('wp_custom_fields_search')) wp_custom_fields_search('preset-1'); ?></br>
						</div>
					</article>
				</div>

<!-- current post details -->	
				<table class="custom-table-style">
					<td class="custom-td-bg_green">
					<p class="custom_small-font"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?> | ID: <a target="_blank" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
					<h2 class="custom_headingalign"><?php the_field('RAE_0003') ?></h2></br>
					<p class="custom_small-font">Condition: <?php the_field('RAE_0082'); ?> | <a target="_blank" href="<?php the_field('RAE_0081') ?>">visit official website</a></p></td>
				</table>

<!-- info -->				
				<div>
					<input id="ac-2" name="accordion-1" type="checkbox" />
					<label for="ac-2">Info</label>
					<article class="ac-medium">
           						<table class="custom-table-style">
           							<tr>
										<td class="custom-td-bg_2">
											<p class="custom_small-font">
												<div class="custom-thumbnail"><?php the_field('RAE_0248'); ?></div>
												<?php the_field('RAE_0006'); ?>
											</p>	
										</td>
									</tr>
								</table>
					</article>
				</div>

<!-- classification archaeology -->
				<div>
					<input id="ac-3" name="accordion-1" type="checkbox" />
					<label for="ac-3">Classification</label>
					<article class="ac-large">
           						<table class="custom-table-style">
           							<tr>
										<td class="custom-td-bg_2" colspan="2"><p class="custom_small-font">This Entry contains a total estimate of all archived data within this collection. The data represented in this classification section is indicative only. For more detailed information please contact the assigned archive contact person.</p></br>
									</tr>
									<tr>
										<td class="custom-td-bg_1" colspan="2"><p class="custom_small-font"><strong>Archaeology</strong></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Site Types</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0036'); ?> <?php the_field('RAE_0037'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Deposits</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0038'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Comments</strong></br></p><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0039'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Surface</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0040'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Camp Site</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0041'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_1" colspan="2"><p class="custom_small-font"><strong>Rock Art</strong></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Classification</strong></p></br><p class="custom_small-font"><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0042'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Style</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0055'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Color</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0044'); ?> <?php the_field('RAE_0045'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Estimate Numbers</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font">Total: <?php the_field('RAE_0043'); ?></br>Painting: <?php the_field('RAE_0106'); ?></br>Drawing: <?php the_field('RAE_0107'); ?></br>Print: <?php the_field('RAE_0108'); ?></br>Stencil: <?php the_field('RAE_0109'); ?></br>Beeswax: <?php the_field('RAE_0110'); ?></br>Petroglyph: <?php the_field('RAE_0111'); ?></p></br> </td>
									</tr>
									<tr>
										<td class="custom-td-bg_1" colspan="2"><p class="custom_small-font"><strong>Subject Matter</strong></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>People</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0046'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Figures</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0047'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Mammal</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0048'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Bird</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0051'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Fish</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0050'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Reptile</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0049'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Material Culture</strong></p></br><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0053'); ?></p></td>
									</tr>
									<tr>
										<td class="custom-td-bg_2"><p class="custom_small-font"><strong>Contact Art</strong></br></p><td class="custom-td-bg_2"><p class="custom_small-font"><?php the_field('RAE_0054'); ?></p></td>
									</tr>
           						</table>
					</article>
				</div>
				
<!-- images -->
				<div>
					<input id="ac-4" name="accordion-1" type="checkbox" />
					<label for="ac-4">Images (<?php $count = count(get_field('RAE_0086_r')); ?><?php echo $count ?>)</label>
					<article class="ac-large">
           							<p>images</p>
           						<div class="custom-media-image">
           						<table class="custom-table-style">
           							<tr>
           								
										<?php if (get_field('RAE_0086_r')): ?><?php $counter = 1; ?>
										
															<?php while(has_sub_field('RAE_0086_r')): ?>
															<td class="custom-td-bg_2">
																<div class="custom-div-bg_1">
																	<p class="custom_small-font">[<?php echo $counter; ?>]</p>
																	<div id="media-gallery-background"><a target="iframe" href="http://www.youtube.com/embed/<?php the_sub_field('RAE_0095')?>"><img class="media-gallery" src="http://img.youtube.com/vi/<?php the_sub_field('RAE_0095')?>/sddefault.jpg"></a>
																	</div>
																	</br>
																	<p class="custom_small-font"> <?php the_sub_field('RAE_0098')?></p>
																</div><?php $counter++; ?>
															</td>									
										<?php endwhile; ?>
										<?php endif; ?>
				
									</tr>
								</table>
			
					</article>
				</div>

<!-- videos -->
				<div>
					<input id="ac-5" name="accordion-1" type="checkbox" />
					<label for="ac-5">Videos (<?php $count = count(get_field('RAE_0095_r')); ?><?php echo $count ?>)</label>
					<article class="ac-large">								
           						<div class="custom-media-image">
           						<table class="custom-table-style">
           							<tr>
           								
										<?php if (get_field('RAE_0095_r')): ?><?php $counter = 1; ?>
										
															<?php while(has_sub_field('RAE_0095_r')): ?>
															<td class="custom-td-bg_2">
																<div class="custom-div-bg_1">
																	<p class="custom_small-font">[<?php echo $counter; ?>]</p>
																	<div id="media-gallery-background"><a target="iframe" href="http://www.youtube.com/embed/<?php the_sub_field('RAE_0095')?>"><img class="media-gallery" src="http://img.youtube.com/vi/<?php the_sub_field('RAE_0095')?>/sddefault.jpg"></a>
																	</div>
																	</br>
																	<p class="custom_small-font"> <?php the_sub_field('RAE_0096')?></p>
																</div><?php $counter++; ?>
															</td>									
										<?php endwhile; ?>
										<?php endif; ?>
				
									</tr>
								</table>
					</article>
				</div>
				
<!-- 3D -->
				<div>
					<input id="ac-6" name="accordion-1" type="checkbox" />
					<label for="ac-6">3D (<?php $count = count(get_field('RAE_0140_r')); ?><?php echo $count ?>)</label>
					<article class="ac-large">
           							<div class="custom-media-image">
           								<table class="custom-table-style">
           									<tr>
           										<td class="custom-td-bg_2">
													<div class="custom-div-bg_1 style="z-index: 1;">
														<p class="custom_small-font">Google Earth</p>
														<div id="media-gallery-background"><a target="iframe" href="http://rockartdatabase.com/radb/wp-content/themes/rockartdatabase_main/plugin_google_earth/index.html">
														<img class="media-gallery" src="http://www.rockartdatabase.com/radb/wp-content/themes/rockartdatabase_main/wp-content/images/gallery-earth.png" /></a>
														</div>
														</br>
														<p class="custom_small-font">Google Earth</p>
													</div>
												</td>
												<?php if (get_field('RAE_0140_r')): ?><?php $counter = 1; ?>										
												<?php while(has_sub_field('RAE_0140_r')): ?>
												<td class="custom-td-bg_2">
													<div class="custom-div-bg_1 style="z-index: 1;">
														<p class="custom_small-font">[<?php echo $counter; ?>] <?php the_sub_field('RAE_0140')?></p>
														<div id="media-gallery-background"><a target="iframe" href="<?php the_sub_field('RAE_0142') ?>">
														<img class="media-gallery" src="<?php the_sub_field('RAE_0143') ?>" /></a>
														</div>
														</br>
														<p class="custom_small-font"><?php the_sub_field('RAE_0141')?></p>
													</div>
													<?php $counter++; ?>
												</td>																													
												<?php endwhile; ?>
												<?php endif; ?>				
											</tr>
										</table>
					</article>
				</div>

<!-- references -->
				<div>
					<input id="ac-7" name="accordion-1" type="checkbox" />
					<label for="ac-7">References</label>
					<article class="ac-large">
           						<table class="custom-table-style">
           							<tr>
										<td colspan="3" class="custom-td-bg_2"><p class="custom_small-font"><strong>Newsletter</strong></p>
											<?php if (get_field('RAE_0084_r')): ?>
												<div>
												<?php while(has_sub_field('RAE_0084_r')): ?>
													<div>
													<p class="custom_small-font">• <?php the_sub_field('RAE_0084')?>, (<?php the_sub_field('RAE_0116')?>), <a target="_blank "href="<?php the_sub_field('RAE_0099')?>">link</a></p>
													</div>
												</div>
												<?php endwhile; ?>
											<?php endif; ?>
										</td>
									</tr>
									<tr>
										<td colspan="3" class="custom-td-bg_1"><p class="custom_small-font"><strong>Conferences</strong></p>
											<?php if (get_field('RAE_0085_r')): ?>
												<div>
												<?php while(has_sub_field('RAE_0085_r')): ?>
													<div>
													<p class="custom_small-font">• <?php the_sub_field('RAE_0085')?>, (<?php the_sub_field('RAE_0117')?>)</p>
													</div>
												</div>
												<?php endwhile; ?>
											<?php endif; ?>
										</td>
									</tr>
									<tr>
										<td colspan="3" class="custom-td-bg_2"><p class="custom_small-font"><strong>References</strong></p>
											<?php if (get_field('RAE_0089_r')): ?><?php $counter = 1; ?>
												<div>
												<?php while(has_sub_field('RAE_0089_r')): ?>
													<div>
													<p class="custom_small-font"><strong>[<?php echo $counter; ?>]</strong> <?php the_sub_field('RAE_0089')?></p>
													</div><?php $counter++; ?>
												</div>
												<?php endwhile; ?>
											<?php endif; ?>
										</td>
									</tr>	
           						</table>
					</article>
				</div>

<!-- comments -->
				<div>
					<input id="ac-8" name="accordion-1" type="checkbox" />
					<label for="ac-8">Comments</label>
					<article class="ac-large">
						<p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
					</article>
				</div>
			</section>
        </div>
    </div>

		
		<?php endif; ?>

		<div class="storycontent">
			<?php the_content(); ?>
		</div>

	<?php endwhile; ?>

<?php else : ?>

	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>
