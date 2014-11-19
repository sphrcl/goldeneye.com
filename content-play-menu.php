<aside class="left">
	<? $active_sub = get_page_name();?>
	
	<a href="<? echo get_bloginfo("url") ?>/play/activities" <? echo ($active_sub == 'activities' || $active_sub == 'play')?'class="active"':null; ?>>Activities <span>»</span></a>
	<a href="<? echo get_bloginfo("url") ?>/play/kids" <? echo ($active_sub == 'kids')?'class="active"':null; ?>>Kids <span>»</span></a>
	<a href="<? echo get_bloginfo("url") ?>/play/excursions" <? echo ($active_sub == 'excursions')?'class="active"':null; ?>>Excursions <span>»</span></a>
	<a href="<? echo get_bloginfo("url") ?>/play/firefly" <? echo ($active_sub == 'firefly')?'class="active"':null; ?>>Firefly <span>»</span></a>
</aside>
		