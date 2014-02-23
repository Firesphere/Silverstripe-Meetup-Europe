<div class="wrapper row1">
<% include Header %>
  <section id="shout" class="clear">
	    <% if Impression %>
    <figure>
      <figcaption>
	      <% else %>
	      <div class="noImage">
	      <% end_if %>
        <h1>$Title</h1>
        $Content
	<ul>
	<% loop Specials %>
	<li><a href="$Link" >$Title</a></li>
	<% end_loop %>
	</ul>
	$Form
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
</div>
<div class="wrapper row2">
  <div id="container">
    <div id="homepage">
      <% include NewsItems %>
<section id="intro" class="clear">

      <% include StaffMembers %>
      <% include Specials %>
</section>
    </div>
        <div class="clear"></div>
  </div>
</div>
