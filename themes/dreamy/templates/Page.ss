<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<% base_tag %>
$MetaTags
</head>
<body class="typography">
<div id="wrapper">
  <div id="header">
    <h1>Dreamy</h1>
  </div>
  <div id="menu">
  <% include Navigation %>
  </div>
  <div id="sidebar">
    <div id="feed"> <a class="feed-button" href="#">&nbsp;</a> </div>
    <% include SideNav %>
    <div id="sidebar-bottom"> &nbsp; </div>
  </div>
  <div id="content">
	$Layout
  </div>
  <div id="footer">
    <div id="footer-valid">
    <% include Footer %>
    </div>
  </div>
</div>
</body>
</html>
