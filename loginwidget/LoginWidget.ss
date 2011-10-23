<div class="LoginWidget">
	<% if LoggedIn %>	
	<p class="loggedinas">$Member.Name</p>
	<p class="lastlogin">Last visit: <span class="date">$Member.LastVisited.DayOfMonth $Member.LastVisited.ShortMonth $Member.LastVisited.Year</span></p>
	<p><a class ="logoutlink" href="Security/logout">Log Out</a></p>
	<% else %>
		$LoginForm
	<% end_if %>
</div>