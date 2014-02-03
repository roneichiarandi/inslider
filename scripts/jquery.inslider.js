var clientID = '[instragram-client-id]';
var accessToken = '[instagram-access-token]';
var tagName = 'arraiaco';
var limit = 999; //Limite máximo de fotos
var setSize = "standard";

var instagram = function() {
	return {
		init: function() {
			instagram.loadImages();
		},
		loadImages: function() {
			var getImagesURL = 'https://api.instagram.com/v1/tags/'+tagName+'/media/recent?client_id='+ clientID +'&access_token='+ accessToken +'';
			$.ajax({
				type: "GET",
				dataType: "jsonp",
				cache: false,
				url: getImagesURL,
				success: function(data) {
					for(var i = 0; i < limit ; i+=1) {
						if(setSize == "small") {
							var size = data.data[i].images.thumbnail.url;
						} else if(setSize == "medium") {
							var size = data.data[i].images.low_resolution.url;
						} else {
							var size = data.data[i].images.standard_resolution.url;
							var username = '@' +data.data[i].user.username;
						}
						$("#slide").append("<img src='" + size +"' data-description='"+ username+ "'/>");
					}
				}
			});
		}
	}
}();