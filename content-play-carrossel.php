<?		 
	$active_sub = get_page_name();
	
	switch($active_sub){
		
		case 'activities':
			$caption = 'Stand-up paddleboarding';
			break;
		
		case 'kids':
			$caption = 'Kids play in the lagoon';
			break;
			
		case 'excursions':
			$caption = 'Glass bottom boat for viewing marine life';
			break;
			
		case 'firefly':
			$caption = 'The incomparable view from Firefly';
			break;
			
		case 'play':
			$caption = 'Stand-up paddleboarding';
			break;
	}
?>

		<figure class="playR borderRadius">
		 <? if($active_sub == 'activities'){?>
			<img class="item" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/play1.jpg" alt="Golden Eye" class="borderRadius" />
			<figcaption><?echo $caption?></figcaption>
			
		<? } else if($active_sub == 'kids'){?>
			<img class="item" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/play3.jpg" alt="Golden Eye" class="borderRadius" />
			<figcaption><?echo $caption?></figcaption>
		
		<? } else if($active_sub == 'excursions'){?>
			<img class="item" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/play5.jpg" alt="Golden Eye" class="borderRadius" />
			<figcaption><?echo $caption?></figcaption>
		
		<? } else if($active_sub == 'firefly'){?>
			<img class="item" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/play7.jpg" alt="Golden Eye" class="borderRadius" />
			<figcaption><?echo $caption?></figcaption>

		<? } else if($active_sub == 'play'){?>
			<img class="item" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/play1.jpg" alt="Golden Eye" class="borderRadius" />
			<figcaption><?echo $caption?></figcaption>


		<? } else {};?>
		</figure>
		