<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<% base_tag %>
$MetaTags
</head>
<body class="typography">
<div id="header">
  <div id="logo">
    <h1><a href="#">Center Stage</a></h1>
    <h2><a href="http://www.freecsstemplates.org/">By Free CSS Templates</a></h2>
  </div>
  <div id="menu">
    <% include Navigation %>
  </div>
</div>
<div id="page">
  <div id="content"> $Layout </div>
  <div id="sidebar">
    <div id="search" class="boxed">
      <!-- Add a search box here =) -->
    </div>
    <div id="extra" class="boxed">
      <h2 class="title">$Title</h2>
      <div class="content">
        <ul class="list">
          <% include SubNav %>
        </ul>
      </div>
    </div>
  </div>
  <div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
  <% include Footer %>
</div>
</body>
</html>
