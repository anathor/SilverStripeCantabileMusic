<div id="Account">
	<div class="typography">
		<% if Order %>
			<% control Order %>
				<h2><% _t('AccountPage.ss.ORDER','Order') %> #$ID ($Created.Long)</h2>
			<% end_control %>
		<% end_if %>	
		
		<% if Order %>
			<% control Order %>				
				<% include Order %>
			<% end_control %>
		<% end_if %>
		<div>
			<p>
	                        <% control Order %>
					<center><img src="/barcode.php?width=400&barcode=$ID&quality=75"></center>
                        	<% end_control %>
			</p>
		</div>
	</div>
</div>
