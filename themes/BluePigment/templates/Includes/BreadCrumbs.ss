<% if Level(2) %>
	<div id="Breadcrumbs">
	   	<p>$Breadcrumbs</p>
	</div>
<% else %>
	<div id="Breadcrumbs">
		<p><a href="$Link" title="Go to the $Title.XML page" class="$LinkingMode">$Title</a></p>
    </div>
<% end_if %>