<? get_header(); 

$_page = get_page(get_page_id());

	// $id = get_the_ID();
	// $post = get_post($id);
	// $categories = get_the_category($id);
	// $author = get_userdata($post->post_author);
	// $metas = getMetas($id) ;
	// $postImages = getPostImages($post->post_content,'img','src');
	// $thumb = get_the_post_thumbnail($id,'press-thumb');
	// $attachs = getAttachments($id , "application");
	// 	
	// $url_next_post = home_url() . '/' . get_adjacent_post(false,'',false)->post_name;
	// $url_prev_post = home_url() . '/' . get_adjacent_post(false,'',true)->post_name;

	// trace($post);
	
	
	$presspost_args = array( 'cat' => '11' , 'numberposts' => 500 , 'orderby'=>'date', 'order' => 'DESC');
	$presspost_lastposts = get_posts( $presspost_args );
?>


    <div id="main" role="main" class="clearfix press">
		
		<div class="columns clearfix">
		
			<aside class="left">
				<h2>Press &amp; Awards</h2>
				<div id="press-list" class="scroll-pane">
					<ul>
					<?php
						$idFirst = $presspost_lastposts[0]->ID;
						$jsonPress = '{';

						foreach($presspost_lastposts as $post) : setup_postdata($post);

							$title = $post->post_title;
							$id = $post->ID ;
							$metas = getMetas($id);
							$subtitle = $metas['subtitle'];
							$date = $metas['date'];
							$thumb = get_the_post_thumbnail($id,'press-thumb');
							$caption = getPostImages($thumb,'img','src');
							
							if($caption[0]['alt'] != $caption[0]['title']){
								$caption = $caption[0]['alt'];
							}
							else{
								$caption = "";
							}
							
							$attachs = getAttachments($id , "application");
							$attachs = $attachs[0]['url'];
							$jsonPress .= '"'.$id.'":{
									"img" 		:"<div id=\"press-img\">'.str_replace('"', '\"', $thumb).'</div>",
									"caption" 	:"'.$caption.'",		
									"attachs" 	:"'.$attachs.'"'		
								.'},';


					?>
							<li>
								<a href="javascript:;" class="postsPress" id="<?php echo $id ?>" title="<?php echo $title ?>">
									<span class="rosa"><?php echo $title ?></span>
									<?php echo $subtitle ?> <br/>
									<time><?php echo $date ?></time>
								</a>
							</li>
					<?php endforeach; 
							$jsonPress .= '}';
							echo '<script>var jsonPress = '.$jsonPress.'; </script>';
					?>
					</ul>
				</div>
			</aside>	

			<article class="content left">
				<figure id="imgPress" class="clearfix">
					<div id="press-img">
						<?php 
							$thumb = get_the_post_thumbnail($idFirst,'press-thumb');
							$caption = getPostImages($thumb,'img','src');
							$attachs = getAttachments($idFirst , "application");
							$attachs = $attachs[0]['url'];
							echo $thumb; 
							
							if($caption[0]['alt'] != $caption[0]['title']){
								$caption = $caption[0]['alt'];
							}
							else{
								$caption = "";
							}
							
						?>
					</div>
					<figcaption>
						<span class="left"><em><?php echo $caption;?></em></span>
						<?php if($attachs != null){ ?>
							<span class="right"><a href="<?php echo $attachs;?>" title="Download PDF" target="_blank">Download PDF</a></span>
						<?php }?>
					</figcaption>
				</figure>

				<div class="inquires left">
					<h2>For Press Inquiries</h2>

					<p><span class="darkBlue">US PR: <br/><a href="mailto:marshall@alicemarshall.com">marshall@alicemarshall.com</a></span><br/>
						Alice Marshall<br/>
						Alice Marshall Public Relations<br/>
						126 Fifth Avenue, Suite 801<br/>
						New York, NY 10011<br/>
						Tel: +1 (212) 861 4031<br/>
						<a href="http://www.alicemarshall.com" title="Alice Marshall Public Relations" target="_blank">www.alicemarshall.com</a></p>

					<p><span class="darkBlue">UK & Europe PR: <br/><a href="mailto:louise.swanne@rivapr.co.uk">louise.swanne@rivapr.co.uk</a></span><br/>
						Louise Swanne<br/>
						Riva Public Relations<br/>
						9 Lancashire Court<br/>
						New Bond Street<br/>
						Mayfair<br/>
						London W1S 1EY<br/>
						Tel: +44 (0)20 7629 2899<br/>
						<a href="http://www.rivapr.co.uk" title="Riva Public Relations" target="_blank">www.rivapr.co.uk</a></p>
				</div>

				<div class="awards left">
					<h2>Awards</h2>

	<div>
						<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/awards10.png" alt="Awards" />
						<div class="txt">
							<p class="darkBlue">“A Hotel Life Awards”</p>
							<p>Hotel most likely to change your life, 2014</p>
						</div>
					</div>	
<div>
						<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/awards13.png" alt="Awards" />
						<div class="txt">
							<p class="darkBlue">“Virtuoso”</p>
							<p>Best of the Best, 2014</p>
						</div>
					</div>

						
		<div>
						<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/awards11.png" alt="Awards" />
						<div class="txt">
							<p class="darkBlue">“Cigar Aficionado”</p>
							<p>Best of the Caribbean, 2012</p>
						</div>
					</div>		
	
	<div>
						<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/awards12.png" alt="Awards" />
						<div class="txt">
							<p class="darkBlue">“Trip Advisor”</p>
							<p>Certificate of Excellence Award, 2012-2014</p>
						</div>
					</div>			
		
		<div>
						<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/awards5.jpg" alt="Awards" />
						<div class="txt">
							<p class="darkBlue">“It List: Best New Hotels”</p>
							<p>Travel and Leisure, 2011</p>
						</div>
					</div>
					
					<div>
						<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/awards6.jpg" alt="Awards" />
						<div class="txt">
							<p class="darkBlue">“Hot List: Best New Hotels &amp; Resorts of 2011”</p>
							<p>Conde Nast Traveler, 2011</p>
						</div>
					</div>	
					
					<div>
						<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/awards7.jpg" alt="Awards" />
						<div class="txt">
							<p class="darkBlue">“2010 Smart Luxury Award Winner”</p>
							<p>Smart Luxury Travel, 2011</p>
						</div>
					</div>
					
					<div>
						<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/awards1.jpg" alt="Awards" />
						<div class="txt">
							<p class="darkBlue">Ultimate Address</p>
							<p>Island Destinations, 2011</p>
						</div>
					</div>
					<div>
						<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/awards3.jpg" alt="Awards" />
						<div class="txt">
							<p class="darkBlue">Caribbean’s Leading Boutique Resort</p>
							<p>World Travel Awards, 2011-2014</p>
						</div>
					</div>
					<div>
						<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/awards2.jpg" alt="Awards" />
						<div class="txt">
							<p class="darkBlue">Caribbean’s Number One Boutique Hotel</dt>
							<p>World Travel Awards, 2011</p>
						</div>
					</div>
					
					<div>
						<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/awards3.jpg" alt="Awards" />
						<div class="txt">
							<p class="darkBlue">Caribbean’s Leading Villa</p>
							<p>World Travel Awards, 2011</p>
						</div>
					</div>	

					<div>
						<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/awards4.jpg" alt="Awards" />
						<div class="txt">
							<p class="darkBlue">Jamaica’s Leading Villa</p>
							<p>World Travel Awards, 2010</p>
						</div>
					</div>	
						
				</div>


			</article>	
		 </div>	<!-- columns -->

		
	</div>
		
<?php get_footer(); ?>