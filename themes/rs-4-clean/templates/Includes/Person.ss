  <section id="shout" class="clear">
	  <% with CurrentStaffMember %>
    <figure>
      <figcaption>
        <h1>$Name</h1>
        $Description
	<br />
	<a href="https://twitter.com/share" class="twitter-share-button" data-via="Casa_Laguna" data-dnt="true">Tweet</a>
	<br />
	<div class="fb-like" data-href="$BaseHref{$Up.URLSegment}/show/$URLSegment" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" data-font="segoe ui"></div>

      </figcaption>
	    <% if Photo %>
	    <% with Photo %>
      <div>$SetSize(410,440)</div>
      <% end_with %>
      <% else %>
      <div><img src="$ThemeDir/images/noImageAvailable300.gif" alt="No image" /></div>
      <% end_if %>
    </figure>
	  <% end_with %>
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