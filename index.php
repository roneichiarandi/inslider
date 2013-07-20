<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/inslider.css" media="all">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.inslider.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
	    	loader();
		    $("#slide img:eq(0)").addClass("ativo").show();
		    var texto = $(".ativo").attr("data-description");
		    $("#slide").prepend("<p>" + texto + "</p>");
		    setInterval(slide, 1000);
		    function slide(){
		    	if($(".ativo").next().size()){
		    		$(".ativo").fadeOut().removeClass("ativo").next().fadeIn().addClass("ativo");
		    		var texto = $(".ativo").attr("data-description");
		    		$("#slide p").hide().html(texto).delay(100).fadeIn();
		    	}else {
		    		$(".ativo").fadeOut().removeClass("ativo");
		    		$("#slide img:eq(0)").fadeIn().addClass("ativo");
		    		var texto = $(".ativo").attr("data-description");
		    		$("#slide p").hide().html(texto).delay(100).fadeIn();
		    		limpar();
		    	}
		    }

		    function loader(){
		    	instagram.init();
		    }

		    function limpar(){
		    	$("#slide").empty();
		    	$("#slide").append("<img src='media/1.png' data-description='#arraiaco' />");
		    	$("#slide img:eq(0)").addClass("ativo").show();
			    var texto = $(".ativo").attr("data-description");
			    $("#slide").prepend("<p>" + texto + "</p>");
			    loader();
		    }
		})
    </script>
</head>
<body>
		<div id="logo"></div>
	<figure id="slide">
		<img src="media/1.png" data-description="#arraiaco" />
	</figure>
</body>
</html>