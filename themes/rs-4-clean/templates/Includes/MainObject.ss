  <section id="shout" class="clear">
	    <% if Impression %>
    <figure>
      <figcaption>
	      <% else %>
	      <div class="noImage">
	      <% end_if %>
        <h1>$Title</h1>
        $Content
	$Form
	<br />
	<a href="https://twitter.com/share" class="twitter-share-button" data-via="Casa_Laguna" data-dnt="true">Tweet</a>
	<br />
	<div class="fb-like" data-href="$BaseHref<% if URLSegment != home %>{$URLSegment}<% end_if %>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" data-font="segoe ui"></div>

	    <% if Impression %>
      </figcaption>
	    <% with Impression %>
      <div>$SetSize(410,440)</div>
      <% end_with %>
    </figure>
	    <% else %>
	    </div>
      <% end_if %>
<div class="advert">
	<script type="text/javascript"><!--
google_ad_client = "ca-pub-8070811811760534";
/* New Site bar */
google_ad_slot = "8445263458";
google_ad_width = 468;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
  </section>
