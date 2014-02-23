
<a href="<% with Page(home) %>$Link<% end_with %>">
	<% with SiteConfig %>
	<h1>$Title.RAW <span class="logo"><img src="$ThemeDir/images/logo.png" width="35" alt='Logo' /></span></h1>
		<p>$Tagline</p>
	<% end_with %>
</a>
