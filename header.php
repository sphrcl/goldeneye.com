<?php session_start(); ?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  
  <link rel="shortcut icon" href="<? echo get_bloginfo("stylesheet_directory") ?>/images/favicon_logo.png" />

  <title>GoldenEye Hotel &amp; Resort</title>
  
  <meta name="keywords" content="GoldenEye Hotel & Resort, GoldenEye Hotel, GoldenEye Jamaica, Oracabessa, Island Outpost, Goldeneye Hotel, Goldeneye Resort, Goldeneye Jamaica Resort, Goldeneye Jamaica, Goldeneye in Jamaica, Golden Eye, Chris Blackwell, Chris Blackwell Hotels, Chris Blackwell Jamaica, Ian Fleming, James Bond, island resort, luxury resort Jamaica, Jamaica luxury resort, Jamaica villa, beach cottage, spa, beach villas, Pantrepant, Island Records, Jamaica, Caribbean, Tropical, Beach, Accommodations, Travel, swimming, snorkeling, fishing, jet ski, natural, vacation, holiday, Goldeneye Jamaica Rates, Goldeneye Oracabessa, Goldeneye Hotel Jamaica, Ian Fleming House, Jamaican Spa Hotel, Jamaican Resorts, Blackwell Rum, Jamaica Island Resort, Jamaica Private Resort, Jamaica Destination Wedding, Jamaica Honeymoon, Unique Private Villa Jamaica, Casino Royale, Live and Let Die, From Russia with Love, Goldfinger, For Your Eyes Only, You Only Live Twice, The Man with the Golden Gun, Diamonds are Forever, Octopussy, 007, Bond 007, Quantum of Solace, Dr. No, Bob Marley, Ian Fleming Jamaica, Ian Fleming resort, Island Outpost resort, eco resort, eco resort Jamaica, luxury eco resort, Jamaica hotel development, private residences Jamaica, Goldeneye development, Goldeneye cottage, Chris Blackwell resort, local community, lagoon, Jamaica coral reef, glamorous getaway, tropical getaway Jamaica, Jamaica real estate, Magnificent 11, Noel Coward, Fleming villa, private beach Jamaica, vacation home, Royal Palm, James Bond Beach, Firefly, James Bond Center, tree planting, Jamaican rum, Ann Hodges, Port Maria, Bond Beach, royal hut, Palm Pictures, Goldeneye Community Network, Goldeneye garden, St. Mary, Jamaican holiday, Blanche Blackwell, Goldeneye reopening, Chukka Cove, Jamaican retreat, island retreat, luxury tropical retreat, famous tropical resort, glamorous beach, luxury island, family vacation, child friendly, swimming pool, lagoon, ocean front, beachfront, on the beach, affordable, highly rated, pet friendly resort" />
  <meta name="author" content="Cappen">
  <meta name="language" content="en">

   <script src="<? echo get_bloginfo("stylesheet_directory") ?>/js/libs/modernizr-2.0.6.min.js"></script>
  <script src="<? echo get_bloginfo("stylesheet_directory") ?>/js/utils.js"></script>
  
  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
  <link rel="stylesheet" href="<?php echo get_bloginfo("stylesheet_directory") ?>/css/jquery.jscrollpane.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo("stylesheet_directory") ?>/css/colorbox.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo("stylesheet_directory") ?>/css/responsiveslides.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo("stylesheet_directory") ?>/font/stylesheet.css">
  <!-- end CSS-->

 <!-- style -->
 <style>

	/* sprite */
	header h1, #topo span.bt a, footer .siteMap ul span {
		background: url(http://www.goldeneye.com/wp-content/uploads/sites/15/2015/06/sprite_new_new1.png) no-repeat;
	}

	footer .siteMap ul.fifth span {
	  width: 110px;
	  height: 55px;
	  background-position: -480px -25px;
	}

 </style>
  
  <script type="text/javascript">
    (function() {
      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
      po.src = 'https://apis.google.com/js/plusone.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
  </script>
  
  <?php wp_head(); ?>
</head>

<body>
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=236277949753531";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>

	
	<div id="container" <? if(is_home()){ echo "class='home'"; } else{} ?> >
	  
    <header class="clearfix">
		
		<? 
		
			$active = get_page_name();
			
			if($active == 'fleming-villa' || $active == 'lagoon-cottages' || $active == 'one-bedroom-villas' || $active == 'two-bedroom-villas' || $active == 'villa1'){ 
				$active_sub = $active;
				$active = 'stay';
				
			}
			
			if($active == 'activities' || $active == 'kids' || $active == 'excursions' || $active == 'firefly'){ 
				$active_sub = $active;
				$active = 'play';
				
			}
			
			if($active == 'fieldspa-exclusive'){ 
				$active_sub = $active;
				$active = 'spa';
				
			}
			
		
		?>
		
		<h1><a href="<? echo get_bloginfo("url") ?>" title="Home Page"></a></h1>
		
		<nav>
			<a href="<? echo get_bloginfo("url") ?>/stay/fleming-villa" title="Stay" <? echo ($active == 'stay')?'class="active"':null; ?>>Stay</a>
			<a href="<? echo get_bloginfo("url") ?>/eat" title="Eat" <? echo ($active == 'eat')?'class="active"':null; ?>>Eat</a>
			<a href="<? echo get_bloginfo("url") ?>/play/activities" title="Play" <? echo ($active == 'play')?'class="active"':null; ?>>Play</a>
			<a href="<? echo get_bloginfo("url") ?>/spa" title="Spa" <? echo ($active == 'spa')?'class="active"':null; ?> >Spa</a>
		</nav>
		
		<span class="tree"></span>
		
		<div class="reserv">
			<a href="https://gc.synxis.com/rez.aspx?Hotel=19292&Chain=7576" target="_blank">Reservations »</a> 
			<!-- <a href="https://www.goldeneye.com/booking/">Reservations »</a> -->

			<div class="fones">
				<!--span class="nOne">1-800-OUTPOST</span> 
				<span>GoldenEye<br/> 876-6229-007</span-->
			</div>
		</div>
		
		
    </header>

		<div class="breadcrumbs">
		    <?php 
		    if(!is_home()){
			    if(function_exists('bcn_display'))
			    {
			        bcn_display();
			    }
		    }?>
		</div>
