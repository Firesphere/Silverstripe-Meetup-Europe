<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <% base_tag %>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>$Title | $SiteConfig.Title</title>
        $MetaTags(false)
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <% require themedCss("normalize") %>
        <% require css("http://yui.yahooapis.com/pure/0.4.2/pure-min.css") %>
        <link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <% require themedCSS("main") %>
        <% require javascript("themes/silverstripe-europe/thirdparty/modernizr-2.6.2.min.js") %>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
	<% include header %>
	$Layout
	<% include footer %>
	</div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <% require javascript("themes/silverstripe-europe/js/plugins.js") %>
        <% require javascript("themes/silverstripe-europe/js/main.js") %>
    </body>
</html>
