
<div class="page-header">
	<h1>$Title.RAW</h1>
</div>
<div class="row">
  <div class="span3">
  	<% include Sidebar %>
  </div>
  <div class="span9 typography row">
	<% loop $Persons %>
	<div class="hero-unit span2 row">
		<div class="span1 row">
			$Mugshot.setSize(60,60)
		</div>
		<div class=""></div>
		$Name
	</div>
	<% end_loop %>
	
	
  	<% include Preview %>
  </div>
</div>