        <article class="one_half">
          <h2>Who lives here?</h2>
          <ul>
		  <% loop CurrentMembers %>
            <li class="$FirstLast">
              <figure class="clear">
                <div class="imgl"><% with Photo %>$SetSize(150,150)<% end_with %></div>
                <figcaption>
                  <p class="name"><strong>$Name</strong></p>
                  <p>$Description.Summary</p>
                  <footer class="more"><a href="$Link">Read More &raquo;</a></footer>
                </figcaption>
              </figure>
            </li>
	    <% end_loop %>
          </ul>
        </article>
