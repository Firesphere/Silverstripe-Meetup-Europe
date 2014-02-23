<!DOCTYPE html>
<!--[if !IE]><!-->
<html lang="$ContentLocale" $OGNS>
<!--<![endif]-->
<!--[if IE 6 ]><html lang="$ContentLocale" class="ie ie6"><![endif]-->
<!--[if IE 7 ]><html lang="$ContentLocale" class="ie ie7"><![endif]-->
<!--[if IE 8 ]><html lang="$ContentLocale" class="ie ie8"><![endif]-->
<head>
	<% base_tag %>
	<title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	$MetaTags
	<meta name="alexaVerifyID" content="M12qgYcoBVSxrWW1tYKQwSN8Auk" />
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="msvalidate.01" content="D0F5189C449FB5249EB9E4C3CD72EA38" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/jquery-ui.min.js"></script>
<meta name="msapplication-TileColor"
    content="#000000"/>
<meta name="msapplication-TileImage"
    content="/assets/Uploads/logo.png"/>

<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="$themedir/css/ie.css" />
<% if ClassName == GalleryPage %>
<script type="text/javascript">
	alert("Sorry! We are unable to fully help you here. This website relies on advanced HTML5/CSS3 features that are not supported in IE8 or lower. Please get a newer browser. And yes, they work in XP as well! Try Firefox/Chrome/Opera! (Try google for that ;) )")
</script>
<% end_if %>
<![endif]-->
<% require themedCSS(mediaqueries) %>
</head>
<body class="$ClassName">
	<div id="fb-root"></div>
$Layout
<!-- Copyright -->
<div class="wrapper row3">
	  <% include Footer %>
</div>
<script src=""></script>
<!--[if lt IE 9]>
<srcipt src="themes/rs-4-clean/scripts/css3-mediaqueries.min.js" type="text/javascript"></script>
<script src="themes/rs-4-clean/scripts/html5shiv.min.js" type="text/javascript"></script>
<![endif]-->
		<script id="previewTmpl" type="text/x-jquery-tmpl">
			<div id="ib-img-preview" class="ib-preview">
                <img src="${src}" alt="" class="ib-preview-img"/>
                <span class="ib-preview-descr" style="display:none;">${description}</span>
                <div class="ib-nav" style="display:none;">
                    <span class="ib-nav-prev">Previous</span>
                    <span class="ib-nav-next">Next</span>
                </div>
                <span class="ib-close" style="display:none;">Close Preview</span>
                <div class="ib-loading-large" style="display:none;">Loading...</div>
            </div>		
		</script>
		<script id="contentTmpl" type="text/x-jquery-tmpl">	
			<div id="ib-content-preview" class="ib-content-preview">
                <div class="ib-teaser" style="display:none;">{{html teaser}}</div>
                <div class="ib-content-full" style="display:none;">{{html content}}</div>
                <span class="ib-close" style="display:none;">Close Preview</span>
            </div>
		</script>
</body>
</html>
