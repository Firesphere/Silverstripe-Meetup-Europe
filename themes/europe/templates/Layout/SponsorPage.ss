            <div id="main" class="pure-g">

                <section class="pure-u-5-5">
                    <div class="content typography">
                        <% loop $mySponsors %>
			<div class="pure-u-1-2">
				<a href="$Website" target="_blank">
					<% with $Logo %>
					$setSize(120,120)
					<% end_with %>
					$Title</a>
			</div>
			<% end_loop %>
                    </div>
                </section>
            </div>