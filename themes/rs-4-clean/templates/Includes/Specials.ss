<article class="one_half last">
          <h2>Special items</h2>
          <ul class="testimonials">
		  <% loop SpecialItems %>
            <li>
              <p class="name"><strong><a href="$Link" title="$Title">$Title</a></strong></p>
              <blockquote>$Content.Summary</blockquote>
            </li>
	    <% end_loop %>
          </ul>
</article>