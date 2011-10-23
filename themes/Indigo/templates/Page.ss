<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<% base_tag %>
$MetaTags
</head>
<body class="typography">
<div class="container">
  <div class="header">
    <div class="title">
      <h1>$Title</h1>
    </div>
    <div class="navigation">
      <% include Navigation %>
      <div class="clearer"><span></span></div>
    </div>
  </div>
  <div class="main">
    <div class="content"> $Layout </div>
    <div class="sidenav">
      <!-- good place to put a search box -->
      <% include SideNav %>
    </div>
    <div class="clearer"><span></span></div>
  </div>
</div>
<div class="footer">
  <% include Footer %>
</div>
</body>
</html>
