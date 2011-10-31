<div class="productItem">
	<h3 class="productTitle">$Title</h3>
	<div>
		<% if Price != 0 %><span class="price_display">$Price.Nice $Currency $TaxInfo.PriceSuffix</span><% end_if %>
		<% if canPurchase %>
			<% if IsInCart %>
				<% control Item %>
					<div class="quantityBox">
						<ul class="productActions">
							<li><a href="$removeallLink" title="<% sprintf(_t("REMOVE","Remove &quot;%s&quot; from your cart"),$Title) %>"><% _t("REMOVELINK","Remove from cart") %></a></li>
						</ul>
					</div>
				<% end_control %>
			<% else %>
				<p class="addlink"><a href="$addLink" title="<% sprintf(_t("ADD","Add &quot;%s&quot; to your cart"),$Title) %>"><% _t("ADDLINK","Add to cart") %></a></p>
			<% end_if %>
		<% end_if %>
	</div>
</div>																			
