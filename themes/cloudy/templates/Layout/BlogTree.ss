
<div class="page-header">
	<h1>$Title.RAW</h1>
</div>
<div class="row">
  <div class="span3">
  	<% include BlogSideBar %>
  </div>
  <div id="BlogContent" class="span9 blogcontent typography">
		<% include BreadCrumbs %>
		
		<% if SelectedTag %>
			<h3><% _t('VIEWINGTAGGED', 'Viewing entries tagged with') %> '$SelectedTag'</h3>
		<% else_if SelectedDate %>
			<h3><% _t('VIEWINGPOSTEDIN', 'Viewing entries posted in') %> $SelectedNiceDate</h3>
		<% end_if %>
		
		<% if BlogEntries %>
			<% loop BlogEntries %>
					<% include BlogSummary %>
			<% end_loop %>
		<% else %>
			<h3><% _t('NOENTRIES', 'There are no blog entries') %></h3>
		<% end_if %>
		
		<% include BlogPagination %>
  </div>
</div>