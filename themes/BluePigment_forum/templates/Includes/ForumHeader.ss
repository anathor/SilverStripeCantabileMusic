<div id="ForumContent" class="typography">
	<% include ForumLogin %>
	<h3>$Parent.Title</h3>
	<% include Menu2 %>
	<div class="forumFeatures">
		<div class="featureRight">
			<p class="forumStats">$TotalPosts <strong>Posts</strong> in $TotalTopics <strong>Topics</strong> by $TotalAuthors <strong>members</strong></p>
			<span class="jumpTo">Jump to:</span>
			<select onchange="if(this.value) location.href = this.value">
				<option value="">-- Select --</option>
				<% control Forums %>
					<% if CheckForumPermissions %>
						<option value="$Link">$Title</option>
					<% end_if %>
				<% end_control %>
			</select>
			<div id="ForumSearch">
				<form action="<% if ForumHolderURLSegment %>{$ForumHolderURLSegment}<% else %>{$URLSegment}<% end_if %>/search/" method="get">
					<fieldset>
						<!-- span>Search:</span -->
						<input class="text" type="text" name="for" />
						<input class="submit" type="submit" value="Search"/>
					</fieldset>
				</form>
			</div>
		</div>
		<div class="featureLeft">
			<h3>$Subtitle</h3>
			<% if Abstract %>$Abstract<% else %>$Content<% end_if %>
			<span class="breadcrumbs"><strong>$Breadcrumbs</strong></span>
		</div>
    <div class="clear"><!-- --></div>
	</div>
