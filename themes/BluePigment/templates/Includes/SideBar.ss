 <% control Menu(1) %>
  		<li><a href="$Link" title="Go to the $Title.XML page" class="$LinkingMode"<% if is_a(RedirectorPage) %> target="_blank" <% end_if %>><span>$MenuTitle</span></a>
   <% if Children %>
    <ul>
 	 <% control Children %>
  		<li><a href="$Link" title="Go to the $Title.XML page" class="$LinkingMode"<% if is_a(RedirectorPage) %> target="_blank" <% end_if %>><span>$MenuTitle</span></a></li>
   	 <% end_control %>
    </ul>
    <% else %>
    </li>
   <% end_if %>
  </li>
 <% end_control %>