	<section id="latest_work" class="clear">
      <% loop getTags(true) %>
      <article class="one_third $FirstLast"><% if Impression %><a href="$Link" class="impressionLink"><% with Impression %>$SetSize(50,50)<% end_with %></a><% end_if %>
 	      	      <div class="articleContainer">
         <h2><a href="$Link">$Title</a></h2>
	  <h3>$Author</h3>
	<i><% if PublishFrom %>$PublishFrom.Format(d-m-Y)<% else %>$Created.Format(d-m-Y)<% end_if %></i>
	<p>$Content.Summary</p>
	  <% if Tags.Count > 0 %>
	  <br />
	  <div class="small">
		<% loop Tags %>
		<a href="/all-the-news/tag/$URLSegment">$Title</a><% if Last %><% else %>&nbsp;|&nbsp;<% end_if %>
		<% end_loop %>
	  </div>
	  <br />
	  <% end_if %>
	<br />
          <footer class="more"><a href="$Link" title="$Title">Read More &raquo;</a></footer>
		      </div>
        </article>
	      <% end_loop %>

      </section>
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