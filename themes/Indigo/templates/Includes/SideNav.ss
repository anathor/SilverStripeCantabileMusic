<% control Menu(1) %>   
    <h1>
        <a href="$Link" title="Go to the $Title page" class="$LinkingMode">$MenuTitle</a>
    </h1>
	    <ul>
	      <% control Children %>	  
	        <li><a href="$Link" title="Go to the $Title page" class="$LinkingMode">$MenuTitle</a></li>
	      <% end_control %>
	    </ul>
<% end_control %>