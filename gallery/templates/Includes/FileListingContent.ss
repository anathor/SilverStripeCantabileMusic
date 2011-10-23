<% if CurrentGalleryItems %>
	<dl id="FileListing">
		<% control CurrentGalleryItems %>
		<dt><a href="$Link">$Title</a></dt>
		<dd>
			<% if Abstract %> $Abstract<br /> <% end_if %>
			$Size $Extension
		</dd>
		<% end_control %>
	</dl>
<% end_if %>

<% if CurrentGalleryItems.MoreThanOnePage %>
	<div id="NavigationBar">
		<div id="Previous">
			<% if CurrentGalleryItems.NotFirstPage %>
				<a rel="$JSPrevPage" href="$CurrentGalleryItems.PrevLink" title="<% _t('PREVIOUSDESCRIPTION','View the previous page') %>"><% _t('PREVIOUS','&lt; Previous') %></a>
			<% end_if %>
		</div>
		<div id="PageNumbers">
			<% control CurrentGalleryItems.Pages %>
				<% if CurrentBool %>
					<span class="currentPage">$PageNum</span>
				<% else %>
					<a href="$Link" title="<% sprintf(_t('PAGENUMBER',"View page number %s"),$PageNum) %>">$PageNum</a>
				<% end_if %>
			<% end_control %>
		</div>
		<div id="Next">
			<% if CurrentGalleryItems.NotLastPage %>
				<a rel="$JSNextPage" href="$CurrentGalleryItems.NextLink" title="<% _t('NEXTDESCRIPTION','View the next page') %>"><% _t('NEXT','Next &gt;') %></a>
			<% end_if %>
		</div>
		<div class="clear"><!-- --></div>
	</div>
<% end_if %>