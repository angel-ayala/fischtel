<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
	<meta name="keywords" content="Blog" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="Blog" />
	<meta name="og:description" content="" />
	<meta name="og:image" content="" />
	<meta name="og:type" content="article" />
	<meta name="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20171108105050" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20171116120930" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1510878104" rel="stylesheet" type="text/css" />
	<link href="css/blog.css?ts=1510878104" rel="stylesheet" type="text/css" />
	{{ga_code}}
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body><div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_cs_row_39" class="wb-cs-row"><div id="wb_cs_col_40" class="wb-cs-col"><div id="wb_cs_row_41" class="wb-cs-row"><div id="wb_cs_col_42" class="wb-cs-col"><div id="wb_element_instance24" class="wb_element wb_element_picture wb-cs-elem"><a href="Home/"><img alt="gallery/logo_ring" src="gallery_gen/dbf81e0c0cb3649a0bbf276c108ca7e8_64x64.png"></a></div></div><div id="wb_cs_col_43" class="wb-cs-col"><div id="wb_element_instance25" class="wb_element wb-cs-elem" style=" line-height: normal;"><h4 class="wb-stl-pagetitle"><a href="Home/">F</a>ischTel</h4>
</div></div><div class="wb-cs-clear"></div></div></div><div id="wb_cs_col_44" class="wb-cs-col wb-cs-right"><div id="wb_element_instance23" class="wb_element wb-menu wb-menu-mobile wb-cs-elem"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="https://fischtel.000webhostapp.com/login/index.php" target="_self" title="Usuarios">Usuarios</a></li><li><a href="https://fischtel.000webhostapp.com/login/signup.php" target="_self" title="Registrate">Registrate</a></li></ul><div class="clearfix"></div></div></div><div class="wb-cs-clear"></div></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance27" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance27");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance27").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 134px;">
	
<div id="wb_cs_row_37_wrp" class="wb_cont_inner_rel"><div id="wb_cs_row_37" class="wb-cs-row"><div id="wb_cs_col_38" class="wb-cs-col"><div id="wb_element_instance26" class="wb_element wb-cs-elem" style=" line-height: normal;"><p class="wb-stl-footer"> <a href="http://fischtel.000webhostapp.com">fischtel.000webhostapp.com</a></p>
</div></div><div class="wb-cs-clear"></div></div><div class="wb-cs-clear"></div></div><div id="wb_element_instance28" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer, #wb_footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>
