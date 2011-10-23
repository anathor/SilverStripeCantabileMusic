<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<% base_tag %></head>
$MetaTags

<body class="typography">
<!-- header starts here -->
<div id="header">
  <div id="header-content">
    <h1 id="logo-text"><a href="#" title="">Blue<span>Pigment</span></a></h1>
    <h2 id="slogan">Put your site slogan here...</h2>
    <div id="header-links">
      <% include BreadCrumbs %>
    </div>
  </div>
</div>
<div id="nav-wrap">
  <div id="nav">
    <% include Navigation %>
  </div>
</div>
<div id="content-wrap">
<div id="content">
  <div id="sidebar" >
    <div class="sep"></div>
    <div class="sidebox">
      <!-- Put a search box here -->
    </div>
    <div class="sidebox">
      <ul class="sidemenu">
        <% include SideBar %>
      </ul>
    </div>
    <!-- Put modules inside these div tags
	  <div class="sidebox">
      </div>-->
  </div>
  <div id="main">
    <div class="box"> $Layout </div>
  </div>
</div>
<div id="footer-wrap">
  <div id="footer-bottom">
<% include Footer %>    
  </div>
</div>
</div></body>
</html>
