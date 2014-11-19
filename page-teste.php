<?php get_header();

?>


    <div id="main" role="main" class="clearfix stay">
		
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			
			
			<?
			
			include_once 'BasicFlickr.php';
			$fkr = new BasicFlickr();
			$fkr->userID = '29100410@N08';
			$fkr->apikey = '627e558a6cf112a04ce2cc09d541e53f';
			
			$recentes = $fkr->get_recentPhotos();
			$recentes = $recentes['photos']['photo'];
			
			?>
			
			
			<? for ($i=0;$i<sizeof($recentes);$i++){ ?>
				
			<? $foto = "http://farm" . $recentes[$i]['farm'] . ".staticflickr.com/" . $recentes[$i]['server'] . "/" . $recentes[$i]['id'] . "_" . $recentes[$i]['secret']; ?>
			
			<a class="fancybox" href="<?echo $foto?>_z.jpg" rel="" target="_blank">
			<img src="<?echo $foto?>_s.jpg" style="float: left; margin: 5px 5px 5px 5px;"/>
			</a>
			
			<? } ?>
			
			
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	</div>
		
<?php get_footer(); ?>

<script>
/*
$(document).ready(function(){
	
	var urlJson = "http://localhost/repositorio-wp-goldeneye/wp-content/themes/goldeneye/BasicFlickr_json.php?";
	
	$.get(urlJson + 'cmd=photos', function(data) {
		
		alert(data);

	 });
});*/
</script>
