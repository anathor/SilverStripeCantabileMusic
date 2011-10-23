<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <% base_tag %>
		<title>$MetaTitle</title>
		$MetaTags(false)
		<link rel="shortcut icon" href="/favicon.ico" />
    <link rel="stylesheet" href="http://dev.cantabilemusic.com.au/themes/bluefader/css/layout.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="http://dev.cantabilemusic.com.au/themes/bluefader/css/style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="http://dev.cantabilemusic.com.au/themes/bluefader/css/style.ie7.css" type="text/css" media="screen" /><![endif]-->

</head>
<body>
<div class="PageBackgroundGlare">
  <div class="PageBackgroundGlareImage"></div>
</div>
<div class="Main">
  <div class="Sheet">
    <div class="Sheet-tl"></div>
    <div class="Sheet-tr"></div>
    <div class="Sheet-bl"></div>
    <div class="Sheet-br"></div>
    <div class="Sheet-tc"></div>
    <div class="Sheet-bc"></div>
    <div class="Sheet-cl"></div>
    <div class="Sheet-cr"></div>
    <div class="Sheet-cc"></div>
    <div class="Sheet-body">
      <div class="nav">
        <div class="l"></div>
        <div class="r"></div>
        <ul class="artmenu">
          <% control Menu(1) %>
          <li><a href="$Link" class="active"><span class="l"></span><span class="r"></span><span class="t">$Title</span></a></li>
          <% end_control %>
        </ul>
      </div>
      <div class="Header">
        <div class="Header-jpeg"></div>
        <div class="logo">
          <h1 id="name-text" class="logo-name"><a href="#">BlueFader</a></h1>
        </div>
      </div>
      <div class="contentLayout">
        <div class="sidebar1">
          <div class="Block">
            <div class="Block-tl"></div>
            <div class="Block-tr"></div>
            <div class="Block-bl"></div>
            <div class="Block-br"></div>
            <div class="Block-tc"></div>
            <div class="Block-bc"></div>
            <div class="Block-cl"></div>
            <div class="Block-cr"></div>
            <div class="Block-cc"></div>
            <div class="Block-body">
			<% control Level(1) %>
              <div class="BlockHeader">
                <div class="l"></div>
                <div class="r"></div>
                <div class="header-tag-icon">
                  <div class="t">
                    
                    $Title
                   
                  </div>
                </div>
              </div>
			   <% end_control %>
              <div class="BlockContent">
                <div class="BlockContent-body">
                  <div>
                    <ul>
                      <% control Menu(2) %>
                      <% if Children %>
                      <li class="$LinkingMode"><a href="$Link" title="Go to the $Title.XML page" class="$LinkingMode levela"><span><em>$MenuTitle.XML</em></span></a>
                        <% else %>
                      <li><a href="$Link" title="Go to the $Title.XML page" class="$LinkingMode levela"><span><em>$MenuTitle.XML</em></span></a>
                        <% end_if %>
                        <% if LinkOrSection = section %>
                        <% if Children %>
                        <ul>
                          <li>
                            <ul>
                              <% control Children %>
                              <li><a href="$Link" title="Go to the $Title.XML page" class="$LinkingMode levelb"><span><em>$MenuTitle.XML</em></span></a></li>
                              <% end_control %>
                            </ul>
                          </li>
                        </ul>
                        <% end_if %>
                        <% end_if %>
                      </li>
                      <% end_control %>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="Post">
            <div class="Post-body">
              <div class="Post-inner">
                 <div class="PostContent"> $Layout </div>
                <div class="cleared"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cleared"></div>
      
    </div>
  </div>
  <div class="cleared"></div>
  <p class="page-footer">Designed by <a href="http://www.ablewebpro.com/site/index.php?option=com_content&view=article&id=54&Itemid=84">Web Development Services</a>.</p>
</div>
</body>
</html>
