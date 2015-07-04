<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7 ]><html dir="ltr" lang="en-US" class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html dir="ltr" lang="en-US" class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en-US" class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en-US" class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en-US">
<!--<![endif]-->
<head>
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Liputan Khusus Seleksi Nasional Masuk Perguruan Tinggi Negeri">
<meta name="author" content="Kompas Cyber Media">
<title>Banner Kompas Jelajah Sepeda</title>
<style>
	html,body, ul, li{margin:0;padding:0;}
	.clearit { clear:both; }
	.jelajah-wrapper{background:url(images/bn300x250.jpg) no-repeat scroll 0 0 #fff;height:300px;width:300px;overflow:hidden;}
	.jelajah-body { padding:76px 0 0 0;}
	.jelajah-body ul{background:rgba(0,0,0, 0.8);margin:10px;border-radius:6px;-moz-border-radius:6px;-webkit-border-radius:6px;-o-border-radius:6px; height:auto; padding:0px 0 10px 0;}
	.jelajah-body li {list-style:none;margin:0 10px;padding:10px 0 0px 0; display: inline-table; width:260px; height:63px;}
	.jelajah-body li a { width:128px; height:63px;text-decoration:none;color:#fff;font:normal 13px/15px "OpenSans-Regular-webfont", Arial, Helvetica, sans-serif; display: table-cell; overflow:hidden;}
	.jelajah-body li p { margin:0px; padding:0px;width:127px; height:63px; display:table-cell;vertical-align:middle;overflow:hidden;}
	.jelajah-body li a:hover { text-decoration:underline; color:#fff; }
	.jelajah-body li .jelajah-img { width:128px; height:63px; overflow:hidden; float:left; margin-right:5px; }
	.jelajah-body li img { width:100%; float:left; }
	.linkidxjelajah {width:300px;height:76px;display:block;position:absolute;}

/* font */
@font-face {
	font-family: 'OpenSans-Regular-webfont';
	src: url('fonts/OpenSans-Regular-webfont.eot');
	src: local('☺'), url('fonts/OpenSans-Regular-webfont.woff') format('woff'), url('fonts/OpenSans-Regular-webfont.ttf') format('truetype'), url('fonts/OpenSans-Regular-webfont.svg') format('svg');
	font-weight: normal;
	font-style: normal;
}
</style>
</head>
<body>
	<?php 
		$xml = simplexml_load_file("../lipsus.xml", "SimpleXMLElement", LIBXML_NOCDATA);
		$nodes = $xml->xpath("//report/news/content");
	?>
	<div class="jelajah-wrapper">
        <a class="linkidxjelajah" href="<?php echo $nodes[0]->title['path']; ?>" target="_blank"></a>
		<div class="jelajah-body">
			<ul>
				<?php foreach($nodes as $child) { ?>
				<li>
                    <a href="<?php echo $child->title['urlshort']; ?>" target="_blank">
                    <div class="jelajah-img">
                    <img src="<?php echo $child->thumb; ?>" border="0" /></div>
                    <p><?php echo $child->title; ?>  </p>
                    </a>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</body>
</html>