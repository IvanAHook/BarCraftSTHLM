<!DOCTYPE html>
<html>
<head>
  {asset name="Head"}
</head>
<body id="{$BodyID}" class="{$BodyClass}">
   <div id="page">


      <!-- STHLM e-sport header -->

      <header role="banner" class="site-header" id="masthead">
         <div class="site-branding">
            <h1 class="site-title"><a rel="home" href="http://sthlmesport.se/">
               <img alt="STHLM e-sport" src="http://sthlmesport.se/wp-content/themes/sthlmesport/img/top-logo.png">
            </a></h1>
         </div>

         <nav role="navigation" class="main-navigation" id="site-navigation">
            <div class="menu"><ul><li><a href="http://sthlmesport.se/">Home</a></li><li class="page_item page-item-2075"><a href="http://sthlmesport.se/kalender/">Kalender</a></li><li class="page_item page-item-1486"><a href="http://sthlmesport.se/om-sthlm-e-sport/">Om STHLM e-sport</a></li><li class="page_item"><a href="{link path="/"}">Forum</a></li></ul></div>
         </nav><!-- #site-navigation -->
      </header>

      <!-- / STHLM e-sport header -->


      <div id="Body">
         <div class="Row">
            <div class="BreadcrumbsWrapper">{breadcrumbs}</div>
            <div class="Column PanelColumn" id="Panel">
               {module name="MeModule"}
               {asset name="Panel"}
            </div>
            <div class="Column ContentColumn" id="Content">{asset name="Content"}</div>
         </div>
      </div>
      <div id="Foot">
         <div class="Row">
            <!-- <a href="{vanillaurl}" class="PoweredByVanilla" title="Community Software by Vanilla Forums">Powered by Vanilla</a> -->
            {asset name="Foot"}
         </div>
      </div>
   </div>
   {event name="AfterBody"}
</body>
</html>