
	//---------------------------------------------------------------------------//
	//	PULL INSTAGRAM
	//---------------------------------------------------------------------------//

	$(document).ready(function() {
	var accesstoken = "691270583.f1e587f.57a7442855894df0bb437cc3a43205e1",
		userid = 691270583,
		count = 21,
		url = "https://api.instagram.com/v1/users/" + userid + "/media/recent/?access_token=" + accesstoken + "&count=" + count + "";
		
		$.ajax({
			type: "GET",
			dataType: "jsonp",
			cache: false,
			url: url,
			success: function(data) {
				for (var i = 0; i < count; i++) {
					$(".flexslider ul").append("<a target='_blank' href='" + data.data[i].link + "'><img class='test' src='" + data.data[i].images.low_resolution.url + "' /></a>");
				}
			},
			complete: function() {
				var a = $('.flexslider ul a');
				
				for(var s = 0; s < a.length; s+=3) {
					a.slice(s, s+3).wrapAll("<li></li>");
				}
				
				$(".rslides").responsiveSlides({
					auto: true,
					pager: true,
					timeout: 6000,
					speed: 500,
					namespace: "centered-btns"
				});
			},
		});
	});