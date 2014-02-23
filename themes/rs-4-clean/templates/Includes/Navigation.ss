<nav id="topnav">
	<ul class="topnav clear">
	<% loop Menu(1) %>
		<li class="$LinkingMode $FirstLast"><a href="$Link">$Title</a>
			<% if Children %>
					<ul>
				<% loop Children.Limit(10) %>
						<li class="$LinkingMode $FirstLast"><a href="$Link">$Title</a></li>
				<% end_loop %>
					</ul>
			<% end_if %>
			<% if Specials %>
			<ul>
			      <% loop Specials.Limit(10) %>
			      <li class="$LinkingMode $FirstLast"><a href="$Link">$Title</a></li>
			      <% end_loop %>
			</ul>
			<% end_if %>
		</li>
	<% end_loop %>
	</ul>
</nav>
