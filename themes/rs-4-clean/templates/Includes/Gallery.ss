    <section id="gallery" class="clear">
      <figure>
        <ul>
		<% loop getGalleryImages %>
          <li>		   <a href="<% with Image %>$URL<% end_with %>" rel="lightbox.{$Up.Title}" title="$Title">
                <div class="imgLabel">$Title</div>
            	$Image.SetSize(220,220)
                </a>
	</li>
        <% end_loop %>
        </ul>
        <figcaption>
		$Content
		<br />
	<a href="https://twitter.com/share" class="twitter-share-button" data-via="Casa_Laguna" data-dnt="true">Tweet</a>
	<br />
	<div class="fb-like" data-href="$BaseHref{$URLSegment}" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" data-font="segoe ui"></div>

	</figcaption>
      </figure>
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