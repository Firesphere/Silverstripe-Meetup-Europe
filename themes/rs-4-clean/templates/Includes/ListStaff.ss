   <section id="portfolio" class="clear">
      <ul>
	      <% loop StaffMembers %>
        <li>
          <article>
		  <% if Photo %>
            <figure><a href="$Link"><% with Photo %>$SetSize(225,160)<% end_with %></a>
		    <% else %>
		<figure><a href="$Link"><img src="$ThemeDir/images/noImageAvailable300.gif" with="225" height="160" alt="No image" /></a>
		<% end_if %>
		<a href="$Link"><figcaption>$Name</figcaption></a>
            </figure>
          </article>
        </li>
	<% end_loop %>
      </ul>
   </section>